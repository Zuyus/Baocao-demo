@extends('admin.master', ['menu' => 'site_content', 'submenu' => 'testimonial'])
@section('title', isset($title) ? $title : '')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{ __('Edit Testimonial') }}</h2>
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
                            <form enctype="multipart/form-data" method="POST"
                                action="{{ route('admin.testimonial.update') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-vertical__item bg-style">
                                            <input type="hidden" name="id" value="{{ $edit->id }}">
                                            <div class="input__group mb-25">
                                                <label for="exampleInputEmail1">{{ __('Name') }}</label>
                                                <input type="text" class="form-control" id="name" name="name"
                                                    value="{{ $edit->Name }}" required=""
                                                    placeholder="{{ __('Name') }}">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="exampleInputEmail1">{{ __('English Description') }}</label>
                                                <textarea name="en_description" id="en_description" class="form-control"
                                                    placeholder="{{ __('Description') }}">{{ $edit->en_Description }}</textarea>
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="exampleInputEmail1">{{ __('France Description') }}</label>
                                                <textarea name="fr_description" id="fr_description" class="form-control"
                                                    placeholder="{{ __('Description') }}">{{ $edit->fr_Description }}</textarea>
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="exampleInputEmail1">{{ __('Star') }}</label>
                                                <select name="star" id="star" class="form-control">
                                                    <option value="">{{ __('---SELECT A STAR---') }}</option>
                                                    <option value="1" {{ $edit->star == 1 ? 'selected' : '' }}>
                                                        {{ __('1 Star') }}</option>
                                                    <option value="2" {{ $edit->star == 2 ? 'selected' : '' }}>
                                                        {{ __('2 Star') }}</option>
                                                    <option value="3" {{ $edit->star == 3 ? 'selected' : '' }}>
                                                        {{ __('3 Star') }}</option>
                                                    <option value="4" {{ $edit->star == 4 ? 'selected' : '' }}>
                                                        {{ __('4 Star') }}</option>
                                                    <option value="5" {{ $edit->star == 5 ? 'selected' : '' }}>
                                                        {{ __('5 Star') }}</option>
                                                </select>
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="exampleInputEmail1">{{ __('Image') }}</label>
                                                <input type="file" class="form-control putImage1" name="image" id="image">
                                                <img class="admin_image"
                                                    src="{{ asset(TestimonialImage() . $edit->Image) }}" id="target1" />
                                            </div>
                                            <div class="input__button">
                                                <button type="submit" class="btn btn-blue">{{ __('Update') }}</button>
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
