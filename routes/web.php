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

    return view('pages.cooming-soon');
});

//Route::get('/', function () {
    //$testimonials = \Config::get('testimonial');

    //return view('pages.index', compact('testimonials'));
//});

//Route::get('blog', ['as' => 'blogs.index', 'uses' => 'BlogsController@index']);

////Newsletters
//Route::post('hirlevel', [ 'as' => 'newsletter.subscribe', 'uses' => 'NewslettersController@subscribe' ]);

////Admin
//Route::group(['prefix' => 'admin' ,'middleware' => ['auth']], function () {
    //Route::get('/', 'HomeController@index')->name('home');
//});


//Authentication
Route::get('bejelentkezes', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('bejelentkezes', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');

Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');

Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');

Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

