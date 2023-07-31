@extends('admin.master', ['menu' => 'slider_banner', 'submenu' => 'banner'])
@section('title', isset($title) ? $title : '')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{ __('Edit Banner') }}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Home') }}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Banner') }}</li>
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
                            <form enctype="multipart/form-data" method="POST"
                                action="{{ route('admin.banner.update', $banner->id) }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-vertical__item bg-style">
                                            <div class="item-top mb-30">
                                                <h2>{{ langString('en', false) . ':' }}</h2>
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="en_title">{{ __('Title') }}</label>
                                                <input type="text" id="en_title" name="en_title"
                                                    value="{{ $banner->en_title }}" placeholder="{{ __('Title') }}">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="en_summary">{{ __('Summary') }}</label>
                                                <textarea name="en_summary" id="en_summary" placeholder="{{ __('Summery') }}">{{ $banner->en_summary }}</textarea>
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="url">{{ __('Url') }}</label>
                                                <input type="text" id="url" name="url"
                                                    value="{{ $banner->url }}" placeholder="{{ __('Url') }}">
                                            </div>

                                            <div class="input__group mb-25">
                                                <label for="position">{{ __('Position') }}</label>
                                                <select name="position" id="position">
                                                    <option value="home-top">{{ __('Home Top') }}</option>
                                                </select>
                                            </div>

                                            <div class="input__group mb-25">
                                                <label for="image">{{ __('Image') }}</label>
                                                <input type="file" class="putImage1" name="image" id="image">
                                                <span>Dimension: 645*645</span>
                                                <img class="admin_image"
                                                    src="{{ asset(BannerImage() . $banner->image) }}" id="target1" />
                                            </div>

                                            <div class="input__button">
                                                <button type="submit" class="btn btn-blue">{{ __('Update') }}</button>
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
                                                <input type="text" id="fr_title" name="fr_title"
                                                    value="{{ $banner->fr_title }}" placeholder="{{ __('Title') }}">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="fr_summary">{{ __('Summary') }}</label>
                                                <textarea name="fr_summary" id="fr_summary" placeholder="{{ __('Summery') }}">{{ $banner->fr_summary }}</textarea>
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
