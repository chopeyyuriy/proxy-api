<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="language" content="Russian">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/libs.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.min.css') }}">
    <script>
        const meta = document.querySelector('meta[name="viewport"]');
        meta.setAttribute('content', `user-scalable=no, width=${screen.width <= 380 ? 380 : 'device-width'}`);
    </script>
</head>
<body>

@yield('content')

<script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('js/libs.min.js') }}"></script>
<script src="{{ asset('js/main.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
