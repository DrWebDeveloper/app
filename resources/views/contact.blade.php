@extends('layouts.app')
@section('title')
    Contact
@endsection
@section('content')




        <div class="iq-maintenance">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-sm-12 text-center">
                        <div class="iq-maintenance">
                            <img src="{{ url('public/assets/images/error/02.png') }}" class="img-fluid" alt="">
                            <h3 class="mt-4 mb-1">We always prefer close connections</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-3">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <i class="ri-window-line ri-4x line-height text-primary"></i>
                                <h5 class="card-title mt-1">Phone Service Support</h5>
                                <p class="mb-0">{{ $setting->site_phone }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <i class="ri-time-line ri-4x line-height text-primary"></i>
                                <h5 class="card-title mt-1">Mail Support</h5>
                                <p class="mb-0">{{ $setting->site_mail }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <i class="ri-information-line ri-4x line-height text-primary"></i>
                                <h5 class="card-title mt-1">Office Address</h5>
                                <p class="mb-0">{{ $setting->site_address }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
