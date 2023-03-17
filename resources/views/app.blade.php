<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/output.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sweetalert2.css') }}">
    @yield('othercss')
</head>
<body>
    @yield('konten')

    
    <script src="{{ asset('js/sweetalert2.js') }}"></script>
    @yield('otherjs')
</body>
</html>