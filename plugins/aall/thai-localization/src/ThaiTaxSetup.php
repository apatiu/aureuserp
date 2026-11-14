<?php

namespace Aall\ThaiLocalization;

use Illuminate\Support\Facades\DB;
use Webkul\Account\Enums\AccountType;
use Webkul\Account\Enums\AmountType;
use Webkul\Account\Enums\DocumentType;
use Webkul\Account\Enums\RepartitionType;
use Webkul\Account\Enums\TypeTaxUse;
use Webkul\Account\Models\Tax;
use Webkul\Support\Models\Company;
use Webkul\Support\Models\Country;

/**
 * Creates the Thai tax accounts, tax groups and taxes for one company.
 *
 * Safe to run repeatedly: existing records (matched by account code, or by
 * tax name + type per company) are reused instead of duplicated.
 */
class ThaiTaxSetup
{
    public const VAT_RATE = 7;

    public const WITHHOLDING_RATES = [1, 3, 5];

    /**
     * key => [code, name, account type]
     */
    public const ACCOUNTS = [
        'input_vat'           => ['115400', 'ภาษีซื้อ', AccountType::ASSET_CURRENT],
        'withheld_by_others'  => ['115500', 'ภาษีเงินได้ถูกหัก ณ ที่จ่าย', AccountType::ASSET_CURRENT],
        'withholding_payable' => ['215300', 'ภาษีเงินได้หัก ณ ที่จ่ายค้างจ่าย', AccountType::LIABILITY_CURRENT],
        'output_vat'          => ['215400', 'ภาษีขาย', AccountType::LIABILITY_CURRENT],
    ];

    /**
     * @return array<string, Tax> keyed by a stable identifier, e.g. "vat_sale", "wht_purchase_3"
     */
    public function apply(Company $company, ?int $creatorId = null): array
    {
        return DB::transaction(function () use ($company, $creatorId) {
            $accounts = $this->ensureAccounts($company, $creatorId);

            $vatGroupId = $this->ensureTaxGroup($company, 'ภาษีมูลค่าเพิ่ม 7%', 1, $creatorId);
            $withholdingGroupId = $this->ensureTaxGroup($company, 'ภาษีหัก ณ ที่จ่าย', 2, $creatorId);

            $taxes = [];

            $taxes['vat_sale'] = $this->ensureTax($company, $creatorId, [
                'name'          => 'ภาษีขาย 7%',
                'invoice_label' => 'VAT 7%',
                'type_tax_use'  => TypeTaxUse::SALE,
                'amount'        => self::VAT_RATE,
                'tax_group_id'  => $vatGroupId,
                'sort'          => 1,
            ], $accounts['output_vat'], useInTaxClosing: true);

            $taxes['vat_purchase'] = $this->ensureTax($company, $creatorId, [
                'name'          => 'ภาษีซื้อ 7%',
                'invoice_label' => 'VAT 7%',
                'type_tax_use'  => TypeTaxUse::PURCHASE,
                'amount'        => self::VAT_RATE,
                'tax_group_id'  => $vatGroupId,
                'sort'          => 1,
            ], $accounts['input_vat'], useInTaxClosing: true);

            foreach (self::WITHHOLDING_RATES as $index => $rate) {
                // We pay a supplier and withhold tax on their behalf.
                $taxes["wht_purchase_{$rate}"] = $this->ensureTax($company, $creatorId, [
                    'name'          => "หัก ณ ที่จ่าย {$rate}%",
                    'invoice_label' => "หัก ณ ที่จ่าย {$rate}%",
                    'type_tax_use'  => TypeTaxUse::PURCHASE,
                    'amount'        => -$rate,
                    'tax_group_id'  => $withholdingGroupId,
                    'sort'          => 10 + $index,
                ], $accounts['withholding_payable'], useInTaxClosing: false);

                // A customer withholds tax when paying us.
                $taxes["wht_sale_{$rate}"] = $this->ensureTax($company, $creatorId, [
                    'name'          => "ถูกหัก ณ ที่จ่าย {$rate}%",
                    'invoice_label' => "หัก ณ ที่จ่าย {$rate}%",
                    'type_tax_use'  => TypeTaxUse::SALE,
                    'amount'        => -$rate,
                    'tax_group_id'  => $withholdingGroupId,
                    'sort'          => 10 + $index,
                ], $accounts['withheld_by_others'], useInTaxClosing: false);
            }

            return $taxes;
        });
    }

