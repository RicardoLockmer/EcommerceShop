<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDireccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direcciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->string('nombreCompleto')->nullable();
            $table->string('pais')->nullable();
            $table->string('provincia')->nullable();
            $table->string('canton')->nullable();
            $table->longText('direccion')->nullable();
            $table->string('infoAdicional')->nullable();
            $table->char('prefix')->nullable();
            $table->char('phoneNumber')->nullable();
            $table->string('codigoPostal')->nullable();
            $table->tinyInteger('selected')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('direcciones');
    }
}
