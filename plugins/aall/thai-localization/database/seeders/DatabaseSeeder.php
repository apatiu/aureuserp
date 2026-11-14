<?php

namespace Aall\ThaiLocalization\Database\Seeders;

use Aall\ThaiLocalization\ThaiTaxSetup;
use Illuminate\Database\Seeder;
use Webkul\Security\Models\User;
use Webkul\Support\Models\Company;

class DatabaseSeeder extends Seeder
{
    public function run(ThaiTaxSetup $setup): void
    {
        $creatorId = User::query()->orderBy('id')->value('id');

        Company::query()->each(fn (Company $company) => $setup->apply($company, $creatorId));
    }
}
