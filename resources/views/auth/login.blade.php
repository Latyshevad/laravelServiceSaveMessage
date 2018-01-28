@extends('layouts.layout')

@section('content')
    <div class="row-fluid">
        <div class="span4"></div>
        <div class="span3">
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="control-group">
                    <b>Авторизация</b>
                </div>

                <div class="control-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <div class="col-md-6">
                        <input id="email" type="text" class="form-control" name="name" value="{{ old('name') }}"
                               placeholder="Логин" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="control-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password" placeholder="Пароль" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="control-group">
                    <div class="col-md-6 col-md-offset-4">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>Запомнить меня
                            </label>
                        </div>
                    </div>
                </div>

                <div class="control-group">
                    <div class="col-md-8 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Вход
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
