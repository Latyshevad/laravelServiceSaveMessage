<?php
/**
 * Created by PhpStorm.
 * User: Dreas
 * Date: 26.01.2018
 * Time: 0:50
 */
?>

@if ($errors->any())
<div class="alert alert-error">
    <!--Вход в систему с указанными данными невозможен-->
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

