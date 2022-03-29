<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaffeeInfoTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('caffee_info', function (Blueprint $table) {
      $table->id();
      $table->string('web_name');
      $table->string('favicon');
      $table->string('logo');
      $table->string('business_name');
      $table->string('address');
      $table->string('phone');
      $table->boolean('is_open');
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
    Schema::dropIfExists('caffee_info');
  }
}
