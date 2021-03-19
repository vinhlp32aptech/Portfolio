<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('client.index');
});

Route::get('/admin', function () {
    return view('backend.admin');
})->name('admin');

Route::get('/index', function () {
    return view('client.index');
})->name('index');

Route::get('/about-us', function () {
    return view('client.about');
})->name('about');

Route::get('/contact-us', function () {
    return view('client.contact');
})->name('contact');

Route::get('/our-service', function () {
    return view('client.service');
})->name('service');

Route::get('/sign-in', function () {
    return view('client.signin');
})->name('signin');

Route::get('/sign-up', function () {
    return view('client.signup');
})->name('signup');

Route::get('/profie', function () {
    return view('client.profie');
})->name('profie');

Route::get('/sendemail', 'SendEmailController@index');
Route::post('/sendemail/send', 'SendEmailController@send');

Route::prefix('categories')->group(function (){
    Route::get('/create', [
       'as' => 'categories.create',
        'uses' => 'CategoryController@create'
    ]);
});

Route::prefix('admin')->group(function(){
    Route::get('/index',[
       'as' => 'admin.index',
       'uses' => 'AdminController@index'
    ]);

});



