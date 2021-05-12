<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ __('Email Password Reset Link') }} - {{ config('app.name') }}</title>

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


    <div class="wrapper">
        <section class="login-content">
            <div class="container h-100">
                <div class="row align-items-center justify-content-center h-100">
                    <div class="col-12">
                        @if (Session::has('status'))
                            <div class="alert alert-success text-center">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                {{ Session::get('status') }}
                            </div>
                            <script>
                                window.setTimeout(function() {
                                    window.location.href = "{{ route('home') }}";
                                }, 3000);

                            </script>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">{{ implode('', $errors->all(':message')) }}</div>
                                                        <script>
                                window.setTimeout(function() {
                                    window.location.href = "{{ route('login') }}";
                                }, 3000);

                            </script>
                        @endif
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <h2 class="mb-2">Reset Password</h2>
                                <p>Enter your email address and we'll send you an email with instructions to reset your
                                    password.</p>
                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class=" form-group">
                                                <label class="mb-0">Email</label>
                                                <input class="form-control" name="email" type="email" id="email"
                                                    placeholder="Enter Your Email" required autofocus>

                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit"
                                        class="btn btn-primary btn-lg">{{ __('Email Password Reset Link') }}</button>
                                </form>
                            </div>
                            <div class="col-lg-6 rmb-30">
                                <img src="{{ url('public/assets/images/login/01.png') }}" class="img-fluid w-80"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

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
