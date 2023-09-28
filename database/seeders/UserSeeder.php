<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
class UserSeeder extends Seeder
{

    public function run()
    {
        $user = new User([
			'number_id' => '1112625498',
			'name' => 'Kevin',
			'Last_name' => 'Giraldo',
			'email'=> 'vinxek@me.com',
			'password' => '123456789',
			'remember_token' => Str::random(30)
		]);
    }
}
