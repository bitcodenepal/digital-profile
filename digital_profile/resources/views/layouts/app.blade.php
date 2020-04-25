<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom_css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_css/toastr.min.css') }}">

    <style>
        .btn, .card, .modal-content {
            border-radius: 0px;
        }
        .form-control {
            outline: #17a2b8 !important;
            box-shadow: none !important;
            border-radius: 0px;
        }
        .page-item.active .page-link {
            background-color: #17a2b8;
            border-color: #17a2b8;
        }
        label, input::placeholder {
            font-size: 14px;
        }
        .naya_convert{
 	     	display: none;
 		}
    </style>
    @yield('custom-styles')
</head>
<body class="hold-transition {{ (Request::is('login')) ? "login-page" : "sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed" }}">
    @if(Request::is('login'))
        <div class="login-box">
            <div class="login-logo">
                <a href="{{ url('/') }}"><b>कर्जन्हा नगरपालिका</b></a>
            </div>
            @yield('login-content')
        </div>
    @else
        <div class="wrapper">
            
            @include('layouts._header')
            @include('layouts._sidebar')

            <div class="content-wrapper">
                <section class="content-header">
                    <div class="container-fluid">
                        @yield('content-header')
                    </div>
                </section>
                <section class="content">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </section>
            </div>

            @include('layouts._footer')

        </div>
    @endif

    <script src="{{ asset('js/custom_js/main.js') }}"></script>
    <script src="{{ asset('js/custom_js/toastr.min.js') }}"></script>
    
    @yield('custom-scripts')

    <script>
        jQuery(function($) {
            @if (Session::has('success'))
                toastr.success("{{ Session::get('success') }}");
            @endif
            @if(Session::has('info'))
                toastr.info("{{ Session::get('info') }}");
            @endif
            @if(Session::has('error'))
                toastr.error("{{ Session::get('error') }}");
            @endif
        });
    </script>

</body>
</html>
