<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutUsPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_us_pages', function (Blueprint $table) {
            $table->id();
            $table->string('Location');
            $table->string('en_Title')->nullable();
            $table->string('en_Subtitle')->nullable();
            $table->string('Image')->nullable();

            $table->string('Icon_One')->nullable();
            $table->string('Icon_Two')->nullable();
            $table->string('Icon_Three')->nullable();
            $table->string('Icon_Four')->nullable();

            $table->string('en_Title_One')->nullable();
            $table->string('en_Title_Two')->nullable();
            $table->string('en_Title_Three')->nullable();
            $table->string('en_Title_Four')->nullable();

            $table->longText('en_Description_One')->nullable();
            $table->longText('en_Description_Two')->nullable();
            $table->longText('en_Description_Three')->nullable();
            $table->longText('en_Description_Four')->nullable();

            $table->string('fr_Title_One')->nullable();
            $table->string('fr_Title_Two')->nullable();
            $table->string('fr_Title_Three')->nullable();
            $table->string('fr_Title_Four')->nullable();
            $table->string('fr_Subtitle')->nullable();

            $table->longText('fr_Description_One')->nullable();
            $table->longText('fr_Description_Two')->nullable();
            $table->longText('fr_Description_Three')->nullable();
            $table->longText('fr_Description_Four')->nullable();

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
        Schema::dropIfExists('about_us_pages');
    }
}
