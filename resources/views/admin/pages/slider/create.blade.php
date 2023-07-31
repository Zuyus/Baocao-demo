@extends('admin.master', ['menu' => 'slider_banner', 'submenu' => 'slider'])
@section('title', 'Add Slider')
@section('title', __('Dashboard'))
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{ __('Add Slider') }}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Home') }}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Slider') }}</li>
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
                            <form enctype="multipart/form-data" method="POST" action="{{ route('admin.slider.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-vertical__item bg-style">
                                            <div class="item-top mb-30">
                                                <h2>{{ langString('en', false) . ':' }}</h2>
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="en_title">{{ __('Title') }}</label>
                                                <input type="text" class="form-control" id="en_title" name="en_title"
                                                    value="{{ old('en_title') }}" placeholder="{{ __('Title') }}">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="en_sub_title">{{ __('Sub Title') }}</label>
                                                <input type="text" class="form-control" id="en_sub_title"
                                                    name="en_sub_title" value="{{ old('en_sub_title') }}"
                                                    placeholder="{{ __('Sub Title') }}">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="en_btn_text">{{ __('Button Text') }}</label>
                                                <input type="text" class="form-control" id="en_btn_text"
                                                    name="en_btn_text" value="{{ old('en_btn_text') }}"
                                                    placeholder="{{ __('Button Text') }}">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="en_description">{{ __('Description') }}</label>
                                                <textarea id="en_description" name="en_description" class="form-control" placeholder="{{ __('Description') }}">{{ old('en_description') }}</textarea>
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="thumbnail">{{ __('Thumbnail') }}</label>
                                                <input type="file" class="form-control putImage1" name="thumbnail"
                                                    id="thumbnail">
                                                <img src="" id="target1" />
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="background_image">{{ __('BackGround Image') }}</label>
                                                <input type="file" class="form-control putImage2" name="background_image"
                                                    id="background_image">
                                                <img src="" id="target2" />
                                            </div>
                                            <div class="input__button">
                                                <button type="submit" class="btn btn-blue">{{ __('Add') }}</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-vertical__item bg-style">
                                            <div class="item-top mb-30">
                                                <h2>{{ langString('fr', false) . ':' }}</h2>
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="fr_title">{{ __('Title') }}</label>
                                                <input type="text" class="form-control" id="fr_title" name="fr_title"
                                                    value="{{ old('fr_title') }}" placeholder="{{ __('Title') }}">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="fr_sub_title">{{ __('Sub Title') }}</label>
                                                <input type="text" class="form-control" id="fr_sub_title"
                                                    name="fr_sub_title" value="{{ old('fr_sub_title') }}"
                                                    placeholder="{{ __('Sub Title') }}">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="fr_btn_text">{{ __('Button Text') }}</label>
                                                <input type="text" class="form-control" id="fr_btn_text"
                                                    name="fr_btn_text" value="{{ old('fr_btn_text') }}"
                                                    placeholder="{{ __('Button Text') }}">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="fr_description">{{ __('Description') }}</label>
                                                <textarea id="fr_description" name="fr_description" class="form-control" placeholder="{{ __('Description') }}">{{ old('fr_description') }}</textarea>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
