<?php

namespace Database\Seeders;

use App\Models\Admin\Advertise;
use Illuminate\Database\Seeder;

class AdvertiseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Advertise::create([
            'Image_One'=>'product-banner-1.jpg',
            'Image_Two'=>'product-banner-2.jpg',
        ]);
    }
}
