<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use NumberFormatter;

class Product extends Model
{
    use HasFactory, SoftDeletes ;

	protected $fillable = [
		'name',  // <- A protected variable called $fillable equals to an array with all the column names on the database
		'type',
		'price',
		'size'
	];


	public function getPriceAttribute($value)
	{
    $formatter = new NumberFormatter('es-CO', NumberFormatter::CURRENCY);
    return $formatter->formatCurrency($value / 100, 'COP');
	}

	public function inventory()
	{
		return $this->hasOne(Inventory::class, 'product_id', 'id');
	}

	public function sales()
	{
		return $this->hasMany(Sale::class, 'product_id','id');
	}


}
