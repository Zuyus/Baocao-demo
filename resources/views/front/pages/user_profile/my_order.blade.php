@extends('front.layouts.master')
@section('title', isset($title) ? $title : 'Home')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')
@section('content')
    <!-- breadcrumb area start here  -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-wrap text-center">
                <h2 class="page-title">{{__('My Order')}}</h2>
                <ul class="breadcrumb-pages">
                    <li class="page-item"><a class="page-item-link" href="{{route('front')}}">{{__('Home')}}</a></li>
                    <li class="page-item">{{__('My Order')}}</li>
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
                    @include('front.layouts.include.user_profile_sidebar', ['menu' => 'order'])
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="user-profile-right-part">
                        <div class="user-profile-content-box my-order-page-box">

                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-active-order-tab" data-bs-toggle="pill" data-bs-target="#pills-active-order" type="button" role="tab" aria-controls="pills-active-order" aria-selected="true">
                                        {{__('Active Order')}}
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-delivered-order-tab" data-bs-toggle="pill" data-bs-target="#pills-delivered-order" type="button" role="tab" aria-controls="pills-delivered-order" aria-selected="false">
                                        {{__('Delivered Order')}}
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-cancelled-order-tab" data-bs-toggle="pill" data-bs-target="#pills-cancelled-order" type="button" role="tab" aria-controls="pills-cancelled-order" aria-selected="false">
                                        {{__('Cancelled Order')}}
                                    </button>
                                </li>
                            </ul>

                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-active-order" role="tabpanel" aria-labelledby="pills-active-order-tab">
                                    <div class="order-table mt-5">
                                        <div class="table-responsive">
                                            <table class="table table-borderless">
                                                <thead>
                                                <tr>
                                                    <th>{{__('Product')}}</th>
                                                    <th>{{__('Item')}}</th>
                                                    <th>{{__('Total Price')}}</th>
                                                    <th>{{__('Track order')}}</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @forelse ($all_orders as $ao)
                                                    <tr>
                                                        <td>
                                                            <p>{{__('Order No:')}} {{$ao->Order_Number}}</p>
                                                            <p>{{__('Order Time:')}} {{\Carbon\Carbon::parse($ao->created_at)->format('F j, Y, g:i a')}}</p>
                                                        </td>
                                                        <td>
                                                            <div class="item-image-lsit d-flex align-items-center">
                                                                @foreach ($ao->order_details as $aod)
                                                                    <div class="single-item me-2">
                                                                        <img class="order-image" src="{{asset(ProductImage().$aod->product->Primary_Image)}}" alt="images">
                                                                    </div>
                                                                @endforeach

                                                            </div>
                                                        </td>
                                                        <td class="my-order-td-row">
                                                            <span class="amount"> {{currencyConverter($ao->Grand_Total)}}</span>
                                                        </td>
                                                        <td class="my-order-td-row"><a href="{{route('user.profile.track.my.order', encrypt($ao->id))}}"><i class="fas fa-user-cog"></i></a></td>
                                                    </tr>
                                                @empty
                                                    <tr><td colspan="4" class="text-center"><h1>{{__('No data found!')}}</h1></td></tr>
                                                @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="pills-delivered-order" role="tabpanel" aria-labelledby="pills-delivered-order-tab">
                                    <div class="order-table mt-5">
                                        <div class="table-responsive">
                                            <table class="table table-borderless">
                                                <thead>
                                                <tr>
                                                    <th>{{__('Product')}}</th>
                                                    <th>{{__('Item')}}</th>
                                                    <th>{{__('Total Price')}}</th>
                                                    <th>{{__('Write Review')}}</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @forelse ($delivered_orders as $do)
                                                    <tr>
                                                        <td>
                                                            <p>{{__('Order No:')}} {{$do->Order_Number}}</p>
                                                            <p>{{__('Order Time:')}} {{\Carbon\Carbon::parse($do->created_at)->format('F j, Y, g:i a')}}</p>
                                                        </td>
                                                        <td>
                                                            <div class="item-image-lsit d-flex align-items-center">
                                                                @foreach ($do->order_details as $dod)
                                                                    <div class="single-item me-2">
                                                                        <img class="order-image" src="{{asset(ProductImage().$dod->product->Primary_Image)}}" alt="images">
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </td>
                                                        <td class="my-order-td-row">
                                                            <span class="amount"> {{currencyConverter($do->Grand_Total)}}</span>
                                                        </td>
                                                        <td class="my-order-td-row"><a href="{{route('user.profile.track.my.order', encrypt($do->id))}}"><i class="fas fa-user-cog"></i></a></td>
                                                    </tr>
                                                    @empty
                                                    <tr><td colspan="4" class="text-center"><h1>{{__('No data found!')}}</h1></td></tr>
                                                @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="pills-cancelled-order" role="tabpanel" aria-labelledby="pills-cancelled-order-tab">
                                    <div class="order-table mt-5">
                                        <div class="table-responsive">
                                            <table class="table table-borderless">
                                                <thead>
                                                <tr>
                                                    <th>{{__('Product')}}</th>
                                                    <th>{{__('Item')}}</th>
                                                    <th>{{__('Total Price')}}</th>
                                                    <th>{{__('Track order')}}</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @forelse ($canceled_orders as $co)
                                                    <tr>
                                                        <td>
                                                            <p>{{__('Order No:')}} {{$co->Order_Number}}</p>
                                                            <p>{{__('Order Time:')}} {{\Carbon\Carbon::parse($co->created_at)->format('F j, Y, g:i a')}}</p>
                                                        </td>
                                                        <td>
                                                            <div class="item-image-lsit d-flex align-items-center">
                                                                @foreach ($co->order_details as $cod)
                                                                    <div class="single-item me-2">
                                                                        <img class="order-image" src="{{asset(ProductImage().$cod->product->Primary_Image)}}" alt="images">
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </td>
                                                        <td class="my-order-td-row">
                                                            <span class="amount"> {{currencyConverter($co->Grand_Total)}}</span>
                                                        </td>
                                                        <td class="my-order-td-row"><a href="{{route('user.profile.track.my.order', encrypt($co->id))}}"><i class="fas fa-user-cog"></i></a></td>
                                                    </tr>
                                                @empty
                                                    <tr><td colspan="4" class="text-center"><h1>{{__('No data found!')}}</h1></td></tr>
                                                @endforelse

                                                </tbody>
                                            </table>
                                        </div>
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
