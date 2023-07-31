<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('Background_Image');
            $table->string('Thumbnail');
            $table->string('en_Title');
            $table->string('en_Sub_Title');
            $table->text('en_Description');
            $table->string('en_Button_Text');
            $table->string('fr_Title');
            $table->string('fr_Sub_Title');
            $table->text('fr_Description');
            $table->string('fr_Button_Text');
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
        Schema::dropIfExists('sliders');
    }
}
