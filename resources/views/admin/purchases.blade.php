@extends('admin.layouts.app')
@section('title')
    All Purchases
@endsection
@section('content')

    <div class="row">

        <div class="col-sm-12 col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Purchases</h4>
                    </div>
                </div>
                <div class="card-body">
                    <p>Here is the List of all your active Purchases.</p>
                    <table class="table basic-table">
                        <thead>
                            <tr>

                                <th scope="col" style="background: #393B87 !important;">User</th>
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
                                    @php
                                        $user = DB::table('users')->select('fname','lname')->where('id',$purchase->user_id)->get();
                                    @endphp
                                    <th scope="row">{{ $user[0]->fname }} {{ $user[0]->lname }}</th>
                                    <th>{{ $purchase->plan }}</th>
                                    <td>{{ $purchase->paid.env('CR') }}</td>


                                    @if ($purchase->status == "Active")
                                    <td><span class="badge badge-pill badge-danger">{{ $purchase->status }}</span></td>
                                    @else
                                    <td><span class="badge badge-pill badge-warning">{{ $purchase->status }}</span></td>
                                    @endif


                                    <td>{{ date('d M Y h:i A',strtotime($purchase->created_at)) }}</td>
                                    <td>{{ date('d M Y h:i A',strtotime($purchase->expiry)) }} </td>

                                </tr>

                            @endforeach



                        </tbody>
                    </table>
                    {{ $purchases->links() }}
                </div>

            </div>

        </div>
    </div>
    </div>
@endsection
