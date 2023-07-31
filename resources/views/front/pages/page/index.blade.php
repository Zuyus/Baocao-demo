@extends('front.layouts.master')
@section('title', isset($title) ? $title : 'Home')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')
@section('content')
    <!-- breadcrumb area start here  -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-wrap text-center">
                <h2 class="page-title">{{ langConverter($page->en_title, $page->fr_title) }}</h2>
                <ul class="breadcrumb-pages">
                    <li class="page-item"><a class="page-item-link" href="{{ route('front') }}">{{ __('Home') }}</a></li>
                    <li class="page-item">{{ langConverter($page->en_title, $page->fr_title) }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here  -->

    <!-- faq-area area start here  -->
    <div class="faq-area section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="term-conditions-info">
                        {!! langConverter($page->en_description, $page->fr_description) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- faq-area area end here  -->
@endsection
