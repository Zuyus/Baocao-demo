@extends('admin.master', ['menu' => 'site_content', 'submenu' => 'testimonial'])
@section('title', isset($title) ? $title : '')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{ __('Add Testimonial') }}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Home') }}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Testimonial') }}</li>
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
                                    <div class="col-md-12">
                                        <div class="form-vertical__item bg-style">
                                            <div class="input__group mb-25">
                                                <label for="name">{{ __('Name') }}</label>
                                                <input type="text" class="form-control" id="name" name="name" required=""
                                                    value="{{ old('name') }}" placeholder="{{ __('Name') }}">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="en_description">{{ __('English Description') }}</label>
                                                <textarea name="en_description" id="en_description" class="form-control"
                                                    placeholder="{{ __('Description') }}">{{ old('en_description') }}</textarea>
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="fr_description">{{ __('France Description') }}</label>
                                                <textarea name="fr_description" id="fr_description" class="form-control"
                                                    placeholder="{{ __('Description') }}">{{ old('en_description') }}</textarea>
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="star">{{ __('Star') }}</label>
                                                <select name="star" id="star" class="form-control">
                                                    <option value="">{{ __('---SELECT A STAR---') }}</option>
                                                    <option value="1">{{ __('1 Star') }}</option>
                                                    <option value="2">{{ __('2 Star') }}</option>
                                                    <option value="3">{{ __('3 Star') }}</option>
                                                    <option value="4">{{ __('4 Star') }}</option>
                                                    <option value="5">{{ __('5 Star') }}</option>
                                                </select>
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="image">{{ __('Image') }}</label>
                                                <input type="file" class="form-control putImage1" name="image" id="image">
                                                <img src="" id="target1" />
                                            </div>
                                            <div class="input__button">
                                                <button type="submit" class="btn btn-blue">{{ __('Add') }}</button>
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
