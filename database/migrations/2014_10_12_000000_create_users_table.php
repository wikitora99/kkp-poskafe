<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('users', function (Blueprint $table) {
      $table->id();
      $table->string('username')->unique();
      $table->string('password');
      $table->unsignedBigInteger('role_id');
      $table->foreign('role_id')
            ->references('id')
            ->on('user_roles');
      $table->string('name');
      $table->string('phone')->unique();
      $table->string('address')->nullable();
      $table->string('picture')->nullable();
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
    Schema::dropIfExists('users');
  }
}


// $2y$10$0Uznnjio0f/NDCYFJ2E4ReTb7FxboSCB2S/MqJ1PRfQwmSctP4dB6