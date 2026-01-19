<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Gorent Rental Mobil')</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('gorent/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('gorent/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('gorent/assets/css/responsive.css') }}">
</head>
<body>

    @yield('content')

    <!-- JS -->
    <script src="{{ asset('gorent/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('gorent/assets/js/main.js') }}"></script>
</body>
</html>
