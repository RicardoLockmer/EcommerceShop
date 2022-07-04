<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\itemSizes;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(ItemSizes::class);
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('store_id');
            $table->bigInteger('quantity');
            $table->longText('total_price');
            $table->string('deliver_city');
            $table->longText('deliver_address');
            $table->longText('deliver_reference');
            $table->string('deliver_by');
            $table->boolean('isAccepted');
            $table->boolean('isSent');
            $table->boolean('isDelivered');
            $table->boolean('isRejected');
            $table->date('purchase_date');
            $table->date('accepted_date')->nullable();
            $table->date('deliver_date')->nullable();
            $table->date('rejected_date')->nullable();
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
        Schema::dropIfExists('new_orders');
    }
};
