<?php

namespace Database\Seeders;

use App\Models\Admin\SiteContent\SocialLink;
use Illuminate\Database\Seeder;

class SocialLinkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            SocialLink::create([
                'Facebook'=>'www.facebook.com',
                'Skype'=>'www.skype.com',
                'Twitter'=>'www.twitter.com',
                'Linkedin'=>'www.linkedin.com',
                'Instagram'=>'www.instagram.com',
            ]);
    }
}
