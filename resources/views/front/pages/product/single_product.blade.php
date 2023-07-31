@extends('front.layouts.master')
@section('title', isset($title) ? $title : 'Home')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')
@section('content')

    @if ((session('theme') && session('theme') == 'theme2') || $allsettings['theme'] == 'two')
        @include('front.pages.product.details.product_details_two')
    @else
        @include('front.pages.product.details.product_details_one')
    @endif

    <!-- Page Load Popup Modal End -->
    <div id="DoNotSubscribe" data-url="{{ route('do.not.subscribe') }}"></div>
    <div id="SubscribeStore" data-url="{{ route('admin.subscribe.store') }}"></div>
    <div id="AddToCompareItemUrl" data-url="{{ route('compare.add') }}"></div>
    <div id="AddToCartIntoSession" data-url="{{ route('add.to.cart') }}"></div>
    <div id="buyNow" data-url="{{ route('buy.now') }}"></div>
    <div id="buyNowCheckOut" data-url="{{ route('checkout') }}"></div>
    <div id="productWishlistUrl" data-url="{{ route('wishlist.add') }}"></div>
    @push('post_script')
        <script src="{{ asset('frontend/assets/js/pages/single_product.js') }}"></script>
    @endpush()
@endsection
