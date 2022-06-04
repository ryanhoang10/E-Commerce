<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category_id'   => $this->faker->numberBetween(0,10),
            'title'         => $this->faker->name(),
            'image'         => $this->faker->name(),
            'description'   => $this->faker->catchPhrase(),
            'unit_price'    => $this->faker->numberBetween(10, 100),
            'sale_price'    => '',
            'active'        => true,
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now(),
        ];
    }
}
