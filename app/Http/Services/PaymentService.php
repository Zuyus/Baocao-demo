<?php

namespace App\Http\Services;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use App\Services\PaypalService;
use Illuminate\Support\Facades\Auth;
use App\Resolvers\PaymentPlatformResolver;
use App\Traits\TransactionTrait;

class PaymentService
{
    use TransactionTrait;
    protected $paymentPlatformResolver;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(PaymentPlatformResolver $paymentPlatformResolver)
    {
//        $this->middleware('auth')->except('cancelled');

        $this->paymentPlatformResolver = $paymentPlatformResolver;


    }

    public function pay($value, $currency, $payment_platform, $payment_method = null)
    {

        $paymentPlatform = $this->paymentPlatformResolver
            ->resolveService($payment_platform);
        session()->put('paymentPlatformId', $payment_platform);


        if(!is_null($payment_method)) {
            return $paymentPlatform->handlePayment($value, $currency, $payment_method);
        }
        return $paymentPlatform->handlePayment($value, $currency);

    }
}
