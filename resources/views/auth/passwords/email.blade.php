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
        <div class="login-box-body">
            <div class="login-box-msg">Reset Password</div>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form role="form" method="POST" action="{{ url('/password/email') }}">
                {{ csrf_field() }}

                <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="form-group has-feedback control-label">E-Mail Address</label>

                    <div class="form-group has-feedback">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                               required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <button type="submit" class="btn btn-block btn-success">
                    Send Password Reset Link
                </button>
            </form>
        </div>
    </div>
@endsection

@section('footer')
@endsection

@section('script-bottom')
@endsection


