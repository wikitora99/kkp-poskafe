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
      $table->string('sku')->unique();
      $table->unsignedBigInteger('category_id');
      $table->foreign('category_id')
            ->references('id')
            ->on('product_categories')
            ->onUpdate('cascade');
      $table->string('name');
      $table->string('picture')->nullable();
      $table->string('desc')->nullable();
      $table->integer('buy_price')->nullable();
      $table->integer('sell_price');
      $table->boolean('has_stock');
      $table->integer('cur_stock')->nullable();
      $table->integer('min_stock')->nullable();
      $table->boolean('is_active');
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
