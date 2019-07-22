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
    return view('home.home');
});

Route::get('home', function () {
    return view('home.home');
});

Route::get('about', function () {
    return view('about.about');
});

Route::get('article', function () {
    return view('article.article');
});

Route::get('article-dynamic', function () {
    return view('article.article-dynamic');
});


Route::get('contact', function () {
    return view('contact.contact');
});

Route::get('videos', function () {
    return view('videos.videos');
});

Route::get('events', function () {
    return view('events.events');
});

Route::get('works', function () {
    return view('works.works');
});

Route::get('fromnews', function () {
    return view('fromnews.fromnews');
});

Route::get('error', function () {
    return view('error.error');
});




Auth::routes();

Route::get('/home-cdadmin', 'HomeController@index')->name('home-cdadmin');

Route::prefix('cd-admin')->group(function(){

    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/loginsubmit','Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('adminlogout','AdminController@adminlogout')->name('adminlogout');

});

Route::group(['prefix '=>'cd-admin' ,'middleware'=>'auth:cd-admin'], function()
{

    Route::get('/dashboard', 'AdminController@index')->name('admin');
    Route::get('/cd-admin', 'AdminController@index')->name('admin');

    //admin
    Route::get('/view-all-admin','backend\AdminController@viewAdmin')->name('viewAdmin');
    Route::post('/admin/insert','backend\AdminController@insert')->name('admin.insert');

    //check email
    Route::get('checkemail','backend\AdminController@checkmail')->name('email_available.check');


});
