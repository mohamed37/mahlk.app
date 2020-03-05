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



Auth::routes();



Route::group(['prefix' => 'admin', 'middelware' => 'auth'], function () {

Route::get('/home', 'HomeController@index')->name('chat');

Route::get('/message/{id}', 'HomeController@getMessage')->name('message');
Route::post('message', 'HomeController@sendMessage');


});

Route::namespace('ForntEnd')->prefix('admin')->group(function () {


    Route::get('website/contact', 'ForntendController@index')->name('contact');
    Route::get('website/gallery', 'ForntendController@gallery')->name('gallery');
    Route::get('website/testimonials', 'ForntendController@show')->name('testimonials');
    Route::post('website/testimonials', 'ForntendController@store')->name('testimonials.store');
    Route::get('website/asks', 'ForntendController@ask')->name('asks');



    Route::get('/welcome','HomeController@welcome')->name('welcome');
    Route::get('website/service', 'HomeController@service')->name('service');
    Route::get('website/why_choose_us', 'HomeController@choose')->name('choose');
    Route::get('website/posts/{id}','HomeController@category')->name('posts');
    Route::get('website/create_posts','HomeController@create')->name('create.posts');






    Route::get('My_Profile', 'HomeController@profile')->name('profile');
    Route::get('My_Post', 'HomeController@post')->name('post');

});

Route::group(['prefix' => 'admin', 'middelware' => 'auth'],function () {


    Route::resource('users', 'BackEnd\UsersController')->except('show');

    Route::resource('posts', 'BackEnd\PostController')->except('show');

    Route::resource('categories', 'BackEnd\CategoriesController')->except('show');

    Route::resource('comments','BackEnd\CommentController')->except('show');

    Route::resource('profiles', 'BackEnd\ProfileController')->except('show');

    Route::resource('contacts', 'BackEnd\ContactController')->except('show');

    Route::resource('asks', 'BackEnd\AskController')->except('show');








});





