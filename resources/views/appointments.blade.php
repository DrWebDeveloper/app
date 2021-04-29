@extends('layouts.app')
@section('title')
    My Appointments
@endsection
@section('content')

    <div class="row">
        <div class="col-lg-12 mb-3">
            <div class="d-flex flex-wrap align-items-top justify-content-between">
                <div class="iq-members">
                    <h2 class="mb-2">All-in-One Integrated Campaigns</h2>
                    <p class="pb-3">Send kickback emails from lead offers, thank you
                        emails after purchase, or just promote current campaigns. </p>
                </div>
                <div class="mt-0">
                    <!-- Large modal -->
                    <a class="btn btn-lg btn-outline-primary" href="{{ route('create') }}">Create Campaigns</a>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-7">
            <ul class="d-flex nav nav-pills text-center event-tab" id="event-pills-tab" role="tablist">
                <li class="nav-item">
                    <a id="view-btn" class="nav-link btn btn-lg btn-outline-primary
                      active show" data-toggle="pill" href="#event1" role="tab" aria-selected="true">All Campaigns</a>
                </li>
                <li class="nav-item">
                    <a id="view-schedule" class="nav-link btn btn-outline-primary" data-toggle="pill" href="#event2"
                        role="tab" aria-selected="false">Autoresponder</a>
                </li>
                <li class="nav-item">
                    <a id="view-workflow" class="nav-link btn btn-outline-primary" data-toggle="pill" href="#event3"
                        data-hide="#view-event" role="tab" aria-selected="false">Draft</a>
                </li>
            </ul>
        </div>
        <div class="col-lg-4 col-md-5 d-flex justify-content-md-end tab-extra" id="view-event">
            <div class="flex-wrap">
                <div id="filter-none" class="filter-extra">
                </div>
                <div id="view-event-1" class="select-dropdown input-prepend
                   input-append filter-dropdown filter-extra active">
                    <div class="btn-group">
                        <label data-toggle="dropdown" class="mb-0">
                            <span class="dropdown-toggle btn btn-outline-primary
                            search-query selet-caption btn-lg">Filters</span><span class="search-replace"></span>
                            <span class="caret">
                                <!--icon-->
                            </span>
                        </label>
                        <ul class="dropdown-menu p-3 border-none">
                            <li>
                                <div class="item mb-3">
                                    <div class="checkbox">
                                        <input type="checkbox" class="checkbox-input mr-2" id="checkbox2">
                                        <label for="checkbox2" class="mb-0">In Progress</label>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="item mb-3">
                                    <div class="checkbox">
                                        <input type="checkbox" class="checkbox-input mr-2" id="checkbox1">
                                        <label for="checkbox1" class="mb-0">Active</label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="item mb-3">
                                    <div class="checkbox">
                                        <input type="checkbox" class="checkbox-input mr-2" id="checkbox4">
                                        <label for="checkbox4" class="mb-0">Paused</label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="item mb-3">
                                    <div class="checkbox">
                                        <input type="checkbox" class="checkbox-input mr-2" id="checkbox3">
                                        <label for="checkbox3" class="mb-0">Completed</label>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="item">
                                    <div class="checkbox">
                                        <input type="checkbox" class="checkbox-input mr-2" id="checkbox5">
                                        <label for="checkbox5" class="mb-0">Canceled</label>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="ml-4">
                <div class="form-group mb-0">
                    <select name="type" class="selectpicker hover-btn" data-style="py-0">
                        <option>Date Range</option>
                        <option>Last 7 days</option>
                        <option>Last 14 days</option>
                        <option>Last 30 days</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="event-content">
                <div id="event1" class="tab-pane fade active show">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <span>Image</span>
                                        </th>
                                        <th scope="col">
                                            <span>Name</span>
                                        </th>
                                        <th scope="col">
                                            <span>Date</span>
                                        </th>
                                        <th scope="col">
                                            <span>Status</span>
                                        </th>
                                        <th scope="col">
                                            <span></span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="{{ url('public/assets/images/options/01.png') }}" class="bg-success-light rounded p-3
                                        img-fluid avatar-70" alt="image">
                                        </td>
                                        <td>
                                            <h6 class="mb-2">Campaigns Name</h6>
                                            <span>Audience : All Contact</span>
                                        </td>
                                        <td>03 Dec , 2020</td>
                                        <td><a href="#" class="bg-warning-light badge">Completed</a></td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle1" id="dropdownMenuButton15"
                                                    data-toggle="dropdown" aria-expanded="false" role="button">
                                                    <i class="fas fa-cog"></i>
                                                </span>
                                                <div class="dropdown-menu
                                           dropdown-menu-right" aria-labelledby="dropdownMenuButton15" style="">
                                                    <a class="dropdown-item" href="#">Show
                                                        activity</a>
                                                    <a class="dropdown-item" href="#">View
                                                        details</a>
                                                    <a class="dropdown-item" href="#">Copy
                                                        campaign</a>
                                                    <a class="dropdown-item" href="#">Create
                                                        list</a>
                                                    <a class="dropdown-item" data-extra-toggle="delete"
                                                        data-closest-elem=".item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="{{ url('public/assets/images/options/04.png') }}" class="bg-info-light rounded p-3 img-fluid
                                        avatar-70" alt="image">
                                        </td>
                                        <td>
                                            <h6 class="mb-2">Campaigns Name</h6>
                                            <span>Audience : All Contact</span>
                                        </td>
                                        <td>29 Nov , 2020</td>
                                        <td><a href="#" class="bg-success-light badge">Active</a></td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle1" id="dropdownMenuButtontwenty"
                                                    data-toggle="dropdown" aria-expanded="false" role="button">
                                                    <i class="fas fa-cog"></i>
                                                </span>
                                                <div class="dropdown-menu
                                           dropdown-menu-right" aria-labelledby="dropdownMenuButtontwenty" style="">
                                                    <a class="dropdown-item" href="#">Show
                                                        activity</a>
                                                    <a class="dropdown-item" href="#">View
                                                        details</a>
                                                    <a class="dropdown-item" href="#">Copy
                                                        campaign</a>
                                                    <a class="dropdown-item" href="#">Create
                                                        list</a>
                                                    <a class="dropdown-item" data-extra-toggle="delete"
                                                        data-closest-elem=".item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="{{ url('public/assets/images/options/02.png') }}" class="bg-danger-light rounded p-3 img-fluid
                                        avatar-70" alt="image">
                                        </td>
                                        <td>
                                            <h6 class="mb-2">Campaigns Name</h6>
                                            <span>Audience : All Contact</span>
                                        </td>
                                        <td>29 dec , 2020</td>
                                        <td><a href="#" class="bg-danger-light badge">Paused</a></td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle1" id="dropdownMenuButton17"
                                                    data-toggle="dropdown" aria-expanded="false" role="button">
                                                    <i class="fas fa-cog"></i>
                                                </span>
                                                <div class="dropdown-menu
                                           dropdown-menu-right" aria-labelledby="dropdownMenuButton17" style="">
                                                    <a class="dropdown-item" href="#">Show
                                                        activity</a>
                                                    <a class="dropdown-item" href="#">View
                                                        details</a>
                                                    <a class="dropdown-item" href="#">Copy
                                                        campaign</a>
                                                    <a class="dropdown-item" href="#">Create
                                                        list</a>
                                                    <a class="dropdown-item" data-extra-toggle="delete"
                                                        data-closest-elem=".item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="{{ url('public/assets/images/options/05.png') }}" class="bg-warning-light rounded p-3
                                        img-fluid avatar-70" alt="image">
                                        </td>
                                        <td>
                                            <h6 class="mb-2">Campaigns Name</h6>
                                            <span>Audience : All Contact</span>
                                        </td>
                                        <td>20 Oct , 2020</td>
                                        <td><a href="#" class="bg-info-light badge">Canceled</a></td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle1" id="dropdownMenuButton18"
                                                    data-toggle="dropdown" aria-expanded="false" role="button">
                                                    <i class="fas fa-cog"></i>
                                                </span>
                                                <div class="dropdown-menu
                                           dropdown-menu-right" aria-labelledby="dropdownMenuButton18" style="">
                                                    <a class="dropdown-item" href="#">Show
                                                        activity</a>
                                                    <a class="dropdown-item" href="#">View
                                                        details</a>
                                                    <a class="dropdown-item" href="#">Copy
                                                        campaign</a>
                                                    <a class="dropdown-item" href="#">Create
                                                        list</a>
                                                    <a class="dropdown-item" data-extra-toggle="delete"
                                                        data-closest-elem=".item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="{{ url('public/assets/images/options/06.png') }}" class="bg-success-light rounded p-3
                                        img-fluid avatar-70" alt="image">
                                        </td>
                                        <td>
                                            <h6 class="mb-2">Campaigns Name</h6>
                                            <span>Audience : All Contact</span>
                                        </td>
                                        <td>03 Dec , 2020</td>
                                        <td><a href="#" class="bg-warning-light badge">Completed</a></td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle1" id="dropdownMenuButtonfifteen"
                                                    data-toggle="dropdown" aria-expanded="false" role="button">
                                                    <i class="fas fa-cog"></i>
                                                </span>
                                                <div class="dropdown-menu
                                           dropdown-menu-right" aria-labelledby="dropdownMenuButtonfifteen" style="">
                                                    <a class="dropdown-item" href="#">Show
                                                        activity</a>
                                                    <a class="dropdown-item" href="#">View
                                                        details</a>
                                                    <a class="dropdown-item" href="#">Copy
                                                        campaign</a>
                                                    <a class="dropdown-item" href="#">Create
                                                        list</a>
                                                    <a class="dropdown-item" data-extra-toggle="delete"
                                                        data-closest-elem=".item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="{{ url('public/assets/images/options/07.png') }}" class="bg-info-light rounded p-3 img-fluid
                                        avatar-70" alt="image">
                                        </td>
                                        <td>
                                            <h6 class="mb-2">Campaigns Name</h6>
                                            <span>Audience : All Contact</span>
                                        </td>
                                        <td>29 Nov , 2020</td>
                                        <td><a href="#" class="bg-success-light badge">Active</a></td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle1" id="dropdownMenuButtonseventeen"
                                                    data-toggle="dropdown" aria-expanded="false" role="button">
                                                    <i class="fas fa-cog"></i>
                                                </span>
                                                <div class="dropdown-menu
                                           dropdown-menu-right" aria-labelledby="dropdownMenuButtonseventeen" style="">
                                                    <a class="dropdown-item" href="#">Show
                                                        activity</a>
                                                    <a class="dropdown-item" href="#">View
                                                        details</a>
                                                    <a class="dropdown-item" href="#">Copy
                                                        campaign</a>
                                                    <a class="dropdown-item" href="#">Create
                                                        list</a>
                                                    <a class="dropdown-item" data-extra-toggle="delete"
                                                        data-closest-elem=".item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div id="event2" class="tab-pane fade">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <span>Image</span>
                                        </th>
                                        <th scope="col">
                                            <span>Name</span>
                                        </th>
                                        <th scope="col">
                                            <span>Date</span>
                                        </th>
                                        <th scope="col">
                                            <span>Status</span>
                                        </th>
                                        <th scope="col">
                                            <span></span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="{{ url('public/assets/images/options/01.png') }}" class="bg-success-light rounded p-3
                                        img-fluid avatar-70" alt="image">
                                        </td>
                                        <td>
                                            <h6 class="mb-2">Campaigns Name</h6>
                                            <span>Audience : All Contact</span>
                                        </td>
                                        <td>03 Dec , 2020</td>
                                        <td><a href="#" class="bg-success-light badge">Active</a></td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle1" id="dropdownMenuButton7"
                                                    data-toggle="dropdown" aria-expanded="false" role="button">
                                                    <i class="fas fa-cog"></i>
                                                </span>
                                                <div class="dropdown-menu
                                           dropdown-menu-right" aria-labelledby="dropdownMenuButton7" style="">
                                                    <a class="dropdown-item" href="#">Show
                                                        activity</a>
                                                    <a class="dropdown-item" href="#">View
                                                        details</a>
                                                    <a class="dropdown-item" href="#">Copy
                                                        campaign</a>
                                                    <a class="dropdown-item" href="#">Create
                                                        list</a>
                                                    <a class="dropdown-item" data-extra-toggle="delete"
                                                        data-closest-elem=".item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="{{ url('public/assets/images/options/04.png') }}" class="bg-info-light rounded p-3 img-fluid
                                        avatar-70" alt="image">
                                        </td>
                                        <td>
                                            <h6 class="mb-2">Campaigns Name</h6>
                                            <span>Audience : All Contact</span>
                                        </td>
                                        <td>29 Nov , 2020</td>
                                        <td><a href="#" class="bg-success-light badge">Active</a></td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle1" id="dropdownMenuButton8"
                                                    data-toggle="dropdown" aria-expanded="false" role="button">
                                                    <i class="fas fa-cog"></i>
                                                </span>
                                                <div class="dropdown-menu
                                           dropdown-menu-right" aria-labelledby="dropdownMenuButton8" style="">
                                                    <a class="dropdown-item" href="#">Show
                                                        activity</a>
                                                    <a class="dropdown-item" href="#">View
                                                        details</a>
                                                    <a class="dropdown-item" href="#">Copy
                                                        campaign</a>
                                                    <a class="dropdown-item" href="#">Create
                                                        list</a>
                                                    <a class="dropdown-item" data-extra-toggle="delete"
                                                        data-closest-elem=".item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="{{ url('public/assets/images/options/02.png') }}" class="bg-danger-light rounded p-3 img-fluid
                                        avatar-70" alt="image">
                                        </td>
                                        <td>
                                            <h6 class="mb-2">Campaigns Name</h6>
                                            <span>Audience : All Contact</span>
                                        </td>
                                        <td>29 dec , 2020</td>
                                        <td><a href="#" class="bg-success-light badge">Active</a></td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle1" id="dropdownMenuButton9"
                                                    data-toggle="dropdown" aria-expanded="false" role="button">
                                                    <i class="fas fa-cog"></i>
                                                </span>
                                                <div class="dropdown-menu
                                           dropdown-menu-right" aria-labelledby="dropdownMenuButton9" style="">
                                                    <a class="dropdown-item" href="#">Show
                                                        activity</a>
                                                    <a class="dropdown-item" href="#">View
                                                        details</a>
                                                    <a class="dropdown-item" href="#">Copy
                                                        campaign</a>
                                                    <a class="dropdown-item" href="#">Create
                                                        list</a>
                                                    <a class="dropdown-item" data-extra-toggle="delete"
                                                        data-closest-elem=".item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="{{ url('public/assets/images/options/05.png') }}" class="bg-warning-light rounded p-3
                                        img-fluid avatar-70" alt="image">
                                        </td>
                                        <td>
                                            <h6 class="mb-2">Campaigns Name</h6>
                                            <span>Audience : All Contact</span>
                                        </td>
                                        <td>20 Oct , 2020</td>
                                        <td><a href="#" class="bg-success-light badge">Active</a></td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle1" id="dropdownMenuButton10"
                                                    data-toggle="dropdown" aria-expanded="false" role="button">
                                                    <i class="fas fa-cog"></i>
                                                </span>
                                                <div class="dropdown-menu
                                           dropdown-menu-right" aria-labelledby="dropdownMenuButton10" style="">
                                                    <a class="dropdown-item" href="#">Show
                                                        activity</a>
                                                    <a class="dropdown-item" href="#">View
                                                        details</a>
                                                    <a class="dropdown-item" href="#">Copy
                                                        campaign</a>
                                                    <a class="dropdown-item" href="#">Create
                                                        list</a>
                                                    <a class="dropdown-item" data-extra-toggle="delete"
                                                        data-closest-elem=".item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="{{ url('public/assets/images/options/06.png') }}" class="bg-success-light rounded p-3
                                        img-fluid avatar-70" alt="image">
                                        </td>
                                        <td>
                                            <h6 class="mb-2">Campaigns Name</h6>
                                            <span>Audience : All Contact</span>
                                        </td>
                                        <td>03 Dec , 2020</td>
                                        <td><a href="#" class="bg-success-light badge">Active</a></td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle1" id="dropdownMenuButtoneighteen"
                                                    data-toggle="dropdown" aria-expanded="false" role="button">
                                                    <i class="fas fa-cog"></i>
                                                </span>
                                                <div class="dropdown-menu
                                           dropdown-menu-right" aria-labelledby="dropdownMenuButtoneighteen" style="">
                                                    <a class="dropdown-item" href="#">Show
                                                        activity</a>
                                                    <a class="dropdown-item" href="#">View
                                                        details</a>
                                                    <a class="dropdown-item" href="#">Copy
                                                        campaign</a>
                                                    <a class="dropdown-item" href="#">Create
                                                        list</a>
                                                    <a class="dropdown-item" data-extra-toggle="delete"
                                                        data-closest-elem=".item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="{{ url('public/assets/images/options/07.png') }}" class="bg-info-light rounded p-3 img-fluid
                                        avatar-70" alt="image">
                                        </td>
                                        <td>
                                            <h6 class="mb-2">Campaigns Name</h6>
                                            <span>Audience : All Contact</span>
                                        </td>
                                        <td>29 Nov , 2020</td>
                                        <td><a href="#" class="bg-success-light badge">Active</a></td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle1" id="dropdownMenuButtonsixteen"
                                                    data-toggle="dropdown" aria-expanded="false" role="button">
                                                    <i class="fas fa-cog"></i>
                                                </span>
                                                <div class="dropdown-menu
                                           dropdown-menu-right" aria-labelledby="dropdownMenuButtonsixteen" style="">
                                                    <a class="dropdown-item" href="#">Show
                                                        activity</a>
                                                    <a class="dropdown-item" href="#">View
                                                        details</a>
                                                    <a class="dropdown-item" href="#">Copy
                                                        campaign</a>
                                                    <a class="dropdown-item" href="#">Create
                                                        list</a>
                                                    <a class="dropdown-item" data-extra-toggle="delete"
                                                        data-closest-elem=".item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div id="event3" class="tab-pane fade">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <span>Image</span>
                                        </th>
                                        <th scope="col">
                                            <span>Name</span>
                                        </th>
                                        <th scope="col">
                                            <span>Last activity</span>
                                        </th>
                                        <th scope="col">
                                            <span></span>
                                        </th>
                                        <th scope="col">
                                            <span></span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="{{ url('public/assets/images/options/01.png') }}" class="bg-success-light rounded p-3
                                        img-fluid avatar-70" alt="image">
                                        </td>
                                        <td>
                                            <h6 class="mb-2">Campaigns Name</h6>
                                            <span>Audience : All Contact</span>
                                        </td>
                                        <td>03 Dec , 2020</td>
                                        <td></td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle1" id="dropdownMenuButton11"
                                                    data-toggle="dropdown" aria-expanded="false" role="button">
                                                    <i class="fas fa-cog"></i>
                                                </span>
                                                <div class="dropdown-menu
                                           dropdown-menu-right" aria-labelledby="dropdownMenuButton11" style="">
                                                    <a class="dropdown-item" href="#">Show
                                                        activity</a>
                                                    <a class="dropdown-item" href="#">View
                                                        details</a>
                                                    <a class="dropdown-item" href="#">Copy
                                                        campaign</a>
                                                    <a class="dropdown-item" href="#">Create
                                                        list</a>
                                                    <a class="dropdown-item" data-extra-toggle="delete"
                                                        data-closest-elem=".item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="{{ url('public/assets/images/options/04.png') }}" class="bg-info-light rounded p-3 img-fluid
                                        avatar-70" alt="image">
                                        </td>
                                        <td>
                                            <h6 class="mb-2">Campaigns Name</h6>
                                            <span>Audience : All Contact</span>
                                        </td>
                                        <td>29 Nov , 2020</td>
                                        <td></td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle1" id="dropdownMenuButton12"
                                                    data-toggle="dropdown" aria-expanded="false" role="button">
                                                    <i class="fas fa-cog"></i>
                                                </span>
                                                <div class="dropdown-menu
                                           dropdown-menu-right" aria-labelledby="dropdownMenuButton12" style="">
                                                    <a class="dropdown-item" href="#">Show
                                                        activity</a>
                                                    <a class="dropdown-item" href="#">View
                                                        details</a>
                                                    <a class="dropdown-item" href="#">Copy
                                                        campaign</a>
                                                    <a class="dropdown-item" href="#">Create
                                                        list</a>
                                                    <a class="dropdown-item" data-extra-toggle="delete"
                                                        data-closest-elem=".item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="{{ url('public/assets/images/options/02.png') }}" class="bg-danger-light rounded p-3 img-fluid
                                        avatar-70" alt="image">
                                        </td>
                                        <td>
                                            <h6 class="mb-2">Campaigns Name</h6>
                                            <span>Audience : All Contact</span>
                                        </td>
                                        <td>29 dec , 2020</td>
                                        <td></td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle1" id="dropdownMenuButton13"
                                                    data-toggle="dropdown" aria-expanded="false" role="button">
                                                    <i class="fas fa-cog"></i>
                                                </span>
                                                <div class="dropdown-menu
                                           dropdown-menu-right" aria-labelledby="dropdownMenuButton13" style="">
                                                    <a class="dropdown-item" href="#">Show
                                                        activity</a>
                                                    <a class="dropdown-item" href="#">View
                                                        details</a>
                                                    <a class="dropdown-item" href="#">Copy
                                                        campaign</a>
                                                    <a class="dropdown-item" href="#">Create
                                                        list</a>
                                                    <a class="dropdown-item" data-extra-toggle="delete"
                                                        data-closest-elem=".item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="{{ url('public/assets/images/options/05.png') }}" class="bg-warning-light rounded p-3
                                        img-fluid avatar-70" alt="image">
                                        </td>
                                        <td>
                                            <h6 class="mb-2">Campaigns Name</h6>
                                            <span>Audience : All Contact</span>
                                        </td>
                                        <td>20 Oct , 2020</td>
                                        <td></td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle1" id="dropdownMenuButton14"
                                                    data-toggle="dropdown" aria-expanded="false" role="button">
                                                    <i class="fas fa-cog"></i>
                                                </span>
                                                <div class="dropdown-menu
                                           dropdown-menu-right" aria-labelledby="dropdownMenuButton14" style="">
                                                    <a class="dropdown-item" href="#">Show
                                                        activity</a>
                                                    <a class="dropdown-item" href="#">View
                                                        details</a>
                                                    <a class="dropdown-item" href="#">Copy
                                                        campaign</a>
                                                    <a class="dropdown-item" href="#">Create
                                                        list</a>
                                                    <a class="dropdown-item" data-extra-toggle="delete"
                                                        data-closest-elem=".item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="{{ url('public/assets/images/options/06.png') }}" class="bg-success-light rounded p-3
                                        img-fluid avatar-70" alt="image">
                                        </td>
                                        <td>
                                            <h6 class="mb-2">Campaigns Name</h6>
                                            <span>Audience : All Contact</span>
                                        </td>
                                        <td>03 Dec , 2020</td>
                                        <td></td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle1" id="dropdownMenuButtonseven"
                                                    data-toggle="dropdown" aria-expanded="false" role="button">
                                                    <i class="fas fa-cog"></i>
                                                </span>
                                                <div class="dropdown-menu
                                           dropdown-menu-right" aria-labelledby="dropdownMenuButtonseven" style="">
                                                    <a class="dropdown-item" href="#">Show
                                                        activity</a>
                                                    <a class="dropdown-item" href="#">View
                                                        details</a>
                                                    <a class="dropdown-item" href="#">Copy
                                                        campaign</a>
                                                    <a class="dropdown-item" href="#">Create
                                                        list</a>
                                                    <a class="dropdown-item" data-extra-toggle="delete"
                                                        data-closest-elem=".item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="{{ url('public/assets/images/options/07.png') }}" class="bg-info-light rounded p-3 img-fluid
                                        avatar-70" alt="image">
                                        </td>
                                        <td>
                                            <h6 class="mb-2">Campaigns Name</h6>
                                            <span>Audience : All Contact</span>
                                        </td>
                                        <td>29 Nov , 2020</td>
                                        <td></td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle1" id="dropdownMenuButton16"
                                                    data-toggle="dropdown" aria-expanded="false" role="button">
                                                    <i class="fas fa-cog"></i>
                                                </span>
                                                <div class="dropdown-menu
                                           dropdown-menu-right" aria-labelledby="dropdownMenuButton16" style="">
                                                    <a class="dropdown-item" href="#">Show
                                                        activity</a>
                                                    <a class="dropdown-item" href="#">View
                                                        details</a>
                                                    <a class="dropdown-item" href="#">Copy
                                                        campaign</a>
                                                    <a class="dropdown-item" href="#">Create
                                                        list</a>
                                                    <a class="dropdown-item" data-extra-toggle="delete"
                                                        data-closest-elem=".item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
