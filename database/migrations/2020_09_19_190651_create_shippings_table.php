<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shippings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('items_id');
            $table->string('empresa')->nullable();
            $table->json('provincia')->nullable();
            $table->string('restringidos')->nullable();
            $table->string('peso')->nullable();
            $table->string('dimensiones')->nullable();
            $table->string('precioEnvio')->nullable();
            
            $table->integer('tiempoEntrega')->nullable();
               
        });
    }

    /** 
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shippings');
    }
}
