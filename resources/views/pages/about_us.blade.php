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
            <li><a href="{{route('about_us')}}" class="active-btn">about us</a></li>
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
        <div class="banner-about-us">
            <ul class="d-flex flex-column justify-content-start align-items-start d-none" id="dropdown-menu">
                <li><a href="{{route('home')}}">home</a></li>
                <li><a href="{{route('about_us')}}" class="active-btn">about us</a></li>
                <li><a href="{{route('our_services')}}">our services</a></li>
                <li><a href="{{route('our_experience')}}">our experience</a></li>
                <li><a href="{{route('our_clients')}}">our clients</a></li>
                <li><a href="{{route('testimonials')}}">testimonials</a></li>
                <li><a href="{{route('contact')}}">contact</a></li>
            </ul>
            <!-- background image which fills 60vh of the screen and 100% width -->
            <div class="darker"></div>
        </div>

        @auth()
            <div class="d-flex justify-content-start align-items-center w-100" id="apanel">
                <ul class="d-flex justify-content-center align-items-center p-2">
                    <li class="list-group-item ms-2">You'r logged as user: <span class="text-info p-2 bg-dark rounded">{{Auth::user()->name}}</span></li>
                    <li class="list-group-item ms-2"><a href="/about_us/create" class="btn btn-outline-dark">Add Post</a></li>
                    <li class="list-group-item ms-2"> <a href="{{route('about_us_edit_banner',['page' => 'about_us'])}}" class="btn btn-outline-dark">Change Banner</a></li>
                    <li class="list-group-item ms-2"> <a href="/logout/{{Auth::user()->id}}" class="btn btn-outline-danger">Logout</a></li>
                </ul>
            </div>
        @endauth

        <div class="abu-posts mt-5">
            @if(isset($posts))
                @foreach($posts as $post)
                    <div class="abu-post justify-content-center align-items-start mt-5">
                        <div class="d-flex justify-content-center">
                            <img src="../uploads/aboutUsImgs/{{$post->image_name}}" alt="" width="300px" height="auto">
                        </div>
                        <div class="abu-post-text">
                            <p>{!! $post->text !!}</p>
                            <p>
                                Contact: <a href="mailto:{{$post->email}}">{{$post->email}}</a>
                            </p>
                            @auth()
                                <div class="d-flex justify-content-start p-0 m-0">
                                    <a href="/about_us/delete/{{$post->id}}" class="btn btn-outline-danger ms-3">Delete</a>
                                    <a href="/about_us/edit/post/{{$post->id}}" class="btn btn-outline-info ms-3">Edit</a>
                                </div>
                            @endauth
                        </div>
                    </div>
                @endforeach
            @endif

        </div>

        <div class="und-post-area d-flex justify-content-center">
            <div class="und-post" style="padding: 10vh 0vh">

                @if(isset($footer))
                    {!! $footer->footer_text !!}

                    <a href="mailto:{{$footer->footer_email}}">{{$footer->footer_email}}</a>

                @auth()
                    <div class="d-flex justify-content-start p-0 m-0">
                        <a href="/about_us/footer/edit" class="btn btn-outline-info ms-3">Edit</a>
                    </div>
                @endauth

                @endif

            </div>
        </div>
    </div>
@endsection
