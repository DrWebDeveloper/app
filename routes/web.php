<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\SiteController;


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
    return view('home');
})->name('home');


Route::get('/lang/{locale}', [SiteController::class,'lang'])->name('lang');

Route::get('plans', function () {
    return view('plans');
})->name('plans');

Route::get('account', function () {
    return view('account');
})->name('account');

Route::get('help', function () {
    return view('help');
})->name('help');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('affiliate', function () {
    return view('affiliate');
})->name('affiliate');

// User Routes
Route::get('login', function () {
    return view('user.login');
})->middleware('guest')->name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/profile', function () {
    return view('user.profile');
})->name('profile');
Route::get('/editprofile', function () {
    return view('user.editprofile');
})->name('editprofile');
Route::get('/settings', function () {
    return view('user.settings');
})->name('settings');
Route::get('/appointments', function () {
    return view('appointments');
})->name('appointments');

// Form Routes
Route::get('/form/create', function () {
    return view('form.create');
})->name('create');

// Pages Routes
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('policy');
Route::get('/tos', function () {
    return view('tos');
})->name('tos');
require __DIR__.'/auth.php';
