@extends('admin.master', ['menu' => 'site_content', 'submenu' => 'content_social_link'])
@section('title', isset($title) ? $title : '')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{ __('Edit Social Link') }}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Home') }}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Social Link') }}</li>
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
                                            action="{{ route('admin.social.link.update') }}">
                                            @csrf
                                            <input type="hidden" name="id" id="id" value="{{ $edit->id }}">
                                            <div class="input__group mb-25">
                                                <label for="exampleInputEmail1">{{ __('Facebook') }}</label>
                                                <input type="text" class="form-control" id="facebook" name="facebook"
                                                    value="{{ $edit->Facebook }}" placeholder="{{ __('Facebook') }}">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="exampleInputEmail1">{{ __('Twitter') }}</label>
                                                <input type="text" class="form-control" id="twitter" name="twitter"
                                                    value="{{ $edit->Twitter }}" placeholder="{{ __('Twitter') }}">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="exampleInputEmail1">{{ __('Linkedin') }}</label>
                                                <input type="text" class="form-control" id="linkedin" name="linkedin"
                                                    value="{{ $edit->Linkedin }}" placeholder="{{ __('Linkedin') }}">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="exampleInputEmail1">{{ __('Skype') }}</label>
                                                <input type="text" class="form-control" id="skype" name="skype"
                                                    value="{{ $edit->Skype }}" placeholder="{{ __('Skype') }}">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="exampleInputEmail1">{{ __('Instagram') }}</label>
                                                <input type="text" class="form-control" id="instagram" name="instagram"
                                                    value="{{ $edit->Instagram }}"
                                                    placeholder="{{ __('Instagram') }}">
                                            </div>
                                            <div class="input__button">
                                                <button type="submit" class="btn btn-blue">{{ __('Update') }}</button>
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
