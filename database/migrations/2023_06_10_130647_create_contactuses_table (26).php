<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomepagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homepages', function (Blueprint $table) {
            $table->id();
            $table->string('Location');
            $table->string('en_Title');
            $table->text('en_Description_One');
            $table->text('en_Description_Two')->nullable();
            $table->string('image')->nullable();

            $table->string('fr_Title');
            $table->text('fr_Description_One');
            $table->text('fr_Description_Two')->nullable();
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
        Schema::dropIfExists('homepages');
    }
}
