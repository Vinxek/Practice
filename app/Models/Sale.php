<?php

namespace App\Models;

use NumberFormatter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sale extends Model
{
    use HasFactory, SoftDeletes;

	protected $fillable = [

		'inventory_id',
		'product_id',
		'sale_amount',
		'TransactionStatus',
		'created_at',
		'updated_at'

	];

	protected $cast = [
		'created_at' => 'datetime:y-m-d',
		'updated_at' => 'datetime:y-m-d'
	];

	public function getSaleAmountAttribute($value)
	{
    $formatter = new NumberFormatter('es-CO', NumberFormatter::CURRENCY);
    return $formatter->formatCurrency($value / 100, 'COP');
	}


	public function product()
	{
		return $this->belongsTo(Product::class, 'product_id', 'id');
	}


	public function inventory()
	{
		return $this->belongsTo(Inventory::class, 'inventory_id', 'id');
	}
}
