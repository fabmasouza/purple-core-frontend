<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap Gallery - Support Admin Dashboard</title>

    <!-- Meta -->
    <meta name="description" content="Marketplace for Bootstrap Admin Dashboards" />
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="canonical" href="https://www.bootstrap.gallery/">
    <meta property="og:url" content="https://www.bootstrap.gallery">
    <meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
    <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:type" content="Website">
    <meta property="og:site_name" content="Bootstrap Gallery">
    <link rel="shortcut icon" href="{{ asset('images/favicon.svg') }}" />

    <!-- Icomoon Font Icons css -->
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.min.css') }}" />

    <!-- Scrollbar CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/overlay-scroll/OverlayScrollbars.min.css') }}" />
</head>

<body>
    <!-- Page wrapper start -->
    <div class="page-wrapper">

        <!-- App container starts -->
        <div class="app-container">

            <!-- Incluindo o header Blade -->
            @include('master/header')

            <!-- Incluindo o menu Blade -->
            @include('master/menu')

            <!-- App body starts -->
            <div class="app-body">

                <!-- Container starts -->
                <div class="container">

                    <!-- Incluindo o sitemap Blade -->
                    @include('master/sitemap')

                    <!-- Row start -->
                    <div class="row gx-3">
                        <div class="col-lg-12 col-12">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h5 class="card-title">Tasks</h5>
                                </div>
                                <div class="card-body">
                                    <div id="tasks"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row end -->

                </div>
                <!-- Container ends -->

            </div>
            <!-- App body ends -->

            <!-- App footer start -->
            <div class="app-footer">
                <div class="container">
                    <span>© Bootstrap Gallery 2024</span>
                </div>
            </div>
            <!-- App footer end -->

        </div>
        <!-- App container ends -->

    </div>
    <!-- Page wrapper end -->

    <!-- *************
			************ JavaScript Files *************
		************* -->
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <!-- *************
			************ Vendor Js Files *************
		************* -->

    <!-- Overlay Scroll JS -->
    <script src="{{ asset('vendor/overlay-scroll/jquery.overlayScrollbars.min.js') }}"></script>
    <script src="{{ asset('vendor/overlay-scroll/custom-scrollbar.js') }}"></script>

    <!-- Apex Charts -->
    <script src="{{ asset('vendor/apex/apexcharts.min.js') }}"></script>
    <script src="{{ asset('vendor/apex/custom/home/tasks.js') }}"></script>
    <script src="{{ asset('vendor/apex/custom/home/ticketsData.js') }}"></script>
    <script src="{{ asset('vendor/apex/custom/home/avgTimeData.js') }}"></script>
    <script src="{{ asset('vendor/apex/custom/home/tickets.js') }}"></script>
    <script src="{{ asset('vendor/apex/custom/home/calls.js') }}"></script>
    <script src="{{ asset('vendor/apex/custom/home/callsByCountry.js') }}"></script>
    <script src="{{ asset('vendor/apex/custom/home/sparkline.js') }}"></script>


    <!-- Custom JS files -->
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>