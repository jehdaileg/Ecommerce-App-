<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Backend\CartController;
use App\Http\Controllers\Auth\RegisterController;

use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\OrderController;

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
    return view('welcome');
});

Route::get('/test', function(){
    return view('test');
});


Route::get('/login', [LoginController::class, 'login_view'])->name('login');
Route::post('/login', [LoginController::class , 'store_login'])->name('login');

Route::get('/register', [RegisterController::class, 'register_view'])->name('register');
Route::post('/register', [RegisterController::class, 'storeUser'])->name('register');

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');


Route::resource('/products', ProductController::class)->middleware('auth');

Route::resource('/cart', CartController::class)->except('show');



Route::get('/search/{query}', [ProductController::class, 'search']);

Route::resource('/categories', CategoryController::class);

/* About payement */

Route::get('/order/create', [OrderController::class, 'create'])->name('orders.index');
Route::get('/order/capture', [OrderController::class, 'capture'])->name('orders.capture');







