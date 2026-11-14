<?php

namespace Aall\ThaiLocalization\Database\Seeders;

use Aall\ThaiLocalization\CompanyAccountingBootstrapper;
use Aall\ThaiLocalization\ThaiTaxSetup;
use Illuminate\Database\Seeder;
use Webkul\Security\Models\User;
use Webkul\Support\Models\Company;

class DatabaseSeeder extends Seeder
{
    public function run(CompanyAccountingBootstrapper $bootstrapper, ThaiTaxSetup $setup): void
    {
        $creatorId = User::query()->orderBy('id')->value('id');

        Company::query()->each(function (Company $company) use ($bootstrapper, $setup, $creatorId) {
            $bootstrapper->bootstrap($company, $creatorId);
            $setup->apply($company, $creatorId);
        });
    }
}
