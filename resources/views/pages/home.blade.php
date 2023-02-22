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
        <div class="banner">
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
        @auth()
            <div class="d-flex justify-content-start align-items-center w-100">
                <ul class="d-flex justify-content-center align-items-center p-2">
                    <li class="list-group-item ms-2">You'r logged as user: <span class="text-info p-2 bg-dark rounded">{{Auth::user()->name}}</span></li>
                    <li class="list-group-item ms-2"><a href="home/create" class="btn btn-outline-dark">Add Post</a></li>
                    <li class="list-group-item ms-2"> <a href="{{route('home_edit_banner',['page' => 'home'])}}" class="btn btn-outline-dark">Change Banner</a></li>
                    <li class="list-group-item ms-2"> <a href="/logout/{{Auth::user()->id}}" class="btn btn-outline-danger">Logout</a></li>
                </ul>
            </div>
        @endauth

        <div class="post-space p-2">
            @if(isset($posts))
                @foreach($posts as $post)
                    <div class="post mt-5 mb-5">
                        <div class="row-div">
                            <div class="post-text">
                                {!! $post['text'] !!}
                            </div>
                            <div class="post-image">
                                <img src="../uploads/homeImgs/{{$post['image_name']}}" alt="" width="500px" height="auto">
                            </div>
                        </div>
                        <div class="post-author">
                            <a href="" class="d-flex">
                                <i class="bi bi-person-fill logo"></i>
                                <p>{{$post->user->name}}</p>
                            </a>
                            <a href="" class="d-flex ms-3">
                                <i class="bi bi-clock-fill logo"></i>
                                <p>{{date_format($post->created_at,'F j, Y')}}</p>
                            </a>
                            @auth
                                <style>
                                    @media only screen and (max-width:770px){
                                        .post-author{
                                            flex-direction: column !important;
                                        }
                                    }
                                </style>
                                <a href="/home/delete/{{$post->id}}" class="btn btn-outline-danger ms-3">Delete</a>
                                <a href="/home/edit/post/{{$post->id}}" class="btn btn-outline-info ms-3">Edit</a>
                            @endauth
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>

@endsection
