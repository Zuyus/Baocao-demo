<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Blog_Id');
            $table->foreign('Blog_Id')->references('id')->on('blogs')->onDelete('cascade');

            $table->unsignedBigInteger('User_Id')->nullable();
            $table->foreign('User_Id')->references('id')->on('users')->onDelete('cascade');
            $table->string('Name')->nullable();
            $table->string('Email')->nullable();
            $table->longText('Comment')->nullable();
            $table->integer('Parent_Id')->default(0);
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
        Schema::dropIfExists('blog_comments');
    }
}
