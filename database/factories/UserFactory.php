<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
	protected $model = User::class; //import the model of the factory to be created.
    public function definition()  //Factories, faker documentation
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'password' => bcrypt(123456), // password encypted by bcrypt
            'remember_token' => Str::random(10),
        ];
    }

}
