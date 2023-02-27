<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ContactsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\TestimonialController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Public Routes

Route::get('/',[HomepageController::class, 'index'])->name('home');
Route::get('/about_us',[AboutusController::class, 'index'])->name('about_us');
Route::get('/our_services',[ServicesController::class, 'index'])->name('our_services');
Route::get('/our_experience',[ExperienceController::class, 'index'])->name('our_experience');
Route::get('/testimonials',[TestimonialController::class, 'index'])->name('testimonials');
Route::get('/our_clients',[ClientsController::class, 'index'])->name('our_clients');
Route::get('/contact',[ContactsController::class, 'index'])->name('contact');


Route::middleware(['auth'])->group(function() {

//    Homepage
    Route::get('/home/create',[HomepageController::class , 'create'])->name('home_create_post');
    Route::post('/home/store', [HomepageController::class , 'store'])->name('home_store_post');
    Route::get('/home/delete/{id}', [HomepageController::class , 'destroy'])->name('home_delete_post');
    Route::get('/home/banner/', [HomepageController::class , 'editBanner'])->name('home_edit_banner');
    Route::post('/home/banner/store', [HomepageController::class , 'storeBanner'])->name('home_store_banner');
    Route::get('/home/edit/post/{id}', [HomepageController::class, 'edit'])->name('edit_post');
    Route::post('/home/update/post/{id}', [HomepageController::class , 'update'])->name('home_update_post');

//    About Us
    Route::get('/about_us/create', [AboutusController::class, 'create'])->name('about_us_create');
    Route::post('/about_us/store', [AboutusController::class, 'store'])->name('about_us_store');
    Route::get('/about_us/banner/', [AboutusController::class , 'editBanner'])->name('about_us_edit_banner');
    Route::post('/about_us/banner/store', [AboutusController::class , 'storeBanner'])->name('about_us_store_banner');
    Route::get('/about_us/delete/{id}', [AboutusController::class , 'destroy'])->name('about_us_delete_post');
    Route::get('/about_us/edit/post/{id}', [AboutusController::class , 'edit'])->name('about_us_edit_post');
    Route::post('/about_us/update/post/{id}', [AboutusController::class , 'update'])->name('about_us_update_post');
    Route::get('/about_us/delete/{id}', [AboutusController::class , 'destroy'])->name('about_us_delete_post');
    Route::get('/about_us/footer/edit', [AboutusController::class , 'footerEdit'])->name('about_us_edit_footer');
    Route::post('/about_us/footer/update/{id}', [AboutusController::class , 'footerUpdate'])->name('about_us_update_footer');

//    Services
    Route::get('/our_services/edit/{id}', [ServicesController::class, 'edit'])->name('our_services_edit');
    Route::post('/our_services/update/{id}', [ServicesController::class, 'update'])->name('our_services_update');
    Route::get('/our_services/banner/', [ServicesController::class , 'editBanner'])->name('our_services_edit_banner');
    Route::post('/our_services/banner/store', [ServicesController::class , 'storeBanner'])->name('our_services_store_banner');

//      Experiences
    Route::get('/our_experience/edit/{id}', [ExperienceController::class, 'edit'])->name('our_experience_edit');
    Route::post('/our_experience/update/{id}', [ExperienceController::class, 'update'])->name('our_experience_update');
    Route::get('/our_experience/banner', [ExperienceController::class , 'editBanner'])->name('our_experience_edit_banner');
    Route::post('/our_experience/banner/store', [ExperienceController::class , 'storeBanner'])->name('our_experience_store_banner');

//    Testimonials
    Route::get('/testimonials/create', [TestimonialController::class, 'create'])->name('create_testimonial');
    Route::post('/testimonials/store', [TestimonialController::class, 'store'])->name('store_testimonial');
    Route::get('/testimonials/edit/{id}', [TestimonialController::class, 'edit'])->name('edit_testimonial');
    Route::post('/testimonials/update/{id}', [TestimonialController::class, 'update'])->name('update_testimonial');
    Route::get('/testimonials/delete/{id}', [TestimonialController::class, 'destroy'])->name('delete_testimonial');
    Route::get('/testimonials/banner', [TestimonialController::class , 'editBanner'])->name('testimonial_edit_banner');
    Route::post('/testimonials/banner/store', [TestimonialController::class , 'updateBanner'])->name('testimonial_store_banner');

//    Contact
    Route::get('/contact/edit', [ContactsController::class, 'edit'])->name('edit_contact');
    Route::post('/contact/update', [ContactsController::class, 'update'])->name('update_contact');
    Route::get('/contact/banner', [ContactsController::class , 'editBanner'])->name('contact_edit_banner');
    Route::post('/contact/banner/store', [ContactsController::class , 'updateBanner'])->name('contact_store_banner');

//    Clients
    Route::get('/client/banner', [ClientsController::class , 'editBanner'])->name('client_edit_banner');
    Route::post('/client/banner/store', [ClientsController::class , 'storeBanner'])->name('client_store_banner');

//    Footer
    Route::get('/footer/edit/', [FooterController::class, 'edit'])->name('edit_footer');
    Route::post('/footer/update/', [FooterController::class, 'update'])->name('update_footer');


//    Logout
    Route::get('/logout/{id}',[HomeController::class, 'logout'])->name('logout');
});



Route::get('/our_clients',[PagesController::class, 'our_clients'])->name('our_clients');

//Home Page

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
