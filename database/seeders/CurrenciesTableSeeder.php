<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Seeder;

class CurrenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Currency::create(['currency' => 'USD', 'iso' => 'usd', 'symbol' => '$', 'convert_from_usd' => 1]);
        Currency::create(['currency' => 'EUR', 'iso' => 'eur',  'symbol' => '€', 'convert_from_usd' => 0.88]);
        Currency::create(['currency' => 'INR', 'iso' => 'inr', 'symbol' => '₹', 'convert_from_usd' => 74.39]);
        Currency::create(['currency' => 'BDT', 'iso' => 'bdt', 'symbol' => '৳', 'convert_from_usd' => 85.88]);
        Currency::create(['currency' => 'GBP', 'iso' => 'gbp', 'symbol' => '£', 'convert_from_usd' => 1.36]);
    }
}
