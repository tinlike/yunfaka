<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="Bookmark" href="favicon.ico">
    <link rel="Shortcut Icon" href="favicon.ico" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" type="text/css" href="css/H-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="css/H-ui.admin.css" />
    <link rel="stylesheet" type="text/css" href="lib/Hui-iconfont/1.0.8/iconfont.css" />

    <link rel="stylesheet" type="text/css" href="skin/default/skin.css" id="skin" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body style="background:#e9ecf3">
    <main class="container">
        <section class="col-xs-12 col-sm-6">
            <div class="panel panel-default">
                <div class="panel-header">面板标题</div>
                <div class="panel-body">
                    <select>
                        @foreach($categories as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </section>
        <section class="col-xs-12 col-sm-6">
            <div class="panel panel-default">
                <div class="panel-header">面板标题</div>
                <div class="panel-body">面板内容</div>
            </div>
        </section>
    </main>
</body>

</html>