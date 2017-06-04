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
    {{--<div class="container">--}}
        <div class="rlogin-box-body">
            {{--<div class="col-md-8 col-md-offset-2">--}}
                <div class="panel panel-default">
                    <div class="panel-heading">Reset Password</div>
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Send Password Reset Link
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            {{--</div>--}}
        </div>
    {{--</div>--}}
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