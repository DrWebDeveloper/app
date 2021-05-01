@extends('layouts.app')
@section('title')
    Homepage
@endsection
@section('content')



                <div class="d-grid grid-cols-2 custom-grid-media">
                    <div class="">
                        <div class="card border subs-card">
                            <div class="card-body">
                                <div class="">
                                    <div class="">
                                        <h2 class="mb-2">Hi, {{ Auth::user()->name ?? 'Guest'}}</h2>
                                        <p class="pb-3">Welcome on Prospects Express dashboard. It’s good to have you here!</p>
                                    </div>
                                    <div class="d-flex flex-wrap align-items-center mt-4">
                                        @auth()
                                        <a class="btn btn-lg btn-primary mr-3" href="{{ route('appointments') }}">My
                                            Appointment</a>
                                        <a class="btn btn-lg btn-transparent explore"
                                            href="{{ route('create') }}">Create<i
                                                class="ri-arrow-right-line ml-2 mt-1"></i></a>
                                        @endauth
                                        @guest()
                                        <a class="btn btn-lg btn-primary mr-3" href="{{ route('appointments') }}">Create
                                            Appointment</a>
                                        <a class="btn btn-lg btn-transparent explore"
                                            href="{{ route('register') }}">Join Us<i
                                                class="ri-arrow-right-line ml-2 mt-1"></i></a>
                                        @endguest


                                    </div>
                                </div>
                                <div class="subs-image">
                                    <img src="{{ url('public/assets/images/layouts/banner.png') }}" alt="user-image" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right-list index-list-scrollbar">
                        <a href="{{ route('create') }}" title="">
                            <div class="media iq-option border align-items-center p-3">
                                <div class="bg-success-light rounded p-4">
                                    <img src="{{ url("public/assets/images/options/01.png")}}" class="img-fluid avatar-50" alt="image">
                                </div>
                                <div class="media-body">
                                    <h4 class="mb-2">Form Builder</h4>
                                    <p class="mb-0">Create stuning form to collect all the data you need from your
                                        client.</p>
                                </div>
                            </div>
                        </a>
                        <a href="#" title="">
                            <div class="media iq-option border align-items-center p-3">
                                <div class="bg-danger-light rounded p-4">
                                    <img src="{{ url('public/assets/images/options/02.png') }}" class="img-fluid avatar-50" alt="image">
                                </div>
                                <div class="media-body">
                                    <h4 class="mb-2">Copywriting</h4>
                                    <p class="mb-0">Write the best sales page with our pratical software wich will
                                        help you trough the process or creation.</p>
                                </div>
                            </div>
                        </a>
                        <a href="#" title="">
                            <div class="media iq-option active border align-items-center p-3">
                                <div class="bg-success-light rounded p-4">
                                    <img src="{{ url('public/assets/images/options/03.png') }}" class="img-fluid avatar-50" alt="image">
                                </div>
                                <div class="media-body pt-3">
                                    <span class="premium"> <i class="las la-crown"></i> Premium</span>
                                    <!-- <img src="./assets/images/premium.png') }} alt="" class="premium1"> -->
                                    <h4 class="mb-2">Mailing & SMS</h4>
                                    <p class="mb-0">The best mailing & sms tools for your business.
                                        We provide some extra service as mail checker & payment integration.</p>
                                </div>
                            </div>
                        </a>
                        <a href="#" title="">
                            <div class="media iq-option border align-items-center p-3">
                                <div class="bg-info-light rounded p-4">
                                    <img src="{{ url('public/assets/images/options/04.png') }}" class="img-fluid avatar-50" alt="image">
                                </div>
                                <div class="media-body pt-3">
                                    <span class="premium"> <i class="las la-crown"></i> Premium</span>
                                    <!-- <img src="./assets/images/premium.png') }} alt="" class="premium2"> -->
                                    <h4 class="mb-2">Digital Desktop</h4>
                                    <p class="mb-0">Enjoy the powerfull of the cloud thanks to your
                                        virtual desktop. Once connect you will discover our scraping & bots
                                        softwares.</p>
                                </div>
                            </div>
                        </a>
                        <!-- <a href="page-activity.html" title="">
         <div class="media iq-option border align-items-center p-3">
               <div class="bg-warning-light rounded p-4">
                  <img src="{{ url('public/assets/images/options/08.png') }}" class="img-fluid avatar-50" alt="image">
               </div>
               <div class="media-body">
                  <h4 class="mb-2">Get advice</h4>
                  <p class="mb-0">Boost your sales and level up your business with our expert overview options.</p>
               </div>
         </div>
         </a> -->
                    </div>
                </div>
                <!-- Page end  -->
            </div>
        </div>
    </div>
    <!-- Wrapper End-->
    @endsection
