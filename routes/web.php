<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
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

Route::view('/', 'welcome')->name('/');

Route::view('about', 'company.about')->name('about');
Route::view('careers', 'company.careers')->name('careers');

Route::view('terms-of-service', 'company.tos')->name('tos');
Route::view('privacy-policy', 'company.privacy-policy')->name('privacy-policy');

Route::middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'show'])->name('login');
    Route::post('login', [LoginController::class, 'login'])->name('login.post');

    Route::get('register', [RegisterController::class, 'show'])->name('register');
    Route::post('register', [RegisterController::class, 'register'])->name('register.post');
});

Route::middleware('auth')->group(function () {
    Route::view('home', 'home')->name('home');

    Route::view('settings/public-profile', 'auth.settings.public-profile')->name('settings.public-profile');
    Route::view('settings/account', 'auth.settings.account')->name('settings.account');
    Route::view('settings/appearance', 'auth.settings.appearance')->name('settings.appearance');
    Route::view('settings/privacy-controls', 'auth.settings.privacy-controls')->name('settings.privacy-controls');
    Route::view('settings/security', 'auth.settings.security')->name('settings.security');

    Route::get('logout', [LogoutController::class, 'perform'])->name('logout');
});

Route::redirect('settings', 'settings/public-profile');
