<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('productname');
            $table->string('price');
            $table->boolean('status');
            $table->string('productimage');
            $table->string('count');
            $table->integer('category_id')->unsigned();
            $table->integer('wanted_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categorys')->onDelete('cascade');
            $table->foreign('wanted_id')->references('id')->on('categorys')->onDelete('cascade');
            $table->timestamps();
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
