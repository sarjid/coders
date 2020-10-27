<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('payment_id');
            $table->string('payment_type');
            $table->text('tnx_id');
            $table->string('payment_no');
            $table->integer('order_total');
            $table->integer('subtotal');
            $table->integer('discount')->nullable();
            $table->integer('discount_amount')->nullable();
            $table->string('coupon_name')->nullable();
            $table->text('order_notes')->nullable();
            $table->integer('status')->default(0);
            $table->string('order_date');
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
        Schema::dropIfExists('orders');
    }
}
