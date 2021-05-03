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
            $table->integer('category_id');
            $table->integer('sub_category_id')->nullable();
            $table->string('title');
            $table->string('slug');
            $table->string('code');
            $table->float('sell_price');
            $table->boolean('discount_type')->default(0);
            $table->float('discount_amount')->nullable();
            $table->integer('stock_amount');
            $table->longText('description');
            $table->string('featured_image');
            $table->string('video')->nullable();
            $table->string('status')->default(0);
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
