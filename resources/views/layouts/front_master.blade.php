<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,
    shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="https://berrydashboard.io/bootstrap/default/assets/images/favicon.svg" type="image/x-icon">

    <!-- summernote script -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>


    <link rel="stylesheet" href="{{ asset('assets/Template style/css/plugins/dragula.min.css') }}"  rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/Template style/css/plugins/quill.core.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/Template style/css/plugins/quill.snow.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/Template style/css/plugins/quill.bubble.css') }}" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;1,200&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/Template style/fonts/tabler-icons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/Template style/fonts/feather.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/Template style/fonts/fontawesome.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/Template style/fonts/material.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/Template style/css/style-preset.css') }}" id="preset-style-link">
    <link rel="stylesheet" href="{{ asset('assets/Template style/css/style.css') }}" id="main-style-link">
    <link rel="stylesheet" href="{{ asset('assets/Template style/css/style_1.css') }}" id="main-style-link">
    <link rel="stylesheet" href="{{ asset('assets/Template style/css/style_2.css') }}" id="main-style-link">
    <link rel="stylesheet" href="{{ asset('assets/Template style/css/style_3.css') }}" id="main-style-link">
    <link rel="stylesheet" href="{{ asset('assets/Template style/css/style_4.css') }}" id="main-style-link">
    <link rel="stylesheet" href="{{ asset('assets/Template style/css/style_5.css') }}" id="main-style-link">
    <link rel="stylesheet" href="{{ asset('assets/Template style/css/style_6.css') }}" id="main-style-link">

    {{--  @livewireStyles  --}}

    <title>Monitoring | @yield('title')</title>
</head>
<body class="page-index">
    @include('sweetalert::alert')

    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>

    @include('layouts.frontend.front_header_master')


    @yield('content')

    @yield('modal')

    <script src="{{ asset('assets/Template style/js/loading.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: 'Redigez le ici !',
                tabsize: 2,
                height: 200
            });
        });
    </script>
    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('assets/Template style/js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('assets/Template style/js/plugins/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/Template style/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/Template style/js/config.js') }}"></script>
    <script src="{{ asset('assets/Template style/js/pcoded.js') }}"></script>
    <script src="{{ asset('assets/Template style/js/plugins/feather.min.js') }}"></script>
    <script src="{{ asset('assets/Template style/js/customizer.js') }}"></script>


    <script src="{{ asset('assets/Template style/js/plugins/quill.min.js') }}"></script>

    <script>
        (function() {
            var quill = new Quill('#pc-quil-1', {
                modules: {
                    toolbar: [
                        [{
                            header: [1, 2, false]
                        }],
                        ['bold', 'italic', 'underline'],
                        ['image', 'code-block']
                    ]
                },
                placeholder: 'Type your text here...',
                theme: 'snow'
            });
            var quill = new Quill('#pc-quil-2', {
                modules: {
                    toolbar: [
                        [{
                            header: [1, 2, false]
                        }],
                        ['bold', 'italic', 'underline'],
                        ['image', 'code-block']
                    ]
                },
                placeholder: 'Type your text here...',
                theme: 'snow'
            });
        })();
        // scroll-block
        var tc = document.querySelectorAll('.scroll-block');
        for (var t = 0; t < tc.length; t++) {
            new SimpleBar(tc[t]);
        }
        var toggle_mail_list = document.querySelector('#toggle-mail-list-height');
        var toggle_mail_wrapper = document.querySelector('.mail-wrapper');
        if (toggle_mail_list) {
            toggle_mail_list.addEventListener('click', function() {
                if (toggle_mail_wrapper.classList.contains('mini-mail-list')) {
                    toggle_mail_wrapper.classList.remove('mini-mail-list');
                } else {
                    toggle_mail_wrapper.classList.add('mini-mail-list');
                }
            });
        }

        var toggle_mail_dialog = document.querySelector('#toggle_mail_dialog');
        var toggle_mail_modal = document.querySelector('.compose_mail_modal');
        if (toggle_mail_dialog) {
            toggle_mail_dialog.addEventListener('click', function() {
                if (toggle_mail_modal.classList.contains('modal-pos-down')) {
                    toggle_mail_modal.classList.remove('modal-pos-down');
                } else {
                    toggle_mail_modal.classList.add('modal-pos-down');
                }
            });
        }

        var tc = document.querySelectorAll('.mail-table tr td:nth-child(2), .mail-table tr td:nth-child(3)');
        for (var t = 0; t < tc.length; t++) {
            tc[t].addEventListener('click', function() {
                active_details('a[id="list-mailtab-details"]');
            });
        }

        document.querySelector('#mail-back_inbox').addEventListener('click', function() {
            active_details('a[id="list-mailtab-1"]');
        });

        function active_details(tab_name) {
            var someTabTriggerEl = document.querySelector(tab_name);
            var actTab = new bootstrap.Tab(someTabTriggerEl);
            actTab.show();
        }
    </script>

    @include('layouts.frontend.front_footer_master')

    {{--  @livewireScripts  --}}
    @yield('scripts')
</body>
</html>
