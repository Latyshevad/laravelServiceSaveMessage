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

use App\Message;

Route::get('/', function () {

    $messages = Message::getAllMessages();

    $arr = [
        'pageTitle'=>'Главная',
        'messages'=>$messages
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