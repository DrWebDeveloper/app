<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ 'Server Error :/ - ' . config('app.name') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url('public/assets/images/favicon.ico') }}" />
    <link rel="stylesheet" href="{{ url('public/assets/css/backend-plugin.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/assets/css/backend.css?v=1.0.2') }}">
    <link rel="stylesheet" href="{{ url('public/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet"
        href="{{ url('public/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/assets/vendor/remixicon/fonts/remixicon.css') }}">
    <link rel="stylesheet" href="{{ url('public/assets/vendor/@icon/dripicons/dripicons.css') }}">

    <link rel='stylesheet' href='{{ url('public/assets/vendor/fullcalendar/core/main.css') }}' />
    <link rel='stylesheet' href='{{ url('public/assets/vendor/fullcalendar/daygrid/main.css') }}' />
    <link rel='stylesheet' href='{{ url('public/assets/vendor/fullcalendar/timegrid/main.css') }}' />
    <link rel='stylesheet' href='{{ url('public/assets/vendor/fullcalendar/list/main.css') }}' />
    <link rel="stylesheet" href="{{ url('public/assets/vendor/mapbox/mapbox-gl.css') }}">
    <style>
        .premium {
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

        @media (min-width: 1px) and (max-width: 450px) {}

    </style>
</head>

<body class=" ">
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->

    <div class="wrapper">
        <div class="container">
            <div class="row no-gutters height-self-center">
                <div class="col-sm-12 text-center align-self-center">
                    <div class="iq-error position-relative">
                        <img src="{{ url('public/assets/images/error/500.png') }}" class="img-fluid iq-error-img"
                            alt="">
                        <h2 class="mb-0">Oops! This Page is Not Working.</h2>
                        <p>The requested is Internal Server Error.</p>
                        <a class="btn btn-primary btn-lg d-inline-flex align-items-center mt-3"
                            href="{{ route('home') }}"><i class="ri-home-4-line"></i>Back to Home</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.setTimeout(function() {
            window.location.href = "{{ route('home') }}"";
        }, 2000);
    </script>
    <!-- jQuery Load -->
    <script src="{{ url('public/assets/js/jquery.js') }}"></script>
    <!-- Backend Bundle JavaScript -->
    <script src="{{ url('public/assets/js/backend-bundle.min.js') }}"></script>

    <!-- Flextree Javascript-->

    <!-- Table Treeview JavaScript -->
    <script src="{{ url('public/assets/js/table-treeview.js') }}"></script>

    <!-- Masonary Gallery Javascript -->

    <!-- Mapbox Javascript -->

    <!-- Fullcalender Javascript -->
    <script src='{{ url('public/assets/vendor/fullcalendar/core/main.js') }}'></script>
    <script src='{{ url('public/assets/vendor/fullcalendar/daygrid/main.js') }}'></script>
    <script src='{{ url('public/assets/vendor/fullcalendar/timegrid/main.js') }}'></script>
    <script src='{{ url('public/assets/vendor/fullcalendar/list/main.js') }}'></script>

    <!-- SweetAlert JavaScript -->
    <script src="{{ url('public/assets/js/sweetalert.js') }}"></script>

    <!-- Vectoe Map JavaScript -->
    <script src="{{ url('public/assets/js/vector-map-custom.js') }}"></script>

    <!-- Chart Custom JavaScript -->

    <!-- Chart Custom JavaScript -->
    <script src="{{ url('public/assets/js/chart-custom.js') }}"></script>

    <!-- slider JavaScript -->
    <script src="{{ url('public/assets/js/slider.js') }}"></script>

    <!-- app JavaScript -->
    <script src="{{ url('public/assets/js/app.js') }}"></script>
</body>

</html>
