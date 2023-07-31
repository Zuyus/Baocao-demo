@extends('admin.master', ['menu' => 'shipment', 'submenu' => 'orders_all'])
@section('title', isset($title) ? $title : '')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{ __('Digital Product Send') }}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Home') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Digital Product Send') }}</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="gallery__area bg-style">
                <div class="gallery__content">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    @php
                                        $bill = json_decode($order->billing_address, true);
                                    @endphp
                                    @foreach ($order->order_details as $od)
                                        @if ($od->product->type == PRODUCT_AFFILIATE)
                                            <div class="input__group mb-25">{{ $od->product->en_Product_Name }}</div>
                                            <form enctype="multipart/form-data" method="POST"
                                                action="{{ route('admin.digital_product_mail') }}">
                                                @csrf
                                                <input type="hidden" name="product_type" value="{{ $od->product->type }}">
                                                <input type="hidden" name="mail_address" value="{{ $bill['email'] }}">
                                                <div class="input__group mb-25">
                                                    <label for="exampleInputEmail1">{{ __('Link') }}</label>
                                                    <input type="text" class="form-control" id="link" name="link"
                                                        required="">
                                                </div>
                                                <button type="submit" class="btn btn-primary">{{ __('Send') }}</button>
                                            </form>
                                        @elseif ($od->product->type == PRODUCT_DIGITAL)
                                            <div class="input__group mb-25">
                                                <label for="exampleInputEmail1">{{ __('Product Name:') }}</label>
                                                {{ $od->product->en_Product_Name }}
                                            </div>
                                            <div class="input__group">
                                                <label for="exampleInputEmail1">{{ __('Image:') }}</label>
                                            </div>
                                            <img src="{{ asset(IMG_PRODUCT_PATH . $od->product->Primary_Image) }}"
                                                height="120" class="img-rounded mb-25" />
                                            <form enctype="multipart/form-data" method="POST"
                                                action="{{ route('admin.digital_product_mail') }}">
                                                @csrf
                                                <input type="hidden" name="product_type" value="{{ $od->product->type }}">
                                                <input type="hidden" name="mail_address" value="{{ $bill['email'] }}">
                                                <div class="input__group mb-25">
                                                    <label for="exampleInputEmail1">{{ __('Link') }}</label>
                                                    <input type="text" class="form-control" id="link" name="link"
                                                        required=""
                                                        value="{{ is_null($od->product->digital_file) ? $od->product->digital_link : asset(PRODUCT_DIGITAL_PRODUCT . $od->product->digital_file) }}"
                                                        readonly>
                                                </div>
                                                <button type="submit" class="btn btn-primary">{{ __('Send') }}</button>
                                            </form>
                                        @elseif ($od->product->type == PRODUCT_LICENSE)
                                            <div class="input__group mb-25">{{ $od->product->en_Product_Name }}</div>
                                            <form enctype="multipart/form-data" method="POST"
                                                action="{{ route('admin.digital_product_mail') }}">
                                                @csrf
                                                <input type="hidden" name="product_type" value="{{ $od->product->type }}">
                                                <input type="hidden" name="mail_address" value="{{ $bill['email'] }}">
                                                <div class="input__group mb-25">
                                                    <label for="exampleInputEmail1">{{ __('Link') }}</label>
                                                    <input type="text" class="form-control" id="link" name="link"
                                                        required="">
                                                </div>
                                                <button type="submit" class="btn btn-primary">{{ __('Send') }}</button>
                                            </form>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
