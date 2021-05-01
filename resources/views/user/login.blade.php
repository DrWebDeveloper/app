@extends('layouts.app')
@section('title')
    {{ __('all.login') }}
@endsection
@section('content')


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">{{ __('all.login to account') }}</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="acc-edit">
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-warning alert-danger fade show" role="alert">{{ $error }} <button
                                    type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button></div>
                        @endforeach
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">
                                <label for="email">{{ __('auth.email') }}:</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Your Email"  required autofocus >
                            </div>
                            <div class="form-group">
                                <label for="email">{{ __('auth.password') }}</label>
                                <input type="password" name="password" class="form-control" id="password"
                                    placeholder="Enter Password" required>
                            </div>
                            <div class="form-group">
                                {{-- <label class="d-block">Language Known:</label> --}}
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="english" checked="">
                                    <label class="custom-control-label" for="english">Remember</label>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn iq-bg-danger">Cancel</button>
                            @if (Route::has('password.request'))
                                <a class="" href="{{ route('password.request') }}">
                                    {{ __('Reset Password') }}
                                </a>
                            @endif
                            <br><br>
                            New at {{ config('app.name') }}? <a class="" href="{{ route('register') }}">
                                    {{ __('Register Now') }}
                                </a>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
