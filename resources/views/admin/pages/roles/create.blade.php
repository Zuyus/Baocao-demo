@extends('admin.master', ['menu' => 'admins', 'submenu' => 'roles'])
@section('title', isset($title) ? $title : '')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{ __('Add Role') }}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Home') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Roles') }}</li>
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
                                            action="{{ route('admin.store_role') }}">
                                            @csrf
                                            <div class="input__group mb-25">
                                                <label for="exampleInputEmail1">{{ __('Name') }}</label>
                                                <input type="text" id="name" name="name" value="{{ old('name') }}"
                                                    placeholder="Name">
                                            </div>
                                            <div class="row">
                                                @foreach ($permission as $value)
                                                    <div class="col-md-3">
                                                        <div class="input__group mb-25">
                                                            <div class="custom-control custom-switch">
                                                                <input type="checkbox" value="{{ $value->id }}"
                                                                    name="permission[]" class="custom-control-input"
                                                                    id="customSwitch{{ $value->id }}">
                                                                <label class="custom-control-label"
                                                                    for="customSwitch{{ $value->id }}">{{ $value->name }}</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="input__button">
                                                <button type="submit" class="btn btn-blue">{{ __('Submit') }}</button>
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
