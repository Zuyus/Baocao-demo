@extends('admin.master', ['menu' => 'site_content', 'submenu' => 'content_about'])
@section('title', isset($title) ? $title : '')
@section('title', __('Homepage/SiteContent'))
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{ __('About Us') }}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Home') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('About Us') }}</li>
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
                                action="{{ route('admin.about.page.site.content.update') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-vertical__item bg-style">
                                            <div class="item-top mb-30">
                                                <h2>{{ langString('en', false) . ':' }}</h2>
                                            </div>
                                            <input type="hidden" name="id" value="{{ $edit->id }}">
                                            @if ($edit->en_Title)
                                                <div class="input__group mb-25">
                                                    <label for="exampleInputEmail1">{{ __('English Title') }}</label>
                                                    <input type="text" class="form-control" id="en_Title"
                                                        name="en_Title" required="" value="{{ $edit->en_Title }}">
                                                </div>
                                            @endif
                                            @if ($edit->en_Subtitle)
                                                <div class="input__group mb-25">
                                                    <label for="exampleInputEmail1">{{ __('English Subtitle') }}</label>
                                                    <input type="text" class="form-control" id="en_subtitle"
                                                        name="en_subtitle" required="" value="{{ $edit->en_Subtitle }}">
                                                </div>
                                            @endif
                                            @if ($edit->en_Title_One)
                                                <div class="input__group mb-25">
                                                    <label for="exampleInputEmail1">{{ __('Title One') }}</label>
                                                    <input type="text" class="form-control" id="en_title_one"
                                                        name="en_title_one" required=""
                                                        value="{{ $edit->en_Title_One }}">
                                                </div>
                                            @endif
                                            @if ($edit->en_Title_Two)
                                                <div class="input__group mb-25">
                                                    <label for="exampleInputEmail1">{{ __('Title Two') }}</label>
                                                    <input type="text" class="form-control" id="en_title_two"
                                                        name="en_title_two" required=""
                                                        value="{{ $edit->en_Title_Two }}">
                                                </div>
                                            @endif
                                            @if ($edit->en_Title_Three)
                                                <div class="input__group mb-25">
                                                    <label for="exampleInputEmail1">{{ __('Title Three') }}</label>
                                                    <input type="text" class="form-control" id="en_title_three"
                                                        name="en_title_three" required=""
                                                        value="{{ $edit->en_Title_Three }}">
                                                </div>
                                            @endif
                                            @if ($edit->en_Title_Four)
                                                <div class="input__group mb-25">
                                                    <label for="exampleInputEmail1">{{ __('Title Four') }}</label>
                                                    <input type="text" class="form-control" id="en_title_four"
                                                        name="en_title_four" required=""
                                                        value="{{ $edit->en_Title_Four }}">
                                                </div>
                                            @endif
                                            @if ($edit->en_Description_One)
                                                <div class="input__group mb-25">
                                                    <label for="exampleInputEmail1">{{ __('Description One') }}</label>
                                                    <textarea name="en_description_one" id="summernote" class="form-control" required="">{{ $edit->en_Description_One }}</textarea>
                                                </div>
                                            @endif
                                            @if ($edit->en_Description_Two)
                                                <div class="input__group mb-25">
                                                    <label for="exampleInputEmail1">{{ __('Description Two') }}</label>
                                                    <textarea name="en_description_two" id="summernote2" class="form-control " required="">{{ $edit->en_Description_Two }}</textarea>
                                                </div>
                                            @endif
                                            @if ($edit->en_Description_Three)
                                                <div class="input__group mb-25">
                                                    <label for="exampleInputEmail1">{{ __('Description Three') }}</label>
                                                    <textarea name="en_description_three" id="summernote3" class="form-control " required="">{{ $edit->en_Description_Three }}</textarea>
                                                </div>
                                            @endif
                                            @if ($edit->Image)
                                                <div class="input__group mb-25">
                                                    <label for="exampleInputEmail1">{{ __('Image') }}</label>
                                                    <input type="file" class="form-control putImage1" name="image"
                                                        id="image">
                                                    <img class="admin_image"
                                                        src="{{ asset(aboutUsPage() . $edit->Image) }}" id="target1" />
                                                </div>
                                            @endif
                                            @if ($edit->Icon_One)
                                                <div class="input__group mb-25">
                                                    <label for="exampleInputEmail1">{{ __('Icon One') }}</label>
                                                    <input type="file" class="form-control putImage2" name="icon_one"
                                                        id="icon_one">
                                                    <img class="admin_image"
                                                        src="{{ asset(aboutUsPage() . $edit->Icon_One) }}"
                                                        id="target2" />
                                                </div>
                                            @endif
                                            @if ($edit->Icon_Two)
                                                <div class="input__group mb-25">
                                                    <label for="exampleInputEmail1">{{ __('Icon Two') }}</label>
                                                    <input type="file" class="form-control putImage3" name="icon_two"
                                                        id="icon_two">
                                                    <img class="admin_image"
                                                        src="{{ asset(aboutUsPage() . $edit->Icon_Two) }}"
                                                        id="target3" />
                                                </div>
                                            @endif
                                            @if ($edit->Icon_Three)
                                                <div class="input__group mb-25">
                                                    <label for="exampleInputEmail1">{{ __('Icon Three') }}</label>
                                                    <input type="file" class="form-control putImage4"
                                                        name="icon_three" id="icon_three">
                                                    <img class="admin_image"
                                                        src="{{ asset(aboutUsPage() . $edit->Icon_Three) }}"
                                                        id="target4" />
                                                </div>
                                            @endif
                                            @if ($edit->Icon_Four)
                                                <div class="input__group mb-25">
                                                    <label for="exampleInputEmail1">{{ __('Icon Four') }}</label>
                                                    <input type="file" class="form-control putImage5" name="icon_four"
                                                        id="icon_four">
                                                    <img class="admin_image"
                                                        src="{{ asset(aboutUsPage() . $edit->Icon_Four) }}"
                                                        id="target5" />
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
                                            @if ($edit->fr_Subtitle)
                                                <div class="input__group mb-25">
                                                    <label for="exampleInputEmail1">{{ __('France Subtitle') }}</label>
                                                    <input type="text" class="form-control" id="fr_subtitle"
                                                        name="fr_subtitle" required=""
                                                        value="{{ $edit->fr_Subtitle }}">
                                                </div>
                                            @endif
                                            @if ($edit->fr_Title_One)
                                                <div class="input__group mb-25">
                                                    <label for="exampleInputEmail1">{{ __('Title One') }}</label>
                                                    <input type="text" class="form-control" id="fr_title_one"
                                                        name="fr_title_one" required=""
                                                        value="{{ $edit->fr_Title_One }}">
                                                </div>
                                            @endif
                                            @if ($edit->fr_Title_Two)
                                                <div class="input__group mb-25">
                                                    <label for="exampleInputEmail1">{{ __('Title Two') }}</label>
                                                    <input type="text" class="form-control" id="fr_title_two"
                                                        name="fr_title_two" required=""
                                                        value="{{ $edit->fr_Title_Two }}">
                                                </div>
                                            @endif
                                            @if ($edit->fr_Title_Three)
                                                <div class="input__group mb-25">
                                                    <label for="exampleInputEmail1">{{ __('Title Three') }}</label>
                                                    <input type="text" class="form-control" id="fr_title_three"
                                                        name="fr_title_three" required=""
                                                        value="{{ $edit->fr_Title_Three }}">
                                                </div>
                                            @endif
                                            @if ($edit->fr_Title_Four)
                                                <div class="input__group mb-25">
                                                    <label for="exampleInputEmail1">{{ __('Title Four') }}</label>
                                                    <input type="text" class="form-control" id="fr_title_four"
                                                        name="fr_title_four" required=""
                                                        value="{{ $edit->fr_Title_Four }}">
                                                </div>
                                            @endif
                                            @if ($edit->fr_Description_One)
                                                <div class="input__group mb-25">
                                                    <label for="exampleInputEmail1">{{ __('Description One') }}</label>
                                                    <textarea name="fr_description_one" id="summernote5" class="form-control " required="">{{ $edit->fr_Description_One }}</textarea>
                                                </div>
                                            @endif
                                            @if ($edit->fr_Description_Two)
                                                <div class="input__group mb-25">
                                                    <label for="exampleInputEmail1">{{ __('Description One') }}</label>
                                                    <textarea name="fr_description_two" id="summernote6" class="form-control " required="">{{ $edit->fr_Description_Two }}</textarea>
                                                </div>
                                            @endif
                                            @if ($edit->fr_Description_Three)
                                                <div class="input__group mb-25">
                                                    <label for="exampleInputEmail1">{{ __('Description One') }}</label>
                                                    <textarea name="fr_description_three" id="summernote7" class="form-control " required="">{{ $edit->fr_Description_Three }}</textarea>
                                                </div>
                                            @endif
                                            @if ($edit->fr_Description_Four)
                                                <div class="input__group mb-25">
                                                    <label for="exampleInputEmail1">{{ __('Description One') }}</label>
                                                    <textarea name="fr_description_four" id="summernote8" class="form-control " required="">{{ $edit->fr_Description_Four }}</textarea>
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
        $(document).ready(function() {
            $("#summernote5").summernote({
                placeholder: 'Description',
                height: 300
            });
            $('.dropdown-toggle').dropdown();
        });
        $(document).ready(function() {
            $("#summernote6").summernote({
                placeholder: 'Description',
                height: 300
            });
            $('.dropdown-toggle').dropdown();
        });
        $(document).ready(function() {
            $("#summernote7").summernote({
                placeholder: 'Description',
                height: 300
            });
            $('.dropdown-toggle').dropdown();
        });
        $(document).ready(function() {
            $("#summernote8").summernote({
                placeholder: 'Description',
                height: 300
            });
            $('.dropdown-toggle').dropdown();
        });
    </script>
@endpush
