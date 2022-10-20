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
            $table->foreignId('border_id');
            $table->foreignId('badge_id');
            $table->foreignId('theme_id');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('name');
            $table->string('password');
            $table->integer('book_year_challenge')->nullable();
            $table->integer('goal')->nullable();
            $table->rememberToken();
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
