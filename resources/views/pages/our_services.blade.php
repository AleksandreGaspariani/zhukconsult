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
                    <li><a href="{{route('our_services')}}" class="active-btn">our services</a></li>
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
            <li><a href="{{route('about_us')}}">about us</a></li>
            <li><a href="{{route('our_services')}}" class="active-btn">our services</a></li>
            <li><a href="{{route('our_experience')}}">our experience</a></li>
            <li><a href="{{route('our_clients')}}">our clients</a></li>
            <li><a href="{{route('testimonials')}}">testimonials</a></li>
            <li><a href="{{route('contact')}}">contact</a></li>
        </ul>
    </div>
    <!--  -->

    <!-- Banner img -->
    <div class="content">
        <div class="banner-our-services">
            <ul class="d-flex flex-column justify-content-start align-items-start d-none" id="dropdown-menu">
                <li><a href="{{route('home')}}">home</a></li>
                <li><a href="{{route('about_us')}}">about us</a></li>
                <li><a href="{{route('our_services')}}" class="active-btn">our services</a></li>
                <li><a href="{{route('our_experience')}}">our experience</a></li>
                <li><a href="{{route('our_clients')}}">our clients</a></li>
                <li><a href="{{route('testimonials')}}">testimonials</a></li>
                <li><a href="{{route('contact')}}">contact</a></li>
            </ul>
            <!-- background image which fills 60vh of the screen and 100% width -->
            <div class="darker"></div>
        </div>

        <div class="services-posts mt-5">

            @if(isset($services))
                @foreach($services as $service)
                    {!! $service->text !!}
                    @auth()
                        <a href="/our_services/edit/{{$service->id}}" class="ms-3">
                            <i class="bi bi-pencil-square text-black" data-toggle="tooltip" data-placement="right" title="Edit" style="font-size: 22px"></i>
                        </a>
                    @endauth
                @endforeach
            @endif


{{--            <div class="service-post">--}}
{{--                <ul>--}}
{{--                    <li><b>External monitoring and evaluation</b> of international donor-funded projects/programmes for grant-making and implementing organisations</li>--}}
{{--                    <li><b>Ex-ante evaluation / assessment of funding (project) proposals</b> for grant-making (donor) organisations</li>--}}
{{--                    <li><b>Tailor-made advice, training and mentorship on organisational development; fundraising; monitoring, evaluation and learning (MEL)</b> for nonprofit (NGOs) and international organisations</li>--}}
{{--                    <li><b>Targeted policy & context analysis and project formulation</b>, including sector and baseline studies, background reports and needs assessments.</li>--}}
{{--                </ul>--}}

{{--                <p class="f-roboto"><b>Our thematic specialisation</b> is human rights; rule of law; gender equality & women’s rights; migration & asylum and other aspects of democracy building and good governance.</p>--}}
{{--            </div>--}}

{{--            <p class="f-roboto"><b>Our geographic coverage</b> to date:</p>--}}

{{--            <div class="service-post">--}}
{{--                <ul>--}}
{{--                    <li><b>European Union / EU</b> Members States.</li>--}}
{{--                    <li><b>Europe outside the EU</b>: Armenia, Azerbaijan, Belarus, Georgia, Moldova, Ukraine.</li>--}}
{{--                    <li><b>Russia, Turkey and Central Asia</b> including Kazakhstan, Kyrgyzstan, Tajikistan, Uzbekistan and desk work on Turkmenistan.</li>--}}
{{--                    <li><b>Sub-Saharan Africa</b> (French and English speaking): Djibouti, Ethiopia, Malawi, Senegal, South Africa, Tanzania; desk work on other countries of the region.</li>--}}
{{--                    <li><b>Asia</b>: India, Pakistan, Bangladesh and desk work on other countries in South-East Asia.</li>--}}
{{--                </ul>--}}
{{--            </div>--}}
        </div>
    </div>

    @auth()
        <div class="" id="adminPanel">
            <ul class="d-flex justify-content-start p-2">
                <a href="{{route('our_services_edit_banner',['page' => 'our_services'])}}">
                    <i class="bi bi-collection-fill text-info" data-toggle="tooltip" data-placement="right" title="Change Banner"></i>
                </a>
                <a href="/logout/{{Auth::user()->id}}">
                    <i class="bi bi-box-arrow-left text-danger" data-toggle="tooltip" data-placement="right" title="Logout"></i>
                </a>
            </ul>
        </div>
    @endauth

@endsection
