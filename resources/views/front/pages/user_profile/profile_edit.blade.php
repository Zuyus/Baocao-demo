@extends('front.layouts.master')
@section('title', isset($title) ? $title : 'Home')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')
@section('content')
    <!-- breadcrumb area start here  -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-wrap text-center">
                <h2 class="page-title">{{ __('Edit Profile') }}</h2>
                <ul class="breadcrumb-pages">
                    <li class="page-item"><a class="page-item-link" href="{{ route('front') }}">{{ __('Home') }}</a></li>
                    <li class="page-item">{{ __('Edit Profile') }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here  -->

    <!-- Profile Page area start here  -->
    <div class="profile-page-area section">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    @include('front.layouts.include.user_profile_sidebar', ['menu' => 'profile'])
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="user-profile-right-part">
                        <div class="user-profile-content-box edit-user-profile-page-box">

                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-profile" type="button" role="tab"
                                        aria-controls="pills-profile" aria-selected="true">
                                        {{ __('Change Profile Info') }}</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-password-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-password" type="button" role="tab"
                                        aria-controls="pills-password" aria-selected="false">
                                        {{ __('Change Password') }}</button>
                                </li>
                            </ul>

                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-profile" role="tabpanel"
                                    aria-labelledby="pills-profile-tab">
                                    <div class="profile-form mt-5">
                                        <form enctype="multipart/form-data" action="{{ route('user.profile.update') }}"
                                            method="post">
                                            @csrf
                                            <div class="profile-top mb-4">
                                                <div class="d-flex align-items-center">
                                                    <div class="profile-image">
                                                        <img class="avater-image" id="target1"
                                                            src="{{ file_exists(AdminProfilePicture() . Auth::user()->image) ? (isset(Auth::user()->image) ? asset(AdminProfilePicture() . Auth::user()->image) : Avatar::create(Auth::user()->name)->toBase64()) : Auth::user()->image }}"
                                                            alt="img">
                                                        <div class="custom-fileuplode">
                                                            <label for="fileuplode" class="file-uplode-btn"><i
                                                                    class="fas fa-camera"></i></label>
                                                            <input type="file" id="fileuplode" name="image"
                                                                class="putImage1">
                                                        </div>
                                                    </div>
                                                    <div class="author-info">
                                                        <h3>{{ $user->name }}</h3>
                                                    </div>
                                                </div>
                                                @error('image')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="form-group">
                                                        <label for="fname">{{ __('Name') }}</label>
                                                        <input type="text" class="form-control" id="name"
                                                            name="name" value="{{ $user->name }}">
                                                        @error('name')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="form-group">
                                                        <label for="date">{{ __('Date of Brith') }}</label>
                                                        <input type="date" class="form-control" id="date"
                                                            name="dob" value="{{ $user->DOB }}">
                                                        @error('dob')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="form-group">
                                                        <label for="Gender">{{ __('Gender') }}</label>
                                                        <select class="form-control" id="Gender" name="gender">
                                                            <option value="Male"
                                                                {{ $user->Gender == 'Male' ? 'selected' : '' }}>
                                                                {{ __('Male') }}</option>
                                                            <option value="Female"
                                                                {{ $user->Gender == 'Female' ? 'selected' : '' }}>
                                                                {{ __('Female') }}</option>
                                                        </select>
                                                        @error('gender')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="form-group">
                                                        <label for="phone">{{ __('Phone') }}</label>
                                                        <input type="text" class="form-control" id="phone"
                                                            name="number" value="{{ $user->Number }}">
                                                        @error('number')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="form-group">
                                                        <label for="lname">{{ __('Street Address') }}</label>
                                                        <input type="text" class="form-control" id="street_address"
                                                            name="street_address" value="{{ $user->street_address }}">
                                                        @error('street_address')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror

                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="form-group">
                                                        <label for="email">{{ __('Email') }}</label>
                                                        <input type="email" class="form-control" id="email"
                                                            name="email" value="{{ $user->email }}">
                                                        @error('email')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="about-info">{{ __('About') }}</label>
                                                        <textarea class="form-control info-box" id="about-info" name="about" rows="3"
                                                            placeholder="{{ __('Say something about yourself') }}">{{ $user->About }}</textarea>
                                                        @error('about')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-button text-center">
                                                        <button type="submit"
                                                            class="form-btn primary-btn">{{ __('Update') }}</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-password" role="tabpanel"
                                    aria-labelledby="pills-password-tab">
                                    <form class="change-password-form mt-5" method="post"
                                        action="{{ route('user.profile.change.password') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="password" class="form-control" id="CurrentPassword"
                                                        name="current_password"
                                                        placeholder="{{ __('Current Password') }}" required="" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="password" class="form-control" id="NewPassword"
                                                        name="new_password" placeholder="{{ __('New Password') }}"
                                                        required="" />
                                                    @error('new_password')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="password" class="form-control" id="ConfirmPassword"
                                                        name="confirm_password"
                                                        placeholder="{{ __('Confirm Password') }}" required="" />
                                                    @error('confirm_password')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div>
                                                <div class="form-button text-center">
                                                    <button type="submit"
                                                        class="form-btn primary-btn">{{ __('Save Change') }}</button>
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
        </div>
    </div>
    <!-- Profile Page area end here  -->
@endsection
