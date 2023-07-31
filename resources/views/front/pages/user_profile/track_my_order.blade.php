@extends('front.layouts.master')
@section('title', isset($title) ? $title : 'Home')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')
@section('content')
    <!-- breadcrumb area start here  -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-wrap text-center">
                <h2 class="page-title">{{ __('Track My Order') }}</h2>
                <ul class="breadcrumb-pages">
                    <li class="page-item"><a class="page-item-link" href="{{ route('front') }}">{{ __('Home') }}</a></li>
                    <li class="page-item">{{ __('Track My Order') }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here  -->

    <!-- Profile Page area start here  -->
    <div class="profile-page-area section">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    @include('front.layouts.include.user_profile_sidebar', ['menu' => 'order'])
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="user-profile-right-part">
                        <div class="user-profile-content-box my-order-page-box track-my-order-page-box">

                            <div class="d-flex justify-content-between align-items-center text-black mb-5">
                                <h2 class="user-profile-content-title">{{ __('Track My Order') }}</h2>
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
                                                @if ($order->Order_Status == ORDER_DELIVERED)
                                                    <th>{{ __('Review') }}</th>
                                                @endif
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
                                                    @if ($order->Order_Status == ORDER_DELIVERED)
                                                        @if (hasPerviousReview($od->Product_Id) == 1)
                                                            <td><button class="primary-btn-v2 write-review-btn" disabled>
                                                                    {{ __('Reviewed') }}</button></td>
                                                        @else
                                                            <td><button class="primary-btn write-review-btn"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#writeReviewModal{{ $od->id }}">
                                                                    {{ __('Review') }}</button></td>
                                                        @endif
                                                    @endif
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
                                                @if ($order->Order_Status == ORDER_DELIVERED)
                                                    <td></td>
                                                @endif
                                                <td></td>
                                                <td>{{ __('Subtotal') }}</td>
                                                <td>{{ currencyConverter($order->Sub_Total) }}</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                @if ($order->Order_Status == ORDER_DELIVERED)
                                                    <td></td>
                                                @endif
                                                <td></td>
                                                <td>{{ __('Tax') }}</td>
                                                <td>{{ currencyConverter($order->Tax) }}</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                @if ($order->Order_Status == ORDER_DELIVERED)
                                                    <td></td>
                                                @endif
                                                <td></td>
                                                <td>{{ __('Delivery Charge') }}</td>
                                                <td>{{ currencyConverter($order->Delivery_Charge) }}</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                @if ($order->Order_Status == ORDER_DELIVERED)
                                                    <td></td>
                                                @endif
                                                <td></td>
                                                <td>{{ __('Discount (-)') }}</td>
                                                <td>{{ currencyConverter($order->Coupon_Amount) }}</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                @if ($order->Order_Status == ORDER_DELIVERED)
                                                    <td></td>
                                                @endif
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

    <!-- Write Review Modal Start -->
    @if ($order->Order_Status == ORDER_DELIVERED)
        @foreach ($order->order_details as $domd)
            <div class="modal fade writeReviewModal" id="writeReviewModal{{ $domd->id }}" tabindex="-1"
                aria-labelledby="writeReviewModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content p-5">
                        <div class="modal-header">
                            <h2 class="modal-title fw-bold text-black" id="writeReviewModalLabel">
                                {{ __('Write Your Feedback') }}</h2>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="feedback" method="POST" action="{{ route('user.profile.review_store') }}">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $domd->Product_Id }}">
                                <div class="mb-3  w-100">
                                    <label for="exampleFormControlTextarea1"
                                        class="form-label">{{ __('Rating') }}</label><br>
                                    <select class="form-select form-control" aria-label="Default select example"
                                        name="rating">
                                        <option selected>{{ __('Select') }}</option>
                                        <option value="5">{{ __('Best (5 Star)') }}</option>
                                        <option value="4">{{ __('Better (4 Star)') }}</option>
                                        <option value="3">{{ __('Good (3 Star)') }}</option>
                                        <option value="2">{{ __('Bad (2 Star)') }}</option>
                                        <option value="1">{{ __('Worst (1 Star)') }}</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1"
                                        class="form-label">{{ __('Write Your Feedback') }}</label>
                                    <textarea id="exampleFormControlTextarea1" rows="3" name="feedback"></textarea>
                                </div>

                                <button type="submit" class="primary-btn">{{ __('Submit') }}</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
    <!-- Write Review Modal End -->
@endsection
