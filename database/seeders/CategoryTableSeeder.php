<?php

namespace Database\Seeders;

use App\Models\Admin\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'en_Category_Name'=>'Health Category',
            'fr_Category_Name'=>'فئة الصحة',
            'en_Category_Slug'=>'health-category',
            'fr_Category_Slug'=>'n-a',
        ]);
        Category::create([
            'en_Category_Name'=>'Women Fashion',
            'fr_Category_Name'=>'أزياء نسائية',
            'en_Category_Slug'=>'women-fashion',
            'fr_Category_Slug'=>'n-a',
        ]);
        Category::create([
            'en_Category_Name'=>'Men Fashion',
            'fr_Category_Name'=>'لكن الموضة',
            'en_Category_Slug'=>'men-fashion',
            'fr_Category_Slug'=>'n-a',
        ]);
        Category::create([
            'en_Category_Name'=>'Electronic',
            'fr_Category_Name'=>'إلكتروني',
            'en_Category_Slug'=>'electronic',
            'fr_Category_Slug'=>'n-a',
        ]);
        Category::create([
            'en_Category_Name'=>'Sports',
            'fr_Category_Name'=>'رياضات',
            'Category_Icon'=>'icon flaticon-blazer',
            'en_Description'=>'Sports products',
            'fr_Description'=>'رياضات',
            'en_Category_Slug'=>'sports',
            'fr_Category_Slug'=>'n-a',
        ]);
        Category::create([
            'en_Category_Name'=>'Blazers Collection',
            'fr_Category_Name'=>'مجموعة بليزر',
            'Category_Icon'=>'icon flaticon-blazer',
            'en_Description'=>'Dress For Man And Women',
            'fr_Description'=>'فستان للرجال والنساء',
            'en_Category_Slug'=>'blazers-collection',
            'fr_Category_Slug'=>'n-a',
        ]);
        Category::create([
            'en_Category_Name'=>'Hoodie Collection',
            'fr_Category_Name'=>'مجموعة هوديي',
            'Category_Icon'=>'icon flaticon-hoodie',
            'en_Description'=>'Dress For Man And Women',
            'fr_Description'=>'فستان للرجال والنساء',
            'en_Category_Slug'=>'hoodie-collection',
            'fr_Category_Slug'=>'n-a',
        ]);
        Category::create([
            'en_Category_Name'=>'Long Sleeve Wear',
            'fr_Category_Name'=>'ملابس طويلة سليف',
            'Category_Icon'=>'icon flaticon-long-sleeve',
            'en_Description'=>'Dress For Man And Women',
            'fr_Description'=>'فستان للرجال والنساء',
            'en_Category_Slug'=>'long-sleeve-wear',
            'fr_Category_Slug'=>'n-a',
        ]);
        Category::create([
            'en_Category_Name'=>'Waistcoart Collection',
            'fr_Category_Name'=>'ملابس طويلة سليف',
            'Category_Icon'=>'icon flaticon-waistcoat',
            'en_Description'=>'Dress For Man And Women',
            'fr_Description'=>'فستان للرجال والنساء',
            'en_Category_Slug'=>'waistcoart-collection',
            'fr_Category_Slug'=>'n-a',
        ]);
        Category::create([
            'en_Category_Name'=>'Long Sleeve Wear',
            'fr_Category_Name'=>'ملابس طويلة سليف',
            'Category_Icon'=>'icon flaticon-long-sleeve',
            'en_Description'=>'Dress For Man And Women',
            'fr_Description'=>'فستان للرجال والنساء',
            'en_Category_Slug'=>'long-sleeve-wear-1',
            'fr_Category_Slug'=>'n-a',
        ]);

    }
    public function slugify($text){
        // replace non letter or digits by divider
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, '-');

        // remove duplicate divider
        $text = preg_replace('~-+~', '-', $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }
        return $text;
    }
}
