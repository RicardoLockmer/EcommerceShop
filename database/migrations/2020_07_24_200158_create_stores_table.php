<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id('store_id')->uniqid();
            $table->string('nombreNegocio')->unique();
            $table->string('primerNombre');
            $table->string('segundoNombre')->nullable();
            $table->string('primerApellido');
            $table->string('segundoApellido')->nullable();
            $table->string('referencia')->nullable();
            $table->string('cedulaJuridica')->unique();
            $table->longText('direccion');
            $table->char('prefix');
            $table->char('phoneNumber');
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('tyc');
            $table->rememberToken()->nullable();
            $table->bigInteger('rep')->nullable();
            $table->bigInteger('karma')->nullable();
            $table->dateTime('updated_at')->nullable();
            $table->dateTime('created_at');
            $table->timestamp('closeDate')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stores');
    }
}
