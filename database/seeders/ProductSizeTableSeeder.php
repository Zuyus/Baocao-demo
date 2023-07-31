<?php

namespace Database\Seeders;

use App\Models\Admin\ProductSize;
use Illuminate\Database\Seeder;

class ProductSizeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductSize::create([
            'Size_Id'=>1,
            'Product_Id'=>1
        ]);
        ProductSize::create([
            'Size_Id'=>2,
            'Product_Id'=>1
        ]);

        ProductSize::create([
            'Size_Id'=>3,
            'Product_Id'=>2
        ]);
        ProductSize::create([
            'Size_Id'=>4,
            'Product_Id'=>2
        ]);

        ProductSize::create([
            'Size_Id'=>1,
            'Product_Id'=>3
        ]);
        ProductSize::create([
            'Size_Id'=>3,
            'Product_Id'=>3
        ]);

        ProductSize::create([
            'Size_Id'=>1,
            'Product_Id'=>4
        ]);
        ProductSize::create([
            'Size_Id'=>4,
            'Product_Id'=>4
        ]);
    }
}
