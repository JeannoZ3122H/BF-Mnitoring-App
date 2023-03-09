<!DOCTYPE html>
<html lang="en">


    <!-- Mirrored from berrydashboard.io/bootstrap/default/dashboard/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 29 Jan 2023 18:03:17 GMT -->
    <head>
        <title>dehonto</title>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0,
            user-scalable=0, minimal-ui" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="Berry is made using Bootstrap 5 design
            framework. Download the free admin template & use it for your
            project." />
        <meta name="keywords" content="Berry, Dashboard UI Kit, Bootstrap 5,
            Admin Template, Admin Dashboard, CRM, CMS, Bootstrap Admin Template"
            />
        <meta name="author" content="CodedThemes" />

        <link rel="icon" href="{{ asset('assets/images/favicon.svg')}}" type="image/x-icon"
            />

        <link rel="stylesheet"
            href="../../../../fonts.googleapis.com/css2e9cf.css?family=Roboto:wght@400;500;700&amp;display=swap"
            id="main-font-link" />

        <link rel="stylesheet" href="{{ asset('assets/fonts/tabler-icons.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/fonts/feather.css') }}" />

        <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome.css') }}" />

        <link rel="stylesheet" href="{{ asset('assets/fonts/material.css') }}" />

        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"
            id="main-style-link" />
        <link rel="stylesheet" href="{{ asset('assets/css/style-preset.css') }}"
            id="preset-style-link" />
    </head>


    <body>

        {{-- <div class="loader-bg">
            <div class="loader-track">
                <div class="loader-fill"></div>
            </div>
        </div> --}}


        <header class="pc-header">
            @include('layouts.admin._navbar')
        </header>

        <nav class="pc-sidebar">
            @include('layouts.admin._sidebar')
        </nav>


        <div class="pc-container">
            @yield('content')
        </div>

        <footer class="pc-footer">
            @include('layouts.admin._footer')
        </footer>


        <script src="{{ asset('assets/js/plugins/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/config.js') }}"></script>
        <script src="{{ asset('assets/js/pcoded.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/feather.min.js') }}"></script>


        <script src="{{ asset('assets/js/customizer.js') }}"></script>


        <script src="{{ asset('assets/js/plugins/apexcharts.min.js') }}"></script>
        <script src="{{ asset('assets/js/pages/dashboard-default.js') }}"></script>
        <script src="{{ asset('assets/js/pages/w-chart.js') }}"></script>

    </body>


    <!-- Mirrored from berrydashboard.io/bootstrap/default/dashboard/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 29 Jan 2023 18:03:45 GMT -->
</html>
