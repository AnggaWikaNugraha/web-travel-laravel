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

Route::get('/', function () {
    return view('welcome');
});

// prefix untuk akses url localhost/admin/
// namespace untuk memanggil namespsenya

Route::prefix('admin')
->namespace('Admin')
->group(function(){
      Route::get('/' , 'DasboardController@index')
      ->name('dasboard');
});