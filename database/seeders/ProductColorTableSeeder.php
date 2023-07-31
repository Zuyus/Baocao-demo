<?php

namespace Database\Seeders;

use App\Models\Admin\ProductColor;
use Illuminate\Database\Seeder;

class ProductColorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductColor::create([
            'Color_Id'=>1,
            'Product_Id'=>1
        ]);
        ProductColor::create([
            'Color_Id'=>2,
            'Product_Id'=>1
        ]);
        ProductColor::create([
            'Color_Id'=>3,
            'Product_Id'=>2
        ]);
        ProductColor::create([
            'Color_Id'=>3,
            'Product_Id'=>2
        ]);
        ProductColor::create([
            'Color_Id'=>3,
            'Product_Id'=>3
        ]);
        ProductColor::create([
            'Color_Id'=>4,
            'Product_Id'=>3
        ]);
        ProductColor::create([
            'Color_Id'=>3,
            'Product_Id'=>4
        ]);
        ProductColor::create([
            'Color_Id'=>4,
            'Product_Id'=>4
        ]);
    }
}
