@extends('admin.layouts.app')
@section('title')
    Plan Edit
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    @if (\Session::has('success'))
                            <div class="alert text-white bg-primary" role="alert">
                                {{-- <div class="iq-alert-icon">
                                    <i class="ri-alert-line"></i>
                                </div> --}}
                                <div class="iq-alert-text">

                                    {!! \Session::get('success') !!}
                                    <a href="{{ route('adminplans') }}" class="text-success">(View All Plan)</a>
                                </div>
                            </div>

                        @endif
                    <div class="d-flex align-items-center border-bottom
                                      justify-content-between mb-4">

                        <div class="form-name">
                            <h3 class="mb-2">{{ $plan->name }} Plan Edit</h3>
                        </div>
                        <div class="select-dropdown input-prepend input-append">
                            <div class="btn-group">
                                <label data-toggle="dropdown">
                                    <span class="dropdown-toggle search-query btn-edit"><i
                                            class="las la-edit mr-0 text-center"></i></span><span
                                        class="search-replace"></span>
                                    <span class="caret d-none">
                                        <!--icon-->
                                    </span>
                                </label>
                                <ul class="dropdown-menu w-100 border-none p-3">
                                    <li>
                                        <div class="item mb-2"><i class="ri-pencil-line
                                                        mr-3"></i>Edit</div>
                                    </li>
                                    <li>
                                        <div class="item"><i class="ri-delete-bin-6-line
                                                        mr-3"></i>Delete</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-8 col-md-8">
                    <ul class="d-flex nav nav-pills text-center" id="event-pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link btn btn-outline-primary active show" data-toggle="pill" href="#pill-1"
                                role="tab" aria-selected="true">Form</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-outline-primary" data-toggle="pill" href="#pill-2" role="tab"
                                aria-selected="false">Options</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-outline-primary" data-toggle="pill" href="#pill-3" role="tab"
                                aria-selected="false">Publish</a>
                        </li>
                    </ul>
                </div> --}}
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content">
                        <div id="pill-1" class="tab-pane fade active show">
                            <div class="row">
                                <div class="col-sm-12">
                                    <form method="POST" action="{{ route('updateplan', ['pid' => $plan->id]) }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="mb-0">Plan Name</label>
                                                    <input class="form-control" type="text" name="name"
                                                        placeholder="Enter Plan Name" value="{{ $plan->name }}" autofocus>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="mb-0">Price</label>
                                                    <input class="form-control" type="text" name="price"
                                                        placeholder="Enter Price ({{ env('CR') }})"
                                                        value="{{ $plan->price }}">
                                                </div>
                                            </div>
                                            {{-- <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="mb-0">Email</label>
                                                    <input class="form-control" type="email" placeholder="Enter your email">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="mb-0">Title</label>
                                                    <input class="form-control" type="email"
                                                        placeholder="Subscribe to our newsletter">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="mb-2">Description</label>
                                                    <textarea class="form-control
                                              description" id="exampleFormControlTextarea2" rows="4" placeholder="Enter specific
                                              and clear language on the intended use
                                              of the collected information."></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="mb-2">Personal data
                                                        disclaimer</label>
                                                    <textarea class="form-control
                                              description" id="exampleFormControlTextarea3" rows="4" placeholder="Label in
                                              Textarea"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="mb-0">Button Text</label>
                                                    <input class="form-control" type="email" placeholder="Subscribe">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="mb-0">Plan Status</label>
                                                    <select name="type" class="selectpicker
                                              form-control" data-style="py-0">
                                                        <option>Select..</option>
                                                        <option>New List</option>
                                                        <option>Demo List</option>
                                                    </select>
                                                </div>
                                            </div> --}}
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-lg
                                                     mt-4">Update Plan</button>
                                    </form>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
