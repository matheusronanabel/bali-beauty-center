<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bali Beauty Center - @yield('pageTitle')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('js/main.js') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous" defer></script>
</head>

<body>
    <!-- <main> -->
        @yield('content')
    <!-- </main> -->
</body>
<script src="./node_modules/tw-elements/dist/js/index.min.js" defer></script>
<script src="{{ asset('/js/main.js') }}" defer></script>
</html>
