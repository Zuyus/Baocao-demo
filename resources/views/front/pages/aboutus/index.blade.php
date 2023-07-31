@extends('front.layouts.master')
@section('title', isset($title) ? $title : 'Home')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')
@section('content')
    <!-- breadcrumb area start here  -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-wrap text-center">
                <h2 class="page-title">{{ __('About Us') }}</h2>
                <ul class="breadcrumb-pages">
                    <li class="page-item"><a class="page-item-link" href="{{ route('front') }}">{{ __('Home') }}</a></li>
                    <li class="page-item">{{ __('About Us') }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here  -->

    <!-- about us area start here  -->
    <div class="about-us-area section">
        <div class="container">
            <div class="row align-items-lg-center">
                <div class="col-lg-5 offset-lg-1 col-md-6">
                    <div class="about-us-image">
                        <img src="{{ asset(aboutUsPage() . siteContentAboutPage('about_us')->Image) }}"
                            alt="{{ __('about us image') }}" />
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="about-us-content">
                        <div class="section-header-area">
                            <h3 class="sub-title">
                                {{ langConverter(siteContentAboutPage('about_us')->en_Subtitle, siteContentAboutPage('about_us')->fr_Subtitle) }}
                            </h3>
                            <h2 class="section-title">{!! langConverter(
                                siteContentAboutPage('about_us')->en_Title_One,
                                siteContentAboutPage('about_us')->fr_Title_One,
                            ) !!}</h2>
                        </div>
                        {!! langConverter(
                            siteContentAboutPage('about_us')->en_Description_One,
                            siteContentAboutPage('about_us')->fr_Description_One,
                        ) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about us area end here  -->

    <!-- service area start here  -->
    <div class="service-area section-bg">
        <div class="container-fluid p-0">
            <div class="row align-items-center g-0">
                <div class="col-lg-6">
                    <div class="service-left"
                        style="background-image: url({{ asset(aboutUsPage() . siteContentAboutPage('comfort')->Image) }});">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-lsit">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="single-service">
                                    <div class="service-icon">
                                        <img src="{{ asset(aboutUsPage() . siteContentAboutPage('comfort')->Icon_One) }}"
                                            alt="{{ __('service-icon') }}" />
                                    </div>
                                    <div class="service-info">
                                        <h3 class="service-title">
                                            {!! langConverter(siteContentAboutPage('comfort')->en_Title_One, siteContentAboutPage('comfort')->fr_Title_One) !!}
                                        </h3>
                                        <p class="service-content">
                                            {!! langConverter(
                                                siteContentAboutPage('comfort')->en_Description_One,
                                                siteContentAboutPage('comfort')->fr_Description_One,
                                            ) !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="single-service">
                                    <div class="service-icon">
                                        <img src="{{ asset(aboutUsPage() . siteContentAboutPage('comfort')->Icon_Two) }}"
                                            alt="{{ __('service-icon') }}" />
                                    </div>
                                    <div class="service-info">
                                        <h3 class="service-title">
                                            {!! langConverter(siteContentAboutPage('comfort')->en_Title_Two, siteContentAboutPage('comfort')->fr_Title_Two) !!}
                                        </h3>
                                        <p class="service-content">
                                            {!! langConverter(
                                                siteContentAboutPage('comfort')->en_Description_Two,
                                                siteContentAboutPage('comfort')->fr_Description_Two,
                                            ) !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="single-service">
                                    <div class="service-icon">
                                        <img src="{{ asset(aboutUsPage() . siteContentAboutPage('comfort')->Icon_Three) }}"
                                            alt="service-icon" />
                                    </div>
                                    <div class="service-info">
                                        <h3 class="service-title">
                                            {!! langConverter(
                                                siteContentAboutPage('comfort')->en_Title_Three,
                                                siteContentAboutPage('comfort')->fr_Title_Three,
                                            ) !!}
                                        </h3>
                                        <p class="service-content">
                                            {!! langConverter(
                                                siteContentAboutPage('comfort')->en_Description_Three,
                                                siteContentAboutPage('comfort')->fr_Description_Three,
                                            ) !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="single-service">
                                    <div class="service-icon">
                                        <img src="{{ asset(aboutUsPage() . siteContentAboutPage('comfort')->Icon_Four) }}"
                                            alt="service-icon" />
                                    </div>
                                    <div class="service-info">
                                        <h3 class="service-title">
                                            {!! langConverter(
                                                siteContentAboutPage('comfort')->en_Title_Four,
                                                siteContentAboutPage('comfort')->fr_Title_Four,
                                            ) !!}
                                        </h3>
                                        <p class="service-content">
                                            {!! langConverter(
                                                siteContentAboutPage('comfort')->en_Description_Four,
                                                siteContentAboutPage('comfort')->fr_Description_Four,
                                            ) !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service area end here  -->

    <!-- Our Features area start here  -->
    <div class="our-features-area section-top pb-100">
        <div class="container">
            <div class="section-header-area text-center">
                <h3 class="sub-title">
                    {!! siteContentAboutPage('features')->en_Title !!}
                </h3>
                <h2 class="section-title">
                    {!! siteContentAboutPage('features')->en_Subtitle !!}
                </h2>
            </div>
            <div class="row our-features-area-wrap">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="single-features text-center">
                        <div class="features-icon">
                            <img src="{{ asset(aboutUsPage() . siteContentAboutPage('features')->Icon_One) }}"
                                alt="{{ __('features-icon') }}" />
                        </div>
                        <h3 class="features-title">
                            {!! langConverter(
                                siteContentAboutPage('features')->en_Title_One,
                                siteContentAboutPage('features')->fr_Title_One,
                            ) !!}
                        </h3>
                        <p class="features-content">
                            {!! langConverter(
                                siteContentAboutPage('features')->en_Description_One,
                                siteContentAboutPage('features')->fr_Description_One,
                            ) !!}
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="single-features text-center">
                        <div class="features-icon">
                            <img src="{{ asset(aboutUsPage() . siteContentAboutPage('features')->Icon_Two) }}"
                                alt="{{ __('features-icon') }}" />
                        </div>
                        <h3 class="features-title">
                            {!! langConverter(
                                siteContentAboutPage('features')->en_Title_Two,
                                siteContentAboutPage('features')->fr_Title_Two,
                            ) !!}
                        </h3>
                        <p class="features-content">
                            {!! langConverter(
                                siteContentAboutPage('features')->en_Description_Two,
                                siteContentAboutPage('features')->fr_Description_Two,
                            ) !!}
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="single-features text-center">
                        <div class="features-icon">
                            <img src="{{ asset(aboutUsPage() . siteContentAboutPage('features')->Icon_Three) }}"
                                alt="{{ __('features-icon') }}" />
                        </div>
                        <h3 class="features-title">
                            {!! langConverter(
                                siteContentAboutPage('features')->en_Title_Three,
                                siteContentAboutPage('features')->fr_Title_Four,
                            ) !!}
                        </h3>
                        <p class="features-content">
                            {!! langConverter(
                                siteContentAboutPage('features')->en_Description_Three,
                                siteContentAboutPage('features')->fr_Description_Three,
                            ) !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Features area end here  -->

    <!-- Testimonial ara start here  -->
    <div class="testimonial-area section section-bg">
        <div class="container">
            <div class="section-header-area text-center">
                <h3 class="sub-title">{{ __('Testimonial') }}</h3>
                <h2 class="section-title">{{ __('What People Are') }} <br />{{ __('Saying About Ourself') }}</h2>
            </div>
            <div class="testimonial-slide-top">

                <!-- Testimonial authors Float Images Start -->
                @foreach ($testimonials as $test)
                    @if ($loop->iteration == 1)
                        <img src="{{ asset(IMG_TESTIMONIAL . $test->Image) }}" alt="img"
                            class="testimonial-float-img testimonial-left-1 position-absolute">
                    @elseif ($loop->iteration == 2)
                        <img src="{{ asset(IMG_TESTIMONIAL . $test->Image) }}" alt="img"
                            class="testimonial-float-img testimonial-left-2 position-absolute">
                    @elseif ($loop->iteration == 3)
                        <img src="{{ asset(IMG_TESTIMONIAL . $test->Image) }}" alt="img"
                            class="testimonial-float-img testimonial-left-3 position-absolute">
                    @elseif ($loop->iteration == 4)
                        <img src="{{ asset(IMG_TESTIMONIAL . $test->Image) }}" alt="img"
                            class="testimonial-float-img testimonial-left-4 position-absolute">
                    @elseif ($loop->iteration == 5)
                        <img src="{{ asset(IMG_TESTIMONIAL . $test->Image) }}" alt="img"
                            class="testimonial-float-img testimonial-right-1 position-absolute">
                    @elseif ($loop->iteration == 6)
                        <img src="{{ asset(IMG_TESTIMONIAL . $test->Image) }}" alt="img"
                            class="testimonial-float-img testimonial-right-2 position-absolute">
                    @elseif ($loop->iteration == 7)
                        <img src="{{ asset(IMG_TESTIMONIAL . $test->Image) }}" alt="img"
                            class="testimonial-float-img testimonial-right-3 position-absolute">
                    @elseif ($loop->iteration == 8)
                        <img src="{{ asset(IMG_TESTIMONIAL . $test->Image) }}" alt="img"
                            class="testimonial-float-img testimonial-right-4 position-absolute">
                    @endif
                @endforeach
                <!-- Testimonial authors Float Images End -->

                <img class="shape-image" src="{{ asset('frontend/assets/images/shape.png') }}" alt="shape" />
                <div class="testimonial-image-slide">
                    @foreach ($testimonials as $test)
                        <div class="signle-testimonial-image"><img class="testimonial-image"
                                src="{{ asset(IMG_TESTIMONIAL . $test->Image) }}" alt="testimonal-image" /></div>
                    @endforeach
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="testimonail-slide">
                        @foreach ($testimonials as $test)
                            <div class="single-testimonial">
                                <p class="testimonial-text">
                                    {{ langConverter($test->en_Description, $test->fr_Description) }}</p>
                                <h3 class="testimonial-title">{{ $test->Name }}</h3>
                                <ul class="review-area">
                                    <li><i class="flaticon-star"></i></li>
                                    <li class="{{ $test->star == 1 ? 'inactive' : '' }}"><i class="flaticon-star"></i>
                                    </li>
                                    <li class="{{ $test->star == 1 || $test->star == 2 ? 'inactive' : '' }}"><i
                                            class="flaticon-star"></i></li>
                                    <li
                                        class="{{ $test->star == 1 || $test->star == 2 || $test->star == 3 ? 'inactive' : '' }}">
                                        <i class="flaticon-star"></i>
                                    </li>
                                    <li
                                        class="{{ $test->star == 1 || $test->star == 2 || $test->star == 3 || $test->star == 4 ? 'inactive' : '' }}">
                                        <i class="flaticon-star"></i>
                                    </li>
                                </ul>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial ara end here  -->

    <!-- Image Gallery area start here  -->
    <x-frontend.image-gallery></x-frontend.image-gallery>
    <!-- Image Gallery area end here  -->
@endsection
