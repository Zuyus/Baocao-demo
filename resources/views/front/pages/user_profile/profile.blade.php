@extends('front.layouts.master')
@section('title', isset($title) ? $title : 'Home')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')
@section('content')
    <!-- breadcrumb area start here  -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-wrap text-center">
                <h2 class="page-title">{{__('User Profile')}}</h2>
                <ul class="breadcrumb-pages">
                    <li class="page-item"><a class="page-item-link" href="{{route('front')}}">{{__('Home')}}</a></li>
                    <li class="page-item">{{__('User Profile')}}</li>
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
                    @include('front.layouts.include.user_profile_sidebar', ['menu' => 'profile'])
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="user-profile-right-part">
                        <div class="user-profile-content-box">
                            <div class="d-flex justify-content-between align-items-center text-black mb-5">
                                <h2 class="user-profile-content-title">{{__('My Profile')}}</h2>
                                <a href="{{route('user.profile.edit')}}" class="text-black">{{__('Edit My Profile')}}</a>
                            </div>

                            <div class="row">
                                <!-- profile address box -->
                                <div class="col-md-4">
                                    <div class="address-box card">
                                        <h3 class="text-black">{{__('Personal Information')}}</h3>
                                        <ul>
                                            <li>{{__('Name:')}} {{$user->name}}</li>
                                            <li>{{__('Date Of Birth:')}} {{is_null($user->DOB) ? __('N/A') : $user->DOB}}</li>
                                            <li>{{__('Gender:')}} {{is_null($user->Gender) ? __('N/A') : $user->Gender}}</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- profile address box -->
                                <div class="col-md-4">
                                    <div class="address-box card">
                                        <h3 class="text-black">{{__('Address & Contact Us')}}s</h3>
                                        <ul>
                                            <li>{{$user->email}}</li>
                                            <li>{{is_null($user->street_address) ? __('Not to update yet') : $user->street_address}}</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- profile address box -->
                                <div class="col-md-4">
                                    <div class="address-box card">
                                        <h3 class="text-black">{{__('Default Billing Address')}}</h3>
                                        <ul>
                                            <li>{{$user->email}}</li>
                                            <li>{{is_null($user->street_address) ? __('Not to update yet') : $user->street_address}}</li>
                                        </ul>
                                    </div>
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
