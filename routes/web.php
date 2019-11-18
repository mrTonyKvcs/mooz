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
    $testimonials = \Config::get('testimonial');

    return view('pages.index', compact('testimonials'));
});

Route::get('blog', ['as' => 'articles.index', 'uses' => 'ArticlesController@index']);
Route::get('blog/bejegyzes', ['as' => 'articles.show', 'uses' => 'ArticlesController@show']);

//Newsletters
Route::post('hirlevel', [ 'as' => 'newsletter.subscribe', 'uses' => 'NewslettersController@subscribe' ]);

//Admin
Route::group(['prefix' => 'admin' ,'middleware' => ['auth']], function () {
    Route::get('/', ['as' => 'admin.index', 'uses' => 'AdminController@index']);
    Route::get('blog-bejegyzesek', [ 'as' => 'admin.articles', 'uses' => 'Admin\ArticlesController@index' ]);
    Route::get('uj-blog-bejegyzes-letrehozasa', [ 'as' => 'admin.articles.create', 'uses' => 'Admin\ArticlesController@create' ]);
});


//Authentication
Route::get('bejelentkezes', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('bejelentkezes', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');

Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');

Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');

Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

