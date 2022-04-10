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
            $table->id();
            $table->timestamps();

            $table->string('ar_name')->nullable();
            $table->string('en_name')->nullable();
            $table->string('ar_description')->nullable();
            $table->string('en_description')->nullable();
            
            $table->float('price')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('photo')->nullable();

            $table->integer('cat_id')->nullable();
            
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
