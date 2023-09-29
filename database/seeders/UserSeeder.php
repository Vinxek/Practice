<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
class UserSeeder extends Seeder
{
	// this codes is a seed for the databaseseeder. It calls the User Model, and applies the create static method of the class.
	// note on static and non-static methods. a static method is a method not defined in the class but inheried in the class itself
	// while a non-static methos depends on the instance of the class and wether the mehtod was defined in the class. :: static. -> non-static

    public function run()
    {
        User::create([
			'name' => 'Kevin Giraldo',
			'email'=> 'vinxek@me.com',
			'password' => bcrypt(1234556),
			'remember_token' => Str::random(30)
		]);
    }
}
