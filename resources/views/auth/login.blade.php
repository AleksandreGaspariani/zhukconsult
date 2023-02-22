@extends('layouts.app')

@section('content')
        <!-- header logo etc. -->
        <div class="w-mob-logo justify-content-center align-items-center w-100">
            <a href="../pages/index.html"><img src="../media/cropped-cropped-2022-10-18_111454-e1666689446199.png" alt="" width="200px" height="auto"></a>
        </div>
        <div class="cheader">
            <div class="cheader-image">
                <a href="../pages/index.html"><img src="../media/logo.jpg" alt="" width="200px" height="auto"></a>
            </div>
            <div class="cheader-phrase">
                <p>"Happiness is a by-product of an effort to make someone else happy."<br>
                    Gretta Palmer, Author and Editor</p>
            </div>
            <ul class="dropdown-ul d-flex justify-content-end align-items-center">
                <li>
                    <a href="#" style="color: black"><i class="bi bi-list" id="dropdown-button"></i></a>
                </li>
            </ul>
        </div>
        <!-- end header logo etc. -->

        <!-- Header navbar -->
        <div class="container d-flex justify-content-end align-items-center header-navbar">
            <ul class="d-flex justify-content-end align-items-center">
                <li><a href="{{route('home')}}">home</a></li>
                <li><a href="{{route('about_us')}}">about us</a></li>
                <li><a href="{{route('our_services')}}">our services</a></li>
                <li><a href="{{route('our_experience')}}">our experience</a></li>
                <li><a href="{{route('our_clients')}}">our clients</a></li>
                <li><a href="{{route('testimonials')}}">testimonials</a></li>
                <li><a href="{{route('contact')}}">contact</a></li>
            </ul>
        </div>
        <!--  -->

        <!-- Banner img -->
        <div class="content">
            <div class="banner" style="background-image: url('https://images.ctfassets.net/tldhjvq55hjd/5tKHQOwNioQ4DCWZeLUw9a/45e80041809f23e52a112b76992711f9/api-webinar-web_1_2x.png?w=1200&h=563&q=70&fm=png&bg=white');">
                <ul class="d-flex flex-column justify-content-start align-items-start d-none" id="dropdown-menu">
                    <li><a href="{{route('home')}}">home</a></li>
                    <li><a href="{{route('about_us')}}">about us</a></li>
                    <li><a href="{{route('our_services')}}">our services</a></li>
                    <li><a href="{{route('our_experience')}}">our experience</a></li>
                    <li><a href="{{route('our_clients')}}">our clients</a></li>
                    <li><a href="{{route('testimonials')}}">testimonials</a></li>
                    <li><a href="{{route('contact')}}">contact</a></li>
                </ul>
                <!-- background image which fills 60vh of the screen and 100% width -->
                <div class="darker"></div>
            </div>

            <style>
                @media only screen and (max-width:770px){
                    .banner {
                        background-position: 30%;
                    }
                }
            </style>

            <div class="mt-5 mb-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">{{ __('Login') }}</div>

                                <div class="card-body">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="row mb-3">
                                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-6 offset-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Remember Me') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-0">
                                            <div class="col-md-8 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Login') }}
                                                </button>

                                                @if (Route::has('password.request'))
                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                        {{ __('Forgot Your Password?') }}
                                                    </a>
                                                @endif
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

@endsection
