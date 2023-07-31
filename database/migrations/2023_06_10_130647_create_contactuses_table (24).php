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
            $table->string('Order_Number')->nullable();
            $table->unsignedBigInteger('User_Id');
            $table->foreign('User_Id')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('Billing_Id')->nullable();
            $table->foreign('Billing_Id')->references('id')->on('billings')->onDelete('cascade');

            $table->unsignedBigInteger('Shipping_Id')->nullable();
            $table->foreign('Shipping_Id')->references('id')->on('shippings')->onDelete('cascade');

            $table->unsignedBigInteger('Coupon_Id')->nullable();
            $table->foreign('Coupon_Id')->references('id')->on('coupons')->onDelete('cascade');

//            $table->unsignedBigInteger('Payment_Id')->nullable();
//            $table->foreign('Payment_Id')->references('id')->on('payments')->onDelete('cascade');

//            $table->string('Coupon_Code')->nullable();
            $table->decimal('Coupon_Amount')->default(0);
            $table->decimal('Delivery_Charge')->default(0);
            $table->decimal('Sub_Total')->default(0);
            $table->decimal('Tax')->default(0);
            $table->decimal('Grand_Total')->default(0);
            $table->tinyInteger('Is_Free_Delivery')->default(INACTIVE);
            $table->tinyInteger('Is_Order_Successful')->default(INACTIVE);
            $table->tinyInteger('Is_Order_Completed')->default(INACTIVE);
            $table->string('Payment_Method')->default(PAYMENT_PENDING);
            $table->tinyInteger('Payment_Status')->default(PAYMENT_PENDING);
            $table->tinyInteger('Order_Status')->default(ORDER_PENDING);
            $table->dateTime('Delivery_At')->nullable();
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
