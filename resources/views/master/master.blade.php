<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Purple Core</title>

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
            @include('master/header')

            <!-- Incluindo o menu Blade -->
            @include('master/menu')

            <!-- App body starts -->
            <div class="app-body">

                <!-- Container starts -->
                <div class="container">

                    <!-- Row start -->
                    <div class="row gx-3">
                        <div class="col-12 col-xl-6">
                            <!-- Breadcrumb start -->
                            <ol class="breadcrumb mb-3">
                                <li class="breadcrumb-item">
                                    <i class="icon-house_siding lh-1"></i>
                                    <a href="index.html" class="text-decoration-none">Home</a>
                                </li>
                                <li class="breadcrumb-item">Plugins</li>
                                <li class="breadcrumb-item">Calendar Draggable</li>
                            </ol>
                            <!-- Breadcrumb end -->
                        </div>
                    </div>
                    <!-- Row end -->

                    <!-- Row start -->
                    <div class="row gx-3">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Agenda de 05/09/2024</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row gx-3">
                                        <div class="col-xl-2 col-lg-3 col-sm-4 col-12">
                                            <div id="external-events">
                                                <h4>Procedimentos</h4>

                                                <div id="external-events-list">
                                                    <div
                                                        class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event">
                                                        <div class="fc-event-main">Corte Feminino</div>
                                                    </div>
                                                    <div
                                                        class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event">
                                                        <div class="fc-event-main">Lash Lifting</div>
                                                    </div>
                                                    <div
                                                        class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event">
                                                        <div class="fc-event-main">Brow Lamination</div>
                                                    </div>
                                                    <div
                                                        class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event">
                                                        <div class="fc-event-main">Escova Modelada</div>
                                                    </div>
                                                    <div
                                                        class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event">
                                                        <div class="fc-event-main">Manicure Russa</div>
                                                    </div>
                                                </div>

                                                <p>
                                                    <input type="checkbox" id="drop-remove" />
                                                    <label for="drop-remove">Remove after drop</label>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-xl-10 col-lg-9 col-sm-8 col-12">
                                            <div id="draggableCalendar"></div>
                                        </div>
                                    </div>
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

    <!-- Calendar JS -->
    <script src="{{ asset('vendor/calendar/js/main.min.js') }}"></script>
    <script src="{{ asset('vendor/calendar/custom/draggable-calendar.js') }}"></script>

    <!-- Custom JS files -->
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>