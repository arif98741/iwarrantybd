@extends('layout.web.web') @section('title','Claim Request') @section('content') @section('content')
<section class="register-bg">
<div class="container">
    <div class="row" style="margin-top: 30px;">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body" style="display:block;margin: 0 auto;width:60%;">
                    <form style="display: block;opacity:0.9;
    margin: 0 auto;
    width: 55%;
    background-color: white;
    padding: 30px 10px;
    border-radius: 2%;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
" class="form-horizontal" role="form" method="POST" action="{{ url('/subscriber/register') }}" enctype="multipart/form-data">
<h1 style="text-align: center; padding-bottom: 30px;">IwarrantyBD</h1>
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-12 control-label">Name</label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" autofocus> @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong style="color: red;">{{ $errors->first('name') }}</strong>
                                </span> @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-12 control-label">E-Mail Address</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"> @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong style="color: red;">{{ $errors->first('email') }}</strong>
                                </span> @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-12 control-label">Password</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password"> @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong style="color: red;">{{ $errors->first('password') }}</strong>
                                </span> @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-12 control-label">Mobile</label>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="mobile"> @if ($errors->has('mobile'))
                                <span class="help-block">
                                    <strong style="color: red;">{{ $errors->first('mobile') }}</strong>
                                </span> @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-12 control-label">Address</label>

                            <div class="col-md-12">
                                <textarea name="address" id="" cols="30" rows="4" class="form-control"></textarea>
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-custom">
                                    Register
                                </button>
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