<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,
    shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="https://berrydashboard.io/bootstrap/default/assets/images/favicon.svg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;1,200&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/Template style/fonts/tabler-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/Template style/fonts/feather.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/Template style/fonts/fontawesome.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/Template style/fonts/material.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/Template style/css/style_1.css') }}" id="main-style-link">
    {{--  <link rel="stylesheet" href="{{ asset('assets/Template style/css/style-preset.css') }}" id="preset-style-link">  --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


    @yield('styles')
    <title>@yield('title')</title>
</head>
<body>
    @include('layouts.admin.admin_header_master')

    @yield('content')

    @include('layouts.admin.admin_footer_master')
    @yield('scripts')
</body>
</html>
