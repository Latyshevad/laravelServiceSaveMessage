<?php
/**
 * Created by PhpStorm.
 * User: Dreas
 * Date: 26.01.2018
 * Time: 0:50
 */
?>

@if($errors)
    @foreach($errors->all() as $error)
    <div class="alert alert-error">
        {{$error}}
    </div>
    @endforeach
@endif