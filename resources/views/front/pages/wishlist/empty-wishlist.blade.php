@extends('front.layouts.master')
@section('title', isset($title) ? $title : 'Home')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')
@section('content')
    <!-- breadcrumb area start here  -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-wrap text-center">
                <h2 class="page-title">{{__('Wish List')}}</h2>
                <ul class="breadcrumb-pages">
                    <li class="page-item"><a class="page-item-link" href="{{route('front')}}">{{__('Home')}}</a></li>
                    <li class="page-item">{{__('Wish List')}}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here  -->

    <!-- empty-wish-list area start here  -->
    <div class="empty-wish-list section">
        <div class="container">
            <div class="empty-box-wrap text-center">
                <img class="empty-box-img" src="{{ asset('frontend/assets/images/empty-box.png')}}" alt="empty-box" />
                <h2 class="empty-box-title">{{__('Your Wish List Is Empty')}}</h2>
                <p class="empty-box-content">{{__('Wishlist is empty. Please go to your home page for listing it.')}} </p>
                <a href="{{route('front')}}" class="primary-btn">{{__('Go To Home')}}</a>
            </div>
        </div>
    </div>
    <!-- empty-wish-list area end here  -->
@endsection
