<?php
/**
 * Created by PhpStorm.
 * User: Dreas
 * Date: 26.01.2018
 * Time: 0:50
 */
?>

@if (count($errors)>0)
<div class="alert alert-error">
    <!--Вход в систему с указанными данными невозможен-->
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

