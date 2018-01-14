@extends('layouts.auth')

@section('content')
            <div class="container">
                <div class=""><h1>Login</h1></div>
                <div class="row row_Login">
                    <form class="" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="">Email</label>

                            <div class="">
                                <input id="email" type="email" class="" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="">Contraseña</label>

                            <div class="">
                                <input id="password" type="password" class="" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="">
                            <div class="">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Recordar
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="">
                            <div class="">
                                <button type="submit" class="">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>

                                <a class="" href="{{ url('/password/reset') }}">OLvido su Contraseña</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
@endsection


