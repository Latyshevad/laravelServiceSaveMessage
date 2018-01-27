<?php
/**
 * Created by PhpStorm.
 * User: Dreas
 * Date: 26.01.2018
 * Time: 0:14
 */
?>

@section('nav')
    <div class="navbar">
        <div class="navbar-inner">
            <a class="brand" href="/">Сайтсофт</a>
            @if(Auth::guest())
            <ul class="nav">
                <li class="active"><a href="/">Главная</a></li>
                <li><a href="{{route('login')}}">Авторизация</a></li>
                <li><a href="{{route('register')}}">Регистрация</a></li>
            </ul>
            @else
            <ul class="nav pull-right">
                <li><a>{{$userName}}</a></li>
                <li><a href="{{route('logout')}}">Выход</a></li>
            </ul>
            @endif
        </div>
    </div>
@endsection
