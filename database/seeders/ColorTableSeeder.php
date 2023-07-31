<?php

namespace Database\Seeders;

use App\Models\Admin\Color;
use Illuminate\Database\Seeder;

class ColorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Color::create([
            'Name' => 'Red',
            'ColorCode' => '#FF0000',
        ]);

        Color::create([
            'Name' => 'Black',
            'ColorCode' => '#000000',
        ]);

        Color::create([
            'Name' => 'Gray',
            'ColorCode' => '#808080',
        ]);


        Color::create([
            'Name' => 'Silver',
            'ColorCode' => '#C0C0C0',
        ]);
    }
}
