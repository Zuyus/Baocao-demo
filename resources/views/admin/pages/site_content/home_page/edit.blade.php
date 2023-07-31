@extends('admin.master', ['menu' => 'site_content', 'submenu' => 'content_home'])
@section('title', isset($title) ? $title : '')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{ __('Edit Homepage') }}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Home') }}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Homepage') }}</li>
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
                                action="{{ route('admin.home.page.site.content.update') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-vertical__item bg-style">
                                            <div class="item-top mb-30">
                                                <h2>{{ langString('en', false) . ':' }}</h2>
                                            </div>
                                            <input type="hidden" value="{{ $edit->id }}" name="id">
                                            <input type="hidden" value="{{ $edit->Location }}" name="location">
                                            <div class="input__group mb-25">
                                                <label for="exampleInputEmail1">{{ __('Title') }}</label>
                                                <input type="text" class="form-control" id="en_title" name="en_title"
                                                    required="" value="{{ $edit->en_Title }}">
                                            </div>

                                            <div class="input__group mb-25">
                                                <label for="exampleInputEmail1">{{ __('Description One') }}</label>
                                                <textarea name="en_description_one" id="summernote" class="form-control " required="">{{ $edit->en_Description_One }}</textarea>
                                            </div>
                                            @if ($edit->Location == 'about_us')
                                                <div class="input__group mb-25">
                                                    <label for="image">{{ __('Image') }}</label>
                                                    <input type="file" class="form-control putImage1" name="image"
                                                        id="image">
                                                    <img class="admin_image"
                                                        src="{{ asset(aboutUsPage() . $edit->image) }}" id="target1" />
                                                </div>
                                            @endif
                                            @if ($edit->en_Description_Two)
                                                <div class="input__group mb-25">
                                                    <label for="exampleInputEmail1">{{ __('Description Two') }}</label>
                                                    <textarea name="en_description_two" id="summernote2" class="form-control">{{ $edit->en_Description_Two }}</textarea>
                                                </div>
                                            @endif
                                            @if ($edit->Location == 'products')
                                                <div class="input__group mb-25">
                                                    <label
                                                        for="exampleInputEmail1">{{ __('Products Per Section') }}</label>
                                                    <select name="home_products_page" id="home_products_page">
                                                        <option value="4"
                                                            {{ allsetting('home_products_page') == 4 ? 'selected' : '' }}>
                                                            {{ __('4') }}</option>
                                                        <option value="8"
                                                            {{ allsetting('home_products_page') == 8 ? 'selected' : '' }}>
                                                            {{ __('8') }}</option>
                                                        <option value="12"
                                                            {{ allsetting('home_products_page') == 12 ? 'selected' : '' }}>
                                                            {{ __('12') }}</option>
                                                    </select>
                                                </div>
                                            @endif
                                            @if ($edit->Location == 'popular_products')
                                                <div class="input__group mb-25">
                                                    <label
                                                        for="exampleInputEmail1">{{ __('Products Per Section') }}</label>
                                                    <select name="home_trending_page" id="home_trending_page">
                                                        <option value="4"
                                                            {{ allsetting('home_products_page') == 4 ? 'selected' : '' }}>
                                                            {{ __('4') }}</option>
                                                        <option value="8"
                                                            {{ allsetting('home_products_page') == 8 ? 'selected' : '' }}>
                                                            {{ __('8') }}</option>
                                                        <option value="12"
                                                            {{ allsetting('home_trending_page') == 12 ? 'selected' : '' }}>
                                                            {{ __('12') }}</option>
                                                    </select>
                                                </div>
                                                <div class="input__group mb-25">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" value="1" name="new_arrival"
                                                            class="custom-control-input" id="new_arrival"
                                                            {{ allsetting('new_arrival') == ACTIVE ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="customSwitch1">New
                                                            Arrival</label>
                                                    </div>
                                                </div>
                                                <div class="input__group mb-25">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" value="1" name="best_selling"
                                                            class="custom-control-input" id="best_selling"
                                                            {{ allsetting('best_selling') == ACTIVE ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="customSwitch1">Best
                                                            Selling</label>
                                                    </div>
                                                </div>
                                                <div class="input__group mb-25">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" value="1" name="on_sale"
                                                            class="custom-control-input" id="on_sale"
                                                            {{ allsetting('on_sale') == ACTIVE ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="customSwitch1">On
                                                            Sale</label>
                                                    </div>
                                                </div>
                                                <div class="input__group mb-25">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" value="1" name="featured_items"
                                                            class="custom-control-input" id="featured_items"
                                                            {{ allsetting('featured_items') == ACTIVE ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="customSwitch1">Featured
                                                            Items</label>
                                                    </div>
                                                </div>
                                            @endif
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
                                                <label for="exampleInputEmail1">{{ __('Title') }}</label>
                                                <input type="text" class="form-control" id="fr_title"
                                                    name="fr_title" required="" value="{{ $edit->fr_Title }}">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="exampleInputEmail1">{{ __('Description One') }}</label>
                                                <textarea name="fr_description_one" id="summernote3" class="form-control" required="">{{ $edit->fr_Description_One }}</textarea>
                                            </div>

                                            @if ($edit->fr_Description_Two)
                                                <div class="input__group mb-25">
                                                    <label for="exampleInputEmail1">{{ __('Description Two') }}</label>
                                                    <textarea name="fr_description_two" id="summernote4" class="form-control">{{ $edit->fr_Description_Two }}</textarea>
                                                </div>
                                            @endif

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

@push('post_scripts')
    <script>
        "use strict";
        $(document).ready(function() {
            $("#summernote").summernote({
                placeholder: 'Description',
                height: 300
            });
            $('.dropdown-toggle').dropdown();
        });

        $(document).ready(function() {
            $("#summernote2").summernote({
                placeholder: 'Description',
                height: 300
            });
            $('.dropdown-toggle').dropdown();
        });
        $(document).ready(function() {
            $("#summernote3").summernote({
                placeholder: 'Description',
                height: 300
            });
            $('.dropdown-toggle').dropdown();
        });
        $(document).ready(function() {
            $("#summernote4").summernote({
                placeholder: 'Description',
                height: 300
            });
            $('.dropdown-toggle').dropdown();
        });
    </script>
@endpush
