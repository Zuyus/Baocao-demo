<?php

namespace Database\Seeders;

use App\Models\Admin\SiteContent\Homepage;
use Illuminate\Database\Seeder;

class HomepageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Homepage::create([
            'Location' => 'many_goods',
            'en_Title' => 'Many Goods',
            'en_Description_One' => 'Popular Categories',
            'fr_Title' => 'العديد من السلع',
            'fr_Description_One' => 'الفئات الشعبية',
        ]);
        Homepage::create([
            'Location' => 'products',
            'en_Title' => 'New Products',
            'en_Description_One' => 'Products',
            'fr_Title' => 'منتجات جديدة',
            'fr_Description_One' => 'منتجات',
        ]);

        Homepage::create([
            'Location' => 'about_us',
            'image' => 'about-home.jpg',
            'en_Title' => 'About Us',
            'en_Description_One' => 'The Story Of Borning <br /> Company Zairito',
            'fr_Title' => 'معلومات عنا',
            'fr_Description_One' => "<div>قصة بورنينج</div><div>شركة زايريتو</div>",
        ]);

        Homepage::create([
            'Location' => 'popular_products',
            'en_Title' => 'Popular Products',
            'en_Description_One' => 'Trending Products',
            'fr_Title' => 'المنتجات الشعبية',
            'fr_Description_One' => "تتجه المنتجات",
        ]);

        Homepage::create([
            'Location' => 'blogspot',
            'en_Title' => 'Blogspot',
            'en_Description_One' => 'TNews From Our Blog',
            'fr_Title' => 'بلوغسبوت',
            'fr_Description_One' => "أخبار من مدونتنا",
        ]);

        Homepage::create([
            'Location' => 'image_gallery',
            'en_Title' => "image gallery",
            'en_Description_One' => 'Image Gallery To Zairito For Making Better Online Shopping Experience',
            'fr_Title' => "معرض الصور",
            'fr_Description_One' => "معرض الصور لتقديم تجربة تسوق أفضل عبر الإنترنت",
        ]);

        Homepage::create([
            'Location' => 'testimonial',
            'en_Title' => "Testimonial",
            'en_Description_One' => 'What People Are <br />Saying About Oursalve',
            'en_Description_Two' => '<p>Praesent sapien massa, convallis a pellentesque nec, egestas
                    Vivamus magna justo, lacinia eget consectetur sed</p>',

            'fr_Title' => "شهادة",
            'fr_Description_One' => "<div>من هم الناس</div><div>نقول عن أنفسنا</div>",
            'fr_Description_Two' => "<p>كتلة الحاضر حكيمة وليست من وادي القناص</p>",
        ]);
    }
}
