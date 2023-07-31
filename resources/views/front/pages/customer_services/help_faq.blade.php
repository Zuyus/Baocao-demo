@extends('front.layouts.master')
@section('title', isset($title) ? $title : 'Home')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')
@section('content')
    <!-- breadcrumb area start here  -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-wrap text-center">
                <h2 class="page-title">{{__('Frequently Asked Questions')}}</h2>
                <ul class="breadcrumb-pages">
                    <li class="page-item"><a class="page-item-link" href="{{route('front')}}">{{__('Home')}}</a></li>
                    <li class="page-item">{{__('Frequently Asked Questions')}}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here  -->

    <!-- faq-area area start here  -->
    <div class="faq-area section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="page-menu-wrap">
                        <ul class="menu-items">
                            <li class="menu-item {{Route::is('terms.conditions') ? 'active' : '' }}"><a class="menu-link" href="{{route('terms.conditions')}}"><i class="menu-icon far fa-file-alt"></i>{{__('Term & Conditions')}}</a></li>
                            <li class="menu-item {{Route::is('privacy.policy') ? 'active' : '' }}"><a class="menu-link" href="{{route('privacy.policy')}}"><i class="menu-icon far fa-file-alt"></i>{{__('Privacy Policy')}}</a></li>
                            <li class="menu-item {{Route::is('shipping.return') ? 'active' : '' }}"><a class="menu-link" href="{{route('shipping.return')}}"><i class="menu-icon far fa-file-alt"></i>{{__('Shipping & Return')}}</a></li>
                            <li class="menu-item {{Route::is('faq') ? 'active' : '' }}"><a class="menu-link" href="{{route('faq')}}"><i class="menu-icon far fa-file-alt"></i>{{__('FAQ')}}</a></li>
                            <li class="menu-item {{Route::is('refund.policy') ? 'active' : '' }}"><a class="menu-link" href="{{route('refund.policy')}}"><i class="menu-icon far fa-file-alt"></i>{{__('Refund Policy')}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="accordion" id="accordionFaq">
                        @foreach ($faqs as $fq)
                            @if($loop->first)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading{{$fq->id}}">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$fq->id}}" aria-expanded="true" aria-controls="collapse{{$fq->id}}">
                                            {{langConverter($fq->question, $fq->question_fr)}}
                                        </button>
                                    </h2>
                                    <div id="collapse{{$fq->id}}" class="accordion-collapse collapse show" aria-labelledby="heading{{$fq->id}}" data-bs-parent="#accordionFaq">
                                        <div class="accordion-body">
                                            <p class="faq-text">{{langConverter($fq->answer, $fq->answer_fr)}}</p>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading{{$fq->id}}">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$fq->id}}" aria-expanded="true" aria-controls="collapse{{$fq->id}}">
                                            {{langConverter($fq->question, $fq->question_fr)}}
                                        </button>
                                    </h2>
                                    <div id="collapse{{$fq->id}}" class="accordion-collapse collapse" aria-labelledby="heading{{$fq->id}}" data-bs-parent="#accordionFaq">
                                        <div class="accordion-body">
                                            <p class="faq-text">{{langConverter($fq->answer, $fq->answer_fr)}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- faq-area area end here  -->
@endsection
