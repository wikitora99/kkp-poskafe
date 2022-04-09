<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomingStocksTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('incoming_stocks', function (Blueprint $table) {
      $table->id();
      $table->string('code')->unique();
      $table->string('note')->nullable();
      $table->unsignedBigInteger('supplier_id');
      $table->foreign('supplier_id')
            ->references('id')
            ->on('suppliers')
            ->onUpdate('cascade');
      $table->date('date');
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
    Schema::dropIfExists('incoming_stocks');
  }
}
