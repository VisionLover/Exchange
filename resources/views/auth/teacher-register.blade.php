<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>users panel</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"
            integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o"
            crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css"/>
    <script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <script src='https://www.google.com/recaptcha/api.js' async defer></script>

    {{--    style pak shavad   --}}
    <style>
        a:hover{
            text-decoration: none !important;
        }
    </style>
    {{--    style pak shavad   --}}


</head>
<body>
<div class="bahrami">
    <div style="text-align: center;margin-top: 10px"><i class="fab fa-autoprefixer logo"></i></div>
    <br><br>

    <form method="POST" action="{{ route('teacher.register.post') }}">
        @csrf

        <div class="form-group row">
            <div class="col-md-11">
                <input id="name" type="text" class="form-control @error('email') is-invalid @enderror" name="name"
                       value="{{ old('email') }}" required autocomplete="email" autofocus>
                <span class="floating-label">نام</span>
                @error('name')
                <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-11">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                       value="{{ old('email') }}" required autocomplete="email" autofocus>
                <span class="floating-label">ایمیل</span>
                @error('email')
                <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-11">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                       name="password" required autocomplete="current-password">
                <span class="floating-label">رمز عبور</span>
                @error('password')
                <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-11">
                <input id="password-confirm" type="password" class="form-control"
                       name="password_confirmation" required autocomplete="new-password">
                <span class="floating-label">تکرار رمز عبور</span>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-11">
                <div class="g-recaptcha" data-sitekey="{{env('RECAPTCHA_SITE_KEY')}}" data-theme="dark"></div>
                @if ($errors->has('g-recaptcha-response'))
                    <span class="invalid-feedback" style="display: block;">
                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
            </span>
                @endif
            </div>
        </div>

        <button type="submit" class="submit">
            {{ __('register') }}
        </button>
        <br>

        <div style="text-align: center">
            <a class="signin" href="{{route('teacher.login')}}"> ورود به سایت&nbsp;</a>
            <p class="member"> قبلا ثبت نام کردی اید؟ </p>
        </div>
    </form>
</div>
</body>
</html>

