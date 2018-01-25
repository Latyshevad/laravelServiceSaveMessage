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
            <ul class="nav">
                <li class="active"><a href="/">Главная</a></li>
                <li><a href="/login">Авторизация</a></li>
                <li><a href="/reg">Регистрация</a></li>
            </ul>

            <ul class="nav pull-right">
                <li><a>Username</a></li>
                <li><a href="/logout">Выход</a></li>
            </ul>
        </div>
    </div>
@endsection
