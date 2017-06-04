@extends('templates.edit-frame')

@section('title')
    ログイン
@endsection

@section('sidebar')
@endsection

@section('sidebar-toggle')
@endsection

@section('css-only')
    <!-- css for iCheck -->
    <link rel="stylesheet" href="/components/AdminLTE/plugins/iCheck/all.css">
@endsection

@section('content')
    <div class="login-box">
        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session !</p>
            <form role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}

                <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="form-group has-feedback control-label">E-Mail Address</label>

                    <div class="form-group has-feedback">
                        <input id="email" type="email" class="form-control" name="email"
                               value="{{ old('email') }}" required autofocus>

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

                <div class="social-auth-links text-center">
                    <div class="icheckbox">
                        <label>
                            <input type="checkbox" class="flat-green" name="remember" {{ old('remember') ? 'checked' : ''}}>
                            Remember Me
                        </label>
                    </div>
                    <a class="btn btn-link" href="{{ url('/password/reset') }}" style="color:#848484">
                        Forgot Your Password?
                    </a>
                    <div>
                        <button type="submit" class="btn btn-block btn-success">
                            Sign in
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('footer')
@endsection

@section('script-bottom')

    <script src="/components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- iCheck -->
    <script src="/components/AdminLTE/plugins/iCheck/icheck.js"></script>
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_flat-green',
                radioClass: 'iradio_flat-green',
            });
        });
//        //Flat red color scheme for iCheck
//        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
//            checkboxClass: 'icheckbox_flat-green',
//            radioClass: 'iradio_flat-green'
//        });
    </script>


@endsection