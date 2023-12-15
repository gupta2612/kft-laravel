<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserInsertController;

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

