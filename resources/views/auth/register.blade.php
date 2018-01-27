@extends('layouts.layout')

@section('content')
    <div class="row-fluid">
        <div class="span4"></div>
        <div class="span8">
            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="control-group">
                    <b>Регистрация</b>
                </div>

                <div class="control-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Логин" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-inline">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="control-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                               placeholder="E-mail" required>

                        @if ($errors->has('email'))
                            <span class="help-inline">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="control-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password" placeholder="Пароль" required>

                        @if ($errors->has('password'))
                            <span class="help-inline">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="control-group">
                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                               placeholder="Повторите пароль" required>
                    </div>
                </div>

                <div class="control-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Register
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
