<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <title>ソラレピ | @yield('title')</title>
    @yield('css-all')
    @yield('css-only')

    @yield('script-all')
</head>
<body class="hold-transition skin-black-light sidebar-mini">
<div class="wrapper">

@yield('header')

<!-- Left side column. contains the logo and sidebar -->
@yield('sidebar')


        @yield('content')

    @yield('footer')

</div>
<!-- ./wrapper -->
@yield('script-bottom')
@yield('script-only')
</body>
</html>
