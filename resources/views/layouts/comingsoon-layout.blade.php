<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bali Beauty Center - @yield('pageTitle')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('js/main.js') }}" rel="stylesheet">
</head>

<body>
    @include('components.navigationbar')
    <main>
        @yield('content')
    </main>
    @include('components.footer')
</body>
<script src="{{ asset('/js/main.js') }}" defer></script>
</html>
