@extends('front.layouts.master')
@section('title', isset($title) ? $title : 'Home')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')
@section('content')
    <!-- breadcrumb area start here  -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-wrap text-center">
                <h2 class="page-title">{{ __('Track Order') }}</h2>
                <ul class="breadcrumb-pages">
                    <li class="page-item"><a class="page-item-link" href="{{ route('front') }}">{{ __('Home') }}</a></li>
                    <li class="page-item">{{ __('Track Order') }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here  -->

    <!-- Profile Page area start here  -->
    <div class="profile-page-area section">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="user-profile-right-part">
                        <div class="user-profile-content-box my-order-page-box track-my-order-page-box">

                            <div class="d-flex justify-content-between align-items-center text-black mb-5">
                                <h2 class="user-profile-content-title">{{ __('Track Order') }}</h2>
                            </div>

                            @if ($order->Order_Status == ORDER_PENDING || $order->Order_Status == ORDER_PROCESSING)
                                @include('front.layouts.include.tracking.processing')
                            @elseif($order->Order_Status == ORDER_SHIPPED)
                                @include('front.layouts.include.tracking.shipped')
                            @elseif($order->Order_Status == ORDER_DELIVERED)
                                @include('front.layouts.include.tracking.delivered')
                            @elseif($order->Order_Status == ORDER_CANCELLED)
                                @include('front.layouts.include.tracking.canceled')
                            @elseif($order->Order_Status == ORDER_RETURN)
                                @include('front.layouts.include.tracking.returned')
                            @elseif($order->Order_Status == ORDER_DELIVERED_FAILED)
                                @include('front.layouts.include.tracking.delivery_failed')
                            @endif

                            <div class="order-table mt-5">
                                <div class="table-responsive">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th>{{ __('Title') }}</th>
                                                <th>{{ __('Item') }}</th>
                                                <th>{{ __('Price') }}</th>
                                                <th>{{ __('Qty') }}</th>
                                                <th>{{ __('Subtotal') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($order->order_details as $od)
                                                <tr>
                                                    <td>
                                                        {{ langConverter($od->product->en_Product_Name, $od->product->fr_Product_Name) }}
                                                    </td>
                                                    <td>
                                                        <div class="item-image-lsit d-flex align-items-center">
                                                            <div class="single-item">
                                                                <img class="order-image"
                                                                    src="{{ asset(ProductImage() . $od->product->Primary_Image) }}"
                                                                    alt="images">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="amount">{{ currencyConverter($od->Price) }}</span>
                                                    </td>
                                                    <td>{{ $od->Quantity }}</td>
                                                    <td>{{ currencyConverter($od->Total_Price) }}</td>
                                                </tr>
                                            @endforeach
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>{{ __('Subtotal') }}</td>
                                                <td>{{ currencyConverter($order->Sub_Total) }}</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>{{ __('Tax') }}</td>
                                                <td>{{ currencyConverter($order->Tax) }}</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>{{ __('Delivery Charge') }}</td>
                                                <td>{{ currencyConverter($order->Delivery_Charge) }}</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>{{ __('Discount (-)') }}</td>
                                                <td>{{ currencyConverter($order->Coupon_Amount) }}</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>{{ __('Grand Total') }}</td>
                                                <td>{{ currencyConverter($order->Grand_Total) }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Profile Page area end here  -->
@endsection
