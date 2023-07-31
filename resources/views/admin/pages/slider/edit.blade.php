@extends('admin.master', ['menu' => 'slider_banner', 'submenu' => 'slider'])
@section('title', 'Edit Slider')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{ __('Edit Slider') }}</h2>
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
                            <form enctype="multipart/form-data" method="POST" action="{{ route('admin.slider.update') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-vertical__item bg-style">
                                            <div class="item-top mb-30">
                                                <h2>{{ langString('en', false) . ':' }}</h2>
                                            </div>
                                            <input type="hidden" name="id" id="id" value="{{ $edit->id }}">
                                            <div class="input__group mb-25">
                                                <label for="exampleInputEmail1">{{ __('Title') }}</label>
                                                <input type="text" id="en_title" name="en_title"
                                                    value="{{ $edit->en_Title }}" placeholder="{{ __('Title') }}">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="exampleInputEmail1">{{ __('Sub Title') }}</label>
                                                <input type="text" id="en_sub_title" name="en_sub_title"
                                                    value="{{ $edit->en_Sub_Title }}" placeholder="{{ __('Sub Title') }}">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="exampleInputEmail1">{{ __('Button Text') }}</label>
                                                <input type="text" id="en_btn_text" name="en_btn_text"
                                                    value="{{ $edit->en_Button_Text }}"
                                                    placeholder="{{ __('Button Text') }}">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="en_description">{{ __('Description') }}</label>
                                                <textarea id="en_description" name="en_description" placeholder="{{ __('Description') }}">{{ $edit->en_Description }}</textarea>
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="thumbnail">{{ __('Thumbnail') }}</label>
                                                <input type="file" class="putImage1" name="thumbnail" id="thumbnail">
                                                <img class="admin_image"
                                                    src="{{ asset(SliderImage() . $edit->Thumbnail) }}" id="target1" />
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="background_image">{{ __('BackGround Image') }}</label>
                                                <input type="file" class="putImage2" name="background_image"
                                                    id="background_image">
                                                <img class="admin_image"
                                                    src="{{ asset(SliderImage() . $edit->Background_Image) }}"
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
                                                <label for="fr_title">{{ __('Title') }}</label>
                                                <input type="text" id="fr_title" name="fr_title"
                                                    value="{{ $edit->fr_Title }}" placeholder="{{ __('Title') }}">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="fr_sub_title">{{ __('Sub Title') }}</label>
                                                <input type="text" id="fr_sub_title" name="fr_sub_title"
                                                    value="{{ $edit->fr_Sub_Title }}" placeholder="{{ __('Sub Title') }}">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="fr_btn_text">{{ __('Button Text') }}</label>
                                                <input type="text" id="fr_btn_text" name="fr_btn_text"
                                                    value="{{ $edit->fr_Button_Text }}"
                                                    placeholder="{{ __('Button Text') }}">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="fr_description">{{ __('Description') }}</label>
                                                <textarea id="fr_description" name="fr_description" placeholder="{{ __('Description') }}">{{ $edit->fr_Description }}</textarea>
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
