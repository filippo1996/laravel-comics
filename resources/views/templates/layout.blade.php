<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Comics')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <div id="app">
        <!-- start section header -->
        @include('partials.header')
        <!-- end section header -->

        <!-- start section jumbotron -->
        @include('partials.jumbotron')
        <!-- end section jumbotron -->

        <!-- start section main -->
        <main>@yield('content')</main>
        <!-- end section main -->

        <!-- start section footer -->
        <footer>@include('partials.footer')</footer>
        <!-- end section footer -->
    </div>

    <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>