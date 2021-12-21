<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SiteIndustry;

class SiteIndustrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $industries = [
            [
                "type" => "Accounting",
                "slug" => "accounting"
            ],
            [
                "type" => "Management",
                "slug" => "mnagement"
            ],
            [
                "type" => "Design",
                "slug" => "design"
            ],
            [
                "type" => "Fitness",
                "slug" => "fitness"
            ],
            [
                "type" => "Dating",
                "slug" => "dating"
            ],
            [
                "type" => "Food",
                "slug" => "food"
            ],
            [
                "type" => "Hotels",
                "slug" => "hotels"
            ] 
        ];
        

        foreach ($industries as $industry) {
            SiteIndustry::create($industry);
        }
    }
}
