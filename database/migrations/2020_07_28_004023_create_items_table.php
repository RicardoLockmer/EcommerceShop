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
            $table('DTID');
            $table->string('nombre');
            
            $table->string('descripcion');
            $table->string('categoria');
            $table->string('subcategoria');
            $table->bigInteger('precio');
<<<<<<< HEAD
            $table->bigInteger('cantidad');
            $table->string('size')->nullable();
            $table->string('color')->nullable();
            $table->string('marca')->nullable();
            $table->json('Specs')->nullable();
            $table->bigInteger('rep')->nullable();
            $table->bigInteger('karma')->nullable();
=======
            $table->string('marca');
            $table->json('Specs');
>>>>>>> NewItemDB
            $table->timestamp('updateDate')->nullable();
            $table->integer('store_id');
            $table->string('nombreNegocio');
            $table->longText('etiquetas')->nullable();
<<<<<<< HEAD
            $table->json('caja')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->timestamp('publicado')->nullable();
            $table->string('image');
            
=======
            $table->unsignedBigInteger('user_id');
            $table->timestamp('publicado')->nullable();
            $table->string('image');
>>>>>>> NewItemDB
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
