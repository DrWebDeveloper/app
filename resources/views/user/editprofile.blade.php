@extends('layouts.app')
@section('title')
    User Profile
@endsection
@section('content')

    <div class="row">
@if (Session::has('message'))
                                    <div class="alert text-white bg-primary" role="alert">
                                        <div class="iq-alert-text">{{ Session::get('message') }}
                                        </div>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <i class="ri-close-line"></i>
                                        </button>
                                    </div>
                                @endif
        <div class="col-lg-6">
            <div class="iq-edit-list-data">
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                        <div class="card">

                            <div class="card-header d-flex justify-content-between">

                                <div class="iq-header-title">
                                    <h4 class="card-title">Personal Information</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('save.profile') }}">
                                    @csrf
                                    {{-- <div class="form-group row align-items-center">
                                        <div class="col-md-12">
                                            <div class="profile-img-edit">
                                                <div class="crm-profile-img-edit">
                                                    <img class="crm-profile-pic rounded-circle avatar-100"
                                                        src="{{ url('public/assets/images/user/one.png') }}" alt="profile-pic">
                                                    <div class="crm-p-image bg-primary">
                                                        <i class="las la-pen upload-button"></i>
                                                        <input class="file-upload" type="file" accept="image/*">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class=" row align-items-center">
                                        <div class="form-group col-sm-6">
                                            <label for="name">First Name:</label>
                                            <input type="text" class="form-control" name="fname" id="fname"
                                                value="{{ $user->fname }}">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="lname">Last Name:</label>
                                            <input type="text" class="form-control" name="lname" id="lname"
                                                value="{{ $user->lname }}">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="email">Email:</label>
                                            <input type="email" class="form-control" id="email" value="{{ $user->email }}"
                                                disabled>
                                        </div>
                                        {{-- <div class="form-group col-sm-6">
                                            <label for="uname">User Name:</label>
                                            <input type="text" class="form-control" id="uname" value="Barry@01">
                                        </div> --}}
                                        <div class="form-group col-sm-6">
                                            <label for="phone">Phone:</label>
                                            <input type="phone" class="form-control" name="phone" id="phone"
                                                value="{{ $user->phone }}">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label class="d-block">Gender:</label>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="male" name="gender" class="custom-control-input" @if ($user->gender == 'male') checked="" @endif value="male">
                                                <label class="custom-control-label" for="male"> Male
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="female" name="gender" class="custom-control-input"
                                                    @if ($user->gender == 'female') checked="" @endif value="female">
                                                <label class="custom-control-label" for="female">
                                                    Female </label>
                                            </div>
                                        </div>
                                        {{-- <div class="form-group col-sm-6">
                                            <label for="dob">Date Of Birth:</label>
                                            <input type="date" name="dob" class="form-control" id="dob" value="{{ $user->dob }}">
                                        </div> --}}
                                        {{-- <div class="form-group col-sm-6">
                                            <label>Marital Status:</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option selected="">Single</option>
                                                <option>Married</option>
                                                <option>Widowed</option>
                                                <option>Divorced</option>
                                                <option>Separated </option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label>Age:</label>
                                            <select class="form-control" id="exampleFormControlSelect2">
                                                <option>12-18</option>
                                                <option>19-32</option>
                                                <option selected="">33-45</option>
                                                <option>46-62</option>
                                                <option>63 > </option>
                                            </select>
                                        </div> --}}
                                        <div class="form-group col-sm-6">
                                            <label>Country:</label>
                                            <select class="form-control" name="country" id="country">
                                                @foreach ($countries as $country)
                                                    <option value="{{ $country }}"
                                                        {{ $country == $user->country ? 'selected' : '' }}>
                                                        {{ $country }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        {{-- <div class="form-group col-sm-6">
                                            <label>State:</label>
                                            <select class="form-control" id="exampleFormControlSelect4">
                                                <option>California</option>
                                                <option>Florida</option>
                                                <option selected="">Georgia</option>
                                                <option>Connecticut</option>
                                                <option>Louisiana</option>
                                            </select>
                                        </div> --}}
                                        <div class="form-group col-sm-12">
                                            <label>Address:</label>
                                            <textarea class="form-control" name="address" rows="5"
                                                style="line-height: 22px;" placeholder="Your Address">
                                                   {{ $user->address }}
                                                   </textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    <button type="reset" class="btn iq-bg-danger">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="chang-pwd" role="tabpanel">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                    <h4 class="card-title">Change Password</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('save.profile') }}">
                                    <div class="form-group">
                                        <label for="cpass">Current Password:</label>
                                        {{-- <a href="javascripe:void();" class="float-right">Forgot Password</a> --}}
                                        <input type="Password" class="form-control" id="cpass" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="npass">New Password:</label>
                                        <input type="password" name="password" class="form-control" id="password"
                                            placeholder="New Password" autocomplete="new-password" required />
                                        {{-- <input type="Password" name="password" class="form-control" id="password" value=""> --}}
                                    </div>
                                    <div class="form-group">
                                        <label for="vpass">Verify Password:</label>
                                        <input type="password" name="password_confirmation" class="form-control"
                                            id="password_confirmation" placeholder="New Password Again" required />
                                        {{-- <input type="Password" class="form-control" id="vpass" value=""> --}}
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    <button type="reset" class="btn iq-bg-danger">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="emailandsms" role="tabpanel">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                    <h4 class="card-title">Email and SMS</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('save.profile.links') }}">
                                    @csrf
                                    <div class="form-group row align-items-center">
                                        <label class="col-md-3" for="emailnotification">Email
                                            Notification:</label>
                                        <div class="col-md-9 custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="emailnotification"
                                                checked="">
                                            <label class="custom-control-label" for="emailnotification"></label>
                                        </div>
                                    </div>
                                    <div class="form-group row align-items-center">
                                        <label class="col-md-3" for="smsnotification">SMS
                                            Notification:</label>
                                        <div class="col-md-9 custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="smsnotification"
                                                checked="">
                                            <label class="custom-control-label" for="smsnotification"></label>
                                        </div>
                                    </div>
                                    <div class="form-group row align-items-center">
                                        <label class="col-md-3" for="npass">When To Email</label>
                                        <div class="col-md-9">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="email01">
                                                <label class="custom-control-label" for="email01">You have
                                                    new notifications.</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="email02">
                                                <label class="custom-control-label" for="email02">You're
                                                    sent a direct message</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="email03" checked="">
                                                <label class="custom-control-label" for="email03">Someone
                                                    adds you as a connection</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row align-items-center">
                                        <label class="col-md-3" for="npass">When To Escalate Emails</label>
                                        <div class="col-md-9">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="email04">
                                                <label class="custom-control-label" for="email04"> Upon new
                                                    order.</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="email05">
                                                <label class="custom-control-label" for="email05"> New
                                                    membership approval</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="email06" checked="">
                                                <label class="custom-control-label" for="email06"> Member
                                                    registration</label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    <button type="reset" class="btn iq-bg-danger">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="manage-contact" role="tabpanel">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                    <h4 class="card-title">Manage Contact</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label for="cno">Contact Number:</label>
                                        <input type="text" class="form-control" id="cno" value="001 2536 123 458">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="text" class="form-control" id="email" value="Barryjone@demo.com">
                                    </div>
                                    <div class="form-group">
                                        <label for="url">Url:</label>
                                        <input type="text" class="form-control" id="url" value="https://getbootstrap.com">
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    <button type="reset" class="btn iq-bg-danger">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                        <div class="col-lg-6">
            <div class="iq-edit-list-data">
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">

                                <div class="iq-header-title">
                                    <h4 class="card-title">Social Links</h4>
                                </div>
                            </div>
                <div class="card-body">
                    <div class="acc-edit">
                        <form method="POST" action="{{ route('save.profile.links') }}">
                                    @csrf
                            <div class="form-group">
                                <label for="facebook">Facebook:</label>
                                <input type="text" class="form-control" name="facebook" value="{{ $user->facebook }}" placeholder="www.facebook.com">
                            </div>
                            <div class="form-group">
                                <label for="twitter">Twitter:</label>
                                <input type="text" class="form-control" name="twitter" value="{{ $user->twitter }}" placeholder="www.twitter.com">
                            </div>
                            <div class="form-group">
                                <label for="instagram">Instagram:</label>
                                <input type="text" class="form-control" name="instagram" value="{{ $user->instagram }}" placeholder="www.instagram.com">
                            </div>
                            <div class="form-group">
                                <label for="youtube">You Tube:</label>
                                <input type="text" class="form-control" name="youtube" value="{{ $user->youtube }}" placeholder="www.youtube.com">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn iq-bg-danger">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
