<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <link rel="Bookmark" href="favicon.ico">
    <link rel="Shortcut Icon" href="favicon.ico">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{ asset('css/H-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/H-ui.admin.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/Hui-iconfont/1.0.8/iconfont.css') }}">

    <link rel="stylesheet" href="{{ asset('skin/default/skin.css') }}" id="skin">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('lib/jquery/1.9.1/jquery.min.js') }}"></script>
    <script src="{{ asset('js/H-ui.min.js') }}"></script>
    <script src="{{ asset('js/H-ui.admin.page.js') }}"></script>
</head>

<body style="background:#e9ecf3">
    @yield('content')
    @include('parts.footer')
</body>

</html>