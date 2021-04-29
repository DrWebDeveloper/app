@extends('layouts.app')
@section('title')
    Affiliates
@endsection
@section('content')

    <div class="row">
        <div class="col-lg-12 mb-3">
            <div class="d-flex flex-wrap align-items-top justify-content-between">
                <div class="iq-members">
                    <h2 class="mb-2"> Organize Your Contact List</h2>
                    <p class="pb-3">It powers your email contacts, and it rears its
                        head in your system by letting you segment them.</p>
                </div>
                <div class="mt-0">
                    <div class="form-group mb-0">
                        <select name="type" class="selectpicker" data-style="py-0">
                            <option>Manage Contacts</option>
                            <option>Create segment</option>
                            <option>Create list</option>
                            <option>Upload contacts</option>
                            <option>Add contact</option>
                            <option>Export history</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-8">
            <ul class="d-flex nav nav-pills text-center" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-primary active show" data-toggle="pill" href="#pills-1" role="tab"
                        aria-selected="true">Overview</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-primary" data-toggle="pill" href="#pills-2" role="tab"
                        aria-selected="false">Segment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-primary" data-toggle="pill" href="#pills-3" data-hide="#view-event"
                        role="tab" aria-selected="false">List</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="tab-content">
                <div id="pills-1" class="tab-pane fade active show">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <div class="card">
                                <div class="card-body pb-0">
                                    <div class="header-title">
                                        <h4 class="card-title">New Contacts Per Day</h4>
                                    </div>
                                    <div id="apex-bar-contact"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card contact-box">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ url('public/assets/images/icon/01.png') }}" class="img-fluid avatar-60" alt="image">
                                        <div class="content-box">
                                            <h2>200</h2>
                                            <p class="mb-0">Total Contacts</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card contact-box">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ url('public/assets/images/icon/02.png') }}" class="img-fluid avatar-60" alt="image">
                                        <div class="content-box">
                                            <h2>150</h2>
                                            <p class="mb-0">Avail. Contacts</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card contact-box">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ url('public/assets/images/icon/03.png') }}" class="img-fluid avatar-60" alt="image">
                                        <div class="content-box">
                                            <h2>0.00%</h2>
                                            <p class="mb-0">Avg. open rate</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card contact-box">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ url('public/assets/images/icon/04.png') }}" class="img-fluid avatar-60" alt="image">
                                        <div class="content-box">
                                            <h2>500</h2>
                                            <p class="mb-0">Email sent</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card contact-box">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ url('public/assets/images/icon/04.png') }}" class="img-fluid avatar-60" alt="image">
                                        <div class="content-box">
                                            <h2>500</h2>
                                            <p class="mb-0">Email sent</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card contact-box">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ url('public/assets/images/icon/05.png') }}" class="img-fluid avatar-60" alt="image">
                                        <div class="content-box">
                                            <h2>50</h2>
                                            <p class="mb-0">New contacts</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card contact-box">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ url('public/assets/images/icon/06.png') }}" class="img-fluid avatar-60" alt="image">
                                        <div class="content-box">
                                            <h2>0.00%</h2>
                                            <p class="mb-0">Avg. click rate</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card contact-box">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ url('public/assets/images/icon/01.png') }}" class="img-fluid avatar-60" alt="image">
                                        <div class="content-box">
                                            <h2>200</h2>
                                            <p class="mb-0">Total Contacts</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="pills-2" class="tab-pane fade">
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
                                            <span></span>
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
                                            <h6 class="mb-2">All Contacts</h6>
                                            <span>List Of Contacts</span>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle1" id="dropdownMenuButton1"
                                                    data-toggle="dropdown" aria-expanded="false" role="button">
                                                    <i class="fas fa-cog"></i>
                                                </span>
                                                <div class="dropdown-menu
                                           dropdown-menu-right" aria-labelledby="dropdownMenuButton1" style="">
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
                                            <h6 class="mb-2">Engaged Contacts</h6>
                                            <span>List Of Engaged Contacts</span>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle1" id="dropdownMenuButton2"
                                                    data-toggle="dropdown" aria-expanded="false" role="button">
                                                    <i class="fas fa-cog"></i>
                                                </span>
                                                <div class="dropdown-menu
                                           dropdown-menu-right" aria-labelledby="dropdownMenuButton2" style="">
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
                                            <h6 class="mb-2">Active Contacts</h6>
                                            <span>List Of Active Contacts</span>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle1" id="dropdownMenuButton3"
                                                    data-toggle="dropdown" aria-expanded="false" role="button">
                                                    <i class="fas fa-cog"></i>
                                                </span>
                                                <div class="dropdown-menu
                                           dropdown-menu-right" aria-labelledby="dropdownMenuButton3" style="">
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
                                            <h6 class="mb-2">Blocks Contacts</h6>
                                            <span>List Of Blocks Contacts</span>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle1" id="dropdownMenuButton4"
                                                    data-toggle="dropdown" aria-expanded="false" role="button">
                                                    <i class="fas fa-cog"></i>
                                                </span>
                                                <div class="dropdown-menu
                                           dropdown-menu-right" aria-labelledby="dropdownMenuButton4" style="">
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
                                            <h6 class="mb-2">All Contacts</h6>
                                            <span>List Of All Contact</span>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle1" id="dropdownMenuButton_1"
                                                    data-toggle="dropdown" aria-expanded="false" role="button">
                                                    <i class="fas fa-cog"></i>
                                                </span>
                                                <div class="dropdown-menu
                                           dropdown-menu-right" aria-labelledby="dropdownMenuButton_1" style="">
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
                                            <h6 class="mb-2">Engaged Contacts</h6>
                                            <span>List Of Engaged Contacts</span>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle1" id="dropdownMenuButton_two"
                                                    data-toggle="dropdown" aria-expanded="false" role="button">
                                                    <i class="fas fa-cog"></i>
                                                </span>
                                                <div class="dropdown-menu
                                           dropdown-menu-right" aria-labelledby="dropdownMenuButton_two" style="">
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
                <div id="pills-3" class="tab-pane fade">
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
                                            <span>Subscription Management</span>
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
                                            <h6 class="mb-2">List Name 1</h6>
                                            <span>Audience : All Contact</span>
                                        </td>
                                        <td>Yes</td>
                                        <td></td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle1" id="dropdownMenuButton5"
                                                    data-toggle="dropdown" aria-expanded="false" role="button">
                                                    <i class="fas fa-cog"></i>
                                                </span>
                                                <div class="dropdown-menu
                                           dropdown-menu-right" aria-labelledby="dropdownMenuButton5" style="">
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
                                            <h6 class="mb-2">List Name 2</h6>
                                            <span>Audience : All Contact</span>
                                        </td>
                                        <td>Yes</td>
                                        <td></td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle1" id="dropdownMenuButton_6"
                                                    data-toggle="dropdown" aria-expanded="false" role="button">
                                                    <i class="fas fa-cog"></i>
                                                </span>
                                                <div class="dropdown-menu
                                           dropdown-menu-right" aria-labelledby="dropdownMenuButton_6" style="">
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
                                            <h6 class="mb-2">List Name 3</h6>
                                            <span>Audience : All Contact</span>
                                        </td>
                                        <td>Yes</td>
                                        <td></td>
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
                                            <img src="{{ url('public/assets/images/options/05.png') }}" class="bg-warning-light rounded p-3
                                        img-fluid avatar-70" alt="image">
                                        </td>
                                        <td>
                                            <h6 class="mb-2">List Name 4</h6>
                                            <span>Audience : All Contact</span>
                                        </td>
                                        <td>Yes</td>
                                        <td></td>
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
                                            <img src="{{ url('public/assets/images/options/06.png') }}" class="bg-success-light rounded p-3
                                        img-fluid avatar-70" alt="image">
                                        </td>
                                        <td>
                                            <h6 class="mb-2">List Name 5</h6>
                                            <span>Audience : All Contact</span>
                                        </td>
                                        <td>Yes</td>
                                        <td></td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle1" id="dropdownMenuButton_5"
                                                    data-toggle="dropdown" aria-expanded="false" role="button">
                                                    <i class="fas fa-cog"></i>
                                                </span>
                                                <div class="dropdown-menu
                                           dropdown-menu-right" aria-labelledby="dropdownMenuButton_5" style="">
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
                                            <h6 class="mb-2">List Name 6</h6>
                                            <span>Audience : All Contact</span>
                                        </td>
                                        <td>Yes</td>
                                        <td></td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle1" id="dropdownMenuButton6"
                                                    data-toggle="dropdown" aria-expanded="false" role="button">
                                                    <i class="fas fa-cog"></i>
                                                </span>
                                                <div class="dropdown-menu
                                           dropdown-menu-right" aria-labelledby="dropdownMenuButton6" style="">
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
