<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // return [
        //     'name' => 'Agriculture Machinery',
        //     'slug' => 'agriculture-machinery',
        //     'image' => 'frontend/images/AgriConnect_category_format.jpg',
        //    ];
        // return [
        //     'name' => 'Agriculture Vehicle ',
        //     'slug' => 'agriculture-vehicle',
        //     'image' => 'frontend/images/Agriculture_vehicle.jpg',
        //    ];
        // return [
        //     'name' => 'Loading Vehicle ',
        //     'slug' => 'loading-vehicle',
        //     'image' => 'empty',
        //    ];
        return [
            'name' => 'Labour ',
            'slug' => 'labour',
            'image' => 'empty',
           ];
    }
}
