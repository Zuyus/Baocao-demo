<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') {{ '| ' . $allsettings['app_title'] }}</title>

    <!-- Favicon included -->
    <link rel="shortcut icon" href="{{ asset(IMG_FAVICON_PATH . $allsettings['favicon']) }}" type="image/x-icon">

    <!-- Apple touch icon included -->
    <link rel="apple-touch-icon" href="{{ asset(IMG_FAVICON_PATH . $allsettings['favicon']) }}">

    <!-- All CSS files included here -->
    <link rel="stylesheet" href="{{ asset('admin/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">
    <link href="{{ asset('admin/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/vendor/summernote/summernote-bs4.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('backend/vendor/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendor/select2/css/select2-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/image-preview.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/styles/main.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/summernote.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/summernote-lite.min.css') }}">
    <link href="{{ asset('backend/css/admin/extra.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/cookie-consent.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/toastr.min.css') }}">
    @stack('post_styles')
</head>
