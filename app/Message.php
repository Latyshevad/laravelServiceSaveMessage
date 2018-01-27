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

    /**
     * Функция проверяет переменную на пустоту и не состоит ли она из одних пробелов
     * Возвращает TRUE если переменная не пуста и не из одних пробелов, или FALSE в обратном случае
     * @param $insertData
     * @return bool
     */
    public static function checkInsertData($insertData)
    {
        if(!empty($insertData)){ // Если переменная не пуста
            $result = str_replace(' ', '', $insertData); // Удаляем из нее все пробелы
            if(count($result)>0){ // Если остались символы, значит строка состоит не только из пробелов
                return true; // Возвращаем True, все хорошо
            }
        }
        return false; // Если не сработало условие значит переменная пуста или из одних пробелов
    }
}
