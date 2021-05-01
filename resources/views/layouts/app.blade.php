<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>@yield('title') - {{ config('app.name') }}</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ url('public/assets/images/favicon.ico')}}" />
        <link rel="stylesheet" href="{{ url('public/assets/css/backend-plugin.min.css')}}">
        <link rel="stylesheet" href="{{ url('public/assets/css/backend.css?v=1.0.2')}}">
        <link rel="stylesheet" href="{{ url('public/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}">
        <link rel="stylesheet" href="{{ url('public/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css')}}">
        <link rel="stylesheet" href="{{ url('public/assets/vendor/remixicon/fonts/remixicon.css')}}">
        <link rel="stylesheet" href="{{ url('public/assets/vendor/@icon/dripicons/dripicons.css')}}">

        <link rel='stylesheet' href='{{ url('public/assets/vendor/fullcalendar/core/main.css')}}' />
        <link rel='stylesheet' href='{{ url('public/assets/vendor/fullcalendar/daygrid/main.css')}}' />
        <link rel='stylesheet' href='{{ url('public/assets/vendor/fullcalendar/timegrid/main.css')}}' />
        <link rel='stylesheet' href='{{ url('public/assets/vendor/fullcalendar/list/main.css')}}' />
        <link rel="stylesheet" href="{{ url('public/assets/vendor/mapbox/mapbox-gl.css')}}">
        <style>

            .premium{
                position: absolute;
        width: fit-content;
        color: white;
        padding: 4px;
        border-radius: 6px;
        z-index: 10;
        left: -2px;
        right: 0;
        background-color: orange;
        margin-top: -37px;
                    }

            @media (min-width: 1px) and (max-width: 450px) {

                }
        </style>
    </head>

    <body class="email-chimp ">

            @include('layouts.navigation')
                    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->
        <!-- Wrapper Starts-->
                <div class="content-page">
                            <div class="container-fluid">
                                @yield('content')
                            </div>
                </div>
        <!-- Wrapper End-->
                <footer class="iq-footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item"><a href="{{ route('policy') }}">Privacy Policy</a></li>
                                    <li class="list-inline-item"><a href="{{ route('tos') }}">Terms of Use</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-6 text-right">
                                Copyright &copy; 2021 <a href="{{route('home')}}">{{ config('app.name') }}</a>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- jQuery Load -->
                <script src="{{ url('public/assets/js/jquery.js')}}"></script>
                <!-- Backend Bundle JavaScript -->
                <script src="{{ url('public/assets/js/backend-bundle.min.js')}}"></script>

                <!-- Flextree Javascript-->

                <!-- Table Treeview JavaScript -->
                <script src="{{ url('public/assets/js/table-treeview.js')}}"></script>

                <!-- Masonary Gallery Javascript -->

                <!-- Mapbox Javascript -->

                <!-- Fullcalender Javascript -->
                <script src='{{ url('public/assets/vendor/fullcalendar/core/main.js')}}'></script>
                <script src='{{ url('public/assets/vendor/fullcalendar/daygrid/main.js')}}'></script>
                <script src='{{ url('public/assets/vendor/fullcalendar/timegrid/main.js')}}'></script>
                <script src='{{ url('public/assets/vendor/fullcalendar/list/main.js')}}'></script>

                <!-- SweetAlert JavaScript -->
                <script src="{{ url('public/assets/js/sweetalert.js')}}"></script>

                <!-- Vectoe Map JavaScript -->
                <script src="{{ url('public/assets/js/vector-map-custom.js')}}"></script>

                <!-- Chart Custom JavaScript -->

                <!-- Chart Custom JavaScript -->
                <script src="{{ url('public/assets/js/chart-custom.js')}}"></script>

                <!-- slider JavaScript -->
                <script src="{{ url('public/assets/js/slider.js')}}"></script>

                <!-- app JavaScript -->
                <script src="{{ url('public/assets/js/app.js')}}"></script>
            </body>

            </html>
