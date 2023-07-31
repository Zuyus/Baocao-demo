@extends('email.layout')
@section('content')
    <section class="mail-seccess section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-12">
                    <div class="success-inner">
                        <h1><i class="fa fa-envelope"></i><span>{{__('Your Digital Product')}}</span></h1>
                        <p>{{__('Click the link for interacting with your digital product')}}</p>
                        <a href="{{$data}}" class="btn btn-primary btn-lg" target="_blank">{{__('Click Here')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
