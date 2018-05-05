@extends('layouts.app')

@section('content')

                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
                            <label for="email" class="col-md-3 control-label">E-Mail</label>

                            <div class="col-md-9">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
                            <label for="password" class="col-md-3 control-label">Password</label>

                            <div class="col-md-9">
                                <input id="password" type="password" class="form-control" name="password" required>
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-3">
                                <button type="submit" class="btn  btn-primary" style="padding-right: 100px;padding-left: 100px;">
                                    Login
                                </button>

     <!--                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a> -->
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-3">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>


@endsection
