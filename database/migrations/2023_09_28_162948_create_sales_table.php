<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
			$table->bigInteger('inventory_id')->unsigned();
			$table->bigInteger('product_id')->unsigned();
			$table->bigInteger('sale_amount')->unsigned();
			$table->enum('TransactionStatus', ['completed', 'Pending', 'Cancelled'])->nullable();
            $table->timestamps();
			$table->softDeletes();

			$table->foreign('inventory_id')->references('id')->on('inventories')->onDelete('cascade');
			$table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('sales');
    }
};
