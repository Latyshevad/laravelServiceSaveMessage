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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function (Message $messages) {
    $userInfo = (Auth::check()) ? Auth::user()->name : '';

    $arr = [
        'messages' => $messages::getAllMessages(),
        'userName' => $userInfo
    ];

    return view('main', $arr);
});

Route::post('/', function (Request $request) {
    $result = Message::insertMessage(Auth::user()->id, $request->input('textMessage'));
    if ($result == true) { // Проверка на запись в базу.
        return redirect('/');
    } else {
        return 'Error'; // Тут стоит кинуть исключение. Пока просто говорим что есть ошибка.
    }
})->middleware('auth');

Route::get('/reg_success', function () {
    $userInfo = (Auth::check()) ? Auth::user()->name : '';

    $arr = [
        'userName' => $userInfo
    ];
    return view('reg_success',$arr);
});

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});

Auth::routes();
