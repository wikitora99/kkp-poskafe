<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscountsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('discounts', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('product_id');
      $table->foreign('product_id')
            ->references('id')
            ->on('products')
            ->onUpdate('cascade');
      $table->date('start_date');
      $table->boolean('no_expired');
      $table->date('due_date')->nullable();
      $table->integer('min_order');
      $table->boolean('in_percent');
      $table->integer('value');
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
    Schema::dropIfExists('discounts');
  }
}
