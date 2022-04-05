<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductOrdersTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('product_orders', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('order_id');
      $table->foreign('order_id')
            ->references('id')
            ->on('orders')
            ->onUpdate('cascade');
      $table->unsignedBigInteger('product_id');
      $table->foreign('product_id')
            ->references('id')
            ->on('products')
            ->onUpdate('cascade');
      $table->integer('total_order');
      $table->integer('total_price');
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
    Schema::dropIfExists('product_orders');
  }
}
