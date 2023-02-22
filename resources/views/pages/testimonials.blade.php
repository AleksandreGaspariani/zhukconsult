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
            <div class="testimonial-post">
                <div class="testimonial-image">
                    <img src="../media/11.jpg" alt="">
                </div>
                <div class="testimonial-text">
                    <p>
                        “Ms. Zhukava committed to her task with professionalism and great insight.
                        She was first assigned to lead an evaluation of one of our most important projects.
                        We experienced her as exceptionally thorough and with a deep understanding of the complexity of human
                        rights work in a program including several countries with widely different levels of development.
                        Our satisfaction with her as an evaluator is well reflected by the fact that we called on her again for
                        assistance, when NHC needed an insightful external facilitator for the process of landing our new
                        five-year strategy. I will give Ms. Zhukava my warmest recommendations.”
                    </p>
                </div>
            </div>

            <div class="testimonial-post">
                <div class="testimonial-image">
                    <img src="../media/12.jpg" alt="">
                </div>
                <div class="testimonial-text">
                    <p>
                        “Nadzeya Zhukava’s advice on fundraising, organisation and partnership evaluations and assessments were invaluable and I
                        can highly recommend her. Nadzeya’s clear and structured methodology and her consultative and friendly approach were
                        appreciated by both us and our project partners. She provided useful feedback and constructive recommendations for
                        future projects.”
                    </p>
                </div>
            </div>

            <div class="testimonial-post">
                <div class="testimonial-image">
                    <img src="../media/13.jpg" alt="">
                </div>
                <div class="testimonial-text">
                    <p>
                        “The training program developed by Ms. Nadzeya Zhukava responded to the HFHR’s urgent needs in the sphere of EU proposal
                        writing and contributed to a significant increase in our capacities in this area. I strongly recommend Ms. Nadzeya
                        Zhukava as an excellent expert in the sphere of EU grant and tender procedures, EU proposal writing and evaluation.”
                    </p>
                </div>
            </div>

            <div class="testimonial-post">
                <div class="testimonial-image">
                    <img src="../media/14.jpg" alt="">
                </div>
                <div class="testimonial-text">
                    <p>
                        “I had the pleasure of working with Nadzeya Zhukava who evaluated a project implemented by the International Commission
                        of Jurists. Nadzeya demonstrated a high level of diligence and competence while using her methodology and tools for
                        evaluation. Being very attentive to details, Nadzeya analysed a great number of materials in a very limited amount of
                        time. Her findings were very useful for me personally as they allowed me to look at our own work from a fresh and
                        different perspective. On a personal level, it was indeed a pleasure to communicate with Nadzeya who is a very friendly
                        and easy-going person.”
                    </p>
                </div>
            </div>

            <div class="testimonial-post">
                <div class="testimonial-image">
                    <img src="../media/15.jpg" alt="">
                </div>
                <div class="testimonial-text">
                    <p>
                        “Thank you very much for such an interesting and useful training.”
                    </p>
                    <p>“I am very grateful for the detailed review of our homework. I had difficulty understanding the mission, vision,
                        values as well as the SWOT analysis at first. But with the help of Ms. Zhukava, I understood it all and it was very
                        useful for me.”</p>
                    <p>“The SWOT analysis for strategic planning for our organisation was very useful for me as for the last 3-5 months I
                        had difficulties determining the mission of the organisation. After these sessions, I have been able to do it. In
                        general, all these training sessions were very useful for me.”</p>
                    <p>“I realised that stakeholder analysis plays a big role in the organisation and its strategic planning. The
                        stakeholder analysis helped me determine which organisations are worth working with and which are not. I have lots
                        of new ideas on this issue now. “</p>
                    <p>“Strategic analysis was very difficult for me to understand, but after Ms. Zhukava explained everything in detail, it
                        became clear to me and I understood it all well.”</p>

                </div>
            </div>
        </div>
    </div>
@endsection
