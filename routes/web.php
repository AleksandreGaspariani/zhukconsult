<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ExperienceController;
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

//Route::get('/paroli', function () {
//    dd(password_hash('esparoliminda','bcrypt'));
//});

Route::get('/',[HomepageController::class, 'index'])->name('home');
Route::get('/about_us',[AboutusController::class, 'index'])->name('about_us');
Route::get('/our_services',[ServicesController::class, 'index'])->name('our_services');
Route::get('/our_experience',[ExperienceController::class, 'index'])->name('our_experience');

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


//    Logout
    Route::get('/logout/{id}',[HomeController::class, 'logout'])->name('logout');
});



Route::get('/our_clients',[PagesController::class, 'our_clients'])->name('our_clients');
Route::get('/testimonials',[PagesController::class, 'testimonials'])->name('testimonials');
Route::get('/contact',[PagesController::class, 'contact'])->name('contact');

//Home Page

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
