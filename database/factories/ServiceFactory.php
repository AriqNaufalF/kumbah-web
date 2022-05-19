<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    private $price = [10000, 15000, 20000];
    private $unit = ['kg', 'pcs'];

    public function definition()
    {
        return [
            'name' => $this->faker->sentence(1),
            'price' => $this->price[mt_rand(0, 2)],
            'unit' => $this->unit[mt_rand(0, 1)],
            'store_id' => mt_rand(1, 5)
        ];
    }
}
