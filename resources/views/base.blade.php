<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    {{-- JS --}}
    <script src="{{ asset('js/app.js') }}"></script>
    <title>@yield('title')</title>
</head>
<body>

    <div id="app">

        @yield('content')

        @if (URL::current() !== 'http://127.0.0.1:8000/beers')
            @include('go-home')
        @endif
    </div>

</body>
</html>
