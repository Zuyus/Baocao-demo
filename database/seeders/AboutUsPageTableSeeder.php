<?php

namespace Database\Seeders;

use App\Models\Admin\SiteContent\AboutUsPage;
use Illuminate\Database\Seeder;

class AboutUsPageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AboutUsPage::create([
            'Location' => 'about_us',
            'Image' => 'aboutus-image.png',
            'en_Title_One' => 'Innovative solutions <br /> to boost your projects',
            'en_Subtitle' => 'About Us',
            'en_Description_One' => '<p class="about-us-text">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere consectetur sed, convallis at tellus. Donec rutrum congue leo eget malesuada. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet </p>
                        <p class="about-us-text">Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus suscipit tortor eget felis porttitor volutpat. Sed porttitor lectus nibh. Nulla porttitor accumsan tincidunt. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis a pellentesque nec, </p>',

            'fr_Title_One' => 'ديس ابتكار الحلول <br/> صب الداعم لك المشاريع',
            'fr_Subtitle' => 'معلومات عنا',
            'fr_Description_One' => '<p class="about-us-text">عند مدخل مدخل العفاريت ، كان الألم والانتقام يكمن في الوادي الرئيسي ولكن الوادي عند الأرض. حتى يحتاج الأسد إلى التوحيد. لقد كان قوسًا ، وطبقة من هذا التمويل ، وعبارة في سيم. الدهليوم&nbsp;</p><p class="about-us-text">كتلة الحاضر حكيمة وليست من وادي القناص ، لكنها ليست من العوز. يعيش لرفع الجلاد يحتاج عطلة نهاية الأسبوع عبارة غاز. لكن العبارة اختارت الكرة. لا توجد طبقة مبتكرة لإيقافها. باسم هذا شركة مصفاة نفط عمان إنها كتلة من الحكماء</p>',
        ]);


        AboutUsPage::create([
            'Location' => 'comfort',
            'Image' => 'blog-5.jpg',
            'Icon_One' => 'service-icon-1.png',
            'Icon_Two' => 'service-icon-2.png',
            'Icon_Three' => 'service-icon-3.png',
            'Icon_Four' => 'service-icon-4.png',

            'en_Title_One' => 'All Day Comfort',
            'en_Title_Two' => 'All Day Comfort',
            'en_Title_Three' => 'All Day Comfort',
            'en_Title_Four' => 'All Day Comfort',

            'en_Description_One' => 'We believe getting dressed should be the easiest part of your day.',
            'en_Description_Two' => 'We believe getting dressed should be the easiest part of your day.',
            'en_Description_Three' => 'We believe getting dressed should be the easiest part of your day.',
            'en_Description_Four' => 'We believe getting dressed should be the easiest part of your day.',

            'fr_Title_One' => 'راحة طوال اليوم',
            'fr_Title_Two' => 'راحة طوال اليوم',
            'fr_Title_Three' => 'راحة طوال اليوم',
            'fr_Title_Four' => 'راحة طوال اليوم',

            'fr_Description_One' => "نعتقد أن ارتداء الملابس يجب أن يكون أسهل جزء من يومك.",
            'fr_Description_Two' => "نعتقد أن ارتداء الملابس يجب أن يكون أسهل جزء من يومك.",
            'fr_Description_Three' => "نعتقد أن ارتداء الملابس يجب أن يكون أسهل جزء من يومك.",
            'fr_Description_Four' => "نعتقد أن ارتداء الملابس يجب أن يكون أسهل جزء من يومك.",
        ]);

        AboutUsPage::create([
            'Location' => 'features',
            'Icon_One' => 'features-icon-1.png',
            'Icon_Two' => 'features-icon-2.png',
            'Icon_Three' => 'features-icon-3.png',

            'en_Title' => 'Our Features',
            'en_Subtitle' => 'Why Choose Us',
            'en_Title_One' => 'Why Choose Us',
            'en_Title_Two' => "Men's Collection",
            'en_Title_Three' => "Innovative Solutions",


            'fr_Title_One' => 'لماذا أخترتنا',
            'fr_Title_Two' => 'مجموعة الرجال',
            'fr_Title_Three' => 'حلول مبتكرة',

            'en_Description_One' => 'We believe getting dressed should be the easiest part of your day.',
            'en_Description_Two' => 'We believe getting dressed should be the easiest part of your day.',
            'en_Description_Three' => 'We believe getting dressed should be the easiest part of your day.',

            'fr_Description_One' => "نعتقد أن ارتداء الملابس يجب أن يكون أسهل جزء من يومك.",
            'fr_Description_Two' => "نعتقد أن ارتداء الملابس يجب أن يكون أسهل جزء من يومك.",
            'fr_Description_Three' => "نعتقد أن ارتداء الملابس يجب أن يكون أسهل جزء من يومك.",

        ]);
    }
}
