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
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('categoria');
            $table->string('subcategoria');
            $table->bigInteger('precio');
            $table->bigInteger('cantidad');
            $table->string('size');
            $table->string('color');
            $table->bigInteger('rep')->nullable();
            $table->bigInteger('karma')->nullable();
            $table->timestamp('updateDate')->nullable();
            $table->unsignedBigInteger('store_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamp('publicado')->nullable();
            $table->string('image');
            $table->string('image2');
            $table->string('image3');
            $table->string('image4')->nullable();
            $table->string('image5')->nullable();
            $table->string('image6')->nullable();
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
