<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags-->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Meta -->
    <meta name="description" content="Transformamos atendimento em inteligência de mercado." />
    <meta name="author" content="Purple" />
    <title>Purple</title>
    <!-- Favicon icon-->
    <link rel="icon" href="{{ asset('images/logo/logo_purple.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('images/logo/logo_purple.ico') }}" type="image/x-icon">
    <!-- Fonts css-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
        rel="stylesheet">
    <!-- icon fonts-->
    <link href="{{ asset('css/vendor/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vendor/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vendor/icoicon/icoicon.css') }}" rel="stylesheet">
    <!-- morris chart-->
    <link href="{{ asset('css/vendor/chart/morris.css') }}" rel="stylesheet">
    <!-- Scrollbar-->
    <link href="{{ asset('css/vendor/simplebar.css') }}" rel="stylesheet">
    <!-- Custom css-->
    <link href="{{ asset('css/style.css') }}" id="customstyle" rel="stylesheet">
</head>

<body>
    <!-- Incluindo o header Blade -->
    @include('layouts/header')

    <!-- Incluindo o menu Blade -->
    @include('layouts/menu')

    <div class="themebody-wrap">
        <!-- Incluindo o breadcrumb Blade -->
        @include('layouts/breadcrumb')

        <!-- Renderizando o conteúdo das views que estendem o master -->
        @yield('content')
    </div>
    <!-- footer start-->
    <footer class="codex-footer">
        <p>Copyright 2022-23 © omee All rights reserved.</p>
    </footer>
    <!-- footer end-->
    <!-- customzier start-->
    <div class="customizer-layer"></div>
    <div class="customizer-action"><i data-feather="settings"></i></div>
    <div class="theme-cutomizer">
        <div class="customizer-header">
            <h4>Theme Setting<i data-feather="x"></i></h4>
        </div>
        <div class="customizer-body">
            <div class="cutomize-group">
                <h6 class="customizer-title">Theme Color</h6>
                <ul class="customizeoption-list themecolor-list">
                    <li class="color1"></li>
                    <li class="color2"></li>
                    <li class="color3"></li>
                    <li class="color4"></li>
                    <li class="color5"></li>
                    <li class="color6"></li>
                </ul>
            </div>
            <div class="cutomize-group">
                <h6 class="customizer-title">Sidebar Mode</h6>
                <ul class="customizeoption-list sidebaroption-list">
                    <li class="sidebarlight-action">light</li>
                    <li class="sidebardark-action">dark</li>
                </ul>
            </div>
            <div class="cutomize-group">
                <h6 class="customizer-title">Layout Direction</h6>
                <ul class="customizeoption-list">
                    <li class="ltr-action">ltr</li>
                    <li class="rtl-action">rtl</li>
                </ul>
            </div>
            <div class="cutomize-group mb-0">
                <h6 class="customizer-title">Layout mode</h6>
                <ul class="customizeoption-list">
                    <li class="light-action">light</li>
                    <li class="dark-action">dark </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- customzier end-->
    <!-- main jquery-->
    <script src="{{ asset('js/jquery-3.6.0.js') }}"></script>
    <!-- Feather iocns js-->
    <script src="{{ asset('js/icons/feather-icon/feather.js') }}"></script>
    <!-- customizer-->
    <script src="{{ asset('js/customizer.js') }}"></script>
    <!-- Scrollbar-->
    <script src="{{ asset('js/vendors/simplebar.js') }}"></script>
    <!-- apex chart-->
    <script src="{{ asset('js/vendors/chart/apexcharts.js') }}"></script>
    <!-- dashboard-->
    <script src="{{ asset('js/dashboard/dashboard.js') }}"></script>
    <!-- Custom script-->
    <script src="{{ asset('js/custom-script.js') }}"></script>
</body>

</html>