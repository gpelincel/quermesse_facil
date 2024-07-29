<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => fake()->word(),
            'preco_venda' => fake()->randomFloat(2, 0, 9999),
            'preco_compra' => fake()->randomFloat(2, 0, 9999),
            'quantidade' => fake()->randomNumber(3, false),
        ];
    }
}
