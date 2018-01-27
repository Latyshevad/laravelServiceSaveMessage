<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Message;

class MessageController extends Controller
{
    public function show(Message $messages){
        $userInfo = (Auth::check()) ? Auth::user()->name : '';

        $arr = [
            'messages' => $messages::getAllMessages(),
            'userName' => $userInfo
        ];

        return view('main', $arr);
    }

    public function insert(Request $request){
        $this->middleware('auth');
        Message::insertMessage(Auth::user()->id, $request->input('textMessage'));
        return redirect('/');
    }
}
