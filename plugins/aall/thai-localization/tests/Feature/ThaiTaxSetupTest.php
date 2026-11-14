<?php

use Aall\ThaiLocalization\ThaiTaxSetup;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Webkul\Account\Enums\DisplayType;
use Webkul\Account\Enums\MoveType;
use Webkul\PluginManager\Models\Plugin;
use Webkul\PluginManager\Package;

require_once __DIR__.'/../../../../webkul/support/tests/Helpers/TestBootstrapHelper.php';
require_once __DIR__.'/../../../../webkul/accounts/tests/Helpers/AccountHelper.php';

beforeEach(function () {
    TestBootstrapHelper::ensurePluginInstalled('accounts');

    DB::table('plugins')->updateOrInsert(
        ['name' => 'accounts'],
        ['is_installed' => true, 'is_active' => true, 'updated_at' => now()],
    );

    Package::$plugins = Plugin::all()->keyBy('name');

    URL::resolveMissingNamedRoutesUsing(fn () => '#');

    $this->user = AccountHelper::actingAsAdmin();
    $this->company = AccountHelper::company();
    $this->taxes = app(ThaiTaxSetup::class)->apply($this->company, $this->user->id);
});

it('creates VAT and withholding taxes for the company', function () {
    expect($this->taxes)->toHaveKeys([
        'vat_sale', 'vat_purchase',
        'wht_purchase_1', 'wht_purchase_3', 'wht_purchase_5',
        'wht_sale_1', 'wht_sale_3', 'wht_sale_5',
    ])
        ->and((float) $this->taxes['vat_sale']->amount)->toBe(7.0)
        ->and((float) $this->taxes['wht_purchase_3']->amount)->toBe(-3.0);
});

it('is idempotent', function () {
    $taxCount = DB::table('accounts_taxes')->count();
    $accountCount = DB::table('accounts_accounts')->count();

    $again = app(ThaiTaxSetup::class)->apply($this->company, $this->user->id);

    expect(DB::table('accounts_taxes')->count())->toBe($taxCount)
        ->and(DB::table('accounts_accounts')->count())->toBe($accountCount)
        ->and($again['vat_sale']->id)->toBe($this->taxes['vat_sale']->id);
});

it('computes withholding on the amount before VAT on a vendor bill', function () {
    $expense = AccountHelper::account('expense');
    $bill = AccountHelper::invoice(MoveType::IN_INVOICE, AccountHelper::partner(), AccountHelper::purchaseJournal());

    AccountHelper::productLine($bill, $expense, qty: 1, priceUnit: 1000, taxes: [
        $this->taxes['vat_purchase'],
        $this->taxes['wht_purchase_3'],
    ]);

    AccountHelper::compute($bill);

    expect((float) $bill->refresh()->amount_untaxed)->toBe(1000.0)
        ->and((float) $bill->amount_tax)->toBe(40.0)
        ->and((float) $bill->amount_total)->toBe(1040.0);
});

it('posts VAT and withholding to the Thai tax accounts', function () {
    $income = AccountHelper::account('income');
    $invoice = AccountHelper::invoice(MoveType::OUT_INVOICE, AccountHelper::partner());

    AccountHelper::productLine($invoice, $income, qty: 2, priceUnit: 500, taxes: [
        $this->taxes['vat_sale'],
        $this->taxes['wht_sale_3'],
    ]);

    AccountHelper::post($invoice);

    $taxLines = $invoice->refresh()->lines
        ->where('display_type', DisplayType::TAX)
        ->mapWithKeys(fn ($line) => [$line->account->code => (float) $line->balance]);

    expect($taxLines->all())->toEqualCanonicalizing([
        '215400' => -70.0,
        '115500' => 30.0,
    ]);
});
