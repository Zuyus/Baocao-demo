@extends('admin.master', ['menu' => 'coupon'])
@section('title', isset($title) ? $title : '')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{ __('Add Coupon') }}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Home') }}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Coupon') }}</li>
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
                                    <div class="form-vertical__item bg-style">
                                        <form enctype="multipart/form-data" method="POST"
                                            action="{{ route('admin.coupon.store') }}">
                                            @csrf
                                            <div class="input__group mb-25">
                                                <label for="coupon_code">{{ __('Coupon code') }}</label>
                                                <input type="text" id="coupon_code" name="coupon_code"
                                                    value="{{ old('coupon_code') }}" placeholder="{{ __('Code') }}">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="amount">{{ __('Amount') }}</label>
                                                <input type="number" min="1" step="0.01" id="amount" name="amount"
                                                    value="{{ old('amount') ?? 1 }}" placeholder="{{ __('Amount') }}">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="min_expenses">{{ __('Minimum Expense') }}</label>
                                                <input type="number" min="0" step="0.01" id="min_expenses"
                                                    name="min_expenses" value="{{ old('min_expenses') }}"
                                                    placeholder="{{ __('Minimum Expenses') }}">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="expire_date">{{ __('Expire Date') }}</label>
                                                <input type="date" id="expire_date" name="expire_date"
                                                    value="{{ old('expire_date') }}">
                                            </div>
                                            <div class="input__button">
                                                <button type="submit" class="btn btn-blue">{{ __('Add') }}</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
