@extends('layouts.app')

@section('content')
    @include('inc.error')
    <!-- header logo etc. -->
    <div class="w-mob-logo justify-content-center align-items-center w-100">
        <a href="{{route('home')}}"><img src="../media/cropped-cropped-2022-10-18_111454-e1666689446199.png" alt="" width="200px" height="auto"></a>
    </div>
    <div class="cheader">
        <div class="cheader-image">
            <a href="{{route('home')}}"><img src="../media/logo.jpg" alt="" width="250px" height="auto"></a>
        </div>
        <div class="d-flex flex-column justify-content-start">
            <div class="cheader-phrase">
                <p class="ms-4 text-weight-bold">"Happiness is a by-product of an effort to make someone else happy."<br>
                    Gretta Palmer, Author and Editor</p>
            </div>

            <ul class="dropdown-ul d-flex justify-content-end align-items-center">
                <li>
                    <a href="#" style="color: black"><i class="bi bi-list" id="dropdown-button"></i></a>
                </li>
            </ul>

            <div class="container d-flex justify-content-start header-navbar" id="lessThan1125px">
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
        </div>
    </div>
    <!-- end header logo etc. -->

    <!-- Header navbar -->
    <div class="container d-flex justify-content-end align-items-center header-navbar d-none" id="moreThan1225px">
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

        <div class="abu-posts mt-5">
            @if(isset($posts))
                @foreach($posts as $post)
                    <div class="abu-post justify-content-center align-items-start mt-5 w-100">
                        <div class="d-flex justify-content-center">
                            <img src="../uploads/aboutUsImgs/{{$post->image_name}}" alt="" width="" height="auto">
                        </div>
                        <div class="abu-post-text">
                            <p>{!! $post->text !!}</p>
                            <p>
                                Contact: <a href="mailto:{{$post->email}}">{{$post->email}}</a>
                            </p>
                            @auth()
                                <div class="d-flex justify-content-start p-0 m-0">
                                    <a href="/about_us/delete/{{$post->id}}" class="">
                                        <i class="bi bi-trash text-black" style="font-size: 18px" data-toggle="tooltip" data-placement="right" title="Delete Post"></i>
                                    </a>
                                    <a href="/about_us/edit/post/{{$post->id}}" class="ms-3">
                                        <i class="bi bi-pencil-square text-black" data-toggle="tooltip" data-placement="right" style="font-size: 18px" aria-label="Edit Post" data-bs-original-title="Edit Post"></i>
                                    </a>
                                </div>
                            @endauth
                        </div>
                    </div>
                @endforeach
            @endif
                <div class="und-post-area d-flex justify-content-center">
                    <div class="und-post" style="padding: 5vh 5%">

                        @if(isset($footer))
                            {!! $footer->footer_text !!}
                            <div class="d-flex justify-content-center align-items-center">
                                <a href="mailto:{{$footer->footer_email}}">{{$footer->footer_email}}</a>
                            @auth()
                                <a href="/about_us/footer/edit" class="ms-3">
                                    <i class="bi bi-pencil-square text-black" data-toggle="tooltip" data-placement="right" title="Edit Text" style="font-size: 18px"></i>
                                </a>
                            @endauth
                            </div>

                        @endif

                    </div>
                </div>

        </div>
    </div>

    @auth()
        <div class="" id="adminPanel">
            <ul class="d-flex justify-content-start p-2">
                <a href="/about_us/create">
                    <i class="bi bi-file-post text-info" data-toggle="tooltip" data-placement="right" title="Add post"></i>
                </a>
                <a href="{{route('about_us_edit_banner',['page' => 'about_us'])}}">
                    <i class="bi bi-collection-fill text-info" data-toggle="tooltip" data-placement="right" title="Change Banner"></i>
                </a>
                <a href="/logout/{{Auth::user()->id}}">
                    <i class="bi bi-box-arrow-left text-danger" data-toggle="tooltip" data-placement="right" title="Logout"></i>
                </a>
            </ul>
        </div>
    @endauth
@endsection
