@extends('layout.web.web') @section('content')
<section class="login-bg">
<div class="container">
    <div class="row" style="margin-top: 30px;">
        <div class="col-md-12 col-sm-12 col-12">
            <div class="panel panel-default" >
                <div class="panel-body" style="display:block;margin: 0 auto;width:60%;">
                    <form style="display: block;
    margin: 0 auto;
    width: 55%;
    background-color: white;
    padding: 30px 10px;
    border-radius: 2%;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
" class="form-horizontal" role="form" method="POST" action="{{ url('/subscriber/login') }}">
                        <h1 style="text-align: center; padding-bottom: 30px;font-family: 'Open Sans', sans-serif;">IwarrantyBD</h1>
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-12 control-label">
                                E-Mail
                            </label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" autofocus> @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span> @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">
                                Password
                            </label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password"> @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span> @endif
                            </div>
                        </div>

                        

                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-custom">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/subscriber/password/reset') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="checkbox">
                                    <label>
                                        <span>Haven't any account?</span>
                                        <a
                                            href="{{ url('subscriber/register') }}"
                                            class="btn-link"
                                        >
                                            Sign Up
                                        </a>

                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection