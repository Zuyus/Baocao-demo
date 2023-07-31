<?php

namespace Database\Seeders;

use App\Models\Admin\Brand;
use Illuminate\Database\Seeder;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::create([
           'en_BrandName'=>'Circle',
           'fr_BrandName'=>'Cercle',
           'en_BrandSlug'=> $this->slugify('Circle'),
           'fr_BrandSlug'=> $this->slugify('Cercle'),
            'BrandImage'=>'circle.png',
        ]);
        Brand::create([
            'en_BrandName'=>'CodeLab',
            'fr_BrandName'=>'CodeLab',
            'en_BrandSlug'=> $this->slugify('CodeLab'),
            'fr_BrandSlug'=> $this->slugify('CodeLab'),
            'BrandImage'=>'code-lab.png',
        ]);
        Brand::create([
            'en_BrandName'=>'HEXLAB',
            'fr_BrandName'=>'HEXLAB',
            'en_BrandSlug'=> $this->slugify('HEXLAB'),
            'fr_BrandSlug'=> $this->slugify('HEXLAB'),
            'BrandImage'=>'hex-lab.png',
        ]);
        Brand::create([
            'en_BrandName'=>'Kanba',
            'fr_BrandName'=>'Kanba',
            'en_BrandSlug'=> $this->slugify('Kanba'),
            'fr_BrandSlug'=> $this->slugify('Kanba'),
            'BrandImage'=>'kanba.png',
        ]);
        Brand::create([
            'en_BrandName'=>'treva',
            'fr_BrandName'=>'treva',
            'en_BrandSlug'=> $this->slugify('treva'),
            'fr_BrandSlug'=> $this->slugify('treva'),
            'BrandImage'=>'treva.png',
        ]);
        Brand::create([
            'en_BrandName'=>'Zootv',
            'fr_BrandName'=>'Zootv',
            'en_BrandSlug'=> $this->slugify('Zootv'),
            'fr_BrandSlug'=> $this->slugify('Zootv'),
            'BrandImage'=>'zoo-tv.png',
        ]);
        Brand::create([
            'en_BrandName'=>'BanCi',
            'fr_BrandName'=>'BanCi',
            'en_BrandSlug'=> $this->slugify('BanCi'),
            'fr_BrandSlug'=> $this->slugify('BanCi'),
            'BrandImage'=>'circle.png',
        ]);
    }
    public function slugify($text){
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        $text = trim($text, '-');
        $text = preg_replace('~-+~', '-', $text);
        $text = strtolower($text);
        if (empty($text)) {
            return 'n-a';
        }
        return $text;
    }
}
