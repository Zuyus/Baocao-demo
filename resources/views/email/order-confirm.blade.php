@extends('email.layout')
@section('content')
    <section class="mail-seccess section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-12">
                    <div class="success-inner">
                        <h1><i class="fa fa-envelope"></i><span>{{__('Order Successfully Placed')}}</span></h1>
                        <p>{{__('You order is successfully submitted. Your order number is: '.$data)}}</p>
                        <a href="{{route('front')}}" class="btn btn-primary btn-lg" target="_blank">{{__('Go Home')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
