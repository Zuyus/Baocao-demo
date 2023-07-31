@extends('front.layouts.master')
@section('title', isset($title) ? $title : 'Home')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')
@section('content')
    <!-- breadcrumb area start here  -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-wrap text-center">
                <h2 class="page-title">{{ __('Reset Password')}}</h2>
                <ul class="breadcrumb-pages">
                    <li class="page-item"><a class="page-item-link" href="{{route('front')}}">{{ __('Home')}}</a></li>
                    <li class="page-item">{{ __('Reset Password')}}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here  -->

    <!-- about us area start here  -->
    <div class="sign-in-page section">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-lg-5">
                    <div class="login-wrap">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="far fa-user"></span>
                        </div>
                        <h1 class="text-center mb-4">{{ __('Reset Password')}}</h1>
                        <form class="login-form" method="post" action="{{route('reset.password.post')}}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="form-group">
                                <input type="email" class="form-control rounded-left" placeholder="{{__('Email')}}" name="email" required="">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control rounded-left" placeholder="{{__('Password')}}" name="password" required="">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control rounded-left" placeholder="{{__('Confirm Password')}}" name="password_confirmation" required="">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary rounded submit px-3 primary-btn">{{ __('Reset Password')}}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about us area end here  -->
@endsection
