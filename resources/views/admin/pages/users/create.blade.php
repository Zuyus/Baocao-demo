@extends('admin.master', ['menu' => 'admins', 'submenu' => 'add_admin'])
@section('title', isset($title) ? $title : '')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{ __('Add Admin') }}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Home') }}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Admin') }}</li>
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
                                            action="{{ route('admin.store_admin') }}">
                                            @csrf
                                            <input type="hidden" name="is_admin" value="{{ ACTIVE }}">
                                            <div class="input__group mb-25">
                                                <label for="name">{{ __('Name') }}</label>
                                                <input type="text" id="name" name="name" value="{{ old('name') }}"
                                                    placeholder="Name">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="email">{{ __('Email') }}</label>
                                                <input type="email" id="email" name="email" value="{{ old('email') }}"
                                                    placeholder="Email">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="password">{{ __('Password') }}</label>
                                                <input type="password" id="password" name="password"
                                                    value="{{ old('password') }}" placeholder="Password">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="confirm-password">{{ __('Confirm Password') }}</label>
                                                <input type="password" id="confirm-password" name="confirm-password"
                                                    placeholder="Confirm Password">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="role">{{ __('Role') }}</label>
                                                <select name="roles[]" id="role" class="tag_one" multiple>
                                                    @foreach ($roles as $role)
                                                        <option value="{{ $role }}">{{ $role }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="input__button">
                                                <button type="submit" class="btn btn-blue">{{ __('Add') }}</button>
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
    @push('post_scripts')
        <script src="{{ asset('backend/js/admin/products/digital.js') }}"></script>
    @endpush
@endsection
