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






Route::get('/sendemail', 'SendEmailController@index');
Route::post('/sendemail/send', 'SendEmailController@send');

Route::prefix('categories')->group(function (){
    Route::get('/create', [
       'as' => 'categories.create',
        'uses' => 'CategoryController@create'
    ]);
});





