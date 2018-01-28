<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Message;

/*
    Эти константы предоставил, что бы не было магических строк и была возможность централицовано менять тип сообщения.
    Внимание! Константы используются в представлении и описывают часть класса "alert-". По-этому использовать нужно значения которые есть в стилях шаблона.
*/
define('TYPE_ANSVER_ERROR', 'error'); // Констатнта типа ошибка
define('TYPE_ANSVER_SUCCESS', 'success'); // Константа типа выполненно

class MessageController extends Controller
{
    /**
     * Показываем главную страницу с сообщениями
     * @param Message $messages
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Message $messages, Request $request)
    {
        ($request->ansver) ? $ansver = $request->ansver : $ansver = false; // Если есть ответ от сервера - показываем его
        ($request->typeAnsver) ? $typeAnsver = $request->typeAnsver : $typeAnsver = false; // Если есть ответ от сервера - показываем его
        $arr = [
            'messages' => $messages::getAllMessages(),
            'userName' => (Auth::check()) ? Auth::user()->name : '',
            'ansver' => $ansver,
            'typeAnsver' => $typeAnsver
        ];

        return view('main', $arr);
    }

    /**
     * Проверяем форму на корректность заполнения, вносим запись в БД и перенаправляем пользователя на главную страницу
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function insert(PostMessage $request)
    {
        $this->middleware('auth'); // Вдруг каким то чудом пользователь сможет отправить POST запрос со страницы.

        Message::insertMessage(Auth::user()->id, $request->input('textMessage'));

        return redirect()->action('MessageController@show');
    }
}
