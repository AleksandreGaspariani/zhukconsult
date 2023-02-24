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
                    <li><a href="{{route('about_us')}}">about us</a></li>
                    <li><a href="{{route('our_services')}}">our services</a></li>
                    <li><a href="{{route('our_experience')}}">our experience</a></li>
                    <li><a href="{{route('our_clients')}}">our clients</a></li>
                    <li><a href="{{route('testimonials')}}" class="active-btn">testimonials</a></li>
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
            <li><a href="{{route('about_us')}}">about us</a></li>
            <li><a href="{{route('our_services')}}">our services</a></li>
            <li><a href="{{route('our_experience')}}">our experience</a></li>
            <li><a href="{{route('our_clients')}}">our clients</a></li>
            <li><a href="{{route('testimonials')}}" class="active-btn">testimonials</a></li>
            <li><a href="{{route('contact')}}">contact</a></li>
        </ul>
    </div>
    <!--  -->

    <!-- Banner img -->
    <div class="content">
        <div class="banner-testimonials">
            <ul class="d-flex flex-column justify-content-start align-items-start d-none" id="dropdown-menu">
                <li><a href="{{route('home')}}">home</a></li>
                <li><a href="{{route('about_us')}}">about us</a></li>
                <li><a href="{{route('our_services')}}">our services</a></li>
                <li><a href="{{route('our_experience')}}">our experience</a></li>
                <li><a href="{{route('our_clients')}}">our clients</a></li>
                <li><a href="{{route('testimonials')}}" class="active-btn">testimonials</a></li>
                <li><a href="{{route('contact')}}">contact</a></li>
            </ul>
            <!-- background image which fills 60vh of the screen and 100% width -->
            <div class="darker"></div>
        </div>

        <div class="testimonial-posts">
            @if(isset($testimonials))
{{--                @dd($testimonials)--}}
                @foreach($testimonials as $testimonial)
                    @auth()
                        <div class="w-100 d-flex justify-content-start">
                            <a href="/testimonials/edit/{{$testimonial->id}}" class="ms-3">
                                <i class="bi bi-pencil-square text-black" data-toggle="tooltip" data-placement="right" title="Edit Testimonial" style="font-size: 22px"></i>
                            </a>
                            <a href="/testimonials/delete/{{$testimonial->id}}" class="ms-3">
                                <i class="bi bi-x-square text-danger" data-toggle="tooltip" data-placement="right" title="Delete Testimonial" style="font-size: 22px"></i>
                            </a>
                        </div>
                    @endauth
                    <div class="testimonial-post">
                        <div class="testimonial-image">
                            <img src="{{asset('uploads/testimonials/'.$testimonial->image)}}" alt="">
                        </div>
                        <div class="testimonial-text">
                            <p>
                                {!! $testimonial->text !!}
                            </p>
                        </div>
                    </div>
                @endforeach
                <hr>
            @endif
        </div>
    </div>

    @auth()
        <div class="" id="adminPanel">
            <ul class="d-flex justify-content-start p-2">
                <a href="testimonials/create">
                    <i class="bi bi-file-post text-info" data-toggle="tooltip" data-placement="right" title="Add post"></i>
                </a>
                <a href="{{route('testimonial_edit_banner',['page' => 'testimonial'])}}">
                    <i class="bi bi-collection-fill text-info" data-toggle="tooltip" data-placement="right" title="Change Banner"></i>
                </a>
                <a href="/logout/{{Auth::user()->id}}">
                    <i class="bi bi-box-arrow-left text-danger" data-toggle="tooltip" data-placement="right" title="Logout"></i>
                </a>
            </ul>
        </div>
    @endauth

@endsection
