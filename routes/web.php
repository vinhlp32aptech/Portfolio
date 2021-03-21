<?php

use Illuminate\Support\Facades\Route;

//client

Route::get('/', 'Frontend\IndexController@index');
Route::get('/index', 'Frontend\IndexController@index')->name('frontend.index');



Route::get('/about-us', 'Frontend\AboutController@index')->name('about');

Route::get('/contact-us', 'Frontend\ContactController@index')->name('contact');

Route::get('/our-service', 'Frontend\ServiceController@index')->name('service');

Route::get('/sign-in', 'Frontend\SigninController@index')->name('signin');

Route::get('/sign-up', 'Frontend\SignupController@index')->name('signup');

Route::get('/profie', 'Frontend\ProfieController@index')->name('profie');

///admin

Route::get('/admin', 'Backend/AdminController@index')->name('admin');


Route::get('/sendemail', 'SendEmailController@index');
Route::post('/sendemail/send', 'SendEmailController@send');

Route::prefix('categories')->group(function (){
    Route::get('/create', [
       'as' => 'categories.create',
        'uses' => 'CategoryController@create'
    ]);
});





