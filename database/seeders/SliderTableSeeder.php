<?php

namespace Database\Seeders;

use App\Models\Admin\Slider;
use Illuminate\Database\Seeder;

class SliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slider::create([
            'Background_Image'=>'hero-banner-bg.png',
            'Thumbnail'=>'hero-banner-image-1.png',
            'en_Title'=>'The New autmn',
            'en_Sub_Title'=>'New Collection',
            'en_Description'=>'Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus magna justo, lacinia eget consectetur sed',
            'en_Button_Text'=>'See Colections',

            'fr_Title'=>'الخريف الجديد',
            'fr_Sub_Title'=>'مجموعة نوفيل',
            'fr_Description'=>'كتلة الحاضر حكيمة وليست من وادي القناص ، لكنها ليست من العوز. نحن نعيش بسحر عظيم ، لكن',
            'fr_Button_Text'=>'انظر المجموعات',
        ]);
        Slider::create([
            'Background_Image'=>'hero-banner-bg-2.png',
            'Thumbnail'=>'hero-banner-image-2.png',
            'en_Title'=>'The Summer!!',
            'en_Sub_Title'=>'Summer Sale',
            'en_Description'=>'Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus magna justo, lacinia eget consectetur sed',
            'en_Button_Text'=>'See Colections',

            'fr_Title'=>'الصيف!!',
            'fr_Sub_Title'=>'تخفيضات الصيف',
            'fr_Description'=>'كتلة الحاضر حكيمة وليست من وادي القناص ، لكنها ليست من العوز. نحن نعيش بسحر عظيم ، لكن',
            'fr_Button_Text'=>'انظر المجموعات',
        ]);
        Slider::create([
            'Background_Image'=>'hero-banner-bg-3.png',
            'Thumbnail'=>'hero-banner-image-3.png',
            'en_Title'=>'The Winter!!',
            'en_Sub_Title'=>'New Collection',
            'en_Description'=>'Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus magna justo, lacinia eget consectetur sed',
            'en_Button_Text'=>'See Colections',

            'fr_Title'=>'ليفيفر',
            'fr_Sub_Title'=>'مجموعة نوفيل',
            'fr_Description'=>'كتلة الحاضر حكيمة وليست من وادي القناص ، لكنها ليست من العوز. نحن نعيش بسحر عظيم ، لكن',
            'fr_Button_Text'=>'انظر المجموعات',
        ]);
    }
}
