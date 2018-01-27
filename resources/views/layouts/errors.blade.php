<?php
/**
 * Created by PhpStorm.
 * User: Dreas
 * Date: 26.01.2018
 * Time: 0:50
 */
?>

@if ($ansver!==false)
<div class="alert @if($typeAnsver)alert-{{$typeAnsver}}@endif">
    {{$ansver}}
</div>
@endif

