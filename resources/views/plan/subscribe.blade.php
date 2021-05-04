@extends('layouts.app')
@section('title')
    Purchasing Plan
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="or-detail rounded">
                        <div class="p-3">
                            <h5 class="mb-3">Purchase Details</h5>
                            <div class="mb-2">
                                <h6>Plan Name</h6>
                                <p>{{ $plan->name }}</p>
                            </div>
                            <div class="mb-2">
                                <h6>Price</h6>
                                <p>{{ $plan->price . env('CR', 'production') }}</p>
                            </div>
                            <div class="mb-2">
                                <h6>Next Due Date</h6>
                                <p>{{ date('l d M Y', $date) }}</p>
                            </div>
                            <div class="mb-2">
                                <h6>Sub Total</h6>
                                <p>{{ $plan->price . env('CR', 'production') }}</p>
                            </div>

                        </div>
                        {{-- <div class="ttl-amt py-2 px-3 d-flex justify-content-between align-items-center">
                            <h6>Total</h6>
                            <h3 class="text-primary font-weight-700">{{ $plan->price . env('CR', 'production') }}</h3>
                        </div> --}}
                        {{-- <button type="button" class="mt-2 btn btn-primary rounded-pill"><i class="ri-bill-fill"></i>Make
                            Payment</button> --}}
                    </div>
                </div>

            {{-- Making Payment Section --}}
            <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="or-detail rounded">
                        <div class="p-3">
                            <h5 class="mb-3">Make Payment</h5>
                            <div class="mb-2">
                                <h6>Amount to be Charged</h6>
                                <p>{{ $plan->price }}</p>
                            </div>


                        </div>
                        <div class="ttl-amt py-2 px-3 d-flex justify-content-between align-items-center">
                            <h6>Total</h6>
                            <h3 class="text-primary font-weight-700">{{ $plan->price . env('CR', 'production') }}</h3>
                        </div>
                        <div class="pt-5 pb-5 pl-2">
                        <button type="button" class="mt-2 btn btn-primary rounded-pill"><i class="ri-bill-fill"></i>Make
                            Payment</button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
