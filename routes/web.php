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

//frontend
//test
Route::get('/','frontend\FrontendController@home');
Route::get('/home','frontend\FrontendController@home');

Route::get('/about','frontend\FrontendController@about');

Route::get('/blog','frontend\FrontendController@blog');
Route::get('/blog/{slug}','frontend\FrontendController@blogdetail');


Route::get('contact','frontend\FrontendController@contact');
Route::post('/contact/send','frontend\FrontendController@contactsend');


Route::get('/videos','frontend\FrontendController@videos');


Route::get('/events','frontend\FrontendController@event');


Route::get('/works','frontend\FrontendController@work');


Route::get('fromnews','frontend\FrontendController@news');

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

    //blog
    Route::get('/blog-add','backend\BlogController@blogAdd')->name('blog.add');
    Route::post('/blog-insert','backend\BlogController@blogInsert')->name('blog.insert');
    Route::get('/blog-view','backend\BlogController@blogView')->name('blog.view');
    Route::get('/edit-blog/{id}','backend\BlogController@blogEdit')->name('blog.edit');
    Route::post('/blog-update/{id}','backend\BlogController@blogUpdate')->name('blog.update');
    Route::get('/delete-blog/{id}','backend\BlogController@blogDelete');

    //work
    Route::get('/work-add','backend\WorkController@workAdd')->name('work.add');
    Route::post('/work-insert','backend\WorkController@workInsert')->name('work.insert');
    Route::get('/work-view','backend\WorkController@workView')->name('work.view');
    Route::get('/edit-work/{id}','backend\WorkController@workEdit')->name('work.edit');
    Route::post('/work-update/{id}','backend\WorkController@workUpdate')->name('work.update');
    Route::get('/delete-work/{id}','backend\WorkController@workDelete');

    //video
    Route::get('/videos-add','backend\VideoController@videoAdd')->name('video.add');
    Route::post('/videos-insert','backend\VideoController@videoInsert')->name('video.insert');
    Route::get('/videos-view','backend\VideoController@videoView')->name('video.view');
    Route::get('/edit-videos/{id}','backend\VideoController@videoEdit')->name('video.edit');
    Route::post('/videos-update/{id}','backend\VideoController@videoUpdate')->name('video.update');
    Route::get('/delete-videos/{id}','backend\VideoController@videoDelete')->name('video.delete');

    //about
    Route::get('/abouts-add','backend\AboutController@aboutAdd')->name('about.add');
    Route::post('/abouts-insert','backend\AboutController@aboutInsert')->name('about.insert');
    Route::get('/abouts-view','backend\AboutController@aboutView')->name('about.view');
    Route::get('edit-abouts/{id}','backend\AboutController@aboutEdit')->name('about.edit');
    Route::post('/abouts-update/{id}','backend\AboutController@aboutUpdate')->name('about.update');

    //about timeline
    Route::get('/abouts-add-timeline','backend\AboutTimeLineController@addTimeline')->name('timeline.add');
    Route::post('/abouts-insert-timeline','backend\AboutTimeLineController@timelineInsert')->name('timeline.insert');
    Route::get('/abouts-view-timeline','backend\AboutTimeLineController@timelineView');
    Route::get('/edit-abouts-timeline/{id}','backend\AboutTimeLineController@timelineEdit');
    Route::post('/abouts-update-timeline/{id}','backend\AboutTimeLineController@timelineUpdate');
    Route::get('/delete-abouts-timeline/{id}','backend\AboutTimeLineController@timelineDelete');

    //contact
    Route::get('/contact-view','backend\ContactController@contactView');
    Route::post('/contactinsert/{id}','backend\ContactController@contactInsert');

    //quickmessage
    Route::post('/quickmessage','backend\ContactController@quickmessage');

});
