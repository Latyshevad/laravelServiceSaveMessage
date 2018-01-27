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
            {{--<div class="alert alert-error">--}}
                {{--Сообщение не может быть пустым--}}
            {{--</div>--}}
            @include('layouts.errors')

            <div class="control-group">
                <textarea style="width: 100%; height: 50px;" name="textMessage" type="text" id="inputText" placeholder="Ваше сообщение..." data-cip-id="inputText" required></textarea>
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

        {{--<div class="well">--}}
            {{--<h5>Mikle:</h5>--}}
            {{--Цикл, без использования формальных признаков поэзии, диссонирует мелодический скрытый смысл,--}}
            {{--но не рифмами. Эстетическое воздействие, не учитывая количества слогов, стоящих между ударениями,--}}
            {{--притягивает реципиент, заметим, каждое стихотворение объединено вокруг основного философского стержня.--}}
        {{--</div>--}}

        {{--<div class="well">--}}
            {{--<h5>Tony:</h5>--}}
            {{--Метафора выбирает мифологический поток сознания, несмотря на отсутствие единого пунктуационного алгоритма.--}}
            {{--Матрица абсурдно нивелирует подтекст, особенно подробно рассмотрены трудности, с которыми сталкивалась--}}
            {{--женщина-крестьянка в 19 веке. Комбинаторное приращение нивелирует мелодический дискурс, несмотря на--}}
            {{--отсутствие единого пунктуационного алгоритма. Расположение эпизодов вызывает литературный эпитет, также--}}
            {{--необходимо сказать о сочетании метода апроприации художественных стилей прошлого с авангардистскими стратегиями.--}}
        {{--</div>--}}

        {{--<div class="well">--}}
            {{--<h5>Andre:</h5>--}}
            {{--Развивая эту тему, типизация отталкивает амфибрахий – это уже пятая стадия понимания по М.Бахтину.--}}
        {{--</div>--}}
    </div>
@endsection