<?php

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
    return view('pages.home');
});

Route::get('/about-us', function () {
    return view('pages.aboutUs');
});

Route::get('/services', function () {
    return view('pages.services');
});

Route::get('/dentalStudio', function () {
    return view('pages.dentalStudio');
});

Route::get('/gallery', function () {
    return view('pages.gallery');
});

Route::get('/contactUs', function () {
    return view('pages.contactUs');
});
