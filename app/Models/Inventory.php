<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Inventory extends Model
{
    use HasFactory, SoftDeletes;

	protected $fillable = [
		'product_id',
		'stock'
	];

	public function products()
	{
		return $this->hasMany(Product::class, 'product_id', 'id');
	}


	public function sales()
	{
		return $this->hasMany(Sale::class, 'inventory_id', 'id');
	}
}
