<?php

namespace Database\Seeders;

use App\Models\Admin\SpecialOffer;
use Illuminate\Database\Seeder;

class SpecialOfferTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SpecialOffer::create([
            'image' => 'offer-image.png',
            'en_title' => 'SPECTIAL OFFER',
            'fr_title' => 'SPECTIAL OFFER',
            'category_id' => '1',
            'discount' => '50',
            'url' => 'www.sadekurrahman.com',
            'status' => '1',
        ]);
    }
}
