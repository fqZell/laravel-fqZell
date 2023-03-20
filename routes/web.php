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
//    Route::get('/createForm', 'createForm')->name('createForm');
});

Route::controller(AuthController::class)->prefix('/auth')->as('auth.')->group(function () {

    Route::post('/signUp', 'signUp')->name('signUp');

    Route::post('/signIn', 'signIn')->name('signIn');

    Route::get('/logOut', 'logOut')->name('logOut');
});

Route::controller(ProductsController::class)->prefix('/products')->as('products.')->group(function () {

    Route::middleware(['auth', \App\Http\Middleware\AdminMiddleware::class])->group(function () {

        Route::get('/create', 'createForm')->name('createForm'); // /products/create

        Route::post('/create', 'store')->name('create');

        Route::get('/{product:id}/delete', 'delete')->name('delete'); // /products/id/delete

        Route::get('/{product:id}/update', 'updateForm')->name('updateForm');
        Route::post('/{product:id}/update', 'update')->name('update'); // /products/id/update

    });
});


