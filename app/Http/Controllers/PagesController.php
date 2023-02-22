<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
//    public function home()
//    {
//        return view('pages.home');
//    }
    public function about_us()
    {
        return view('pages.about_us');
    }
    public function our_services()
    {
        return view('pages.our_services');
    }
    public function our_experience()
    {
        return view('pages.our_experience');
    }
    public function our_clients()
    {
        return view('pages.our_clients');
    }
    public function testimonials()
    {
        return view('pages.testimonials');
    }
    public function contact()
    {
        return view('pages.contact');
    }
}
