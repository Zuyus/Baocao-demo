<?php

namespace Database\Seeders;

use App\Models\ProductTagList;
use Illuminate\Database\Seeder;

class ProductTagListsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            'ELLA - HALOTHEMES',
            'HOT - COLLECTION',
            'NEW - COLLECTION',
            'ELLA - CALTOUS'
        ];

        foreach($tags as $tag) {
            ProductTagList::create([
                'name' => $tag,
            ]);
        }
    }
}
