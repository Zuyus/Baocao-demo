<?php

namespace Database\Seeders;

use App\Models\Admin\GeneralSettings;
use Illuminate\Database\Seeder;

class GeneralSettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GeneralSettings::create([
            'Title' => 'Zairito - Ecommerce',
            'Logo' => 'zairito.png',
            'Favicon' =>'favicon.png',
            'MetaDescription' => 'Zairito - Ecommerce',
            'MetaKeywords' => 'business,eCommerce, Ecommerce, ecommerce, shop, shopify, shopify ecommerce, creative, woocommerce, design, gallery, minimal, modern, html, html5, responsive',
            'MetaAuthor'=> 'Zairito',
        ]);
    }
}
