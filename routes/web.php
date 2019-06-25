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

// Route::get('/', function () {
//     return view('welcome');
// });
Auth::routes();

Route::get('/', 'HomeController@index')->name('index');
Route::get('/home', 'HomeController@index')->name('index');
Route::get('/search', 'HomeController@search')->name('search');

Route::prefix('admin')->group(function(){
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', ['as'=>'admin-login','uses'=>'Auth\AdminLoginController@login'])->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
	Route::get('/posts', 'AdminController@posts')->name('admin.posts');
	Route::post('/createpost', 'AdminController@create_post')->name('admin.createpost');
	Route::get('/deletepost/{id}', 'AdminController@delete_post')->name('admin.deletepost');
	Route::get('/update/{id}', 'AdminController@update')->name('admin.updatepost');
	Route::post('/updatepost/{id}', 'AdminController@update_post')->name('admin.updatepost');
});



Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('admin/logout', 'AdminController@logout')->name('admin.logout');