<?php

namespace Database\Seeders;

use App\Models\ItemTag;
use Illuminate\Database\Seeder;

class ItemTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ItemTag::create([
            'name' => 'NEW'
        ]);
        ItemTag::create([
            'name' => 'HOT'
        ]);
    }
}
