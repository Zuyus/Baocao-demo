<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompareListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compare_lists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('User_Id')->nullable();
            $table->foreign('User_Id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('Product_Id')->nullable();
            $table->foreign('Product_Id')->references('id')->on('products')->onDelete('cascade');
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
        Schema::dropIfExists('compare_lists');
    }
}
