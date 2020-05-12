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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('index', function () {
    return view('index');
});

//authentication
Auth::routes();
Route::get('logout', 'Auth\LoginController@logout')->name('logoutt');
Route::post('login', 'Auth\LoginController@authenticate')->name('loginn');

Route::get('/home', 'backend\HomeController@index')->name('home');

// manage user backend
Route::get('manage-user', 'Backend\UserController@index')->name('user');
Route::get('manage-user/detail/{id}', 'Backend\UserController@detail')->name('detail');
Route::get('manage-user/edit/{id}', 'Backend\UserController@edit')->name('edit');
Route::patch('manage-user/update/{id}', 'Backend\UserController@update')->name('update');
Route::delete('manage-user/delete/{id}', 'Backend\UserController@delete')->name('delete');
Route::get('manage-user/create','Backend\UserController@create')->name('create');
Route::post('manage-user/store','Backend\USerController@store')->name('store');

// manage post backend
Route::resource('manage-post', 'Backend\PostController');

// manage product backend
Route::resource('manage-product', 'Backend\ProductController');

Route::resource('manage-tag', 'Backend\TagController');

Route::resource('manage-category', 'Backend\CategoryController');
