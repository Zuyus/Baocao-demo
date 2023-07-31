<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create(['slug' => 'app_title', 'value' => 'Zairito',]);
        Setting::create(['slug' => 'tax_percentage', 'value' => 15,]);
        Setting::create(['slug' => 'shipping_charge', 'value' => 60,]);
        Setting::create(['slug' => 'estimating_delivery', 'value' => '7 days',]);
        Setting::create(['slug' => 'title', 'value' => 'Zairito - Ecommerce',]);
        Setting::create(['slug' => 'main_logo', 'value' => 'logo.png',]);
        Setting::create(['slug' => 'footer_logo', 'value' => 'footer-logo.png',]);
        Setting::create(['slug' => 'footer_title', 'value' => 'Designed & Developed By Zainiktheme',]);
        Setting::create(['slug' => 'favicon', 'value' => 'favicon.png',]);
        Setting::create(['slug' => 'version', 'value' => 1.0,]);
        Setting::create(['slug' => 'meta_author', 'value' => 'zainiktheme',]);
        Setting::create(['slug' => 'meta_description', 'value' => 'Zairito - Ecommerce App',]);
        Setting::create(['slug' => 'meta_keywords', 'value' => 'business,eCommerce, Ecommerce, ecommerce, shop, shopify, shopify ecommerce, creative, woocommerce, design, gallery, minimal, modern, html, html5, responsive',]);
        Setting::create(['slug' => 'call_us', 'value' => '+777 2345 7886',]);
        Setting::create(['slug' => 'email', 'value' => 'support@zainikthemes.com',]);
        Setting::create(['slug' => 'address', 'value' => '685 Market Street',]);
        Setting::create(['slug' => 'state', 'value' => 'San Francisco, CA 94106,',]);
        Setting::create(['slug' => 'country', 'value' => 'United States',]);
        Setting::create(['slug' => 'news_letter', 'value' => 'Receive our latest updates about our <br /> products and promotions.',]);
        Setting::create(['slug' => 'preloader', 'value' => 'preloader.svg',]);
        Setting::create(['slug' => 'popup_image', 'value' => 'popup-image.png',]);
        Setting::create(['slug' => 'menu_thumb', 'value' => 'menu-thumb.png',]);
        Setting::create(['slug' => 'menu_link', 'value' => 'javascript:void(0)',]);
        Setting::create(['slug' => 'home_products_page', 'value' => 4,]);
        Setting::create(['slug' => 'home_trending_page', 'value' => 4,]);
        Setting::create(['slug' => 'new_arrival', 'value' => 1,]);
        Setting::create(['slug' => 'best_selling', 'value' => 1,]);
        Setting::create(['slug' => 'on_sale', 'value' => 1,]);
        Setting::create(['slug' => 'featured_items', 'value' => 1,]);
        Setting::create(['slug' => 'default_currency', 'value' => 'USD',]);
        Setting::create(['slug' => 'default_language', 'value' => 'en',]);
        Setting::create(['slug' => 'theme', 'value' => 'one',]);
        Setting::create(['slug' => 'news_letter_img', 'value' => 'accepts-image.png',]);
        Setting::create(['slug' => 'news_letter_title', 'value' => 'Guarantee safe & secure checkout',]);
        Setting::create(['slug' => 'news_letter_status', 'value' => '1',]);
    }
}
