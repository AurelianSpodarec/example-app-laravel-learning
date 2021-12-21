<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\SiteIndustry;
use App\Models\ColorPalette;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;



class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

  
    
    public function definition()
    {
        $brandColors = [
            'red',
            'orange',
            'yellow',
            'green',
            'cyan',
            'blue',
            'violet',
            'brown'
        ];

        $companiesName = [
            'Slack',
            'GymShark',
            'Nike',
            'Deliveroo',
            'Adidas',
            'Lamborghini',
            'Ferrari',
            'YouTube',
            'LinkedIn',
            'FaceBook',
            'Instagram',
            'Klarna'
        ];

        $company = $this->faker->unique()->randomElement($companiesName);
        $files = Storage::disk('uploads')->files('logos'); 

        return [
                'user_id'          => User::factory(),
                'color_palette_id' => ColorPalette::factory(),
                'site_industry_id' => rand(1,7),

                'name'          => $company,
                'slug'          => strtolower($company),
                'description'   => $this->faker->sentence(),

                'logo'          => $this->faker->randomElement($files),
                'thumbnail'     => 'https://source.unsplash.com/random',

                'brand_color'   => $this->faker->randomElement($brandColors),

                'version'       => $this->faker->time()
        ];
    }
}





// blocks
// inherit some properties for filtering by color etc... that are attached to the company
// id  header  url 
// id  hero    url
// id  footer  url

// pages
// id  home
// id  about
// 

// company
// id  header_id footer_id (and 30more)
