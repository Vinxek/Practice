<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
    use HasFactory, SoftDeletes ;

	protected $fillable = [
		'name',  // <- A protected variable called $fillable equals to an array with all the column names on the database
		'type',
		'price',
		'size'
	];


}
