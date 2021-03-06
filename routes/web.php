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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/service', 'PagesController@service');
Route::get('/contact', 'PagesController@contact');
Route::resource('/sends', 'SendContactEmailController');

Route::get('/projects', 'PagesController@projects');
Route::get('/resources', 'PagesController@resourcess');
Route::get('/blog', 'PagesController@blog');

// separated routes for blog
Route::get('/intro', 'PagesController@intro');
Route::get('/cansave', 'PagesController@cansave');
Route::get('/stepone', 'PagesController@stepone');















Route::fallback(function() {
    return view('error');
});
