<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'prdt_no' => $this->faker->unique()->ean8,
            'name' => $this->faker->word,
            'info' => $this->faker->paragraph,
            'image' => $this->faker->imageUrl(),
            'price' => $this->faker->randomFloat(2, 10, 1000),
        ];
    }

}
