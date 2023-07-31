@extends('front.layouts.master')
@section('title', isset($title) ? $title : 'Home')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')
@section('content')
    <!-- breadcrumb area start here  -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-wrap text-center">
                <h2 class="page-title">{{ __('Refund Policy') }}</h2>
                <ul class="breadcrumb-pages">
                    <li class="page-item"><a class="page-item-link" href="{{ route('front') }}">{{ __('Home') }}</a></li>
                    <li class="page-item">{{ __('Refund Policy') }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here  -->

    <!-- refund-policy area start here  -->
    <div class="refund-policy-area section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="page-menu-wrap">
                        <ul class="menu-items">
                            <li class="menu-item {{ Route::is('terms.conditions') ? 'active' : '' }}"><a class="menu-link"
                                    href="{{ route('terms.conditions') }}"><i
                                        class="menu-icon far fa-file-alt"></i>{{ __('Term & Conditions') }}</a></li>
                            <li class="menu-item {{ Route::is('privacy.policy') ? 'active' : '' }}"><a class="menu-link"
                                    href="{{ route('privacy.policy') }}"><i
                                        class="menu-icon far fa-file-alt"></i>{{ __('Privacy Policy') }}</a></li>
                            <li class="menu-item {{ Route::is('shipping.return') ? 'active' : '' }}"><a class="menu-link"
                                    href="{{ route('shipping.return') }}"><i
                                        class="menu-icon far fa-file-alt"></i>{{ __('Shipping & Return') }}</a></li>
                            <li class="menu-item {{ Route::is('faq') ? 'active' : '' }}"><a class="menu-link"
                                    href="{{ route('faq') }}"><i
                                        class="menu-icon far fa-file-alt"></i>{{ __('FAQ') }}</a></li>
                            <li class="menu-item {{ Route::is('refund.policy') ? 'active' : '' }}"><a class="menu-link"
                                    href="{{ route('refund.policy') }}"><i
                                        class="menu-icon far fa-file-alt"></i>{{ __('Refund Policy') }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="refund-policy-info">
                        {!! langConverter(
                            CutomerServiceContent('return_policy')->en_description,
                            CutomerServiceContent('return_policy')->fr_description,
                        ) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- refund-policy area end here  -->
@endsection
