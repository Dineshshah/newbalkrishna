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