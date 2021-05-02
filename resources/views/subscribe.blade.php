@extends('layouts.app')
@section('title')
    Subscription
@endsection
@section('content')
    <div class="row">
        {{-- <div class="col-lg-12">
            <div class="card card-block card-stretch card-height blog">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Basic Pricing Box</h4>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="row align-items-center list-inline p-0 mb-0">
                        <li class="col-lg-3 col-md-6 col-sm-12">
                            <div class="p-3 border text-center rounded"> <span
                                    class="font-size-16 text-uppercase">Basic</span>
                                <h2 class="mb-4 display-3 font-weight-bolder ">$26<small class="font-size-14 text-muted">/
                                        Month</small></h2>
                                <ul class="list-unstyled mb-0">
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Consectetur adipiscing elit</li>
                                    <li>Integer molestie at massa</li>
                                    <li>Facilisis in pretium nisl aliquet</li>
                                    <li>Nulla volutpat aliquam velit</li>
                                </ul> <a href="#" class="btn btn-primary btn-lg mt-5">Start Starter</a>
                            </div>
                        </li>
                        <li class="col-lg-3 col-md-6 col-sm-12 mt-3 mt-md-0">
                            <div class="p-3 border text-center rounded"> <span
                                    class="font-size-16 text-uppercase">Basic</span>
                                <h2 class="mb-4 display-3 font-weight-bolder">$99<small class="font-size-14">/ Month</small>
                                </h2>
                                <ul class="list-unstyled mb-0 ">
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Consectetur adipiscing elit</li>
                                    <li>Integer molestie at massa</li>
                                    <li>Facilisis in pretium nisl aliquet</li>
                                    <li>Nulla volutpat aliquam velit</li>
                                </ul> <a href="#" class="btn btn-primary btn-lg mt-5">Start Starter</a>
                            </div>
                        </li>
                        <li class="col-lg-3 col-md-6 col-sm-12 mt-3 mt-lg-0">
                            <div class="p-3 border text-center rounded"> <span
                                    class="font-size-16 text-uppercase">Basic</span>
                                <h2 class="mb-4 display-3 font-weight-bolder ">$39<small class="font-size-14 text-muted">/
                                        Month</small></h2>
                                <ul class="list-unstyled mb-0">
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Consectetur adipiscing elit</li>
                                    <li>Integer molestie at massa</li>
                                    <li>Facilisis in pretium nisl aliquet</li>
                                    <li>Nulla volutpat aliquam velit</li>
                                </ul> <a href="#" class="btn btn-primary btn-lg mt-5">Start Starter</a>
                            </div>
                        </li>
                        <li class="col-lg-3 col-md-6 col-sm-12 mt-3 mt-lg-0">
                            <div class="p-3 border text-center rounded"> <span
                                    class="font-size-16 text-uppercase">Basic</span>
                                <h2 class="mb-4 display-3 font-weight-bolder ">$25<small class="font-size-14 text-muted">/
                                        Month</small></h2>
                                <ul class="list-unstyled mb-0">
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Consectetur adipiscing elit</li>
                                    <li>Integer molestie at massa</li>
                                    <li>Facilisis in pretium nisl aliquet</li>
                                    <li>Nulla volutpat aliquam velit</li>
                                </ul> <a href="#" class="btn btn-primary btn-lg mt-5">Start Starter</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div> --}}
        <div class="col-lg-12">
            <div class="card card-block card-stretch card-height blog">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Plan {{ $pid }}</h4>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="row align-items-center list-inline p-0 mb-0">
                        {{-- <li class="col-lg-3 col-md-6 col-sm-12">
                            <div class="p-3 border text-center pricing-radius-box"> <span
                                    class="font-size-16 text-uppercase">Basic</span>
                                <h2 class="mb-4 display-3 font-weight-bolder ">$26<small class="font-size-14 text-muted">/
                                        Month</small></h2>
                                <ul class="list-unstyled mb-0">
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Consectetur adipiscing elit</li>
                                    <li>Integer molestie at massa</li>
                                    <li>Facilisis in pretium nisl aliquet</li>
                                    <li>Nulla volutpat aliquam velit</li>
                                </ul> <a href="#" class="btn btn-primary btn-lg mt-5">Start Starter</a>
                            </div>
                        </li>
                        <li class="col-lg-3 col-md-6 col-sm-12 mt-3 mt-md-0">
                            <div class="p-3 border text-center pricing-radius-box"> <span
                                    class="font-size-16 text-uppercase">Basic</span>
                                <h2 class="mb-4 display-3 font-weight-bolder">$99<small class="font-size-14">/ Month</small>
                                </h2>
                                <ul class="list-unstyled mb-0 ">
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Consectetur adipiscing elit</li>
                                    <li>Integer molestie at massa</li>
                                    <li>Facilisis in pretium nisl aliquet</li>
                                    <li>Nulla volutpat aliquam velit</li>
                                </ul> <a href="#" class="btn btn-primary btn-lg mt-5">Start Starter</a>
                            </div>
                        </li>
                        <li class="col-lg-3 col-md-6 col-sm-12 mt-3 mt-lg-0">
                            <div class="p-3 border text-center pricing-radius-box"> <span
                                    class="font-size-16 text-uppercase">Basic</span>
                                <h2 class="mb-4 display-3 font-weight-bolder ">$39<small class="font-size-14 text-muted">/
                                        Month</small></h2>
                                <ul class="list-unstyled mb-0">
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Consectetur adipiscing elit</li>
                                    <li>Integer molestie at massa</li>
                                    <li>Facilisis in pretium nisl aliquet</li>
                                    <li>Nulla volutpat aliquam velit</li>
                                </ul> <a href="#" class="btn btn-primary btn-lg mt-5">Start Starter</a>
                            </div>
                        </li> --}}
                        <li class="col-lg-10 col-md-10 col-sm-12 mt-3 mt-lg-0">
                            <div class="p-3 border text-center pricing-radius-box"> <span
                                    class="font-size-16 text-uppercase">Basic </span>
                                <h2 class="mb-4 display-3 font-weight-bolder">$25<small class="font-size-14 text-muted">/
                                        Month</small></h2>
                                <ul class="list-unstyled mb-0">
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Consectetur adipiscing elit</li>
                                    <li>Integer molestie at massa</li>
                                    <li>Facilisis in pretium nisl aliquet</li>
                                    <li>Nulla volutpat aliquam velit</li>
                                </ul> <a href="#" class="btn btn-primary btn-lg mt-5">Start Starter</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        {{-- <div class="col-lg-12">
            <div class="card card-block card-stretch card-height blog">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Normal Pricing Box</h4>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="row align-items-center list-inline p-0 mb-0">
                        <li class="col-lg-3 col-md-6 col-sm-12">
                            <div class="p-3 border text-center"> <span class="font-size-16 text-uppercase">Basic</span>
                                <h2 class="mb-4 display-3 font-weight-bolder ">$26<small class="font-size-14 text-muted">/
                                        Month</small></h2>
                                <ul class="list-unstyled mb-0">
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Consectetur adipiscing elit</li>
                                    <li>Integer molestie at massa</li>
                                    <li>Facilisis in pretium nisl aliquet</li>
                                    <li>Nulla volutpat aliquam velit</li>
                                </ul> <a href="#" class="btn btn-primary btn-lg mt-5">Start Starter</a>
                            </div>
                        </li>
                        <li class="col-lg-3 col-md-6 col-sm-12 mt-3 mt-md-0">
                            <div class="p-3 border text-center"> <span class="font-size-16 text-uppercase">Basic</span>
                                <h2 class="mb-4 display-3 font-weight-bolder">$99<small class="font-size-14">/ Month</small>
                                </h2>
                                <ul class="list-unstyled mb-0 ">
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Consectetur adipiscing elit</li>
                                    <li>Integer molestie at massa</li>
                                    <li>Facilisis in pretium nisl aliquet</li>
                                    <li>Nulla volutpat aliquam velit</li>
                                </ul> <a href="#" class="btn btn-primary btn-lg mt-5">Start Starter</a>
                            </div>
                        </li>
                        <li class="col-lg-3 col-md-6 col-sm-12 mt-3 mt-lg-0">
                            <div class="p-3 border text-center"> <span class="font-size-16 text-uppercase">Basic</span>
                                <h2 class="mb-4 display-3 font-weight-bolder ">$39<small class="font-size-14 text-muted">/
                                        Month</small></h2>
                                <ul class="list-unstyled mb-0">
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Consectetur adipiscing elit</li>
                                    <li>Integer molestie at massa</li>
                                    <li>Facilisis in pretium nisl aliquet</li>
                                    <li>Nulla volutpat aliquam velit</li>
                                </ul> <a href="#" class="btn btn-primary btn-lg mt-5">Start Starter</a>
                            </div>
                        </li>
                        <li class="col-lg-3 col-md-6 col-sm-12 mt-3 mt-lg-0">
                            <div class="p-3 border text-center"> <span class="font-size-16 text-uppercase">Basic</span>
                                <h2 class="mb-4 display-3 font-weight-bolder ">$25<small class="font-size-14 text-muted">/
                                        Month</small></h2>
                                <ul class="list-unstyled mb-0">
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Consectetur adipiscing elit</li>
                                    <li>Integer molestie at massa</li>
                                    <li>Facilisis in pretium nisl aliquet</li>
                                    <li>Nulla volutpat aliquam velit</li>
                                </ul> <a href="#" class="btn btn-primary btn-lg mt-5">Start Starter</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div> --}}
        {{-- <div class="col-lg-12">
            <div class="card card-block card-stretch card-height blog">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Color Pricing Box</h4>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="row align-items-center list-inline p-0 mb-0">
                        <li class="col-lg-3 col-md-6 col-sm-12">
                            <div class="p-3 border text-center bg-primary text-white pricing-radius-box">
                                <span class="font-size-16 text-uppercase">Basic</span>
                                <h2 class="mb-4 display-3 font-weight-bolder text-white">$26<small class="font-size-14">/
                                        Month</small></h2>
                                <ul class="list-unstyled mb-0">
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Consectetur adipiscing elit</li>
                                    <li>Integer molestie at massa</li>
                                    <li>Facilisis in pretium nisl aliquet</li>
                                    <li>Nulla volutpat aliquam velit</li>
                                </ul> <a href="#" class="btn bg-white btn-lg border-none mt-5">Start
                                    Starter</a>
                            </div>
                        </li>
                        <li class="col-lg-3 col-md-6 col-sm-12 mt-3 mt-md-0">
                            <div class="p-3 border text-center bg-warning text-white pricing-radius-box">
                                <span class="font-size-16 text-uppercase">Basic</span>
                                <h2 class="mb-4 display-3 font-weight-bolder text-white">$99<small class="font-size-14">/
                                        Month</small></h2>
                                <ul class="list-unstyled mb-0 ">
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Consectetur adipiscing elit</li>
                                    <li>Integer molestie at massa</li>
                                    <li>Facilisis in pretium nisl aliquet</li>
                                    <li>Nulla volutpat aliquam velit</li>
                                </ul> <a href="#" class="btn bg-white btn-lg border-none mt-5">Start
                                    Starter</a>
                            </div>
                        </li>
                        <li class="col-lg-3 col-md-6 col-sm-12 mt-3 mt-lg-0">
                            <div class="p-3 border text-center bg-success text-white pricing-radius-box">
                                <span class="font-size-16 text-uppercase">Basic</span>
                                <h2 class="mb-4 display-3 font-weight-bolder text-white">$39<small class="font-size-14">/
                                        Month</small></h2>
                                <ul class="list-unstyled mb-0">
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Consectetur adipiscing elit</li>
                                    <li>Integer molestie at massa</li>
                                    <li>Facilisis in pretium nisl aliquet</li>
                                    <li>Nulla volutpat aliquam velit</li>
                                </ul> <a href="#" class="btn bg-white btn-lg border-none mt-5">Start
                                    Starter</a>
                            </div>
                        </li>
                        <li class="col-lg-3 col-md-6 col-sm-12 mt-3 mt-lg-0">
                            <div class="p-3 border text-center bg-danger text-white pricing-radius-box">
                                <span class="font-size-16 text-uppercase">Basic</span>
                                <h2 class="mb-4 display-3 font-weight-bolder text-white">$25<small class="font-size-14">/
                                        Month</small></h2>
                                <ul class="list-unstyled mb-0">
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Consectetur adipiscing elit</li>
                                    <li>Integer molestie at massa</li>
                                    <li>Facilisis in pretium nisl aliquet</li>
                                    <li>Nulla volutpat aliquam velit</li>
                                </ul> <a href="#" class="btn bg-white btn-lg border-none mt-5">Start
                                    Starter</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div> --}}
    </div>
@endsection
