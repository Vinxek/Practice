<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Inventory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{

    public function definition()
    {
        return [
		'name' => fake()->randomElement(['Camiseta', 'Blusa', 'Vestido']),
        'type'=>fake()->randomElement(['Bordada','Sesgo','Hiladilla']),
		'price'=>fake()->numberBetween(70000,200000), //
		'size'=>fake()->randomElement(['XS','S','M','L','XL','XXL'])
        ];
    }

	public function configure(){
		return $this->afterCreating(function(Product $product){
			Inventory::factory(1)->productId($product)->create();
		});
	}
}
