@extends('admin.master', ['menu' => 'cms', 'submenu' => 'subscribers'])
@section('title', isset($title) ? $title : '')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{ __('Subscribers') }}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Home') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Subscribers') }}</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="customers__area bg-style mb-30">
                <div class="customers__table">
                    <table id="ContactUsTable" class="dataTableHover row-border data-table-filter table-style">
                        <thead>
                            <tr>
                                <th>{{ __('Email') }}</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subscribers as $item)
                                <tr>
                                    <td>{{ $item->Subscribe }}</td>
                                    <td><a href="javascript:void(0)" class="btn-action btn-sm" title="{{ __('Promotion') }}"
                                            data-bs-toggle="modal" data-bs-target="#viewModal{{ $item->id }}"><i
                                                class="fab fa-telegram-plane"></i></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--Row-->
    @foreach ($subscribers as $cl)
        <div class="modal fade" id="viewModal{{ $cl->id }}" tabindex="-1" role="dialog"
            aria-labelledby="viewModalTitle{{ $cl->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-success">
                        <h5 class="modal-title text-white" id="viewModalLongTitle">{{ __('Promotion') }}</h5>
                        <button type="button" class="close text-white" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form enctype="multipart/form-data" method="POST" action="{{ route('admin.subscribe.promote') }}">
                        <div class="modal-body">
                            @csrf
                            <div class="input__group mb-25">
                                <label for="question">{{ __('Email') }}</label>
                                <input type="text" name="email" placeholder="{{ __('Email') }}"
                                    value="{{ $cl->Subscribe }}" readonly>
                            </div>
                            <div class="input__group mb-25">
                                <label for="exampleInputEmail1">{{ __('Message') }}</label>
                                <textarea name="message" id="message" placeholder="{{ __('Message') }}"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger me-2"
                                data-bs-dismiss="modal">{{ __('Close') }}</button>
                            <button type="submit" class="btn btn-primary">{{ __('Promote') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection
