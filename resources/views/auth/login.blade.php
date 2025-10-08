<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>NewsBit - News Magazine Newspaper HTML Template</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Favicon-->
    <link rel="shortcut icon" href="{{ asset('asset/front/images/favicon.ico" type="image/x-icon') }}">
    <link rel="icon" href="{{ asset('asset/front/images/favicon.ico" type="image/x-icon') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('asset/front/images/apple-touch-icon.png') }}">
    
    <!-- THEME CSS
	================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('asset/front/plugins/bootstrap/css/bootstrap.min.css') }}">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{ asset('asset/front/plugins/font-awesome/css/font-awesome.min.css') }}">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="{{ asset('asset/front/plugins/slick-carousel/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/front/plugins/slick-carousel/slick-theme.css') }}">
    <!-- manin stylesheet -->
    <link rel="stylesheet" href="{{ asset('asset/front/css/style.css') }}">
</head>
<body>


<section class="login-signup section-padding">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-7">
                <div class="login">
                    <div class="text-center"><a href="index.html"><img src="{{ asset('asset/front/images/logos/logo.png')}}" alt="" class="img-fluid"></a></div>

                    <h3 class="mt-4">Login Here</h3>
                    <p class="mb-5">Enter your valid mail & password</p>
                    <form method="POST" action="{{ route('login') }}" class="login-form row">
                         @csrf
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="loginemail">Email</label>
                                <input type="text" id="loginemail" class="form-control" name="email" placeholder="Enter mail" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="loginPassword">Password</label>
                                <input type="password" id="loginPassword" class="form-control" name="password" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-primary" type="submit">Login</button>

                            <p class="mt-5 mb-0">Not a member yet? <a href="signup.html">Register Here</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- THEME JAVASCRIPT FILES
================================================== -->
<!-- initialize jQuery Library -->
<script src="{{ asset('asset/front/plugins/jquery/jquery.js')}}"></script>
<!-- Bootstrap jQuery -->
<script src="{{ asset('asset/front/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- Slick Slider -->
<script src="{{ asset('asset/front/plugins/slick-carousel/slick.min.js')}}"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script src="{{ asset('asset/front/plugins/google-map/gmap.js')}}"></script>
<!-- main js -->
<script src="{{ asset('asset/front/js/custom.js')}}"></script>

</body>
</html>
{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ms-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> --}}
