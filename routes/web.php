<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'MessageController@show');

Route::post('/','MessageController@insert');

Route::get('/reg_success', 'Auth\RegisterController@success');

Route::get('/logout', function () { // Стандартный logout не заработал, сделал свой.
    Auth::logout();
    return redirect('/');
});

Auth::routes();
