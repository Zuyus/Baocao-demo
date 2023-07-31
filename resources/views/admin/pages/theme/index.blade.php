@extends('admin.master', ['menu' => 'theme_management', 'submenu' => 'theme'])
@section('title', 'Theme')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{ __('Theme Management') }}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Home') }}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Theme Management') }}</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="customers__area bg-style mb-30">
                    <form enctype="multipart/form-data" method="POST" action="{{ route('admin.theme.update') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-vertical__item bg-style">
                                    <div class="row" role="group" aria-label="Basic radio toggle button group">

                                        <div class="col-md-6 col-lg-4">
                                            <h2>Theme One</h2>
                                            <div class="theme-varient-wrap">
                                                <input type="radio" class="btn-check" name="theme"
                                                    {{ $allsettings['theme'] == 'one' ? 'checked' : '' }} value="one"
                                                    id="themeone" autocomplete="off">
                                                <label class="btn btn-outline-primary" for="themeone">
                                                    <div id="screen1" class="screen"
                                                        style="background-image: url({{ asset('admin/images/home-varient/home1.png') }})">
                                                    </div>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4">
                                            <h2>Theme Two</h2>
                                            <div class="theme-varient-wrap">
                                                <input type="radio" class="btn-check" name="theme"
                                                    {{ $allsettings['theme'] == 'two' ? 'checked' : '' }} value="two"
                                                    id="themetwo" autocomplete="off">
                                                <label class="btn btn-outline-primary" for="themetwo">
                                                    <div id="screen2" class="screen"
                                                        style="background-image: url({{ asset('admin/images/home-varient/home2.png') }})">
                                                    </div>
                                                </label>
                                            </div>
                                        </div>

                                        {{-- <div class="col-md-6 col-lg-4">
                                            <h2>Theme Three</h2>
                                            <div class="theme-varient-wrap">
                                                <input type="radio" class="btn-check" name="theme"
                                                    {{ $allsettings['theme'] == 'three' ? 'checked' : '' }} value="three"
                                                    id="themethree" autocomplete="off">
                                                <label class="btn btn-outline-primary" for="themethree">
                                                    <div id="screen3" class="screen"
                                                        style="background-image: url({{ asset('admin/images/home-varient/home3.png') }})">
                                                    </div>
                                                </label>
                                            </div>
                                        </div> --}}
                                    </div>

                                    <div class="input__button d-flex justify-content-end mt-3">
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
@endsection
