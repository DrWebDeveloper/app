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
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row text-center">
                                <h3 class="panel-heading">Payment Details</h3>
                            </div>
                        </div>
                        <div class="panel-body">
                            @if (Session::has('success'))
                                <div class="alert alert-success text-center">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                    {{ Session::get('success') }}
                                </div>
                                 <script>
        window.setTimeout(function() {
            window.location.href = "{{ route('purchases') }}";
        }, 2500);
    </script>
                            @endif
                            <link rel="stylesheet" href="{{ asset('/css/style.css') }}" />
                            <script src="https://js.stripe.com/v3/"></script>
                            <script>
                                var stripe = Stripe('{{ env('STRIPE_KEY') }}');
                                var elements = stripe.elements();

                            </script>
                            <form action="{{ route('pay') }}" method="post" id="payment-form">
                                @csrf
                                <input type="hidden" name="pid" value="{{ $plan->id }}">
                                <div class="form-row">
                                    <label for="card-element">
                                        Please fill your card details
                                    </label>
                                    <div id="card-element" style="width: -webkit-fill-available;padding:15px 4px 11px 0px;">
                                        <!-- A Stripe Element will be inserted here. -->
                                    </div>

                                    <!-- Used to display Element errors. -->
                                    <div id="card-errors" role="alert"></div>
                                </div>

                                <button class="btn btn-danger">Pay Now ({{ $plan->price.env('CR') }})</button>
                            </form>
                            <script src="{{ url('public/assets/js/card.js') }}"></script>

                        </div>
                    </div>
                </div>


                </body>

            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
@endsection
