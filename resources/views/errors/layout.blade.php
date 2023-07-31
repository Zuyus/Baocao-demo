<!DOCTYPE html>
<html lang="en">
@include('front.layouts.include.head')
@stack('post_css')
<body class="{{session()->has('lang_dir') && session()->get('lang_dir') == 'rtl' ? 'direction-rtl' : 'direction-ltr'}}">
<!-- Preloader Area Start -->
<div id="preloader">
    <div id="status">
        <img src="{{asset(IMG_PRELOADER_PATH.$allsettings['preloader'])}}" alt="img"/>
    </div>
</div>
<!-- Preloader Area End -->

@yield('content')


@include('front.layouts.include.script')
@stack('post_script')
@include('sweetalert::alert')
</body>
</html>
