<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigincrements('id');
            $table->string('name', 40)->nullable(false);
            $table->text('description')->nullable(false);
            $table->integer('quantity')->nullable(false);//cantidad
            $table->string('unit_measurement', 30)->nullable(false);//Unidad de medida
            $table->integer('price')->nullable(false);
            $table->integer('unit_price')->nullable(false);//precio unitario
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
