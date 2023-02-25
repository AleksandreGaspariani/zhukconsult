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
                    <li><a href="{{route('testimonials')}}">testimonials</a></li>
                    <li><a href="{{route('contact')}}" class="active-btn">contact</a></li>
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
            <li><a href="{{route('testimonials')}}">testimonials</a></li>
            <li><a href="{{route('contact')}}" class="active-btn">contact</a></li>
        </ul>
    </div>
    <!--  -->

    <!-- Banner img -->
    <div class="content">
        <div class="banner-contact">
            <ul class="d-flex flex-column justify-content-start align-items-start d-none" id="dropdown-menu">
                <li><a href="{{route('home')}}">home</a></li>
                <li><a href="{{route('about_us')}}">about us</a></li>
                <li><a href="{{route('our_services')}}">our services</a></li>
                <li><a href="{{route('our_experience')}}">our experience</a></li>
                <li><a href="{{route('our_clients')}}">our clients</a></li>
                <li><a href="{{route('testimonials')}}">testimonials</a></li>
                <li><a href="{{route('contact')}}" class="active-btn">contact</a></li>
            </ul>
            <!-- background image which fills 60vh of the screen and 100% width -->
            <div class="darker"></div>
        </div>

        <div class="contact-div">
            <div class="contact-map">
                @if(isset($contact->image))
                    <a href="{{$contact->image_link}}">
                        <img src="../uploads/contact/{{$contact->image}}" alt="">
                    </a>
                @endif
            </div>
            <div class="contact-text">
                <div class="d-flex align-items-center">
                    <img src="../media/54.jpg" alt="">
                    <b><i><span class="cyan-c">Z</span>huk<span class="cyan-c">C</span>onsult</i></b>
                </div>
                @if(!isset($contact))
                    <a href="/contact/edit">
                        <i class="bi bi-pencil-square"></i>
                    </a>
                @elseif(isset($contact))
                    {!! $contact->text !!}
{{--                    <p>{{$contact->label1}}</p>--}}
{{--                    <p>{{$contact->label2}}</p>--}}
{{--                    <p>{{$contact->phone}}</p>--}}
{{--                    <p>✉️ <a href="mailto:{{$contact->email}}">{{$contact->email}}</a></p>--}}
{{--                    <p>VAT ID: {{$contact->vat}}</p>--}}
{{--                    <p><b>Link:</b> <a href="{{$contact->map_link}}">Google map</a></p>--}}
{{--                    <p><i class="bi bi-geo-alt-fill"></i> test </p>--}}
                    @auth()
                        <a href="contact/edit">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                    @endauth
                @endif
            </div>
        </div>
    </div>

    @auth()
        <div class="" id="adminPanel">
            <ul class="d-flex justify-content-start p-2">
                <a href="{{route('contact_edit_banner',['page' => 'contact'])}}">
                    <i class="bi bi-collection-fill text-info" data-toggle="tooltip" data-placement="right" title="Change Banner"></i>
                </a>
                <a href="/logout/{{Auth::user()->id}}">
                    <i class="bi bi-box-arrow-left text-danger" data-toggle="tooltip" data-placement="right" title="Logout"></i>
                </a>
            </ul>
        </div>
    @endauth
@endsection
