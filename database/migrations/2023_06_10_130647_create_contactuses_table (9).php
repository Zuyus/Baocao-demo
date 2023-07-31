<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Category_Id')->index()->nullable();
            $table->foreign('Category_Id')->references('id')->on('categories')->onDelete('cascade');

            $table->unsignedBigInteger('Brand_Id')->index()->nullable();
            $table->foreign('Brand_Id')->references('id')->on('brands')->onDelete('cascade');

            $table->string('en_Product_Name');
            $table->string('fr_Product_Name');

            $table->string('en_Product_Slug',191);
            $table->string('fr_Product_Slug',191);

            $table->longText('en_About');
            $table->longText('fr_About');


            $table->string('ItemTag')->nullable();
            $table->decimal('Price');
            $table->decimal('Discount');
            $table->decimal('Discount_Price');
            $table->integer('Quantity')->default(0);
            $table->decimal('Sold')->default(0);


            $table->string('Primary_Image');
            $table->string('Image2')->nullable();
            $table->string('Image3')->nullable();
            $table->string('Image4')->nullable();
            $table->string('Image5')->nullable();


            $table->boolean('Featured_Product')->default(0);
            $table->boolean('Best_Selling')->default(0);
            $table->boolean('New_Arrival')->default(0);
            $table->boolean('On_Sale')->default(1);
            $table->boolean('Status')->default(1);

            $table->longText('en_Description');
            $table->longText('fr_Description');

            $table->longText('en_ShippingReturn');
            $table->longText('fr_ShippingReturn');

            $table->longText('en_AdditionalInformation');
            $table->longText('fr_AdditionalInformation');
            $table->string('Voucher');

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
        Schema::dropIfExists('products');
    }
}
