@extends('admin.master', ['menu' => 'coupon'])
@section('title', isset($title) ? $title : '')
@section('content')

    <div id="table-url" data-url="{{route('admin.coupon')}}"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{__('Coupons')}}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{__('Home')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('Coupons')}}</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="customers__area bg-style mb-30">
                <div class="item-title">
                    <div class="col-xs-6">
                        <a href="{{route('admin.coupon.create')}}" class="btn btn-md btn-info">{{ __('Add Coupon')}}</a>
                    </div>
                </div>
                <div class="customers__table">
                    <table id="CouponTable" class="row-border data-table-filter table-style">
                        <thead>
                        <tr>
                            <th>{{ __('Coupon Code')}}</th>
                            <th>{{ __('Amount')}}</th>
                            <th>{{ __('Min Expenses')}}</th>
                            <th>{{ __('Expire Date')}}</th>
                            <th>{{__('Validity')}}</th>
                            <th>{{ __('Action')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--Row-->
    @push('post_scripts')
        <script src="{{asset('backend/js/admin/datatables/coupon.js')}}"></script>
        <!-- Page level custom scripts -->
    @endpush
@endsection
