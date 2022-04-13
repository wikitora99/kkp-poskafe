<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('orders', function (Blueprint $table) {
      $table->id();
      $table->string('code');
      $table->timestamp('time');
      $table->integer('price');
      $table->integer('discount');
      $table->integer('total_price');
      $table->unsignedBigInteger('type_id');
      $table->foreign('type_id')
            ->references('id')
            ->on('order_type')
            ->onUpdate('cascade');
      $table->unsignedBigInteger('status_id');
      $table->foreign('status_id')
            ->references('id')
            ->on('order_status')
            ->onUpdate('cascade');
      $table->integer('total_paid');
      $table->integer('changes');
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
    Schema::dropIfExists('orders');
  }
}
