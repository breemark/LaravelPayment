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
        // PayPal
        PaymentPlatform::create([
            'name' => 'PayPal',
            'image' => 'img/payment-platforms/paypal.jpg'
        ]);

        // Stripe
        PaymentPlatform::create([
            'name' => 'Stripe',
            'image' => 'img/payment-platforms/stripe.jpg'
        ]);
    }
}
