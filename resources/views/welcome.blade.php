<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login - Bryan Migas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="{{ asset('assets/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets/css/metisMenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets/css/slicknav.min.css') }}">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="{{ asset('assets/assets/css/typography.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets/css/default-css.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets/css/responsive.css') }}">
    <!-- modernizr css -->
    <script src="{{ asset('assets/assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- preloader area start -->
<div id="preloader">
    <div class="loader"></div>
</div>
<!-- preloader area end -->
<!-- login area start -->
<div class="login-area">
    <div class="container">
        <div class="login-box ptb--100">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="login-form-head">
                    <h4>Sign In</h4>
                    <p>Hello there, Sign in and start managing your Admin Template</p>
                </div>
                <div class="login-form-body">
                    <div class="form-gp">
                        <label for="email">Email address</label>
{{--                        <input type="email" id="exampleInputEmail1">--}}
                        <input id="email" type="email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <i class="ti-email"></i>
                        <div class="text-danger"></div>
                    </div>
                    <div class="form-gp">
                        <label for="password">Password</label>
{{--                        <input type="password" id="exampleInputPassword1">--}}
                        <input id="password" type="password" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <i class="ti-lock"></i>
                        <div class="text-danger"></div>
                    </div>
                    <div class="row mb-4 rmber-area">
                        <div class="col-6">
                            <div class="custom-control custom-checkbox mr-sm-2">
{{--                                <input type="checkbox" class="custom-control-input" id="customControlAutosizing">--}}
                                <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label" for="customControlAutosizing">Remember Me</label>
                            </div>
                        </div>
                        <div class="col-6 text-right">
                            <a href="#">Forgot Password?</a>
                        </div>
                    </div>
                    <div class="submit-btn-area">
                        <button id="form_submit" type="submit">Submit <i class="ti-arrow-right"></i></button>
{{--                        <div class="login-other row mt-4">--}}
{{--                            <div class="col-6">--}}
{{--                                <a class="fb-login" href="#">Log in with <i class="fa fa-facebook"></i></a>--}}
{{--                            </div>--}}
{{--                            <div class="col-6">--}}
{{--                                <a class="google-login" href="#">Log in with <i class="fa fa-google"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                    <div class="form-footer text-center mt-5">
                        <p class="text-muted">Don't have an account? <a href="{{ route('reg') }}">Sign up</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- login area end -->

<!-- jquery latest version -->
<script src="{{ asset('assets/assets/js/vendor/jquery-2.2.4.min.js') }}"></script>
<!-- bootstrap 4 js -->
<script src="{{ asset('assets/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/assets/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('assets/assets/js/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('assets/assets/js/jquery.slicknav.min.js') }}"></script>

<!-- others plugins -->
<script src="{{ asset('assets/assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/assets/js/scripts.js') }}"></script>
</body>

</html>
