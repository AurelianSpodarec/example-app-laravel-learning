<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Company;

class CompanyPageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'company_id' => 1,
            'image' => "w",
            'show_in_filter' => false,
            'page_name' => "hi"
        ];
    }
}
