@extends('templates.edit-frame')

@section('title')
    ログイン
@endsection

@section('sidebar')
@endsection

@section('sidebar-toggle')
@endsection

@section('css-only')
    <!-- iCheck -->
    <link rel="stylesheet" href="/components/AdminLTE/plugins/iCheck/square/red.css">
@endsection

@section('content')
    <form role="form" method="POST" action="{{ url('/register') }}">
        {{ csrf_field() }}
        <div class="register-box">
            <div class="register-box-body">
                <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="form-group has-feedback">Name</label>

                    <div class="form-group has-feedback">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required
                               autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="form-group has-feedback">E-Mail Address</label>
                    <div class="form-group has-feedback">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="form-group has-feedback">Password</label>
                    <div class="form-group has-feedback">
                        <input id="password" type="password" class="form-control" name="password" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group has-feedback">
                    <label for="password-confirm" class="form-group has-feedback">Confirm Password</label>
                    <div class="form-group has-feedback">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </div>

                <div class="login-box-msg">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">
                        Register
                    </button>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('footer')
@endsection

@section('script-bottom')
    <!-- iCheck -->
    <script src="/components/AdminLTE/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-red',
                radioClass: 'iradio_square-red',
//                increaseArea: '20%' // optional
            });
        });
    </script>
@endsection