@extends('templates.edit-frame')

@section('title')
    ログイン
@endsection

@section('sidebar')
@endsection

@section('sidebar-toggle')
@endsection

@section('content')
    <div class="login-box">
        {{--<div class="row">--}}
            {{--<div class="col-md-8 col-md-offset-2">--}}
                <div class="login-box-body">
                    <div class="login-box-msg">Reset Password</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form role="form" method="POST" action="{{ url('/password/reset') }}">
                            {{ csrf_field() }}

                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-6 control-label">E-Mail Address</label>

                                <div class="form-group has-feedback">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-6 control-label">Password</label>

                                <div class="form-group has-feedback">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group has-feedback{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label for="password-confirm" class="col-md-6 control-label">Confirm Password</label>
                                <div class="form-group has-feedback">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-success">
                                        Reset Password
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            {{--</div>--}}
        {{--</div>--}}
    </div>
@endsection

@section('footer')
@endsection

@section('script-bottom')
@endsection


