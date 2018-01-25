<?php
/**
 * Created by PhpStorm.
 * User: Dreas
 * Date: 26.01.2018
 * Time: 0:23
 */
?>

@extends('layouts.layout')

@section('content')
    <div class="row-fluid">
        <div class="span4"></div>
        <div class="span8">

            @include('layouts.errors')

            <form action="" method="post" class="form-horizontal">
                <div class="control-group">
                    <b>Регистрация</b>
                </div>
                <div class="control-group">
                    <input type="text" id="inputLogin" name="username" placeholder="Логин" data-cip-id="inputLogin"
                           autocomplete="off">
                </div>
                <div class="control-group error">
                    <input type="password" id="inputPassword" name="password" placeholder="Пароль"
                           data-cip-id="inputPassword">
                    <span class="help-inline">Текст ошибки</span>
                </div>
                <div class="control-group error">
                    <input type="password" id="inputPassword2" name="password" placeholder="Повторите пароль"
                           data-cip-id="inputPassword2">
                    <span class="help-inline">Текст ошибки</span>
                </div>
                <div class="control-group">
                    <button type="submit" class="btn btn-primary">Отправить</button>
                </div>
            </form>
        </div>
    </div>
@endsection