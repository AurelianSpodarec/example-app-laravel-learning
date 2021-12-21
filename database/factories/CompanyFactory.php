<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\SiteIndustry;
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

        $colors = [
            '#3CAD72',
            '#F25021',
            '#F23A21',
            '#F2F121',
            '#21F2D7',
            '#2152F2',
            '#8421F2',
            '#F221DF',
            '#F22179',
            '#F22121',
            '#61F221'
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

        
        $files = Storage::disk('uploads')->files('logos'); 
        
        // $companyName = $this->faker->unique()->randomElement($companiesName);
     

        return [
                'user_id'          => User::factory(),
                'site_industry_id' => rand(1,7), // number of categories is 7
                // 'site_type_id'  => $this->faker->name,

                'name'          => $company = $this->faker->unique()->randomElement($companiesName),
                'slug'          => $company,
                'description'   => $this->faker->sentence(),

                'logo'          => $this->faker->randomElement($files),
                'thumbnail'     => 'https://source.unsplash.com/random',

                'brand_color'   => $this->faker->randomElement($brandColors),
                'color_palette' => $this->faker->unique()->randomElements( $colors, rand(2,6) ),
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
