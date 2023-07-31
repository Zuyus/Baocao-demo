<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::create([
            'en_name' => 'Home',
            'fr_name' => 'ميزون',
            'slug' => 'home',
            'is_static' => 1,
            'url' => route('front'),
            'status' => 1,
        ]);

        Menu::create([
            'en_name' => 'About Us',
            'fr_name' => 'يقترح',
            'slug' => 'about-us',
            'is_static' => 1,
            'url' => route('about.us'),
            'status' => 1,
        ]);

        Menu::create([
            'en_name' => 'Blog',
            'fr_name' => 'مقالات',
            'slug' => 'blog',
            'is_static' => 1,
            'url' => route('blog'),
            'status' => 1,
        ]);

        Menu::create([
            'en_name' => 'Contact',
            'fr_name' => 'اتصل',
            'slug' => 'contact',
            'is_static' => 1,
            'url' => route('contact.us'),
            'status' => 1,
        ]);

        Menu::create([
            'en_name' => 'Shop',
            'fr_name' => 'محل',
            'slug' => 'shop',
            'is_static' => 1,
            'url' => '#',
            'status' => 1,
        ]);

        Menu::create([
            'en_name' => 'Overview',
            'fr_name' => 'ملخص',
            'slug' => null,
            'is_static' => 0,
            'url' => route('page.single', ['overview']),
            'status' => 1,
        ]);
    }
}
