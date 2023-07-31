@extends('errors.layout')
@section('title', __('Error'))
@section('content')
    <!-- breadcrumb area start here  -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-wrap text-center">
                <h2 class="page-title">{{__('Error')}}</h2>
                <ul class="breadcrumb-pages">
                    <li class="page-item"><a class="page-item-link" href="{{route('front')}}">{{__('Home')}}</a></li>
                    <li class="page-item">{{__('Error')}}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here  -->

    <!-- Error Page area start here  -->
    <div class="error-page-area section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="fw-bold">{{__('ERROR 404 NOT FOUND')}}</h1>
                    <p>
                        {{__('You may have mis-typed the URL.
                        Or the page has been removed.Actually, there is nothing to see here. Click on the button below
                        to do something, Thanks!')}}
                    </p>
                    <a href="{{route('front')}}" class="primary-btn">{{__('Back to Home')}}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Error Page area end here  -->
@endsection