    /**
     * @return array<string, int> account ids keyed like self::ACCOUNTS
     */
    protected function ensureAccounts(Company $company, ?int $creatorId): array
    {
        $ids = [];

        foreach (self::ACCOUNTS as $key => [$code, $name, $type]) {
            $accountId = DB::table('accounts_accounts')
                ->join('accounts_account_companies', 'accounts_account_companies.account_id', '=', 'accounts_accounts.id')
                ->where('accounts_account_companies.company_id', $company->id)
                ->where('accounts_accounts.code', $code)
                ->value('accounts_accounts.id');

            if (! $accountId) {
                $accountId = DB::table('accounts_accounts')->insertGetId([
                    'currency_id'  => $company->currency_id,
                    'creator_id'   => $creatorId,
                    'account_type' => $type->value,
                    'name'         => $name,
                    'code'         => $code,
                    'deprecated'   => false,
                    'reconcile'    => false,
                    'non_trade'    => false,
                    'created_at'   => now(),
                    'updated_at'   => now(),
                ]);

                DB::table('accounts_account_companies')->insert([
                    'account_id' => $accountId,
                    'company_id' => $company->id,
                ]);
            }

            $ids[$key] = $accountId;
        }

        return $ids;
    }

    protected function ensureTaxGroup(Company $company, string $name, int $sort, ?int $creatorId): int
    {
        $existingId = DB::table('accounts_tax_groups')
            ->where('company_id', $company->id)
            ->where('name', $name)
            ->value('id');

        return $existingId ?? DB::table('accounts_tax_groups')->insertGetId([
            'sort'       => $sort,
            'company_id' => $company->id,
            'country_id' => $this->thailandId(),
            'creator_id' => $creatorId,
            'name'       => $name,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    protected function ensureTax(Company $company, ?int $creatorId, array $attributes, int $taxAccountId, bool $useInTaxClosing): Tax
    {
        $existing = Tax::query()
            ->where('company_id', $company->id)
            ->where('type_tax_use', $attributes['type_tax_use'])
            ->where('name', $attributes['name'])
            ->first();

        if ($existing) {
            return $existing;
        }

        $taxId = DB::table('accounts_taxes')->insertGetId([
            'company_id'          => $company->id,
            'country_id'          => $this->thailandId(),
            'creator_id'          => $creatorId,
            'sort'                => $attributes['sort'],
            'tax_group_id'        => $attributes['tax_group_id'],
            'type_tax_use'        => $attributes['type_tax_use']->value,
            'amount_type'         => AmountType::PERCENT->value,
            'tax_exigibility'     => 'on_invoice',
            'name'                => $attributes['name'],
            'invoice_label'       => $attributes['invoice_label'],
            'amount'              => $attributes['amount'],
            'is_active'           => true,
            // VAT must not be added to the base of withholding tax, which is
            // always computed on the amount before VAT.
            'include_base_amount' => false,
            'is_base_affected'    => false,
            'created_at'          => now(),
            'updated_at'          => now(),
        ]);

        foreach ([DocumentType::INVOICE, DocumentType::REFUND] as $documentType) {
            foreach ([RepartitionType::BASE, RepartitionType::TAX] as $sort => $repartitionType) {
                DB::table('accounts_tax_partition_lines')->insert([
                    'tax_id'             => $taxId,
                    'company_id'         => $company->id,
                    'creator_id'         => $creatorId,
                    'sort'               => $sort + 1,
                    'repartition_type'   => $repartitionType->value,
                    'document_type'      => $documentType->value,
                    'use_in_tax_closing' => $repartitionType === RepartitionType::TAX && $useInTaxClosing,
                    'factor'             => 1.0,
                    'factor_percent'     => 100.0,
                    'account_id'         => $repartitionType === RepartitionType::TAX ? $taxAccountId : null,
                    'created_at'         => now(),
                    'updated_at'         => now(),
                ]);
            }
        }

        return Tax::findOrFail($taxId);
    }

    protected function thailandId(): ?int
    {
        return Country::query()->where('code', 'TH')->value('id');
    }
}
