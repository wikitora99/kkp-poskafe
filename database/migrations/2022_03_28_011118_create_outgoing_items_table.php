<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutgoingItemsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('outgoing_items', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('stock_id');
      $table->foreign('stock_id')
            ->references('id')
            ->on('outgoing_stocks');
      $table->string('name');
      $table->integer('amount');
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
    Schema::dropIfExists('outgoing_items');
  }
}
