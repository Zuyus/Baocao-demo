<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$allsettings['app_title']}}</title>

    <!-- Favicon included -->
    <link rel="shortcut icon" href="{{asset(IMG_FAVICON_PATH.'favicon.png')}}" type="image/x-icon">

    <!-- Apple touch icon included -->
    <link rel="apple-touch-icon" href="{{asset(IMG_FAVICON_PATH.'favicon.png')}}">

    <!-- All CSS files included here -->
    <link rel="stylesheet" href="{{asset('admin/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/styles/main.css')}}">

</head>

<body>
<!-- Login Content -->
<div class="main-content__area bg-img">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10">
                <div class="authentication__item">
                    <div class="authentication__item__logo">
                        <a href="{{route('front')}}">
                            <img src="{{asset(IMG_LOGO_PATH.$allsettings['main_logo'])}}" alt="icon">
                        </a>
                    </div>
                    <div class="authentication__item__title mb-30">
                        <h2>{{__('Sign In')}}</h2>
                    </div>
                    <div class="authentication__item__content">
                        <form action="{{ route('login.post') }}" method="post">
                            @csrf
                            <div class="input__group mb-25">
                                <label>{{__('Email Address')}}</label>
                                <div class="input-overlay">
                                    <input type="text" name="email" id="email" value="{{ app()->environment('local') ? 'admin@gmail.com' : old('email') }}" placeholder="{{__('Enter email address')}}">
                                    <div class="overlay">
                                        <img src="{{asset('admin/images/icons/mail.svg')}}" alt="icon">
                                    </div>
                                </div>
                            </div>
                            <div class="input__group mb-20">
                                <label>{{__('Password')}}</label>
                                <div class="input-overlay">
                                    <input type="password" name="password" id="pass" value="{{ app()->environment('local') ? '123456' : '' }}" placeholder="{{__('Enter password')}}">
                                    <div class="overlay">
                                        <img src="{{asset('admin/images/icons/lock.svg')}}" alt="icon">
                                    </div>
                                    <div class="password-visibility">
                                        <img src="{{asset('admin/images/icons/eye.svg')}}" alt="icon">
                                    </div>
                                </div>
                            </div>
                            <div class="input__group mb-27">
                                <button type="submit" class="btn btn-blue">{{__('Sign In')}}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login Content -->
<script src="{{asset('admin/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('admin/js/popper.min.js')}}"></script>
<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/js/custom/password-show.js')}}"></script>
@include('sweetalert::alert')
</body>
</html>
