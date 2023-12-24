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


Route::get("/blog","BlogViewController@KftBlogView")->name('blog');
Route::get("/blog/blog-details/{id}/{slug}","BlogViewController@KftBlogDetailsView");

Route::view("/contact","pages/contact");

Route::view("/the-kft-team/donate","pages/donate");

Route::view("/create","pages/create-blog");
// Data Insert Route
Route::post('SaveSubscribe', [UserInsertController::class, 'DataSubscribe']);
Route::post('SaveContact', [UserInsertController::class, 'DataContact']);



// Admin Page
Route::namespace('Admin')->prefix('admin')->name('admin/')->group(function(){
    Route::namespace('Auth')->middleware('guest:admin')->group(function(){
        Route::get('login', 'AuthenticatedSessionController@create')->name('login');
        Route::post('login', 'AuthenticatedSessionController@store')->name('adminlogin');

        Route::get('register', 'RegisteredUserController@create')->name('register');
        Route::post('register', 'RegisteredUserController@store')->name('adminregister');
    });
    Route::middleware('admin')->group(function () {
        Route::get('dashboard', 'HomeController@index')->name('dashboard');

        Route::get('all-post', 'BlogViewController@BlogView')->name('all-post');
        Route::get('all-post/desc', 'BlogViewController@BlogViewDESC')->name('desc');
        Route::get('all-post/asc', 'BlogViewController@BlogViewASC')->name('asc');

        Route::get('post-add', 'AllPostController@create')->name('post-add');
        Route::post('post-add', 'AllPostController@store')->name('addpost');
        Route::get('edit-post/{id}', 'BlogViewController@BlogEditUpdate')->name('edit-post');
        Route::post('edit-post', 'AllPostController@BlogViewUpdate')->name('update-post');

        Route::get('delete/{id}', 'AllPostController@DeleteStore')->name('delete');

        //Route::view('post-add', 'admin/pages/post-add');
        Route::view('categories', 'admin/pages/categories');
        // Route::view('media', 'admin/pages/media');
        Route::get('media', 'BlogViewController@MediaView')->name('media');
        Route::view('user-list', 'admin/pages/user-list');
        Route::view('user-profile', 'admin/pages/user-profile');
    });
    Route::post('logout', 'Auth\AuthenticatedSessionController@destroy')->name('logout');
});
