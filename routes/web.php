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

Route::get('/', function () {

    $arr = [
        'pageTitle'=>'Главная'
    ];

    return view('main', $arr);
});

Route::get('/login', function(){
    $arr = [
        'pageTitle'=>'Вход'
    ];

    return view('login', $arr);
});

Route::get('/reg', function(){
    $arr = [
        'pageTitle'=>'Регистрация'
    ];

    return view('reg', $arr);
});