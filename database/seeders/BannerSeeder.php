<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Banner::create([
            'image' => 'home-banner.png',
            'en_title' => 'Exclusive Summer Sale Is Going On Zairito The Shopify',
            'en_summary' => 'Curabitur non nulla sit amet nisl tempus convallis quis lectus. porttitor lectus nibh. Curabitur arcu erat, accu msan id imperdiet et, porttitor at. Cras ultricies ligula sed magna dictum porta. Donec rutrum congue eget malesuaa. Lorem',
            'fr_title' => 'التخفيضات الصيفية الحصرية مستمرة في Zairito The Shopify',
            'fr_summary' => 'Curabitur non nulla sit amet nisl tempus convallis quis lectus. porttitor lectus nibh. Curabitur arcu erat, accu msan id imperdiet et, porttitor at. Cras ultricies ligula sed magna dictum porta. Donec rutrum congue eget malesuaa. Lorem            ',
            'url' => '#',
            'position' => 'home-top',
        ]);
    }
}
