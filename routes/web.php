<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductsController;
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

Route::controller(IndexController::class)->group(function () {
   Route::get('/', 'home')->name('home');
   Route::get('/signUp', 'signUp')->name('signUp');
    Route::get('/signIn', 'signIn')->name('signIn');
});

Route::controller(AuthController::class)->prefix('/auth')->as('auth.')->group(function () {
    Route::post('/signUp', 'signUp')->name('signUp');

    Route::post('/signIn', 'signIn')->name('signIn');

    Route::get('/logOut', 'logOut')->name('logOut');
});

Route::controller(ProductsController::class)->prefix('/products')->as('products.')->group(function () {
   Route::get('/create', 'createForm')->name('createForm');

   Route::post('/create', 'store')->name('create');
});


