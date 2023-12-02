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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});

Route::get('/who-we-are/about-us', function () {
    return view('pages/about');
});

Route::get('/who-we-are/vision-mission', function () {
    return view('pages/vision-mission');
});

Route::get('/who-we-are/where-we-work', function () {
    return view('pages/where-we-work');
});

Route::get('/who-we-are/people-behind-work', function () {
    return view('pages/people-behind-work');
});

Route::get('/our-work/health', function () {
    return view('pages/health');
});

Route::get('/our-work/education', function () {
    return view('pages/education');
});

Route::get('/our-work/livelihood', function () {
    return view('pages/livelihood');
});

Route::get('/our-work/privileged-children', function () {
    return view('pages/privileged-children');
});

Route::get('/our-work/disaster-relief', function () {
    return view('pages/disaster-relief');
});

Route::get('/award-and-media/award-recognitions', function () {
    return view('pages/award-recognitions');
});

Route::get('/award-and-media/press-release', function () {
    return view('pages/press-release');
});

Route::get('/award-and-media/online-media', function () {
    return view('pages/online-media');
});

Route::get('/award-and-media/tv-media', function () {
    return view('pages/award-recognitions');
});

Route::get('/award-and-media/gallery', function () {
    return view('pages/gallery');
});

Route::get('/award-and-media/video', function () {
    return view('pages/video');
});

Route::get('/blog', function () {
    return view('pages/blog');
});

Route::get('/blog/blog-details', function () {
    return view('pages/blog-details');
});

Route::get('/contact', function () {
    return view('pages/contact');
});

// ---------------------------------

Route::get('/the-kft-team/donate', function () {
    return view('pages/donate');
});

Route::get('/test', function () {
    return view('pages/test');
});