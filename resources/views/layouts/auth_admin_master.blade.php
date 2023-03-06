<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,
    shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    @livewireStyles
    <title>Document</title>
</head>
<body>
    @include('layouts.admin.admin_header_master')

    @yield('content')

    @include('layouts.admin.admin_footer_master')

    @livewireScripts
    @yield('scripts')
</body>
</html>
