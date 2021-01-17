<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/main.css">
</head>

<body class="antialiased">
    @yield('pizza_home_page')
    @yield('welcome_page')

    <footer>
        Copyright 2020 Pizza House
    </footer>
</body>

</html>
