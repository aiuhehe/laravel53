@extends('templates.frame')

@section('css-all')
    <link rel="stylesheet" href="/components/AdminLTE/bootstrap/css/bootstrap.min.css">
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">--}}
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="/components/AdminLTE/dist/css/AdminLTE.min.css">
    {{--<link rel="stylesheet" href="/components/AdminLTE/dist/css/skins/_all-skins.min.css">--}}
    <link rel="stylesheet" href="/components/AdminLTE/dist/css/skins/skin-original.css">
    {{--<link rel="stylesheet" href="/css/form.css">--}}
    <link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
@stop

@section('script-all')
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
@endsection

@section('header')
    @include('templates.edit-header')
@endsection

@section('sidebar')
    @include('templates.sidebar')
@endsection

@section('footer')
    @include('templates.footer')
@endsection

@section('script-bottom')
    @include('templates.script-bottom')
@endsection