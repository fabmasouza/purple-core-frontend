<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Purple</title>

    <!-- Meta -->
    <meta name="description" content="Transformamos atendimento em inteligência de mercado." />
    <meta name="author" content="Purple" />
    <link rel="canonical" href="https://app.purpletechnology.com.br">
    <meta property="og:url" content="https://app.purpletechnology.com.br">
    <meta property="og:title" content="Purple">
    <meta property="og:description" content="Transformamos atendimento em inteligência de mercado.">
    <meta property="og:type" content="Website">
    <meta property="og:site_name" content="Transformamos atendimento em inteligência de mercado.">
    <link rel="shortcut icon" href="{{ asset('images/logo_purple.ico') }}" />

    <!-- Icomoon Font Icons css -->
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />

    <!-- Scrollbar CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/overlay-scroll/OverlayScrollbars.min.css') }}" />

    <!-- Calendar CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/calendar/css/main.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/calendar/css/custom.css') }}" />

</head>

<body>
    <!-- Page wrapper start -->
    <div class="page-wrapper">

        <!-- App container starts -->
        <div class="app-container">

            <!-- Incluindo o header Blade -->
            @include('layouts/header')

            <!-- Incluindo o menu Blade -->
            @include('layouts/menu')

            <!-- App body starts -->
            <div class="app-body">

                <!-- Container starts -->
                <div class="container">

                    <!-- Incluindo o menu Blade -->
                    @include('layouts/breadcrumb')

                    <!-- Renderizando o conteúdo das views que estendem o master -->
                    @yield('content')

                </div>
                <!-- Container ends -->

            </div>
            <!-- App body ends -->

            <!-- App footer start -->
            <div class="app-footer">
                <div class="container">
                    <span>© Purple 2024</span>
                </div>
            </div>
            <!-- App footer end -->

        </div>
        <!-- App container ends -->

    </div>
    <!-- Page wrapper end -->

    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <!-- Overlay Scroll JS -->
    <script src="{{ asset('vendor/overlay-scroll/jquery.overlayScrollbars.min.js') }}"></script>
    <script src="{{ asset('vendor/overlay-scroll/custom-scrollbar.js') }}"></script>

    <!-- Custom JS files -->
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>