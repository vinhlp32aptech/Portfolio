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

Route::get('/admin', 'Backend\AdminController@index')->name('admin');

Route::get('/inbox', 'Backend\InboxController@index')->name('inbox');

Route::get('/compose', 'Backend\ComposeController@index')->name('compose');

Route::get('/read', 'Backend\ReadController@index')->name('read');

Route::get('/account', 'Backend\AccountController@index')->name('account');

Route::get('/hashtag', 'Backend\HashtagController@index')->name('hashtag');

Route::get('/profile', 'Backend\ProfileController@index')->name('profile');

Route::get('/social-network', 'Backend\SocialNetWorkController@index')->name('social-network');

Route::get('/rating', 'Backend\RatingController@index')->name('rating');

Route::get('/view', 'Backend\ViewController@index')->name('view');

Route::get('/follow', 'Backend\FollowController@index')->name('follow');

    Route::get('/create', [
        'as' => 'backend.manage-web.menus.create',
        'uses' => 'MenuController@create'
    ]);
    Route::post('/store', [
        'as' => 'backend.manage-web.menus.store',
        'uses' => 'MenuController@store'
    ]);

/*  Social web       */
Route::prefix('socials')->group(function (){
    Route::get('/', [
        'as' => 'socials.social',
        'uses' => 'SocialController@social'
    ]);
    Route::get('/create', [
        'as' => 'backend.manage-web.socials.create',
        'uses' => 'SocialController@create'
    ]);
    Route::post('/store', [
        'as' => 'backend.manage-web.socials.store',
        'uses' => 'SocialController@store'
    ]);
});

/*  footer       */
Route::prefix('footers')->group(function (){
    Route::get('/', [
        'as' => 'footers.footer',
        'uses' => 'FooterController@footer'
    ]);
    Route::get('/create', [
        'as' => 'backend.manage-web.footers.create',
        'uses' => 'FooterController@create'
    ]);
    Route::post('/store', [
        'as' => 'backend.manage-web.footers.store',
        'uses' => 'FooterController@store'
    ]);
});





Route::get('/sendemail', 'SendEmailController@index');
Route::post('/sendemail/send', 'SendEmailController@send');

Route::prefix('categories')->group(function (){
    Route::get('/create', [
       'as' => 'categories.create',
        'uses' => 'CategoryController@create'
    ]);
});

/*  menu       */
Route::prefix('menus')->group(function () {
    Route::get('/', [
        'as' => 'menus.menu',
        'uses' => 'MenuController@menu'
    ]);
});




