<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name'); //Alter Table Adition "php artisan make:migration add_[column_name]_to_[table_name]_table"
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps(); //creates timestamps such as created at
			$table->softDeletes(); //creates a new column  called "deleted at" once data is deleted this column is filled and subsequent calls to this data is ignored but not deleted.
        });
    }


    public function down()
    {
        Schema::dropIfExists('users');
    }
};
