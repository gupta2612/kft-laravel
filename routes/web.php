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

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



Route::view("/","index");

Route::view("/who-we-are/about-us","pages/about");

Route::view("/who-we-are/vision-mission","pages/vision-mission");
Route::view("/who-we-are/where-we-work","pages/where-we-work");
Route::view("/who-we-are/people-behind-work","pages/people-behind-work");
Route::view("/who-we-are/about-us","pages/about");

Route::view("/our-work/health","pages/health");
Route::view("/our-work/education","pages/education");
Route::view("/our-work/livelihood","pages/livelihood");
Route::view("/our-work/privileged-children","pages/privileged-children");
Route::view("/our-work/disaster-relief","pages/disaster-relief");


Route::view("/award-and-media/award-recognitions","pages/award-recognitions");
Route::view("/award-and-media/press-release","pages/press-release");
Route::view("/award-and-media/online-media","pages/online-media");
Route::view("/award-and-media/tv-media","pages/tv-media");
Route::view("/award-and-media/gallery","pages/gallery");
Route::view("/award-and-media/video","pages/video");


Route::view("/blog","pages/blog");
Route::view("/blog/blog-details","pages/blog-details");

Route::view("/contact","pages/contact");

Route::view("/the-kft-team/donate","pages/donate");

Route::view("/create","pages/create-blog");




// Data Insert Route
Route::post('SaveSubscribe', [UserInsertController::class, 'DataSubscribe']);
Route::post('SaveContact', [UserInsertController::class, 'DataContact']);



// Admin Page
Route::view('/auth/login', 'admin/auth/auth-login');
Route::view('/auth/register', 'admin/auth/auth-register');

 Route::view('/admin/home', 'admin/pages/dashboard');
 Route::view('/admin/all-post', 'admin/pages/all-post');
 Route::view('/admin/post-add', 'admin/pages/post-add');
 Route::view('/admin/categories', 'admin/pages/categories');
 Route::view('/admin/media', 'admin/pages/media');
 Route::view('/admin/user-list', 'admin/pages/user-list');
 Route::view('/admin/user-profile', 'admin/pages/user-profile');