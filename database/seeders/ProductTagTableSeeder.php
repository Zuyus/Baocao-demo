<?php

namespace Database\Seeders;

use App\Models\Admin\ProductTag;
use Illuminate\Database\Seeder;

class ProductTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductTag::create([
            'product_id' => 6,
            'tag' => 'HOT - COLLECTION',
        ]);

        ProductTag::create([
            'product_id' => 4,
            'tag' => 'ELLA - HALOTHEMES',
        ]);

        ProductTag::create([
            'product_id' => 3,
            'tag' => 'ELLA - HALOTHEMES',
        ]);

        ProductTag::create([
            'product_id' => 2,
            'tag' => 'ELLA - HALOTHEMES',
        ]);

        ProductTag::create([
            'product_id' => 1,
            'tag' => 'ELLA - HALOTHEMES',
        ]);

        ProductTag::create([
            'product_id' => 7,
            'tag' => 'ELLA - HALOTHEMES',
        ]);

        ProductTag::create([
            'product_id' => 10,
            'tag' => 'HOT - COLLECTION',
        ]);

        ProductTag::create([
            'product_id' => 11,
            'tag' => 'ELLA - HALOTHEMES',
        ]);

        ProductTag::create([
            'product_id' => 5,
            'tag' => 'HOT - COLLECTION',
        ]);

        ProductTag::create([
            'product_id' => 8,
            'tag' => 'ELLA - HALOTHEMES',
        ]);

        ProductTag::create([
            'product_id' => 9,
            'tag' => 'HOT - COLLECTION',
        ]);
    }
}
