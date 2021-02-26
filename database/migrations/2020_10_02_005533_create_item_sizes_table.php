<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemSizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_sizes', function (Blueprint $table) {
            $table->id();
            $table->string('sku');
            $table->unsignedBigInteger('item_id');
            $table->unsignedBigInteger('color_id');
            $table->string('size');
            $table->bigInteger('quantity');
            $table->bigInteger('precio');
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
        Schema::dropIfExists('item_sizes');
    }
}
