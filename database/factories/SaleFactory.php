<?php

namespace Database\Factories;

use App\Models\Sale;
use App\Models\Product;
use App\Models\Inventory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sale>
 */
class SaleFactory extends Factory
{

	protected $model = Sale::class;

    public function definition()
    {
        return [
        // 'inventory_id' => fake()->randomNumber(),
		// 'product_id' => fake()->randomNumber(),
		'sale_amount' =>fake()->numberBetween(0,200000),
		'TransactionStatus' =>fake()->randomElement(['Completed', 'Pending', 'Cancelled']),
		'created_at' =>fake()->dateTimeBetween('-1 years', 'now')
        ];
    }
}
