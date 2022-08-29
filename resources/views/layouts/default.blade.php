<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | RomeroDex</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <body>
        @yield('content')
        <script type="text/javascript" src="{{asset(__DIR__ .'/../js/path.js')}}"></script>
    </body>
</html>