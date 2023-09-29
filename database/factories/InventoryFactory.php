<?php

namespace Database\Factories;

use App\Models\Inventory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inventory>
 */
class InventoryFactory extends Factory
{
	protected $model = Inventory::class;

	public function productId($product){

		return $this->state([
			'product_id' => $product->id
		]);
	}
    public function definition()
    {
        return [

		'stock'=>fake()->numberBetween(1,200)
        ];
    }
}
