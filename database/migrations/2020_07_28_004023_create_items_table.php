<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id('id')->uniqid();
            $table->string('nombre', 255);
            $table->string('descripcion', 450);
            $table->string('categoria');
            $table->string('subcategoria');
            $table->string('marca');
            $table->string('specs', 3000)->nullable();
            $table->string('keyFeatures', 3000)->nullable();
            $table->string('tipoVariante');    
            $table->timestamp('updateDate')->nullable();
            $table->integer('store_id');
            $table->string('features')->nullable();
            $table->longText('etiquetas')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->timestamp('publicado')->nullable();
            $table->string('image');
            $table->dateTime('updated_at')->nullable();
            $table->dateTime('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
