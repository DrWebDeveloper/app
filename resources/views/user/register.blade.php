@extends('layouts.app')
@section('title')
    {{ __('Register') }}
@endsection
@section('content')


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">{{ __('Create New Account') }}</h4>
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
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- Name -->
                            <div class="form-group">
                                <label for="name">{{ __('Name') }}:</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required autofocus />
                            </div>

                            <div class="form-group">
                                <label for="email">{{ __('Email') }}:</label>
                                <input type="email" name="email" class="form-control" id="Email" placeholder="Your Email" required/>
                            </div>

                            <div class="form-group">
                                <label for="password">{{ __('Password') }}:</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password" autocomplete="new-password" required/>
                            </div>

                            <div class="form-group">
                                <label for="password_confirmation">{{ __('Confirm Password') }}:</label>
                                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Enter Password Again" required/>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
                                Already registered? <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                    href="{{ route('login') }}">
                                    {{ __('Login') }}
                                </a>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
