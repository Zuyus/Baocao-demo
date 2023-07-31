@extends('front.layouts.master')
@section('title', isset($title) ? $title : 'Home')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')
@section('content')
    <!-- breadcrumb area start here  -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-wrap text-center">
                <h2 class="page-title">{{__('Checkout')}}</h2>
                <ul class="breadcrumb-pages">
                    <li class="page-item"><a class="page-item-link" href="{{route('front')}}">{{__('Home')}}</a></li>
                    <li class="page-item">{{__('Checkout')}}</li>
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
                            <form method="post" action="{{route('checkout.order')}}" id="paymentForm">
                                @csrf
                                <div class="payment-method">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h2 class="checkout-title">{{__('Stripe Payment')}}</h2>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <div class="form-check card-check">
                                                    <input class="form-check-input" type="radio" name="payment" id="creditcard" value="creditcard" />
                                                    <label class="form-check-label" for="creditcard"> {{__('Credit Card')}}</label>
                                                    <div class="input-icon">
                                                        <img src="{{asset('frontend/assets/images/payment-method.png')}}" alt="payment-method" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-infor-box">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <input type="hidden" name="payment_platform" value="2">
                                                        @includeIf('components.stripe-collapse')
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group form-check terms-agree">
                                                <input type="checkbox" class="form-check-input" id="agree" required/>
                                                <label class="form-check-label" for="agree">{{__('By clicking the button you agree to our')}} <a href="{{route('terms.conditions')}}">{{__('Terms & Conditions')}}</a></label>
                                            </div>
                                            <button type="submit" id="payButton" class="checkout-btn form-btn">{{__('Place Order')}}</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- checkout page area end here  -->
    @push('post_script')
        <script src="{{asset('frontend/assets/js/pages/checkout.js')}}"></script>
    @endpush
@endsection

