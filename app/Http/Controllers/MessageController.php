<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Message;

class MessageController extends Controller
{
    public function show(Message $messages){
        $arr = [
            'messages' => $messages::getAllMessages(),
            'userName' => (Auth::check()) ? Auth::user()->name : ''
        ];

        return view('main', $arr);
    }

    public function insert(Request $request){
        $this->middleware('auth');
        Message::insertMessage(Auth::user()->id, $request->input('textMessage'));
        return redirect('/');
    }
}
