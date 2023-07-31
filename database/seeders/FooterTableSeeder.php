<?php

namespace Database\Seeders;

use App\Models\Admin\SiteContent\FooterInformation;
use Illuminate\Database\Seeder;

class FooterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FooterInformation::create([
            'Logo'=>'footer-logo.png',
            'Street_Address'=>'<p class="address-text">685 Market Street <br /> San Francisco, CA 94105, <br />United States</p>',
            'Contact'=>' <p class="contact">Call us: 1.800.000.6690</p>',
            'Email'=>' <p class="contact">Email: support@zainikthemes.com</p>',
            'News_Letter'=>'<p class="newsletter-text">Receive our latest updates about our <br /> products and promotions.</p>',
            'Accepts'=>'accepts-image.png',
            'Design_Developed'=>'<p class="copyright-text">Designed And Developed By Team <a class="brand-name" href="#">Zainiktheme</a> Digital Agency @2021</p>'
        ]);
    }
}
