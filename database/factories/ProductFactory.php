<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->userName(),
            'description' => $this->faker->realText(),
            'price' => $this->faker->randomFloat(),
            'status' => $this->faker->shuffleString(),
            'stock' => $this->faker->randomNumber(),
            'warranty' => true,
            'cart_id' => 1,
        ];
    }
}
