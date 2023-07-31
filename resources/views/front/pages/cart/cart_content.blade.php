@extends('front.layouts.master')
@section('title', isset($title) ? $title : 'Home')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')
@section('content')
    <!-- breadcrumb area start here  -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-wrap text-center">
                <h2 class="page-title">{{ __('Cart') }}</h2>
                <ul class="breadcrumb-pages">
                    <li class="page-item"><a class="page-item-link" href="{{ route('front') }}">{{ __('Home') }}</a>
                    </li>
                    <li class="page-item">{{ __('Shopping Cart') }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here  -->

    <!-- wish-list area start here  -->
    <div class="wish-list-area cart-page-area section">
        <div class="container">

            <div class="row">
                <div class="col-12 wish-list-table">

                    <div class="table-responsive">
                        <div id="cardItem">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">{{ __('Product Name') }}</th>
                                        <th scope="col">{{ __('Price') }}</th>
                                        <th scope="col">{{ __('Quantity') }}</th>
                                        <th scope="col">{{ __('Total') }}</th>
                                        <th scope="col">{{ __('Remove') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <div id="cart_ajax_load">
                                        @php
                                            $total = 0;
                                        @endphp
                                        @foreach ($content as $item)
                                            <tr class="cart-page-item">
                                                <td>
                                                    <div class="single-grid-product m-0">
                                                        <div class="product-top">
                                                            <a href="{{ route('single.product', $item->options->slug ?? '') }}"><img
                                                                    class="product-thumbnal"
                                                                    src="{{ asset(ProductImage() . $item->options->image) }}"
                                                                    alt="cart"></a>
                                                            <div class="product-flags">
                                                                <span
                                                                    class="product-flag sale">{{ $item->options->item_tag }}</span>
                                                                <span
                                                                    class="product-flag discount">-{{ $item->options->discount_parcent }}%</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-info text-center">
                                                            <h3 class="product-name">
                                                                <a class="product-link"
                                                                    href="{{ route('single.product', $item->options->slug ?? '') }}">{{ $item->name }}</a>
                                                            </h3>
                                                            @if ($item->options->color)
                                                                <div class="variable-single-item color-switch">
                                                                    <div class="product-variable-color">
                                                                        <label>
                                                                            <input name="modal-product-color"
                                                                                class="color-select" type="radio">
                                                                            <span
                                                                                style="background:{{ $item->options->color }};"></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                            @if ($item->options->size)
                                                                <ul class="size-switch">
                                                                    <li class="single-size active">
                                                                        {{ $item->options->size }}</li>
                                                                </ul>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-price text-center">
                                                        <h4 class="regular-price">
                                                            {{ currencyConverter($item->weight) }}
                                                        </h4>
                                                        <h3 class="price ">
                                                            <span
                                                                class="mainPrice">{{ currencyConverter($item->price) }}</span>
                                                        </h3>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="cart-quantity input-group">
                                                        <div class="increase-btn dec qtybutton btn qty_decrease"
                                                            data-id="{{ $item->rowId }}">-</div>
                                                        <input class="qty-input cart-plus-minus-box qty_value"
                                                            type="text" name="qtybutton" id="qty_value"
                                                            value="{{ $item->qty }}" readonly />
                                                        <div class="increase-btn inc qtybutton btn qty_increase"
                                                            data-id="{{ $item->rowId }}">+</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h1 class="cart-table-item-total SubTotalAmount">
                                                        {{ currencyConverter($item->subtotal) }}
                                                    </h1>
                                                </td>
                                                <td>
                                                    <button class="delet-btn deleteItemCart"
                                                        title="{{ __('Delete Item') }}" data-id="{{ $item->rowId }}">
                                                        <img src="{{ asset('frontend/assets/images/close.svg') }}"
                                                            alt="close" />
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </div>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cart Page Bottom box area Start -->
            <div class="row cart-page-bottom-box-wrap">

                <!-- Cart page bottom box -->
                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                    <div class="cart-page-bottom-box">
                        <h2 class="bottom-box-title">{{ __('Discount Codes') }}</h2>

                        <form action="{{ route('apply.coupon') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" name="coupon_code"
                                    placeholder="{{ __('Enter your coupon code') }}" />
                            </div>
                            <div class="form-button text-center">
                                <button type="submit" class="form-btn">{{ __('Apply Coupon') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Cart page bottom box -->
                <!-- Cart page bottom box -->

                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                    <div class="cart-page-bottom-box cart-page-sub-total-box">

                        <div class="sub-total-inner-box d-flex justify-content-between align-items-center">
                            <h2 class="bottom-box-title m-0">{{ __('Subtotal:') }}</h2>
                            <h2 class="bottom-box-title totalAmount m-0">
                                {{ currencyConverter(subtotal()) }}</h2>
                        </div>

                        @if (session()->has('CouponAmount'))
                            <div class="sub-total-inner-box d-flex justify-content-between align-items-center">
                                <div class="cart-inner-shipping-title">
                                    <span>{{ __('Coupon Discount') }}</span>
                                </div>
                                <h2 class="bottom-box-title m-0">
                                    {{ currencyConverter(Session::get('CouponAmount')) }}
                                </h2>
                            </div>
                        @endif

                        <div class="sub-total-inner-box d-flex justify-content-between align-items-center">
                            <h2 class="bottom-box-title m-0">{{ __('Total') }}</h2>
                            @php
                                $all_total = subtotal() - Session::get('CouponAmount');
                            @endphp
                            <h2 class="bottom-box-title cart-page-final-total totalAmount m-0">
                                {{ currencyConverter($all_total) }}</h2>
                        </div>

                        <div class="form-button text-center">
                            <a href="{{ route('checkout') }}"
                                class="form-btn proceed-to-checkout-btn">{{ __('Proceed To Checkout') }}</a>
                        </div>
                    </div>
                </div>
                <!-- Cart page bottom box -->
            </div>
            <!-- Cart Page Bottom box area End -->
        </div>
    </div>
    <!-- wish-list area end here  -->
    <div id="CartDeleteFromSession" data-url="{{ route('cart.delete') }}"></div>
    <div id="CartIncrementFromSession" data-url="{{ route('cart.increase') }}"></div>
    <div id="CartDecrementFromSession" data-url="{{ route('cart.decrease') }}"></div>
    @push('post_script')
        <script src="{{ asset('frontend/assets/js/pages/cart.js') }}"></script>
    @endpush
@endsection
