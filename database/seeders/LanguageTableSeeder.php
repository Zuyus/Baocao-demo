<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Seeder;

class LanguageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Language::create([
            'name' => 'English',
            'direction' => 'ltr',
            'locale' => 'en',
            'file' => 'en.json',
            'thumb' => 'en.png',
            'status' => 1,
        ]);
        Language::create([
            'name' => 'Arabic',
            'direction' => 'rtl',
            'locale' => 'fr',
            'file' => 'fr.json',
            'thumb' => 'fr.png',
            'status' => 1,
        ]);
    }
}
