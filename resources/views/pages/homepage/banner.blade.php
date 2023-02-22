@extends('layouts.app')

@section('content')

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
            <li><a href="{{route('home')}}" class="active-btn">home</a></li>
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
        <div class="banner" style="
        background-image: url('https://img.freepik.com/premium-vector/seamless-pattern-with-building-elements-outline-vector-illustration-doodle-style-construction-tools_139411-1606.jpg'); height: 20vh">
            <ul class="d-flex flex-column justify-content-start align-items-start d-none" id="dropdown-menu">
                <li><a href="{{route('home')}}" class="active-btn">home</a></li>
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
    </div>

    <div class='w-100 d-flex justify-content-center' style="min-height: 50vh;padding: 10%">
        <form action="{{route('home_store_banner')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="d-flex flex-column justify-content-center align-items-center">
                <p class="mt-2">Current Image</p>
                <img width="330" height="auto" src="{{asset('media/'.$banner)}}">
                <p class="mt-2">Change Image: </p>
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <input class="form-control" type="file" name="file">
                </div>
            </div>
            <button class="btn btn-outline-primary ms-auto me-auto mt-5" type="submit">Submit</button>
        </form>
    </div>
@endsection
