<?php

namespace Aall\ThaiLocalization\Console\Commands;

use Aall\ThaiLocalization\CompanyAccountingBootstrapper;
use Aall\ThaiLocalization\ThaiTaxSetup;
use Illuminate\Console\Command;
use Webkul\Security\Models\User;
use Webkul\Support\Models\Company;

class SetupCompanyCommand extends Command
{
    protected $signature = 'thai-localization:setup {company?* : Company IDs (default: all companies)}';

    protected $description = 'Give companies the chart of accounts and journals, plus Thai VAT 7%, withholding tax 1/3/5% and tax accounts';

    public function handle(CompanyAccountingBootstrapper $bootstrapper, ThaiTaxSetup $setup): int
    {
        $companies = Company::query()
            ->when($this->argument('company'), fn ($query, $ids) => $query->whereIn('id', $ids))
            ->get();

        if ($companies->isEmpty()) {
            $this->error('No matching companies found.');

            return self::FAILURE;
        }

        $creatorId = User::query()->orderBy('id')->value('id');

        foreach ($companies as $company) {
            $bootstrapper->bootstrap($company, $creatorId);

            $taxes = $setup->apply($company, $creatorId);

            $this->info("{$company->name}: ".count($taxes).' Thai taxes ready.');
        }

        return self::SUCCESS;
    }
}
