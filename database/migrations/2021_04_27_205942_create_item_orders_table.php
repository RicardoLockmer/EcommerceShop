<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_orders', function (Blueprint $table) {
            $table->id();
            $table->string('orderNumber', 20);
            $table->foreignId('order_id')->constrained();
            $table->foreignId('item_id')->constrained();
            $table->decimal('unitPrice');
            $table->integer('quantity');
            $table->unsignedBigInteger('userId');
            $table->dateTime('bought_at');
            $table->boolean('delivered'); //true or false
            $table->boolean('in_progress'); // true or false
            
            $table->string('expected_date');
            $table->string('delivery_address');
            $table->string('deliver_to');
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
        Schema::dropIfExists('item_orders');
    }
}
