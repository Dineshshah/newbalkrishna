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
    Route::get('/deleteadmin&{id}','backend\AdminController@delete');

    //check email
    Route::get('checkemail','backend\AdminController@checkmail')->name('email_available.check');

    //news
    Route::get('/news-add','backend\NewsController@newsAdd')->name('news.add');
    Route::post('/news-insert','backend\NewsController@newsInsert')->name('news.insert');
    Route::get('/news-view','backend\NewsController@newsView')->name('news.view');
    Route::get('/edit-news/{id}','backend\NewsController@newsEdit')->name('news.edit');
    Route::post('/news-update/{id}','backend\NewsController@newsUpdate')->name('news.update');
    Route::get('/delete-news/{id}','backend\NewsController@newsDelete');

    //event
    Route::get('/events-add','backend\EventController@eventAdd')->name('event.add');
    Route::post('/events-insert','backend\EventController@eventInsert')->name('event.insert');
    Route::get('/events-view','backend\EventController@eventView')->name('event.view');
    Route::get('/edit-events/{id}','backend\EventController@eventEdit')->name('event.edit');
    Route::post('/events-update/{id}','backend\EventController@eventUpdate')->name('event.update');
    Route::get('/delete-events/{id}','backend\EventController@eventDelete');



});
