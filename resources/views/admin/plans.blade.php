@extends('admin.layouts.app')
@section('title')
    Plans Setting
@endsection
@section('content')

    <div class="row">

        <div class="col-sm-12 col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Plans <small>({{ count($plans) }})</small></h4>
                    </div>
                </div>
                <div class="card-body">
                    <p>Here is the List of all Plans <code>We have</code>.</p>
                    <table class="table basic-table">
                        <thead>
                            <tr>
                                <th scope="col" style="background: #393B87 !important;">Plan#</th>
                                <th scope="col" style="background: #393B87 !important;">Plan Name</th>
                                <th scope="col" style="background: #393B87 !important;">Price</th>
                                <th scope="col" style="background: #393B87 !important;">Sales</th>
                                <th scope="col" style="background: #393B87 !important;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($plans as $plan)
                                <tr>
                                    <th scope="row">{{ $plan->id }}</th>
                                    <td>{{ $plan->name }}</td>
                                    <td>{{ $plan->price . env('CR') }}</td>
                                    <td>{{ $plan->sales }}</td>
                                    <td><a href="{{ route('editplan', ['id' => $plan->id]) }}">Edit</a> | <a
                                            href="{{ route('deleteplan', ['id' => $plan->id]) }}"
                                            class="text-danger">Delete</a></td>
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
