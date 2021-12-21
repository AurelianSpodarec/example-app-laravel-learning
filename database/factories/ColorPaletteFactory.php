<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ColorPaletteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

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
        
        return [
            'color_palette' => $this->faker->unique()->randomElements( $colors, rand(2,6) ),
        ];
    }
}
