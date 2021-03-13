<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('index');
});

Route::get('/admin', function () {
    return view('home');
})->name('home');

Route::get('/home', function () {
    return view('index');
})->name('index');

Route::get('/about-us', function () {
    return view('about');
})->name('about');

Route::get('/contact-us', function () {
    return view('contact');
})->name('contact');

Route::get('/our-service', function () {
    return view('service');
})->name('service');

Route::get('/sign-in', function () {
    return view('signin');
})->name('signin');

Route::get('/sign-up', function () {
    return view('signup');
})->name('signup');

Route::get('/profie', function () {
    return view('profie');
})->name('profie');

Route::get('/sendemail', 'SendEmailController@index');
Route::post('/sendemail/send', 'SendEmailController@send');

Route::prefix('categories')->group(function (){
    Route::get('/create', [
       'as' => 'categories.create',
        'uses' => 'CategoryController@create'
    ]);
});





