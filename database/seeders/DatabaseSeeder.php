<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Company;
use App\Models\ColorPalette;
use App\Models\CompanyPage;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $companies = 10;
        
        $this->call(SiteIndustrySeeder::class);

        User::factory(5)->create();
        // ColorPalette::factory($companies)->create();
        Company::factory($companies)->create();
        CompanyPage::factory(5)->create();
    }
}
