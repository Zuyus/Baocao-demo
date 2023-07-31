<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('en_Category_Name');
            $table->string('fr_Category_Name');
            $table->string('en_Category_Slug');
            $table->string('fr_Category_Slug');
            $table->string('Category_Icon')->nullable();
            $table->string('en_Description')->nullable();
            $table->string('fr_Description')->nullable();
            $table->integer('Status')->default(1);
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
        Schema::dropIfExists('categories');
    }
}
