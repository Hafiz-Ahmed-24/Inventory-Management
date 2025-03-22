<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DeshboardController;
use App\Http\Controllers\SaleController;

Route::get('/',[HomeController::class,'homePage']);
Route::get('/dashboard',[DeshboardController::class,'dashboardPage'])->name('dashboardPage');
Route::get('/categoryPage',[CategoryController::class,'categoryPage'])->name('categoryPage');
Route::get('/userRegistration',[UserController::class,'userRegPage'])->name('userRegPage');
Route::get('/userLogin',[UserController::class,'userLoginPage'])->name('userLoginPage');
Route::get('/resetPassword',[UserController::class,'userRestPassPage'])->name('userRestPassPage');
Route::get('/sendOtp',[UserController::class,'userSentOtpPage'])->name('userSentOtpPage');
Route::get('/verifyOtp',[UserController::class,'userVerifyOtpPage'])->name('userVerifyOtpPage');    
Route::get('/userProfile',[UserController::class,'userProfilePage'])->name('userProfilePage');
Route::get('/productPage',[ProductController::class,'productPage'])->name('productPage');
Route::get('/invoicePage',[InvoiceController::class,'invoicePage'])->name('invoicePage');
Route::get('/reportPage',[ReportController::class,'reportPage'])->name('reportPage');
Route::get('/customerPage',[CustomerController::class,'customerPage'])->name('customerPage');
Route::get('/salePage',[SaleController::class,'salePage'])->name('salePage');