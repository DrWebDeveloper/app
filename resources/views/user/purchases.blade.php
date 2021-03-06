@extends('layouts.app')
@section('title')
    Purchases
@endsection
@section('content')

    <div class="row">

        <div class="col-sm-12 col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Active Purchases <small>({{ count($purchases) }})</small></h4>
                    </div>
                </div>
                <div class="card-body">
                    <p>Here is the List of all your active Purchases.</p>
                    <table class="table basic-table">
                        <thead>
                            <tr>

                                <th scope="col" style="background: #393B87 !important;">Plan Name</th>
                                <th scope="col" style="background: #393B87 !important;">Charged</th>
                                <th scope="col" style="background: #393B87 !important;">Status</th>
                                <th scope="col" style="background: #393B87 !important;">Purchased on</th>
                                <th scope="col" style="background: #393B87 !important;">Expires On</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($purchases as $purchase)
                                <tr>
                                    <th scope="row">{{ $purchase->plan }}</th>
                                    <td>{{ $purchase->paid.env('CR') }}</td>
                                    <td>
                                        @if ($purchase->status == "Active")
                                        <span class="badge badge-pill badge-danger">{{ $purchase->status }}</span>

                                        @else
                                        <span class="badge badge-pill badge-warning">{{ $purchase->status }}</span>
                                        @endif
                                    </td>
                                    <td>{{ date('d M Y h:i A',strtotime($purchase->created_at)) }}</td>
                                    <td>{{ date('d M Y h:i A',strtotime($purchase->expiry)) }}</td>

                                </tr>

                            @endforeach



                        </tbody>
                    </table>
                </div>
            </div>

        </div>

        <div class="col-sm-12 col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Expired Purchases <small>({{ count($epurchases) }})</small></h4>
                    </div>
                </div>
                <div class="card-body">
                    <p>Here is the List of all your active Purchases.</p>
                    <table class="table basic-table">
                        <thead>
                            <tr>

                                <th scope="col" style="background: #393B87 !important;">Plan Name</th>
                                <th scope="col" style="background: #393B87 !important;">Charged</th>
                                <th scope="col" style="background: #393B87 !important;">Status</th>
                                <th scope="col" style="background: #393B87 !important;">Purchased on</th>
                                <th scope="col" style="background: #393B87 !important;">Expired On</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($epurchases as $purchase)
                                <tr>
                                    <th scope="row">{{ $purchase->plan }}</th>
                                    <td>{{ $purchase->paid.env('CR') }}</td>
                                    <td>
                                        @if ($purchase->status == "Active")
                                        <span class="badge badge-pill badge-danger">{{ $purchase->status }}</span>

                                        @else
                                        <span class="badge badge-pill badge-warning">{{ $purchase->status }}</span>
                                        @endif
                                    </td>
                                    <td>{{ date('d M Y h:i A',strtotime($purchase->created_at)) }}</td>
                                    <td>{{ date('d M Y h:i A',strtotime($purchase->expiry)) }}</td>

                                </tr>

                            @endforeach



                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
    </div>
@endsection
