@extends('front.layouts.master')
@section('title', isset($title) ? $title : 'Home')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')
@section('content')
    <!-- breadcrumb area start here  -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-wrap text-center">
                <h2 class="page-title">{{ __('Checkout') }}</h2>
                <ul class="breadcrumb-pages">
                    <li class="page-item"><a class="page-item-link" href="{{ route('front') }}">{{ __('Home') }}</a>
                    </li>
                    <li class="page-item">{{ __('Checkout') }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here  -->

    <!-- checkout page area start here  -->
    <section class="page-content section">
        <div class="checkout">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="checkout-form">
                            <form method="post" {{-- action="{{ auth()->check() ? route('checkout.order') : route('guest.checkout.order') }}" --}} action="{{ route('checkout.order') }}"
                                id="paymentForm">
                                @csrf
                                <div class="row">
                                    @if (!auth()->check())
                                        <div class="col-lg-12 mb-3">
                                            <div
                                                class="checkout-page-login-box d-flex justify-content-between align-items-center mb-30">
                                                <h2 class="mb-0 text-capitalize fw-bold">Returning buyer? Please login:</h2>
                                                <button type="button" class="primary-btn" data-bs-toggle="modal"
                                                    data-bs-target="#loginModal">Login</button>
                                            </div>
                                        </div>
                                    @endif

                                    <div class="col-lg-12">
                                        <h2 class="checkout-title">{{ __('Billing Address') }}</h2>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="billing_name" name="billing_name"
                                                placeholder="{{ __('You Name Here') }}"
                                                value="{{ isset($billing) ? $billing->Name ?? $billing->name : '' }}"
                                                required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="billing_email"
                                                name="billing_email" placeholder="{{ __('Email Address') }}"
                                                value="{{ isset($billing) ? $billing->Email ?? $billing->email : '' }}"
                                                required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="billing_street_address"
                                                name="billing_street_address" placeholder="{{ __('Street Address') }}"
                                                value="{{ isset($billing) ? $billing->Street : '' }}" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="billing_state"
                                                name="billing_state" placeholder="{{ __('State') }}"
                                                value="{{ isset($billing) ? $billing->State : '' }}" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="billing_zipcode"
                                                name="billing_zipcode" placeholder="{{ __('Zip/Postal Code') }}"
                                                value="{{ isset($billing) ? $billing->Zipcode : '' }}" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <select class="form-select" id="billing_country" name="billing_country" required>
                                            <option>{{ __('Country') }}</option>
                                            @foreach (country() as $cnt)
                                                <option value="{{ $cnt }}"
                                                    {{ isset($billing) && $billing->Country == $cnt ? 'selected' : '' }}>
                                                    {{ $cnt }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="pt-5"></div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2 class="checkout-title">{{ __('Shipping Address') }}</h2>
                                    </div>
                                    <div class="form-group form-check terms-agree">
                                        <input type="checkbox" class="form-check-input " id="copy_address" />
                                        <label class="form-check-label"
                                            for="copy_address">{{ __('Same as billing address') }}</label>
                                    </div>
                                    <div class="pt-2"></div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="shipping_name"
                                                name="shipping_name" placeholder="{{ __('You Name Here') }}"
                                                value="" />
                                            @error('shipping_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="shipping_email"
                                                name="shipping_email" placeholder="{{ __('Email Address') }}"
                                                value="" />
                                            @error('shipping_email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="shipping_street_address"
                                                name="shipping_street_address" placeholder="{{ __('Street Address') }}"
                                                value="" />
                                            @error('shipping_street_address')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="shipping_state"
                                                name="shipping_state" placeholder="{{ __('State') }}"
                                                value="" />
                                            @error('shipping_state')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="shipping_zipcode"
                                                name="shipping_zipcode" placeholder="{{ __('Zip/Postal Code') }}"
                                                value="" />
                                            @error('shipping_zipcode')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <select class="form-select" id="shipping_country" name="shipping_country">
                                            <option>{{ __('Country') }}</option>
                                            @foreach (country() as $cnt)
                                                <option value="{{ $cnt }}">
                                                    {{ $cnt }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('shipping_country')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="payment-method">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h2 class="checkout-title">{{ __('Payment Method') }}</h2>
                                        </div>
                                        <div class="col-lg-12">
                                            @foreach ($paymentPlatforms as $payment)
                                                @if (session()->get('razorpay-tansaction') == true)
                                                    <div class="form-group">
                                                        <div class="form-check card-check">
                                                            <input class="form-check-input buy_now" type="radio"
                                                                name="payment" id="razorpay" value="razorpay" checked />
                                                            <label class="form-check-label"
                                                                for="razorpay">{{ $payment->name }}</label>
                                                            <div class="input-icon">
                                                                <img src="{{ asset(IMG_PAYMENT_GATEWAY . $payment->image) }}"
                                                                    alt="razorpay" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                @else
                                                    @if ($payment->slug == 'stripe')
                                                        <div class="form-group">
                                                            <div class="form-check card-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="payment" id="creditcard" value="creditcard" />
                                                                <label class="form-check-label" for="creditcard">
                                                                    {{ $payment->name }}</label>
                                                                <div class="input-icon">
                                                                    <img src="{{ asset(IMG_PAYMENT_GATEWAY . $payment->image) }}"
                                                                        alt="payment-method" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="payment_platform"
                                                            id="payment_platform">
                                                        <div class="card-infor-box mb-3 d-none" id="stripe-area">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <label class="mt-3" for="card-element">
                                                                        {{ __('Card details:') }}
                                                                    </label>

                                                                    <div id="cardElement"></div>

                                                                    <small class="form-text text-muted" id="cardErrors"
                                                                        role="alert"></small>

                                                                    <input type="hidden" name="payment_method"
                                                                        id="paymentMethod">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                    @if ($payment->slug == 'sslcommerz')
                                                        <div class="form-group">
                                                            <div class="form-check card-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="payment" id="sslcommerz" value="sslcommerz" />
                                                                <label class="form-check-label"
                                                                    for="sslcommerz">{{ $payment->name }}</label>
                                                                <div class="input-icon">
                                                                    <img src="{{ asset(IMG_PAYMENT_GATEWAY . $payment->image) }}"
                                                                        alt="sslcommerz" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                    @if ($payment->slug == 'paypal')
                                                        <div class="form-group">
                                                            <div class="form-check card-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="payment" id="paypal" value="paypal" />
                                                                <label class="form-check-label"
                                                                    for="paypal">{{ $payment->name }}</label>
                                                                <div class="input-icon">
                                                                    <img src="{{ asset(IMG_PAYMENT_GATEWAY . $payment->image) }}"
                                                                        alt="paypal" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                    @if ($payment->slug == 'razorpay')
                                                        <div class="form-group">
                                                            <div class="form-check card-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="payment" id="razorpay" value="razorpay" />
                                                                <label class="form-check-label"
                                                                    for="razorpay">{{ $payment->name }}</label>
                                                                <div class="input-icon">
                                                                    <img src="{{ asset(IMG_PAYMENT_GATEWAY . $payment->image) }}"
                                                                        alt="razorpay" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="pay_to_razorpay" id="pay-to-razorpay"
                                                            value="{{ round(convertToINR(\Cart::subtotal() + allsetting()['shipping_charge'] + tax_amount(\Cart::subtotal()) - Session::get('CouponAmount'))) }}">
                                                        <input type="hidden" name="razorpay_key" id="razorpay-key"
                                                            value="{{ env('RAZORPAY_KEY') }}">
                                                        <input type="hidden" name="razorpay_payment_id"
                                                            id="razorpay-payment-id">
                                                    @endif
                                                    @if ($payment->slug == 'bank')
                                                        <div class="form-group">
                                                            <div class="form-check card-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="payment" id="bank" value="bank" />
                                                                <label class="form-check-label" for="bank">
                                                                    {{ $payment->name }}</label>
                                                                <div class="input-icon">
                                                                    <img src="{{ asset(IMG_PAYMENT_GATEWAY . $payment->image) }}"
                                                                        alt="payment-method" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-infor-box mb-3 d-none" id="bank-area">
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <label class="mt-3" for="bank-trans-num">
                                                                            {{ __('Transaction Number:') }}
                                                                        </label>
                                                                        <input type="text"
                                                                            name="bank_transaction_number"
                                                                            id="bank-trans-num" class="form-control"
                                                                            placeholder="{{ __('Enter Your Transaction Number') }}" />
                                                                    </div>
                                                                    <div class="col-lg-12">
                                                                        <div class="mt-3">
                                                                            <b>{{ __('Bank Account Details:') }}</b> <br>
                                                                            {{ __('Bank Name:') }}
                                                                            {{ env('BANK_NAME') }}
                                                                            <br>
                                                                            {{ __('Account Number:') }}
                                                                            {{ env('BANK_ACCOUNT_NUMBER') }} <br>
                                                                            {{ __('Account Holder:') }}
                                                                            {{ env('BANK_ACCOUNT_HOLDER_NAME') }} <br>
                                                                            {{ __('Branch:') }}
                                                                            {{ env('BANK_ACCOUNT_BRANCH') }} <br>
                                                                            {{ __('Swift Code:') }}
                                                                            {{ env('BANK_SWIFT_CODE') }} <br>
                                                                            {{ __('Routing Number:') }}
                                                                            {{ env('BANK_ROUTING_NUMBER') }} <br>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endif
                                            @endforeach

                                            @if (env('COD_STATUS') == '1')
                                                <div class="form-group">
                                                    <div class="form-check card-check">
                                                        <input class="form-check-input" type="radio" name="payment"
                                                            id="COD" value="COD" />
                                                        <label class="form-check-label"
                                                            for="COD">{{ env('COD_NAME') }}</label>
                                                        <div class="input-icon">
                                                            <img src="{{ asset(IMG_PAYMENT_GATEWAY . env('COD_IMAGE')) }}"
                                                                alt="{{ env('COD_NAME') }}" />
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif

                                            <div class="form-group form-check terms-agree">
                                                <input type="checkbox" class="form-check-input" id="agree"
                                                    required />
                                                <label class="form-check-label"
                                                    for="agree">{{ __('By clicking the button you agree to our') }}
                                                    <a
                                                        href="{{ route('terms.conditions') }}">{{ __('Terms & Conditions') }}</a></label>
                                            </div>
                                            @if (auth()->check())
                                                <button type="submit" id="payButton"
                                                    class="checkout-btn form-btn">{{ __('Place Order') }}</button>
                                                <button type="button" id="payButtonN"
                                                    class="checkout-btn form-btn d-none buy_now">{{ __('Place Order') }}</button>
                                            @else
                                                <button type="button" class="checkout-btn" data-bs-toggle="modal"
                                                    data-bs-target="#loginModal">{{ __('Place Order') }}</button>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade common-modal" id="show-razor-thanks" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">
                                                    {{ __('Razorpay Confirmation') }}</h5>
                                            </div>
                                            <div class="modal-body">
                                                {{ __('Your payment is authorized. For capturing your order click') }}
                                                <b>{{ __('Place Order') }}</b>
                                                <div class="modal-btn-wrap text-end">
                                                    <button type="submit"
                                                        class="primary-btn">{{ __('Place Order') }}</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="cart-summary">
                            <div class="summary-top d-flex">
                                <h2>{{ __('Cart Summary') }}</h2>
                                <a class="edite-btn" href="{{ route('cart.content') }}">{{ __('Edit') }}</a>
                            </div>
                            <ul class="cart-product-list">
                                @php
                                    $total = 0;
                                @endphp
                                @foreach ($content as $item)
                                    <li class="single-cart-product d-flex justify-content-between">
                                        <div class="product-info">
                                            <h3>{{ $item->qty }} {{ $item->name }}</h3>
                                            <p>{{ __('Size:') }}
                                                {{ is_null($item->options->size) ? __('Free Size') : $item->options->size }}
                                            </p>
                                            <p class="checkout-page-color-show">{{ __('Color:') }} @if (is_null($item->options->color))
                                                    {{ __('Any Color') }}
                                                @else
                                                    <span style="background:{{ $item->options->color }};"></span>
                                                @endif
                                            </p>
                                        </div>
                                        <div class="price-area">
                                            <h3 class="price">
                                                {{ currencyConverter($item->price * $item->qty) }}
                                            </h3>
                                        </div>
                                    </li>
                                @endforeach

                            </ul>
                            <!-- Cart page bottom box -->
                            <div class="col-lg-12 col-md-12">
                                <div class="checkout-discount-box">
                                    <h2 class="mb-3">{{ __('Discount Codes') }}</h2>
                                    <form action="{{ route('apply.coupon') }}" method="post">
                                        @csrf
                                        <div class="input-group mb-2">
                                            <input type="text" class="form-control" name="coupon_code"
                                                placeholder="{{ __('Enter your coupon code') }}" required />
                                            <button type="submit"
                                                class="border-0 px-4">{{ __('Apply Coupon') }}</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <ul class="summary-list">
                                <li>{{ __('Subtotal') }}
                                    <span>{{ currencyConverter(\Cart::subtotal()) }}</span>
                                </li>
                                <li>{{ __('Shipping Cost') }} <span id="delivery-charge-curr"></span></li>
                                <li>{{ __('VAT/Tax ') }} <span
                                        id="tax-show-curr">{{ currencyConverter(tax_amount(\Cart::subtotal())) }}</span>
                                </li>

                                @if (!empty(Session::get('CouponAmount')))
                                    <li>{{ __('Coupon Discount (-)') }}
                                        <span>{{ currencyConverter(Session::get('CouponAmount')) }}</span>
                                    </li>
                                @endif
                            </ul>
                            <div class="total-amount">
                                <h3>
                                    {{ __('Total Cost') }}
                                    <span class="float-right" id="total-cost-curr">
                                        {{ currencyConverter(\Cart::subtotal() + allsetting()['shipping_charge'] + tax_amount(\Cart::subtotal()) - Session::get('CouponAmount')) }}
                                    </span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="stripe-collapse" data-stripe="{{ route('stripe_collapse') }}"></div>
    <div id="stripe-key" data-key="{{ config('services.stripe.key') }}"></div>
    <div id="user-name" data-key="{{ auth()->check() ? auth()->user()->name : 'Guest User' }}"></div>
    <div id="user-email" data-key="{{ auth()->check() ? auth()->user()->email : 'guest@gmail.com' }}"></div>
    <div id="get-tax-amount" data-url="{{ route('checkout.get_tax_amount') }}"></div>
    <!-- checkout page area end here  -->
    @push('post_script')
        <script src="https://js.stripe.com/v3/"></script>
        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
        <script src="{{ asset('frontend/assets/js/pages/checkout.js') }}"></script>
    @endpush
@endsection
