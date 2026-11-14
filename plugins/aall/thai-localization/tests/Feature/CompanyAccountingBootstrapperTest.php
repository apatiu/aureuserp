<?php

use Aall\ThaiLocalization\CompanyAccountingBootstrapper;
use Aall\ThaiLocalization\Database\Seeders\DatabaseSeeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Webkul\PluginManager\Models\Plugin;
use Webkul\PluginManager\Package;
use Webkul\Support\Models\Company;

require_once __DIR__.'/../../../../webkul/support/tests/Helpers/TestBootstrapHelper.php';
require_once __DIR__.'/../../../../webkul/accounts/tests/Helpers/AccountHelper.php';

/**
 * Row counts of everything the bootstrapper and the Thai tax setup create for one company.
 *
 * @return array<string, int>
 */
function accountingFootprint(int $companyId): array
{
    $journalIds = DB::table('accounts_journals')->where('company_id', $companyId)->pluck('id');

    return [
        'journals'             => $journalIds->count(),
        'payment_method_lines' => DB::table('accounts_payment_method_lines')->whereIn('journal_id', $journalIds)->count(),
        'account_journals'     => DB::table('accounts_account_journals')->whereIn('journal_id', $journalIds)->count(),
        'journal_accounts'     => DB::table('accounts_journal_accounts')->whereIn('journal_id', $journalIds)->count(),
        'accounts'             => DB::table('accounts_account_companies')->where('company_id', $companyId)->count(),
        'taxes'                => DB::table('accounts_taxes')->where('company_id', $companyId)->count(),
        'tax_groups'           => DB::table('accounts_tax_groups')->where('company_id', $companyId)->count(),
    ];
}

beforeEach(function () {
    TestBootstrapHelper::ensurePluginInstalled('accounts');

    DB::table('plugins')->updateOrInsert(
        ['name' => 'accounts'],
        ['is_installed' => true, 'is_active' => true, 'updated_at' => now()],
    );

    Package::$plugins = Plugin::all()->keyBy('name');

    URL::resolveMissingNamedRoutesUsing(fn () => '#');

    $this->user = AccountHelper::actingAsAdmin();
    $this->template = AccountHelper::company();

    $this->second = Company::create([
        'name'        => 'Bootstrap Test Company',
        'currency_id' => $this->template->currency_id,
        'country_id'  => $this->template->country_id,
        'creator_id'  => $this->user->id,
    ]);

    $this->bootstrapper = app(CompanyAccountingBootstrapper::class);
});

it('copies the template company journals, payment methods and chart of accounts', function () {
    $this->bootstrapper->bootstrap($this->second, $this->user->id);

    $template = accountingFootprint($this->template->id);
    $second = accountingFootprint($this->second->id);

    expect($second['journals'])->toBeGreaterThan(0)->toBe($template['journals'])
        ->and($second['payment_method_lines'])->toBe($template['payment_method_lines'])
        ->and($second['account_journals'])->toBe($template['account_journals'])
        ->and($second['journal_accounts'])->toBe($template['journal_accounts'])
        ->and($second['accounts'])->toBe($template['accounts']);

    expect(DB::table('accounts_journals')->where('company_id', $this->second->id)->pluck('code')->sort()->values()->all())
        ->toBe(DB::table('accounts_journals')->where('company_id', $this->template->id)->pluck('code')->sort()->values()->all());
});

it('leaves the template company alone', function () {
    $before = accountingFootprint($this->template->id);

    $this->bootstrapper->bootstrap($this->template, $this->user->id);

    expect(accountingFootprint($this->template->id))->toBe($before);
});

it('does not duplicate anything when run again', function () {
    $this->bootstrapper->bootstrap($this->second, $this->user->id);

    $before = accountingFootprint($this->second->id);
    $journalIds = DB::table('accounts_journals')->where('company_id', $this->second->id)->orderBy('id')->pluck('id')->all();

    $this->bootstrapper->bootstrap($this->second, $this->user->id);
    $this->bootstrapper->bootstrap($this->second, $this->user->id);

    expect(accountingFootprint($this->second->id))->toBe($before)
        ->and(DB::table('accounts_journals')->where('company_id', $this->second->id)->orderBy('id')->pluck('id')->all())->toBe($journalIds);
});

it('fills in only the journals and accounts a company is missing', function () {
    $this->bootstrapper->bootstrap($this->second, $this->user->id);

    $complete = accountingFootprint($this->second->id);

    $removed = DB::table('accounts_journals')->where('company_id', $this->second->id)->orderBy('id')->first();
    $kept = DB::table('accounts_journals')->where('company_id', $this->second->id)->where('id', '!=', $removed->id)->orderBy('id')->pluck('id')->all();

    DB::table('accounts_payment_method_lines')->where('journal_id', $removed->id)->delete();
    DB::table('accounts_journals')->where('id', $removed->id)->delete();

    $detachedAccountId = DB::table('accounts_account_companies')->where('company_id', $this->second->id)->value('account_id');
    DB::table('accounts_account_companies')->where('company_id', $this->second->id)->where('account_id', $detachedAccountId)->delete();

    $this->bootstrapper->bootstrap($this->second, $this->user->id);

    expect(accountingFootprint($this->second->id))->toBe($complete)
        ->and(DB::table('accounts_journals')->whereIn('id', $kept)->count())->toBe(count($kept))
        ->and(DB::table('accounts_journals')->where('company_id', $this->second->id)->where('code', $removed->code)->where('type', $removed->type)->count())->toBe(1)
        ->and(DB::table('accounts_account_companies')->where('company_id', $this->second->id)->where('account_id', $detachedAccountId)->exists())->toBeTrue();
});

it('survives the plugin seeder running again, as erp:install does', function () {
    $this->seed(DatabaseSeeder::class);

    $template = accountingFootprint($this->template->id);
    $second = accountingFootprint($this->second->id);

    expect($second['taxes'])->toBe(8)
        ->and($template['taxes'])->toBeGreaterThanOrEqual(8)
        ->and($second['journals'])->toBe($template['journals']);

    $this->seed(DatabaseSeeder::class);

    expect(accountingFootprint($this->template->id))->toBe($template)
        ->and(accountingFootprint($this->second->id))->toBe($second);
});
