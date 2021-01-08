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



Route::resource('/','FrontpageController');
 Route::resource('/frontpage','FrontpageController');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::resource('/student','StudentController');

Route::get('/admin',function () {
	return view('admintemplate');
});

Route::resource('/post','PostController');


Route::resource('/course','CourseController');

Route::resource('/record','RegisterController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/user','UserController');

Route::get('/history/{id}','FrontpageController@history')->name('history');

Route::get('/postrecord/{id}','PostController@record')->name('record');