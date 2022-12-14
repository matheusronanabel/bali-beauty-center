<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('pages.comingsoon');
});

Route::get('/home', function () {
    return view('pages.home');
});

Route::get('/about', function (){
    return view('pages.about');
});

Route::get('/services', function (){
    return view('pages.services');
});

Route::get('/blog', function (){
    return view('pages.blogpost');
});

Route::get('/about-us', function (){
    return view('pages.about');
});

Route::get('/contact-us', function (){
    return view('pages.contact');
});

Route::get('/bookappointment', function (){
    return view('pages.bookappointment');
});

Route::get('/maps', function (){
    return view('pages.googlemaps');
});