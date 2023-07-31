<?php

namespace Database\Seeders;

use App\Models\Admin\ImageGallery;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ImageGallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ImageGallery::insert([
            ['Image' => 'gallery-one-1.jpg', 'theme' => 1, 'created_at' => Carbon::now()],
            ['Image' => 'gallery-one-2.jpg', 'theme' => 1, 'created_at' => Carbon::now()],
            ['Image' => 'gallery-one-3.jpg', 'theme' => 1, 'created_at' => Carbon::now()],
            ['Image' => 'gallery-one-4.jpg', 'theme' => 1, 'created_at' => Carbon::now()],
            ['Image' => 'gallery-one-5.jpg', 'theme' => 1, 'created_at' => Carbon::now()],
            ['Image' => 'gallery-one-6.jpg', 'theme' => 1, 'created_at' => Carbon::now()],
            ['Image' => 'gallery-one-7.jpg', 'theme' => 1, 'created_at' => Carbon::now()],

            ['Image' => 'gallery-two-1.jpg', 'theme' => 2, 'created_at' => Carbon::now()],
            ['Image' => 'gallery-two-2.jpg', 'theme' => 2, 'created_at' => Carbon::now()],
            ['Image' => 'gallery-two-3.jpg', 'theme' => 2, 'created_at' => Carbon::now()],
            ['Image' => 'gallery-two-4.jpg', 'theme' => 2, 'created_at' => Carbon::now()],
            ['Image' => 'gallery-two-5.jpg', 'theme' => 2, 'created_at' => Carbon::now()],
            ['Image' => 'gallery-two-6.jpg', 'theme' => 2, 'created_at' => Carbon::now()],
        ]);
    }
}
