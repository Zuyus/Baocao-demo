<?php

namespace Database\Seeders;

use App\Models\Admin\Tag;
use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $en_tag_one=[
            'Cloths',
            'Interview'
        ];
        $en_tag_two=[
            'Bags',
            'New Collection'
        ];
        $en_tag_three=[
            'Product',
            'Hot Collection'
        ];
        $en_tag_four=[
            'Cloths',
            'Interview'
        ];
        $en_tag_five=[
            'Bags',
            'New Collection'
        ];
        $en_tag_six=[
            'Product',
            'Hot Collection'
        ];

        Tag::create([
           'blog_id'=>1,
           'Tag'=>$en_tag_one,
        ]);
        Tag::create([
            'blog_id'=>2,
            'Tag'=>$en_tag_two,
        ]);
        Tag::create([
            'blog_id'=>3,
            'Tag'=>$en_tag_three,
        ]);
        Tag::create([
            'blog_id'=>4,
            'Tag'=>$en_tag_four,
        ]);
        Tag::create([
            'blog_id'=>5,
            'Tag'=>$en_tag_five,
        ]);
        Tag::create([
            'blog_id'=>6,
            'Tag'=>$en_tag_six,
        ]);

    }
}
