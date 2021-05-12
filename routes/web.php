<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PlanController;


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
Route::get('chuko', [UserController::class,'chuko'])->name('chuko');


Route::get('plans', [PlanController::class, 'index'])->name('plans');

Route::get('account', function () {
    return view('user.account');
})->middleware(['auth'])->name('account');

Route::get('help', function () {
    return view('help');
})->name('help');

Route::get('contact', [SiteController::class, 'contact'])->name('contact');

Route::get('affiliate', function () {
    return view('affiliate');
})->name('affiliate');

// User Routes
Route::get('login', function () {
    return view('user.login');
})->middleware('guest')->name('login');

Route::get('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
})->middleware(['auth'])->name('logout');

Route::get('register', function () {
    return view('user.register');
})->middleware('guest')->name('register');

Route::get('/dashboard', [UserController::class,'dashboard'])->middleware(['auth'])->name('dashboard');
Route::post('/editprofile', [UserController::class,'saveprofile'])->middleware(['auth'])->name('save.profile');
Route::post('/links', [UserController::class,'saveprofilelinks'])->middleware(['auth'])->name('save.profile.links');
// Route::get('/dashboard', function () {
//     return view('user.dashboard');
// })->middleware(['auth'])->name('dashboard');

// Admin Routes
Route::get('/admin', [AdminController::class,'dashboard'])->middleware(['auth'])->name('admin');
Route::get('/admin/dashboard', [AdminController::class,'dashboard'])->middleware(['auth'])->name('admindashboard');
Route::get('/admin/plans', [PlanController::class, 'show'])->middleware(['auth'])->name('adminplans');
Route::get('/admin/edit/plan/{id}', [PlanController::class, 'edit'])->middleware(['auth'])->name('editplan');
Route::post('/admin/update/plan/{pid}', [PlanController::class, 'update'])->middleware(['auth'])->name('updateplan');
Route::get('/admin/delete/plan/{id}', [PlanController::class, 'destroy'])->middleware(['auth'])->name('deleteplan');
Route::get('/admin/users', [AdminController::class, 'users'])->middleware(['auth'])->name('users');
Route::get('/admin/purchases', [AdminController::class, 'purchases'])->middleware(['auth'])->name('adminpurchases');

Route::get('/admin/banner', [AdminController::class, 'banner'])->middleware(['auth'])->name('banner');
Route::post('/admin/banner', [AdminController::class, 'editbanner'])->middleware(['auth'])->name('editbanner');
Route::get('/admin/general', [AdminController::class, 'general'])->middleware(['auth'])->name('general');
Route::post('/admin/general', [AdminController::class, 'editgeneral'])->middleware(['auth'])->name('editgeneral');
Route::post('/admin/general/main', [AdminController::class, 'editlogo'])->middleware(['auth'])->name('editlogo');
Route::post('/admin/general/sidebar', [AdminController::class, 'editlogosidebar'])->middleware(['auth'])->name('editlogosidebar');
Route::get('/admin/help', [AdminController::class, 'help'])->middleware(['auth'])->name('admin.help');
Route::post('/admin/help', [AdminController::class, 'edithelp'])->middleware(['auth'])->name('edit.help');

// Route::get('/profile', [UserController::class, 'profile'])->middleware(['auth'])->name('profile');
Route::get('/editprofile', [UserController::class, 'editprofile'])->middleware(['auth'])->name('editprofile');

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

Route::get('/plan/subscribe/{pid}', [UserController::class, 'subscribe'])->middleware('auth')->name('subscribe');
Route::post('/plan/pay', [PlanController::class, 'pay'])->middleware('auth')->name('pay');
Route::get('purchases', [UserController::class, 'purchases'])->middleware('auth')->name('purchases');

Route::get('/tos', function () {
    return view('tos');
})->name('tos');
require __DIR__.'/auth.php';
