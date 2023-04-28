<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\SCDetailController;
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

Route::get('admin', function(){
    return view('admin.layouts.master');
});

Route::get('service',[FrontController::class,'services'])->name('front-services');
Route::get('get-enquiry', [EnquiryController::class,'index'])->name('enquiry-index');
Route::post('enquiry/store', [EnquiryController::class,'store'])->name('enquiry-store');
Route::get('main/home', [FrontController::class,'home'])->name('main-home');
Route::get('search',[FrontController::class,'search'])->name('search');
Route::post('sc-search', [FrontController::class,'findscDetail']);
Route::get('rules', [FrontController::class,'rules'])->name('rules');

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

//Admin SC Details
Route::get('sc-details', [SCDetailController::class,'index'])->name('sc-index');
Route::get('sc-details/manage/{id}', [SCDetailController::class,'manage'])->name('sc-manage');
Route::post('sc-details/store', [SCDetailController::class,'store'])->name('sc-store');

Route::get('admin/enquiries', [EnquiryController::class,'backendEnqList'])->name('admin-enquiries-list');
