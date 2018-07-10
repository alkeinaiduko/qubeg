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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function() {
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
	Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
});

// ADMIN BLOG CONTROLLER
Route::get('/admin-blogs', 'AdminBlogsController@index')->name('admin.blogs')->middleware('auth:admin');
Route::get('/write-a-blog', 'AdminBlogsController@create')->name('admin.write.blog');
Route::post('/submit-blog', 'AdminBlogsController@store')->name('admin.submit.blog');


// BLOG CONTROLLER
Route::get('/blogs','BlogsController@index')->name('all.blog');

Route::get('/show-blog', 'BlogsController@show')->name('show.blog');
