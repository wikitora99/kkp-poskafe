<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomingItemsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('incoming_items', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('stock_id');
      $table->foreign('stock_id')
            ->references('id')
            ->on('incoming_stocks')
            ->onUpdate('cascade');
      $table->string('name');
      $table->integer('price');
      $table->integer('amount');
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
    Schema::dropIfExists('incoming_items');
  }
}
