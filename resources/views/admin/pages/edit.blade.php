@extends('admin.master', ['menu' => 'pages'])
@section('title', isset($title) ? $title : '')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{ __('Pages') }}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Home') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Pages') }}</li>
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
                                action="{{ route('admin.page.update', encrypt($page->id)) }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-vertical__item bg-style">
                                            <div class="item-top mb-30">
                                                <h2>{{ langString('en', false) . ':' }}</h2>
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="en-title">{{ __('Title') }}</label>
                                                <input type="text" class="form-control" id="en-title" name="en_title"
                                                    placeholder="{{ __('Enter title') }}" required=""
                                                    value="{{ $page->en_title }}">
                                            </div>

                                            <div class="input__group mb-25">
                                                <label for="exampleInputEmail1">{{ __('Description') }}</label>
                                                <textarea name="en_description" id="summernote" class="form-control " placeholder="{{ __('Enter description') }}"
                                                    required="">{{ $page->en_description }}</textarea>
                                            </div>

                                            <div class="input__group mb-25">
                                                <label for="exampleInputEmail1">{{ __('Meta Description') }}</label>
                                                <input type="text" class="form-control" name="meta_description"
                                                    placeholder="{{ __('Enter meta description') }}" required=""
                                                    value="{{ $page->meta_description }}">
                                            </div>

                                            <div class="input__group mb-25">
                                                <label for="exampleInputEmail1">{{ __('Meta Keywords') }}</label>
                                                <input type="text" class="form-control" name="meta_keywords"
                                                    placeholder="{{ __('Enter meta keywords') }}" required=""
                                                    value="{{ $page->meta_keywords }}">
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
                                                <label for="exampleInputEmail1">{{ __('Title') }}</label>
                                                <input type="text" class="form-control" name="fr_title"
                                                    placeholder="{{ __('Enter title') }}" required=""
                                                    value="{{ $page->fr_title }}">
                                            </div>

                                            <div class="input__group mb-25">
                                                <label for="exampleInputEmail1">{{ __('Description') }}</label>
                                                <textarea name="fr_description" id="summernote2" class="form-control " placeholder="{{ __('Enter description') }}"
                                                    required="">{{ $page->fr_description }}</textarea>
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
    </script>
@endpush
