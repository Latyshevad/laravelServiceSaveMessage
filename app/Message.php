<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Message extends Model
{
    /**
     * Возвращает все сообщения из БД
     * Колонки: Имя пользователя из таблицы Users и текст сообщения из таблицы Messages
     * @return mixed
     */
    public static function getAllMessages(){
        return DB::table('messages')
                ->leftJoin('users', 'messages.user_id', '=', 'users.id')
                ->select('users.name','messages.text_message')
                ->orderBy('messages.id', 'desc')
                ->get();
    }

    /**
     * Просто вставляем данные в таблицу message
     * @param $idUser - id пользователя
     * @param $textMessage - Сообщение.
     * @return mixed
     */
    public static function insertMessage($idUser, $textMessage){
        return DB::table('messages')
            ->insert(['user_id'=>$idUser, 'text_message'=>$textMessage]);
    }
}
