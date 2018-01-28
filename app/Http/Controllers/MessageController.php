<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Message;

class MessageController extends Controller
{
    /**
     * Показываем главную страницу с сообщениями
     * @param Message $messages
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Message $messages, Request $request)
    {
        $arr = [
            'messages' => $messages::getAllMessages(),
            'userName' => (Auth::check()) ? Auth::user()->name : ''
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
