@extends('admin.master', ['menu' => 'blog'])
@section('title', isset($title) ? $title : '')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{ __('Edit Blog') }}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Home') }}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Blog') }}</li>
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
                            <form enctype="multipart/form-data" method="POST" action="{{ route('admin.blog.update') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-vertical__item bg-style">
                                            <div class="item-top mb-30">
                                                <h2>{{ langString('en', false) . ':' }}</h2>
                                            </div>
                                            <input type="hidden" name="id" value="{{ $edit->id }}">
                                            <div class="input__group mb-25">
                                                <label for="exampleInputEmail1">{{ __('Blog Title') }}</label>
                                                <input type="text" class="" id="en_blog_title" name="en_blog_title"
                                                    required="" value="{{ $edit->en_Title }}"
                                                    placeholder="{{ __('Title') }}">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="select2-example-tags">{{ __('Blog Tag') }}</label>
                                                <select class="select2-multiple tag_one" name="tag[]" multiple="multiple"
                                                    id="select2-example-tags">
                                                    @foreach ($edit->tags as $tag)
                                                        @foreach ($tag->Tag as $item)
                                                            <option value="{{ $item }}"
                                                                {{ $item ? 'selected' : '' }}>{{ $item }}
                                                            </option>
                                                        @endforeach
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="input__group mb-25">
                                                <label for="en_description_one">{{ __('Description One') }}</label>
                                                <textarea name="en_description_one" id="summernote" class="" required="">{{ $edit->en_Description_One }}</textarea>
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="en_description_two">{{ __('Description Two') }}</label>
                                                <textarea name="en_description_two" id="summernote2" class="">{{ $edit->en_Description_Two }}</textarea>
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="small_image">{{ __('Small Image') }}</label>
                                                <input type="file" class="putImage1" name="small_image" id="small_image">
                                                <img class="admin_image"
                                                    src="{{ asset(BlogImage() . $edit->Small_Image) }}" id="target1" />
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="big_image">{{ __('Big Image') }}</label>
                                                <input type="file" class="putImage2" name="big_image" id="big_image">
                                                <img class="admin_image" src="{{ asset(BlogImage() . $edit->Big_Image) }}"
                                                    id="target2" />
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
                                                <label for="fr_blog_title">{{ __('Blog Title') }}</label>
                                                <input type="text" id="fr_blog_title" name="fr_blog_title" required=""
                                                    value="{{ $edit->fr_Title }}" placeholder="{{ __('Title') }}">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="fr_description_one">{{ __('Description One') }}</label>
                                                <textarea name="fr_description_one" id="summernote3" class="" required="">{{ $edit->fr_Description_One }}</textarea>
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="fr_description_two">{{ __('Description Two') }}</label>
                                                <textarea name="fr_description_two" id="summernote4" class="">{{ $edit->fr_Description_Two }}</textarea>
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
@push('post_scripts')
    <script src="{{ asset('backend/js/admin/products/digital.js') }}"></script>
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
