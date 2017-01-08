<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{!! asset('css/app.css') !!}" media="all" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="{!! asset('js/app.js') !!}"></script>

    <title>@yield('title')</title>
</head>
<body>
<div class="container">
    @yield('container')
</div>
</body>
</html>