<?php
/**
 * Created by PhpStorm.
 * User: Dreas
 * Date: 25.01.2018
 * Time: 22:57
 */
?>

@extends('layouts.layout')

@section('content')
    <div class="span2"></div>
    <div class="span8">

        @if(Auth::guest())
            <div class="alert alert-info">
                Добавлять сообщения могут только авторизованные пользователи
            </div>
        @else
        <form action="/" method="post" class="form-horizontal" style="margin-bottom: 50px;">
            {{ csrf_field() }}

            @include('layouts.errors')

            <div class="control-group">
                <textarea style="width: 100%; height: 50px;" name="textMessage" type="text" id="inputText" placeholder="Ваше сообщение..." data-cip-id="inputText" ></textarea>
            </div>
            <div class="control-group">
                <button type="submit" class="btn btn-primary">Отправить сообщение</button>
            </div>
        </form>
        @endif

        @if(count($messages)>0)
            @foreach($messages as $message)
                <div class="well">
                    <h5>{{$message->name}}:</h5>
                    {{$message->text_message}}
                </div>
            @endforeach
        @else
            <div class="alert alert-info">
                Пока нет сообщений
            </div>
        @endif
    </div>
@endsection