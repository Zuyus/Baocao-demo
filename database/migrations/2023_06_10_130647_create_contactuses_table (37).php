<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDigitalLinkToProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->enum('digital_type', ['file', 'link'])->nullable()->after('Image5');
            $table->text('digital_link')->nullable()->after('digital_type');
            $table->text('digital_file')->nullable()->after('digital_link');
            $table->text('license_name')->nullable()->after('digital_file');
            $table->text('license_key')->nullable()->after('license_name');
            $table->text('affiliate_link')->nullable()->after('license_key');
            $table->integer('type')->default(PRODUCT_PHYSICAL)->after('affiliate_link');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['digital_type', 'digital_link', 'digital_file', 'license_name', 'license_key', 'affiliate_link', 'type']);
        });
    }
}
