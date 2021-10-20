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


Auth::routes(['register' => true]);

// Rotte per auth
Route::middleware('auth')->name('admin.')->prefix('admin')->namespace('Admin')->group(function () {

    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('posts', 'PostController');
    Route::get('/{any}', function () {
        abort(404);
    });
});

// Gestione rotte diverse da admin de
Route::get('{any?}', function () {
    return view('guest.home');
})->where('any', '.*');
