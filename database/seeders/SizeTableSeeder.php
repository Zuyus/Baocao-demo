<?php

namespace Database\Seeders;

use App\Models\Admin\Size;
use Illuminate\Database\Seeder;

class SizeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Size::create([
            'Size'=>'S'
        ]);
        Size::create([
            'Size'=>'M'
        ]);
        Size::create([
            'Size'=>'L'
        ]);
        Size::create([
            'Size'=>'XL'
        ]);
        Size::create([
            'Size'=>'XXL'
        ]);
    }
}
