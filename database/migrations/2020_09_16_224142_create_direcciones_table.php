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
            $table->string('nombreCompleto');
            $table->string('pais');
            $table->string('provincia');
            $table->string('canton');
            $table->longText('direccion');
            $table->string('infoAdicional')->nullable();
            $table->char('prefix');
            $table->char('phoneNumber');
            $table->string('codigoPostal');
            $table->tinyInteger('selected');
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
