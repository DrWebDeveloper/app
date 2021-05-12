<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>{{ __('all.login') }} - {{ config('app.name') }}</title>

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


        <div class="wrapper">
      <section class="login-content">
         <div class="container h-100">
            <div class="row align-items-center justify-content-center h-100">
                          @foreach ($errors->all() as $error)
                            <div class="alert alert-warning alert-danger fade show" role="alert">{{ $error }} <button
                                    type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button></div>
                        @endforeach

               <div class="col-12">
                  <div class="row align-items-center">
                     <div class="col-lg-6">
                        <h2 class="mb-2">Sign In</h2>
                        <p>To Keep connected with us please login with your personal info.</p>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                           <div class="row">
                              <div class="col-lg-12">
                                 <div class="form-group">
                                    <label class="mb-0">Email</label>
                                    {{-- <input class="form-control" type="email" placeholder=" "> --}}
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Your Email"  required autofocus >
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="form-group">
                                    <label class="mb-0">Password</label>
                                    {{-- <input class="form-control" type="password" placeholder=" "> --}}
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password" required>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Remember Me</label>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <a href="{{ route('password.request') }}" class="text-primary float-right">Forgot Password?</a>
                              </div>
                           </div>
                           <button type="submit" class="btn btn-primary btn-lg">Sign In</button>
                           <p class="mt-3">
                              Create an Account <a href="{{ route('register') }}" class="text-primary">Sign Up</a>
                           </p>
                        </form>
                     </div>
                     <div class="col-lg-6 mb-lg-0 mb-4 mt-lg-0 mt-4">
                        <img src="{{  url('public/assets/images/login/01.png') }}" class="img-fluid w-80" alt="">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      </div>

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
