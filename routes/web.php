<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', 'HomeController@index')->name('Home');
Route::get('/detail/{slug}', 'DetailController@index')->name('Detail');
// Route::get('/checkout', 'CheckoutController@index')->name('Checkout');
// Route::get('/checkout/succes', 'CheckoutController@succes')->name('Checkout-succes');

Route::prefix('checkout')
    ->group(function () {
        Route::get('/{id}', 'CheckoutController@index')
            ->name('Checkout')
            ->middleware(['auth','verified']);

        Route::post('/{id}', 'CheckoutController@process')
        ->name('checkout_process')
        ->middleware(['auth','verified']);

        Route::post('/create/{detail_id}', 'CheckoutController@create')
        ->name('checkout-create')
        ->middleware(['auth','verified']);


        Route::get('/checkout/remove/{detail_id}', 'CheckoutController@remove')
        ->name('checkout-remove')
        ->middleware(['auth','verified']);

        Route::get('/succes', 'CheckoutController@succes')
            ->name('Checkout-succes')
            ->middleware(['auth','verified']);
    });

// prefix untuk akses url localhost/admin/
// namespace untuk memanggil namespsenya

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware('auth', 'admin')
    ->group(function () {
        Route::get('/', 'DasboardController@index')
            ->name('dasboard');
        Route::resource('travel-package', 'TravelPackagesController');
        Route::resource('gallery', 'GalleryController');
        Route::resource('transaction', 'transactionController');
    });
Auth::routes(['verify' => true]);
