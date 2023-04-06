<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ServiceController;

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
    return view('pages.index');
});

Route::get('news',function() {
    return view('pages.news');
});

Route::get('admin', function(){
    return view('admin.master');
});

Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

//Admin Dashboard Route
Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');

//Admin Services Route
Route::get('service-manage/{id}',[ServiceController::class,'manage'])->name('service-manage');
Route::get('services-list',[ServiceController::class,'list'])->name('service-list');
Route::post('services-store',[ServiceController::class,'store'])->name('service-store');
