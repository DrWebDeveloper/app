@extends('admin.layouts.app')
@section('title')
    General Settings
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
                            </div>
                        </div>

                    @endif
                    @foreach ($errors->all() as $error)
                        <div class="alert text-white bg-primary" role="alert">
                            <div class="iq-alert-icon">
                                <i class="ri-alert-line"></i>
                            </div>
                            <div class="iq-alert-text"> {!! $error !!}</div>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="ri-close-line"></i>
                            </button>
                        </div>

                    @endforeach


                    <div class="d-flex align-items-center border-bottom
                              justify-content-between mb-4">
                        <div class="form-name">
                            <h3 class="mb-2">General Settings</h3>
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
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="tab-content">
                        <div id="pill-1" class="tab-pane fade active show">
                            <div class="row">
                                <div class="col-sm-12">
                                    <form action="{{ route('editgeneral') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="mb-0">Website Name</label>
                                                    <input name="site_name" value="{{ $setting->site_name }}"
                                                        class="form-control" type="text" placeholder="Enter Website Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="mb-0">Website URL</label>
                                                    <input name="site_url" value="{{ $setting->site_url }}"
                                                        class="form-control" type="text"
                                                        placeholder="{{ env('APP_URL') }}" disabled>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="mb-0">Contact Email</label>
                                                    <input name="site_mail" value="{{ $setting->site_mail }}"
                                                        class="form-control" type="email"
                                                        placeholder="Enter the Contact email">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="mb-0">Contact Phone</label>
                                                    <input name="site_phone" value="{{ $setting->site_phone }}"
                                                        class="form-control" type="phone"
                                                        placeholder="Subscribe to our newsletter">
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="mb-2">Contact Address</label>
                                                    <textarea class="form-control description"
                                                        id="exampleFormControlTextarea2" rows="4" name="site_address"
                                                        value="">{{ $setting->site_address }}</textarea>
                                                </div>
                                            </div>
                                            {{-- <div class="col-lg-12">
                                    <div class="form-group">
                                       <label class="mb-2">Personal data
                                          disclaimer</label>
                                       <textarea class="form-control
                                          description" id="exampleFormControlTextarea3" rows="4" placeholder="Label in
                                          Textarea"></textarea>
                                    </div>
                                 </div> --}}
                                            {{-- <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                       <label class="mb-0">Button Text</label>
                                       <input class="form-control" type="email" placeholder="Subscribe">
                                    </div>
                                 </div>
                                 <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                       <label class="mb-0">Add contacts to</label>
                                       <div class="dropdown bootstrap-select form-control"><select name="type" class="selectpicker form-control" data-style="py-0">
                                          <option>Select..</option>
                                          <option>New List</option>
                                          <option>Demo List</option>
                                       </select><button type="button" tabindex="-1" class="btn dropdown-toggle py-0" data-toggle="dropdown" role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox" aria-expanded="false" title="Select.."><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Select..</div></div> </div></button><div class="dropdown-menu "><div class="inner show" role="listbox" id="bs-select-1" tabindex="-1"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div>
                                    </div>
                                 </div> --}}
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-lg
                                             mt-4" id="uploadButton">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="pill-2" class="tab-pane fade">
                            <div class="row">
                                <div class="col-sm-12">
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="mb-0">Display the following
                                                        web page after contact signs up</label>
                                                    <input class="form-control" type="text" placeholder="http://">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="mb-0">Display the following
                                                        web page after contact activates via
                                                        email</label>
                                                    <input class="form-control" type="text" placeholder="http://">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="mb-0">Display the following
                                                        web page if contact has previously
                                                        subscribed</label>
                                                    <input class="form-control" type="text" placeholder="http://">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="mb-0">Notify the following
                                                        email when a contact signs up</label>
                                                    <input class="form-control" type="text" placeholder="http://">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="mb-0">Use the following
                                                        activation template</label>
                                                    <div class="dropdown bootstrap-select form-control"><select name="type"
                                                            class="selectpicker form-control" data-style="py-0">
                                                            <option>Select..</option>
                                                            <option>New Landing Page</option>
                                                            <option>Demo List</option>
                                                        </select><button type="button" tabindex="-1"
                                                            class="btn dropdown-toggle py-0" data-toggle="dropdown"
                                                            role="combobox" aria-owns="bs-select-2" aria-haspopup="listbox"
                                                            aria-expanded="false" title="Select..">
                                                            <div class="filter-option">
                                                                <div class="filter-option-inner">
                                                                    <div class="filter-option-inner-inner">Select..</div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                        <div class="dropdown-menu ">
                                                            <div class="inner show" role="listbox" id="bs-select-2"
                                                                tabindex="-1">
                                                                <ul class="dropdown-menu inner show" role="presentation">
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="pill-3" class="tab-pane fade">
                            <div class="row">
                                <div class="col-sm-12">
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-9">
                                                <div class="form-group">
                                                    <label class="mb-0">Share or embed your
                                                        form link to grow your audience.</label>
                                                    <input class="form-control" type="text"
                                                        placeholder="https://api.elasticemail.com/form?lid=FkA6QiUJu8A6eMM9OT4nJA2">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 d-flex
                                                justify-content-lg-end">
                                                <div class="">
                                                    <a href="#" class="btn btn-outline-primary btn-lg"
                                                        data-extra-toggle="copy" data-input="#api-password" title=""
                                                        data-toggle="tooltip" data-original-title="Copy to clipboard"><i
                                                            class="las la-link pr-2"></i>Copy From Link</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tab-content">
                        <div id="pill-1" class="tab-pane fade active show">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="mb-2">
                                        <div class="form-name text-center">
                                            <h4 class="m-1">Logo Settings</h4>
                                        </div>
                                        <form action="{{ route('editlogo') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">

                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <label class="mb-0">Website Main Logo</label>
                                                        <input name="site_logo" value="{{ $setting->site_logo }}"
                                                            class="form-control" type="file">
                                                    </div>
                                                </div>

                                            </div>
                                            <button type="submit" class="btn btn-primary btn-block
                                             mb-4" id="uploadButton">Update</button>
                                        </form>
                                        <form action="{{ route('editlogosidebar') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">

                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <label class="mb-0">Sidebar Logo</label>
                                                        <input name="site_logo_sidebar"
                                                            value="{{ $setting->site_logo_sidebar }}"
                                                            class="form-control" type="file">
                                                    </div>
                                                </div>

                                            </div>
                                            <button type="submit" class="btn btn-primary btn-block
                                             " id="uploadButton">Update</button>
                                        </form>
                                    </div>


                                    <div class="mb-4">
                                        <div class="form-name text-center">
                                            <h4 class="m-1">Banner Settings</h4>
                                        </div>

                                        <form action="{{ route('editbanner') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">

                                                <div class="col-lg-12 col-md-12 mt-4">
                                                    <div class="form-group">
                                                        <label class="mb-0">Banner image</label>
                                                        <input name="image" value="{{ $setting->site_logo_sidebar }}"
                                                            class="form-control" type="file">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 mt-4">
                                                    <div class="form-group">
                                                        <label class="mb-0">Banner Link</label>
                                                        <input name="banner_link" value="{{ $setting->banner_link }}"
                                                            class="form-control" type="text"
                                                            placeholder="Affiliate Banner URL">
                                                    </div>
                                                </div>

                                            </div>
                                            <button type="submit" class="btn btn-primary btn-block
                                             " id="uploadButton">Update</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="pill-2" class="tab-pane fade">
                            <div class="row">
                                <div class="col-sm-12">
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="mb-0">Display the following
                                                        web page after contact signs up</label>
                                                    <input class="form-control" type="text" placeholder="http://">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="mb-0">Display the following
                                                        web page after contact activates via
                                                        email</label>
                                                    <input class="form-control" type="text" placeholder="http://">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="mb-0">Display the following
                                                        web page if contact has previously
                                                        subscribed</label>
                                                    <input class="form-control" type="text" placeholder="http://">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="mb-0">Notify the following
                                                        email when a contact signs up</label>
                                                    <input class="form-control" type="text" placeholder="http://">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="mb-0">Use the following
                                                        activation template</label>
                                                    <div class="dropdown bootstrap-select form-control"><select name="type"
                                                            class="selectpicker form-control" data-style="py-0">
                                                            <option>Select..</option>
                                                            <option>New Landing Page</option>
                                                            <option>Demo List</option>
                                                        </select><button type="button" tabindex="-1"
                                                            class="btn dropdown-toggle py-0" data-toggle="dropdown"
                                                            role="combobox" aria-owns="bs-select-2" aria-haspopup="listbox"
                                                            aria-expanded="false" title="Select..">
                                                            <div class="filter-option">
                                                                <div class="filter-option-inner">
                                                                    <div class="filter-option-inner-inner">Select..</div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                        <div class="dropdown-menu ">
                                                            <div class="inner show" role="listbox" id="bs-select-2"
                                                                tabindex="-1">
                                                                <ul class="dropdown-menu inner show" role="presentation">
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="pill-3" class="tab-pane fade">
                            <div class="row">
                                <div class="col-sm-12">
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-9">
                                                <div class="form-group">
                                                    <label class="mb-0">Share or embed your
                                                        form link to grow your audience.</label>
                                                    <input class="form-control" type="text"
                                                        placeholder="https://api.elasticemail.com/form?lid=FkA6QiUJu8A6eMM9OT4nJA2">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 d-flex
                                                justify-content-lg-end">
                                                <div class="">
                                                    <a href="#" class="btn btn-outline-primary btn-lg"
                                                        data-extra-toggle="copy" data-input="#api-password" title=""
                                                        data-toggle="tooltip" data-original-title="Copy to clipboard"><i
                                                            class="las la-link pr-2"></i>Copy From Link</a>
                                                </div>
                                            </div>
                                        </div>
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
