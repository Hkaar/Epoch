<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['namespace' => "App\Http\Controllers"], function () {
    Route::get('/', 'HomeController@welcome')->name('/');

    Route::get('home', 'HomeController@index')->name('home');
    Route::get('browse', 'HomeController@browse')->name('browse');
});

Route::group(['namespace' => "App\Http\Controllers\Auth"], function () {
    Route::group(['middleware' => 'guest'], function () {
        Route::get('login', 'LoginController@show')->name('login');
        Route::post('login', 'LoginController@login')->name('login.post');

        Route::get('register', 'RegisterController@show')->name('register');
        Route::post('register', 'RegisterController@register')->name('register.post');
    });

    Route::group(['middleware' => 'auth'], function () {
        Route::get('logout', 'LogoutController@perform')->name('logout');
    });
});
