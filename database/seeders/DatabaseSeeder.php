<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use App\Models\Sale;
use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
		$this->call([UserSeeder::class]);
        User::factory(10)->create(); //To create a seed import the model then use the method factory and pass the amount you want to create and pass the method create it should look like this User::factory(10)->create();
		Product::factory(20)->create();
    }
}
