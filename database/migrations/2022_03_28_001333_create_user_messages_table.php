<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserMessagesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('user_messages', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('from');
      $table->foreign('from')
            ->references('id')
            ->on('users')
            ->onUpdate('cascade');
      $table->unsignedBigInteger('to');
      $table->foreign('to')
            ->references('id')
            ->on('users')
            ->onUpdate('cascade');
      $table->string('message');
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
    Schema::dropIfExists('user_messages');
  }
}
