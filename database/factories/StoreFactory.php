<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Store>
 */
class StoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(mt_rand(2, 3)),
            'slug' => $this->faker->slug(mt_rand(2, 3)),
            'address' => $this->faker->address(),
            'description' => $this->faker->paragraphs(3, true),
            'is_open' => mt_rand(0, 1),
            'user_id' => 0,
        ];
    }
}
