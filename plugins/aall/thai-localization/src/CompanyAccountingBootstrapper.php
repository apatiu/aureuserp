<?php

namespace Aall\ThaiLocalization;

use Illuminate\Support\Facades\DB;
use Webkul\Support\Models\Company;

/**
 * Aureus seeds the chart of accounts and journals only for the first company.
 * This gives any other company the same chart of accounts (accounts are shared
 * through accounts_account_companies) and its own copy of the template
 * company's journals, so it can issue invoices and bills.
 *
 * Safe to run repeatedly (for example when erp:install re-runs the plugin
 * seeders): accounts already attached and journals the company already has
 * (matched by type and code, or by type and name when there is no code) are
 * left alone, and only what is missing is added.
 */
class CompanyAccountingBootstrapper
{
    public function bootstrap(Company $company, ?int $creatorId = null): void
    {
        $templateCompanyId = $this->templateCompanyId();

        if (! $templateCompanyId || $templateCompanyId === $company->id) {
            return;
        }

        DB::transaction(function () use ($company, $templateCompanyId, $creatorId) {
            $this->attachAccounts($company, $templateCompanyId);
            $this->copyJournals($company, $templateCompanyId, $creatorId);
        });
    }

    protected function templateCompanyId(): ?int
    {
        return DB::table('accounts_journals')->orderBy('company_id')->value('company_id');
    }

    protected function attachAccounts(Company $company, int $templateCompanyId): void
    {
        $alreadyAttached = DB::table('accounts_account_companies')
            ->where('company_id', $company->id)
            ->pluck('account_id');

        $rows = DB::table('accounts_account_companies')
            ->where('company_id', $templateCompanyId)
            ->whereNotIn('account_id', $alreadyAttached)
            ->distinct()
            ->pluck('account_id')
            ->map(fn ($accountId) => ['account_id' => $accountId, 'company_id' => $company->id])
            ->all();

        if ($rows) {
            DB::table('accounts_account_companies')->insert($rows);
        }
    }

    protected function copyJournals(Company $company, int $templateCompanyId, ?int $creatorId): void
    {
        $existingKeys = DB::table('accounts_journals')
            ->where('company_id', $company->id)
            ->get(['type', 'code', 'name'])
            ->map(fn ($journal) => $this->journalKey($journal))
            ->flip();

        $templateJournals = DB::table('accounts_journals')
            ->where('company_id', $templateCompanyId)
            ->orderBy('id')
            ->get();

        foreach ($templateJournals as $journal) {
            if ($existingKeys->has($this->journalKey($journal))) {
                continue;
            }

            $this->copyJournal($journal, $company, $creatorId);
        }
    }

    protected function copyJournal(object $journal, Company $company, ?int $creatorId): void
    {
        $attributes = (array) $journal;
        unset($attributes['id']);

        $newJournalId = DB::table('accounts_journals')->insertGetId([
            ...$attributes,
            'company_id'   => $company->id,
            'currency_id'  => $company->currency_id,
            'creator_id'   => $creatorId ?? $journal->creator_id,
            'access_token' => null,
            'created_at'   => now(),
            'updated_at'   => now(),
        ]);

        $paymentMethodLines = DB::table('accounts_payment_method_lines')
            ->where('journal_id', $journal->id)
            ->get()
            ->map(function ($line) use ($newJournalId, $creatorId) {
                $attributes = (array) $line;
                unset($attributes['id']);

                return [
                    ...$attributes,
                    'journal_id' => $newJournalId,
                    'creator_id' => $creatorId ?? $line->creator_id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            })
            ->all();

        if ($paymentMethodLines) {
            DB::table('accounts_payment_method_lines')->insert($paymentMethodLines);
        }

        foreach (['accounts_account_journals', 'accounts_journal_accounts'] as $pivot) {
            $pivotRows = DB::table($pivot)
                ->where('journal_id', $journal->id)
                ->pluck('account_id')
                ->map(fn ($accountId) => ['journal_id' => $newJournalId, 'account_id' => $accountId])
                ->all();

            if ($pivotRows) {
                DB::table($pivot)->insert($pivotRows);
            }
        }
    }

    protected function journalKey(object $journal): string
    {
        return $journal->type.'|'.(filled($journal->code) ? 'code:'.$journal->code : 'name:'.$journal->name);
    }
}
