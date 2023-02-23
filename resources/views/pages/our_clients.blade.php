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
                    <li><a href="{{route('our_clients')}}" class="active-btn">our clients</a></li>
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
            <li><a href="{{route('about_us')}}">about us</a></li>
            <li><a href="{{route('our_services')}}">our services</a></li>
            <li><a href="{{route('our_experience')}}">our experience</a></li>
            <li><a href="{{route('our_clients')}}"  class="active-btn">our clients</a></li>
            <li><a href="{{route('testimonials')}}">testimonials</a></li>
            <li><a href="{{route('contact')}}">contact</a></li>
        </ul>
    </div>
    <!--  -->

    <!-- Banner img -->
    <div class="content">
        <div class="banner-our-clients">
            <ul class="d-flex flex-column justify-content-start align-items-start d-none" id="dropdown-menu">
                <li><a href="{{route('home')}}">home</a></li>
                <li><a href="{{route('about_us')}}">about us</a></li>
                <li><a href="{{route('our_services')}}">our services</a></li>
                <li><a href="{{route('our_experience')}}">our experience</a></li>
                <li><a href="{{route('our_clients')}}" class="active-btn">our clients</a></li>
                <li><a href="{{route('testimonials')}}">testimonials</a></li>
                <li><a href="{{route('contact')}}">contact</a></li>
            </ul>
            <!-- background image which fills 60vh of the screen and 100% width -->
            <div class="darker"></div>
        </div>

        <div class="client-posts mt-5 mb-5">
            <div class="crow">
                <div class="ccolumn">
                    <a href="https://www.iphronline.org/"><img src="../media/1.jpg"></a>
                    <a href="https://www.nhc.no/"><img src="../media/2.jpg"></a>
                </div>
                <div class="ccolumn">
                    <a href="https://www.ifes.org/"><img src="../media/14 (1).jpg"></a>
                    <a href="https://european-union.europa.eu/index_en"><img src="../media/3.jpg"></a>
                    <a href="https://www.idea.int/"><img src="../media/11 (1).jpg"></a>
                </div>
                <div class="ccolumn">
                    <a href="https://www.hfhr.pl/en/foundation/"><img src="../media/5.jpg" height="80px"></a>
                    <a href="https://www.icj.org/"><img src="../media/17.jpg"></a>
                    <a href="https://eap-csf.eu/"><img src="../media/15-1.jpg"></a>
                </div>
                <div class="ccolumn">
                    <a href="https://www.eptisa.com/en/"><img src="../media/8-1.jpg"></a>
                    <a href="https://healthright.org/"><img src="../media/heal.jpg"></a>
                    <a href="https://www.particip.de/"><img src="../media/6.jpg"></a>
                </div>
                <div class="ccolumn">
                    <a href="https://www.ice-org.eu/"><img src="../media/16.jpg"></a>
                    <a href="https://www.gfa-group.de/"><img src="../media/10-1.jpg"></a>
                    <a href="https://www.niras.com/"><img src="../media/4.jpg"></a>
                </div>
                <div class="ccolumn">
                    <a href="https://www.bseurope.com/"><img src="../media/12 (1).jpg"></a>
                    <a href="https://www.arsprogetti.org/"><img src="../media/ASR.jpg"></a>
                </div>
                <div class="ccolumn">
                    <a href="http://www.komis.be/"><img src="../media/komis.jpg"></a>
                    <a href="https://en.altairasesores.es/"><img src="../media/13 (1).jpg"></a>
                </div>
            </div>
        </div>
    </div>

    @auth()
        <div class="" id="adminPanel">
            <ul class="d-flex justify-content-start p-2">
                <a href="#">
                    <i class="bi bi-file-post text-info" data-toggle="tooltip" data-placement="right" title="Add post"></i>
                </a>
                <a href="{{route('about_us_edit_banner',['page' => 'our_clients'])}}">
                    <i class="bi bi-collection-fill text-info" data-toggle="tooltip" data-placement="right" title="Change Banner"></i>
                </a>
                <a href="/logout/{{Auth::user()->id}}">
                    <i class="bi bi-box-arrow-left text-danger" data-toggle="tooltip" data-placement="right" title="Logout"></i>
                </a>
            </ul>
        </div>
    @endauth
@endsection
