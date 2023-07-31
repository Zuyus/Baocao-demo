<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('Order_Id');
            $table->foreign('Order_Id')->references('id')->on('orders')->onDelete('cascade');

            $table->unsignedBigInteger('Product_Id')->nullable();
            $table->string('Product_Name')->nullable();
            $table->string('Image')->nullable();
            $table->string('Size')->nullable();
            $table->string('Color')->nullable();
            $table->decimal('Price')->default(0);
            $table->decimal('Quantity')->default(0);
            $table->decimal('Total_Price')->default(0);

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
        Schema::dropIfExists('order_details');
    }
}
