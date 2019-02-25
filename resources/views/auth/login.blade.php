@extends('layouts.app')

@section('content')

<div class="login-box">
    <div class="login-logo">
    <a href="/"><b>Cidahu Smart City</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group has-feedback has{{ $errors->has('email') ? '-error' : '' }}">
        <input type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">
        @if ($errors->has('email'))
            <span class="help-block" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback has{{ $errors->has('email') ? '-error' : '' }}">
        <input type="password" class="form-control" name="password" required placeholder="Password">
        @if ($errors->has('password'))
            <span class="help-block" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat"> {{ __('Login') }}</button>
        </div>
        <!-- /.col -->
        </div>
    </form>

    <div class="social-auth-links text-center">
    </div>
    <!-- /.social-auth-links -->

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
@endsection
