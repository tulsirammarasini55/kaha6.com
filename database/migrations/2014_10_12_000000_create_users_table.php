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
    $table->increments('id');
    $table->string('name');
    $table->string('email')->unique()->nullable();
    $table ->string('usertype')->nullable();
    $table->string('provider')->default('original');
    $table->string('provider_id')->default('13');
    $table->timestamp('email_verified_at')->nullable();
    $table->string('password')->nullable();
    $table ->string('avatar')->default('avatar.jpg');
    $table->rememberToken()->nullable();
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
