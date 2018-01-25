<?php
/**
 * Created by PhpStorm.
 * User: Dreas
 * Date: 26.01.2018
 * Time: 0:09
 */
?>

@extends('layouts.layout')

@section('content')
<div class="row-fluid">
    <div class="span4"></div>
    <div class="span3">

        <div class="alert alert-error">
            Вход в систему с указанными данными невозможен
        </div>

        <form action="" method="post" class="form-horizontal">
            <div class="control-group">
                <b>Авторизация</b>
            </div>
            <div class="control-group">
                <input type="text" id="inputLogin" name="username" placeholder="Логин" data-cip-id="inputLogin"
                       autocomplete="off">
            </div>
            <div class="control-group">
                <input type="password" id="inputPassword" name="password" placeholder="Пароль"
                       data-cip-id="inputPassword">
            </div>
            <div class="control-group">
                <label class="checkbox">
                    <input type="checkbox" name="remember" value="1"> Запомнить меня
                </label>
                <button type="submit" class="btn btn-primary">Вход</button>
            </div>
        </form>
    </div>
</div>
@endsection