<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFooterInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footer_information', function (Blueprint $table) {
            $table->id();
            $table->string('Logo');
            $table->text('Street_Address');
            $table->text('Contact');
            $table->text('Email');
            $table->text('News_Letter');
            $table->text('Accepts');
            $table->text('Design_Developed');
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
        Schema::dropIfExists('footer_information');
    }
}
