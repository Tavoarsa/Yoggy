<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('supplier_name',255)->unique();
            $table->string('contact_name',255);
            $table->string('supplier_position');
            $table->string('address');
            $table->string('postal_code',255);
            $table->string('city',255);
            $table->string('phone',255);
            $table->boolean('status');//Activo o inactivo
            $table->string('way_pay');
            $table->string('notes');
            $table->string('email',255)->unique();           
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
        Schema::drop('providers');
    }
}
