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

//authentication
Auth::routes();
Route::get('logout', 'Auth\LoginController@logout')->name('logoutt');
Route::post('login', 'Auth\LoginController@authenticate')->name('loginn');

Route::get('/home', 'backend\HomeController@index')->name('home');