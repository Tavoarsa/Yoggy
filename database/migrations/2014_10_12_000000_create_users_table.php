<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('username',255)->unique();
            $table->string('first_name',255);
            $table->string('last_name');
            $table->string('email',255)->unique();
            $table->string('password',255);
            $table->boolean('status');
            $table->string('phone',255);
            $table->string('postal_code',255);
            $table->string('address');
            $table->integer('roll');
            $table->string('picture');
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
        Schema::drop('users');
    }
}
