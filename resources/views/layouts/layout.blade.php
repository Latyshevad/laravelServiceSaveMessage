<?php
/**
 * Created by PhpStorm.
 * User: Dreas
 * Date: 25.01.2018
 * Time: 23:19
 */
?>

<!DOCTYPE html>
<html>
<head>
    <title>Сайтсофт</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
    <script src="{{url('http://code.jquery.com/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</head>
<body>

@include('layouts.nav')

@section('nav')
@show

<div class="row-fluid">
    @yield('content')
</div>

</body>
</html>