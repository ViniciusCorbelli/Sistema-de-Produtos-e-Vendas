<?php

use Illuminate\Support\Facades\Auth;
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

Route::resource('/', 'HomeController');
Auth::routes();

Route::middleware('auth')->group(function () {

    Route::resource('/home', 'DashboardController');
    Route::resource('/users', 'UserController');
    Route::resource('/categories', 'CategoryController');
    Route::resource('/brands', 'BrandController');
    Route::resource('/coupons', 'CouponController');
    Route::resource('/payments', 'PaymentController');
    Route::resource('/products', 'ProductController');
    Route::resource('/sales', 'SaleController');
    
});
