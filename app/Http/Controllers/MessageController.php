<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Message;

define('TYPE_ANSVER_ERROR', 'error'); // Констатнта типа ошибка
define('TYPE_ANSVER_SUCCESS', 'success'); // Константа типа выполненно

class MessageController extends Controller
{
    /**
     * Показываем главную страницу с сообщениями
     * @param Message $messages
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Message $messages, Request $request){
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
    public function insert(Request $request){
        $this->middleware('auth'); // Вдруг каким то чудом пользователь сможет отправить POST запрос со страницы.
        $result = Message::checkInsertData($request->input('textMessage'));
        if($result) {
            Message::insertMessage(Auth::user()->id, $request->input('textMessage'));
            $ansver = trans('ansvers.sendMessage'); // Ответ о выполнении.
            $typeAnsver = TYPE_ANSVER_SUCCESS;
        }else{
            $ansver = trans('ansvers.errorMessage'); // Ответ об ошибке
            $typeAnsver = TYPE_ANSVER_ERROR;
        }
        return redirect()->action('MessageController@show', ['ansver'=>$ansver, 'typeAnsver'=>$typeAnsver]);
    }
}
