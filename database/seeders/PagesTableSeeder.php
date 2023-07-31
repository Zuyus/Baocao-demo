<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::create([
            'en_title' => 'Overview',
            'en_description' => '<p><span style="color: rgb(119, 119, 119); font-family: Jost, sans-serif;">Quisque velit nisi, pretium ut lacinia in, elementum id enim. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec rutrum congue leo eget malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Sed porttitor lectus nibh. sem. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Donec sollicitudin molestie malesuada.</span><br></p>',
            'fr_title' => 'ملخص',
            'fr_description' => '<p><font color="#777777" face="Jost, sans-serif">الجميع يريد أن يدخر ، مع استمرار السعر ، هذا هو العنصر. موريس بلانديت أليكت إيليت ، إيجيت تينكيدونت نيبه بولفينار أ.&nbsp; القول المأثور بورتا. الجميع يريد أن يدخر ، مع استمرار السعر ، هذا هو العنصر. حتى يحتاج الأسد إلى التوحيد. لا يوجد وقت للوادي ليكون محبوبًا من قبل اللاعبين الذين سيتم اختيارهم. الجميع يريد أن يدخر ، مع استمرار السعر ، هذا هو العنصر. لكن العبارة اختارت الكرة. القول المأثور بورتا. في اللعبة ، هذا هو متوسط ​​بوابة الوجبة. الدهليوم . دونيك&nbsp;</font><br></p>',
            'slug' => 'overview',
            'meta_description' => 'Overview of the app',
            'meta_keywords' => 'overview',
        ]);
    }
}
