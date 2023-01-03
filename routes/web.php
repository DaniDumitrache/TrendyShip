<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Home
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\productsController::class, 'GetProduct']);
Route::get('/search/{categoryes}/{productName}', [App\Http\Controllers\SearchProductController::class, 'Search']);
Route::get('/cart', [App\Http\Controllers\productsController::class, 'cart'])->name("cart");
Route::get('/home2', function () {
    return view("index-3");
});
// Products
Route::get('/ProduseNoi', [App\Http\Controllers\productsController::class, 'NewProducts'])->name("NewProducts");

// Cart
Route::get('/AddToCart/{id}', [App\Http\Controllers\productsController::class, 'AddToCart']);
Route::get('/RemoveToCart/{id}', [App\Http\Controllers\productsController::class, 'RemoveFromCart']);

// Favorite
Route::get('/AddToFavorite/{id}', [App\Http\Controllers\productsController::class, 'AddToFavorite']);
Route::get('/RemoveToFavorite/{id}', [App\Http\Controllers\productsController::class, 'RemoveFromFavorite']);
Route::get('/Favorite', [App\Http\Controllers\productsController::class, 'GetFavoriteData'])->name('favorite');
Route::get('/MoveToFavorite/{id}', [App\Http\Controllers\productsController::class, 'MoveToFavorite']);

// CheckOut
Route::get('/AddDelivery', function () {
    return redirect("/");
});
Route::post('/AddDelivery', [App\Http\Controllers\Checkout::class, 'store'])->name("AddDelivery");
Route::get('/payment', [App\Http\Controllers\productsController::class, 'CheckOut'])->name("Checkout");
Route::post('/PaymentCupon', [App\Http\Controllers\Coupons::class, 'ValidateCupon']);
Route::get('/PaymentCuponClose', [App\Http\Controllers\Coupons::class, 'UnSetCupon']);

// account
Route::get('/account', [App\Http\Controllers\CustomerController::class, 'account'])->name("account");
// Route::get('/ManageAdress', function () {
//     return view('account-manage-address');
// });
Route::get('/ManageAdress', [App\Http\Controllers\ManageAdressController::class, 'index'])->name("ManageAdress");
Route::post('/ManageAdress', [App\Http\Controllers\ManageAdressController::class, 'ValidateEditAdress'])->name("ManageAdress");
Route::get('/ManageProfile', [App\Http\Controllers\ManagePersonalProfileController::class, 'index'])->name("ManageProfile");
Route::post('/ManageProfile', [App\Http\Controllers\ManagePersonalProfileController::class, 'ValidateEditProfile'])->name("ManageProfileValidate");

// order
Route::get('/order', [App\Http\Controllers\CustomerController::class, 'order'])->name("order");
Route::get('/order/{id}', [App\Http\Controllers\CustomerController::class, 'orderDetalis']);

// Contact
Route::get('/contact', function () {
    return view('/contact-us');
})->name("contact");
Route::post('/ContactSent', [App\Http\Controllers\ConatctController::class, 'store']);

// Products
Route::get('sfasfsa/{ProductName}/{id}', [App\Http\Controllers\productsController::class, 'ProductPreview']);

// Auth
Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm']);
Route::post('login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');

// Info
Route::get('aboutUs', function () {
    return view("about-us");
});

// Footer
Route::post('NewsLetter', [App\Http\Controllers\NewsLetter::class, 'ValidateNewsLetter']);
