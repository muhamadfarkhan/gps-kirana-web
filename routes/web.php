<?php

use Illuminate\Support\Facades\Route;

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

Route::get('login', 'App\Http\Controllers\LoginController@index')->name('login');
Route::post('login_proc', 'App\Http\Controllers\LoginController@login')->name('login_proc');
Route::get('logout', 'App\Http\Controllers\LoginController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
    Route::get('/user', 'App\Http\Controllers\HomeController@user')->name('user');
});