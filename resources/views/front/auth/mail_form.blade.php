<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('Reply') }}</title>
</head>
<body>
<h1>{{ __('Forget Password')}}</h1>

{{ __('You can reset password from bellow link:')}}
<a href="{{ route('reset.password.get', $token) }}">{{ __('Reset Password')}}</a>
</body>
</html>
