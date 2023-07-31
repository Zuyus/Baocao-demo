<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSlugToPaymentPlatforms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('payment_platforms', function (Blueprint $table) {
            $table->string('slug')->after('name');
            $table->integer('status')->default(ACTIVE)->after('image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('payment_platforms', function (Blueprint $table) {
            $table->dropColumn(['slug', 'status']);
        });
    }
}
