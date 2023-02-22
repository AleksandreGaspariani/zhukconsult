@extends('layouts.app')

@section('content')
    <!-- header logo etc. -->
    <div class="w-mob-logo justify-content-center align-items-center w-100">
        <a href="{{route('home')}}"><img src="../media/cropped-cropped-2022-10-18_111454-e1666689446199.png" alt="" width="200px" height="auto"></a>
    </div>
    <div class="cheader">
        <div class="cheader-image">
            <a href="{{route('home')}}"><img src="../media/logo.jpg" alt="" width="250px" height="auto"></a>
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
            <li><a href="{{route('our_experience')}}" class="active-btn">our experience</a></li>
            <li><a href="{{route('our_clients')}}">our clients</a></li>
            <li><a href="{{route('testimonials')}}">testimonials</a></li>
            <li><a href="{{route('contact')}}">contact</a></li>
        </ul>
    </div>
    <!--  -->

    <!-- Banner img -->
    <div class="content">
        <div class="banner-our-experience">
            <ul class="d-flex flex-column justify-content-start align-items-start d-none" id="dropdown-menu">
                <li><a href="{{route('home')}}">home</a></li>
                <li><a href="{{route('about_us')}}">about us</a></li>
                <li><a href="{{route('our_services')}}">our services</a></li>
                <li><a href="{{route('our_experience')}}" class="active-btn">our experience</a></li>
                <li><a href="{{route('our_clients')}}">our clients</a></li>
                <li><a href="{{route('testimonials')}}">testimonials</a></li>
                <li><a href="{{route('contact')}}">contact</a></li>
            </ul>
            <!-- background image which fills 60vh of the screen and 100% width -->
            <div class="darker"></div>
        </div>

        @auth()
            <div class="d-flex justify-content-start align-items-center w-100">
                <ul class="d-flex justify-content-center align-items-center p-2">
                    <li class="list-group-item ms-2">You'r logged as user: <span class="text-info p-2 bg-dark rounded">{{Auth::user()->name}}</span></li>
                    <li class="list-group-item ms-2"><a href="home/create" class="btn btn-outline-dark disabled">Add Post</a></li>
                    <li class="list-group-item ms-2"> <a href="{{route('our_experience_edit_banner',['page' => 'our_experiences'])}}" class="btn btn-outline-dark">Change Banner</a></li>
                    <li class="list-group-item ms-2"> <a href="/logout/{{Auth::user()->id}}" class="btn btn-outline-danger">Logout</a></li>
                </ul>
            </div>
        @endauth

        <div class="experience-posts mt-5">

            @if(isset($experiences))
                @foreach($experiences as $experience)

                    <div class="w-100 d-flex justify-content-center flex-column align-items-start">
                        {!! $experience->text !!}
                    </div>


                    @auth()
                        <div>
                            <a href="/our_experience/edit/{{$experience->id}}" class="btn btn-outline-info mb-5">Edit</a>
                        </div>
                    @endauth
                @endforeach
            @endif

        </div>
    </div>
@endsection
