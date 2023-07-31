<?php

namespace Database\Seeders;

use App\Models\PaymentPlatform;
use Illuminate\Database\Seeder;

class PaymentPlatformsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentPlatform::create([
            'name' => 'PayPal',
            'slug' => 'paypal',
            'image' => 'paypal.png'
        ]);

        PaymentPlatform::create([
            'name' => 'Stripe',
            'slug' => 'stripe',
            'image' => 'payment-method.png'
        ]);

        PaymentPlatform::create([
            'name' => 'Razorpay',
            'slug' => 'razorpay',
            'image' => 'razorpay.png'
        ]);

        PaymentPlatform::create([
            'name' => 'Bank',
            'slug' => 'bank',
            'image' => 'bank.png'
        ]);
        
        PaymentPlatform::create([
            'name' => 'Sslcommerz',
            'slug' => 'sslcommerz',
            'image' => 'sslcommerz.png'
        ]);
    }
}
