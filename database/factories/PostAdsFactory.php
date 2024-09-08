<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PostAds>
 */
class PostAdsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image' => $this->faker->imageUrl(640, 480, 'vehicles', true, 'Faker'), // Random vehicle image
            'user_id' => 1, // Assumes a User factory exists
            'vehicle_name' => $this->faker->word,
            'duration' => $this->faker->numberBetween(1, 12) . ' months', // Random duration
            'location' => $this->faker->city,
            'weight' => $this->faker->randomFloat(2, 500, 5000) . ' kg', // Random weight in kg
            'description' => $this->faker->sentence,
            'categories' => $this->faker->word, // Assuming a single category
            'contact' => $this->faker->phoneNumber,
            'price' => $this->faker->randomFloat(2, 1000, 50000), // Random price
        ];
    }
}
