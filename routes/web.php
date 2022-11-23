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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', 'App\Http\Controllers\productsController@GetProduct');
Route::get('/search/{categoryes}/{productName}', [App\Http\Controllers\SearchProductController::class, 'Search']);
Route::get('/AddToCart/{id}', [App\Http\Controllers\productsController::class, 'AddToCart']);
Route::get('/cart', [App\Http\Controllers\productsController::class, 'cart']);

Route::get('login', 'App\Http\Controllers\Auth\LoginController@showLoginForm');
Route::post('login', 'App\Http\Controllers\Auth\LoginController@login')->name('login');