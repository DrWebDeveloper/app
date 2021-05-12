@extends('layouts.app')
@section('title')
    Support
@endsection

@section('content')


<div class="row">
    <div class="col-lg-12 mb-3">
        <div class="d-flex flex-wrap align-items-top justify-content-between">
            <div class="iq-members">
                <h2 class="mb-2">Build Responsive Email Prospects Expresss</h2>
                <p class="pb-3">Create professional and responsive emails fast
                    with no HTML skills. Use it to run your email campaigns. </p>
            </div>
            <div class="mt-0">
                <a class="btn btn-outline-primary btn-lg iq-create-btn" href="page-create-templates.html">Create
                    Prospects Express</a>
            </div>
        </div>
    </div>
    <div class="col-lg-8 col-md-8">
        <ul class="d-flex nav nav-pills text-center" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link btn btn-outline-primary active show" data-toggle="pill" href="#pills-1" role="tab"
                    aria-selected="true">Your Prospects Expresss</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-outline-primary" data-toggle="pill" href="#pills-2" data-hide="#view-event"
                    role="tab" aria-selected="false">Gallery</a>
            </li>
        </ul>
    </div>
    <div class="col-lg-4 col-md-4 d-flex justify-content-md-end tab-extra">
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
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="tab-content">
            <div id="pills-1" class="tab-pane fade active show">
                <div class="card">
                    <div class="card-body pb-0">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="forms-box">
                                    <div class="bg-info-light image-box text-center
                                 p-5">
                                        <img src="../assets/images/forms/13.png" class="img-fluid avatar-90"
                                            alt="image">
                                    </div>
                                    <div class="forms-text d-flex flex-wrap
                                 justify-content-between text-left">
                                        <div>
                                            <h5 class="mb-3"><i class="las la-file-alt
                                          text-dark mr-3"></i>Dapper Prospects Express</h5>
                                            <p class="mb-0"><i class="las
                                          la-calendar-minus text-light mr-3
                                          font-size-18"></i>Email</p>
                                        </div>
                                        <div class="dropdown">
                                            <span class="dropdown-toggle1" id="dropdownMenuButton1"
                                                data-toggle="dropdown" aria-expanded="false" role="button">
                                                <i class="fas fa-cog mt-2"></i>
                                            </span>
                                            <div class="dropdown-menu
                                       dropdown-menu-right" aria-labelledby="dropdownMenuButton1" style="">
                                                <a class="dropdown-item copys" href="#"><i
                                                        class="far fa-copy mr-2"></i>Copy</a>
                                                <a href="#" class="dropdown-item edit-note1" data-toggle="modal"
                                                    data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                <a class="dropdown-item" data-extra-toggle="delete"
                                                    data-closest-elem=".item" href="#"><i
                                                        class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="forms-box">
                                    <div class="bg-warning-light image-box text-center
                                 p-5">
                                        <img src="../assets/images/forms/10.png" class="img-fluid avatar-90"
                                            alt="image">
                                    </div>
                                    <div class="forms-text d-flex flex-wrap
                                 justify-content-between text-left">
                                        <div>
                                            <h5 class="mb-3"><i class="las la-file-alt
                                          text-dark mr-3"></i>Scale Prospects Express</h5>
                                            <p class="mb-0"><i class="las
                                          la-calendar-minus text-light mr-3
                                          font-size-18"></i>HTML</p>
                                        </div>
                                        <div class="dropdown">
                                            <span class="dropdown-toggle1" id="dropdownMenuButton2"
                                                data-toggle="dropdown" aria-expanded="false" role="button">
                                                <i class="fas fa-cog mt-2"></i>
                                            </span>
                                            <div class="dropdown-menu
                                       dropdown-menu-right" aria-labelledby="dropdownMenuButton2" style="">
                                                <a class="dropdown-item copys" href="#"><i
                                                        class="far fa-copy mr-2"></i>Copy</a>
                                                <a href="#" class="dropdown-item edit-note1" data-toggle="modal"
                                                    data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                <a class="dropdown-item" data-extra-toggle="delete"
                                                    data-closest-elem=".item" href="#"><i
                                                        class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="forms-box">
                                    <div class="bg-success-light image-box text-center
                                 p-5">
                                        <img src="../assets/images/forms/11.png" class="img-fluid avatar-90"
                                            alt="image">
                                    </div>
                                    <div class="forms-text d-flex flex-wrap
                                 justify-content-between text-left">
                                        <div>
                                            <h5 class="mb-3"><i class="las la-file-alt
                                          text-dark mr-3"></i>Citron Prospects Express</h5>
                                            <p class="mb-0"><i class="las
                                          la-calendar-minus text-light mr-3
                                          font-size-18"></i>CSS</p>
                                        </div>
                                        <div class="dropdown">
                                            <span class="dropdown-toggle1" id="dropdownMenuButton=three"
                                                data-toggle="dropdown" aria-expanded="false" role="button">
                                                <i class="fas fa-cog mt-2"></i>
                                            </span>
                                            <div class="dropdown-menu
                                       dropdown-menu-right" aria-labelledby="dropdownMenuButton=three" style="">
                                                <a class="dropdown-item copys" href="#"><i
                                                        class="far fa-copy mr-2"></i>Copy</a>
                                                <a href="#" class="dropdown-item edit-note1" data-toggle="modal"
                                                    data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                <a class="dropdown-item" data-extra-toggle="delete"
                                                    data-closest-elem=".item" href="#"><i
                                                        class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="forms-box">
                                    <div class="bg-danger-light image-box text-center
                                 p-5">
                                        <img src="../assets/images/forms/12.png" class="img-fluid avatar-90"
                                            alt="image">
                                    </div>
                                    <div class="forms-text d-flex flex-wrap
                                 justify-content-between text-left">
                                        <div>
                                            <h5 class="mb-3"><i class="las la-file-alt
                                          text-dark mr-3"></i>Authority Prospects Express</h5>
                                            <p class="mb-0"><i class="las
                                          la-calendar-minus text-light mr-3
                                          font-size-18"></i>BOOTSTRAP</p>
                                        </div>
                                        <div class="dropdown">
                                            <span class="dropdown-toggle1" id="dropdownMenuButton4"
                                                data-toggle="dropdown" aria-expanded="false" role="button">
                                                <i class="fas fa-cog mt-2"></i>
                                            </span>
                                            <div class="dropdown-menu
                                       dropdown-menu-right" aria-labelledby="dropdownMenuButton4" style="">
                                                <a class="dropdown-item copys" href="#"><i
                                                        class="far fa-copy mr-2"></i>Copy</a>
                                                <a href="#" class="dropdown-item edit-note1" data-toggle="modal"
                                                    data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                <a class="dropdown-item" data-extra-toggle="delete"
                                                    data-closest-elem=".item" href="#"><i
                                                        class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="forms-box">
                                    <div class="bg-success-light image-box text-center
                                 p-5">
                                        <img src="../assets/images/forms/03.png" class="img-fluid avatar-90"
                                            alt="image">
                                    </div>
                                    <div class="forms-text d-flex flex-wrap
                                 justify-content-between text-left">
                                        <div>
                                            <h5 class="mb-3"><i class="las la-file-alt
                                          text-dark mr-3"></i>Cylinder Prospects Express</h5>
                                            <p class="mb-0"><i class="las
                                          la-calendar-minus text-light mr-3
                                          font-size-18"></i>Email</p>
                                        </div>
                                        <div class="dropdown">
                                            <span class="dropdown-toggle1" id="dropdownMenuButton5"
                                                data-toggle="dropdown" aria-expanded="false" role="button">
                                                <i class="fas fa-cog mt-2"></i>
                                            </span>
                                            <div class="dropdown-menu
                                       dropdown-menu-right" aria-labelledby="dropdownMenuButton5" style="">
                                                <a class="dropdown-item copys" href="#"><i
                                                        class="far fa-copy mr-2"></i>Copy</a>
                                                <a href="#" class="dropdown-item edit-note1" data-toggle="modal"
                                                    data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                <a class="dropdown-item" data-extra-toggle="delete"
                                                    data-closest-elem=".item" href="#"><i
                                                        class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="forms-box">
                                    <div class="bg-info-light image-box text-center
                                 p-5">
                                        <img src="../assets/images/forms/01.png" class="img-fluid avatar-90"
                                            alt="image">
                                    </div>
                                    <div class="forms-text d-flex flex-wrap
                                 justify-content-between text-left">
                                        <div>
                                            <h5 class="mb-3"><i class="las la-file-alt
                                          text-dark mr-3"></i>Cube Prospects Express</h5>
                                            <p class="mb-0"><i class="las
                                          la-calendar-minus text-light mr-3
                                          font-size-18"></i>HTML</p>
                                        </div>
                                        <div class="dropdown">
                                            <span class="dropdown-toggle1" id="dropdownMenuButton6"
                                                data-toggle="dropdown" aria-expanded="false" role="button">
                                                <i class="fas fa-cog mt-2"></i>
                                            </span>
                                            <div class="dropdown-menu
                                       dropdown-menu-right" aria-labelledby="dropdownMenuButton6" style="">
                                                <a class="dropdown-item copys" href="#"><i
                                                        class="far fa-copy mr-2"></i>Copy</a>
                                                <a href="#" class="dropdown-item edit-note1" data-toggle="modal"
                                                    data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                <a class="dropdown-item" data-extra-toggle="delete"
                                                    data-closest-elem=".item" href="#"><i
                                                        class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="forms-box">
                                    <div class="bg-danger-light image-box text-center
                                 p-5">
                                        <img src="../assets/images/forms/04.png" class="img-fluid avatar-90"
                                            alt="image">
                                    </div>
                                    <div class="forms-text d-flex flex-wrap
                                 justify-content-between text-left">
                                        <div>
                                            <h5 class="mb-3"><i class="las la-file-alt
                                          text-dark mr-3"></i>Slant Prospects Express</h5>
                                            <p class="mb-0"><i class="las
                                          la-calendar-minus text-light mr-3
                                          font-size-18"></i>CSS</p>
                                        </div>
                                        <div class="dropdown">
                                            <span class="dropdown-toggle1" id="dropdownMenuButton7"
                                                data-toggle="dropdown" aria-expanded="false" role="button">
                                                <i class="fas fa-cog mt-2"></i>
                                            </span>
                                            <div class="dropdown-menu
                                       dropdown-menu-right" aria-labelledby="dropdownMenuButton7" style="">
                                                <a class="dropdown-item copys" href="#"><i
                                                        class="far fa-copy mr-2"></i>Copy</a>
                                                <a href="#" class="dropdown-item edit-note1" data-toggle="modal"
                                                    data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                <a class="dropdown-item" data-extra-toggle="delete"
                                                    data-closest-elem=".item" href="#"><i
                                                        class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="forms-box">
                                    <div class="bg-warning-light image-box text-center
                                 p-5">
                                        <img src="../assets/images/forms/02.png" class="img-fluid avatar-90"
                                            alt="image">
                                    </div>
                                    <div class="forms-text d-flex flex-wrap
                                 justify-content-between text-left">
                                        <div>
                                            <h5 class="mb-3"><i class="las la-file-alt
                                          text-dark mr-3"></i>Cone Prospects Express</h5>
                                            <p class="mb-0"><i class="las
                                          la-calendar-minus text-light mr-3
                                          font-size-18"></i>BOOTSTRAP</p>
                                        </div>
                                        <div class="dropdown">
                                            <span class="dropdown-toggle1" id="dropdownMenuButton8"
                                                data-toggle="dropdown" aria-expanded="false" role="button">
                                                <i class="fas fa-cog mt-2"></i>
                                            </span>
                                            <div class="dropdown-menu
                                       dropdown-menu-right" aria-labelledby="dropdownMenuButton8" style="">
                                                <a class="dropdown-item copys" href="#"><i
                                                        class="far fa-copy mr-2"></i>Copy</a>
                                                <a href="#" class="dropdown-item edit-note1" data-toggle="modal"
                                                    data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                <a class="dropdown-item" data-extra-toggle="delete"
                                                    data-closest-elem=".item" href="#"><i
                                                        class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="forms-box">
                                    <div class="bg-danger-light image-box text-center
                                 p-5">
                                        <img src="../assets/images/forms/06.png" class="img-fluid avatar-90"
                                            alt="image">
                                    </div>
                                    <div class="forms-text d-flex flex-wrap
                                 justify-content-between text-left">
                                        <div>
                                            <h5 class="mb-3"><i class="las la-file-alt
                                          text-dark mr-3"></i>Marvel Prospects Express</h5>
                                            <p class="mb-0"><i class="las
                                          la-calendar-minus text-light mr-3
                                          font-size-18"></i>CSS</p>
                                        </div>
                                        <div class="dropdown">
                                            <span class="dropdown-toggle1" id="dropdownMenuButton=7"
                                                data-toggle="dropdown" aria-expanded="false" role="button">
                                                <i class="fas fa-cog mt-2"></i>
                                            </span>
                                            <div class="dropdown-menu
                                       dropdown-menu-right" aria-labelledby="dropdownMenuButton=7" style="">
                                                <a class="dropdown-item copys" href="#"><i
                                                        class="far fa-copy mr-2"></i>Copy</a>
                                                <a href="#" class="dropdown-item edit-note1" data-toggle="modal"
                                                    data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                <a class="dropdown-item" data-extra-toggle="delete"
                                                    data-closest-elem=".item" href="#"><i
                                                        class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="forms-box">
                                    <div class="bg-warning-light image-box text-center
                                 p-5">
                                        <img src="../assets/images/forms/08.png" class="img-fluid avatar-90"
                                            alt="image">
                                    </div>
                                    <div class="forms-text d-flex flex-wrap
                                 justify-content-between text-left">
                                        <div>
                                            <h5 class="mb-3"><i class="las la-file-alt
                                          text-dark mr-3"></i>Cube Prospects Express</h5>
                                            <p class="mb-0"><i class="las
                                          la-calendar-minus text-light mr-3
                                          font-size-18"></i>BOOTSTRAP</p>
                                        </div>
                                        <div class="dropdown">
                                            <span class="dropdown-toggle1" id="dropdownMenuButton=8"
                                                data-toggle="dropdown" aria-expanded="false" role="button">
                                                <i class="fas fa-cog mt-2"></i>
                                            </span>
                                            <div class="dropdown-menu
                                       dropdown-menu-right" aria-labelledby="dropdownMenuButton=8" style="">
                                                <a class="dropdown-item copys" href="#"><i
                                                        class="far fa-copy mr-2"></i>Copy</a>
                                                <a href="#" class="dropdown-item edit-note1" data-toggle="modal"
                                                    data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                <a class="dropdown-item" data-extra-toggle="delete"
                                                    data-closest-elem=".item" href="#"><i
                                                        class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="forms-box">
                                    <div class="bg-info-light image-box text-center
                                 p-5">
                                        <img src="../assets/images/forms/09.png" class="img-fluid avatar-90"
                                            alt="image">
                                    </div>
                                    <div class="forms-text d-flex flex-wrap
                                 justify-content-between text-left">
                                        <div>
                                            <h5 class="mb-3"><i class="las la-file-alt
                                          text-dark mr-3"></i>Blue Marvel</h5>
                                            <p class="mb-0"><i class="las
                                          la-calendar-minus text-light mr-3
                                          font-size-18"></i>HTML</p>
                                        </div>
                                        <div class="dropdown">
                                            <span class="dropdown-toggle1" id="dropdownMenuButton=six"
                                                data-toggle="dropdown" aria-expanded="false" role="button">
                                                <i class="fas fa-cog mt-2"></i>
                                            </span>
                                            <div class="dropdown-menu
                                       dropdown-menu-right" aria-labelledby="dropdownMenuButton=six" style="">
                                                <a class="dropdown-item copys" href="#"><i
                                                        class="far fa-copy mr-2"></i>Copy</a>
                                                <a href="#" class="dropdown-item edit-note1" data-toggle="modal"
                                                    data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                <a class="dropdown-item" data-extra-toggle="delete"
                                                    data-closest-elem=".item" href="#"><i
                                                        class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="forms-box">
                                    <div class="bg-success-light image-box text-center
                                 p-5">
                                        <img src="../assets/images/forms/05.png" class="img-fluid avatar-90"
                                            alt="image">
                                    </div>
                                    <div class="forms-text d-flex flex-wrap
                                 justify-content-between text-left">
                                        <div>
                                            <h5 class="mb-3"><i class="las la-file-alt
                                          text-dark mr-3"></i>Circle Prospects Express</h5>
                                            <p class="mb-0"><i class="las
                                          la-calendar-minus text-light mr-3
                                          font-size-18"></i>Email</p>
                                        </div>
                                        <div class="dropdown">
                                            <span class="dropdown-toggle1" id="dropdownMenuButton=5"
                                                data-toggle="dropdown" aria-expanded="false" role="button">
                                                <i class="fas fa-cog mt-2"></i>
                                            </span>
                                            <div class="dropdown-menu
                                       dropdown-menu-right" aria-labelledby="dropdownMenuButton=5" style="">
                                                <a class="dropdown-item copys" href="#"><i
                                                        class="far fa-copy mr-2"></i>Copy</a>
                                                <a href="#" class="dropdown-item edit-note1" data-toggle="modal"
                                                    data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                <a class="dropdown-item" data-extra-toggle="delete"
                                                    data-closest-elem=".item" href="#"><i
                                                        class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="pills-2" class="tab-pane fade">
                <div class="card">
                    <div class="card-body pb-0">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="forms-box">
                                    <div class="bg-info-light image-box text-center
                                 p-5">
                                        <img src="../assets/images/forms/01.png" class="img-fluid avatar-90"
                                            alt="image">
                                    </div>
                                    <div class="forms-text d-flex flex-wrap
                                 justify-content-between text-left">
                                        <div>
                                            <h5 class="mb-0"><i class="las la-file-alt
                                          text-dark mr-3"></i>Dapper Prospects Express</h5>
                                        </div>
                                        <div class="dropdown">
                                            <span class="dropdown-toggle1" id="dropdownMenuButton9"
                                                data-toggle="dropdown" aria-expanded="false" role="button">
                                                <i class="fas fa-cog mt-2"></i>
                                            </span>
                                            <div class="dropdown-menu
                                       dropdown-menu-right" aria-labelledby="dropdownMenuButton9" style="">
                                                <a class="dropdown-item copys" href="#"><i
                                                        class="far fa-copy mr-2"></i>Copy</a>
                                                <a href="#" class="dropdown-item edit-note1" data-toggle="modal"
                                                    data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                <a class="dropdown-item" data-extra-toggle="delete"
                                                    data-closest-elem=".item" href="#"><i
                                                        class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="forms-box">
                                    <div class="bg-warning-light image-box text-center
                                 p-5">
                                        <img src="../assets/images/forms/02.png" class="img-fluid avatar-90"
                                            alt="image">
                                    </div>
                                    <div class="forms-text d-flex flex-wrap
                                 justify-content-between text-left">
                                        <div>
                                            <h5 class="mb-0"><i class="las la-file-alt
                                          text-dark mr-3"></i>Scale Prospects Express</h5>
                                        </div>
                                        <div class="dropdown">
                                            <span class="dropdown-toggle1" id="dropdownMenuButton10"
                                                data-toggle="dropdown" aria-expanded="false" role="button">
                                                <i class="fas fa-cog mt-2"></i>
                                            </span>
                                            <div class="dropdown-menu
                                       dropdown-menu-right" aria-labelledby="dropdownMenuButton10" style="">
                                                <a class="dropdown-item copys" href="#"><i
                                                        class="far fa-copy mr-2"></i>Copy</a>
                                                <a href="#" class="dropdown-item edit-note1" data-toggle="modal"
                                                    data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                <a class="dropdown-item" data-extra-toggle="delete"
                                                    data-closest-elem=".item" href="#"><i
                                                        class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="forms-box">
                                    <div class="bg-success-light image-box text-center
                                 p-5">
                                        <img src="../assets/images/forms/03.png" class="img-fluid avatar-90"
                                            alt="image">
                                    </div>
                                    <div class="forms-text d-flex flex-wrap
                                 justify-content-between text-left">
                                        <div>
                                            <h5 class="mb-0"><i class="las la-file-alt
                                          text-dark mr-3"></i>Citron Prospects Express</h5>
                                        </div>
                                        <div class="dropdown">
                                            <span class="dropdown-toggle1" id="dropdownMenuButton11"
                                                data-toggle="dropdown" aria-expanded="false" role="button">
                                                <i class="fas fa-cog mt-2"></i>
                                            </span>
                                            <div class="dropdown-menu
                                       dropdown-menu-right" aria-labelledby="dropdownMenuButton11" style="">
                                                <a class="dropdown-item copys" href="#"><i
                                                        class="far fa-copy mr-2"></i>Copy</a>
                                                <a href="#" class="dropdown-item edit-note1" data-toggle="modal"
                                                    data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                <a class="dropdown-item" data-extra-toggle="delete"
                                                    data-closest-elem=".item" href="#"><i
                                                        class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="forms-box">
                                    <div class="bg-danger-light image-box text-center
                                 p-5">
                                        <img src="../assets/images/forms/04.png" class="img-fluid avatar-90"
                                            alt="image">
                                    </div>
                                    <div class="forms-text d-flex flex-wrap
                                 justify-content-between text-left">
                                        <div>
                                            <h5 class="mb-0"><i class="las la-file-alt
                                          text-dark mr-3"></i>Authority Prospects Express</h5>
                                        </div>
                                        <div class="dropdown">
                                            <span class="dropdown-toggle1" id="dropdownMenuButton12"
                                                data-toggle="dropdown" aria-expanded="false" role="button">
                                                <i class="fas fa-cog mt-2"></i>
                                            </span>
                                            <div class="dropdown-menu
                                       dropdown-menu-right" aria-labelledby="dropdownMenuButton12" style="">
                                                <a class="dropdown-item copys" href="#"><i
                                                        class="far fa-copy mr-2"></i>Copy</a>
                                                <a href="#" class="dropdown-item edit-note1" data-toggle="modal"
                                                    data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                <a class="dropdown-item" data-extra-toggle="delete"
                                                    data-closest-elem=".item" href="#"><i
                                                        class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="forms-box">
                                    <div class="bg-danger-light image-box text-center
                                 p-5">
                                        <img src="../assets/images/forms/12.png" class="img-fluid avatar-90"
                                            alt="image">
                                    </div>
                                    <div class="forms-text d-flex flex-wrap
                                 justify-content-between text-left">
                                        <div>
                                            <h5 class="mb-0"><i class="las la-file-alt
                                          text-dark mr-3"></i>Citron Prospects Express</h5>
                                        </div>
                                        <div class="dropdown">
                                            <span class="dropdown-toggle1" id="dropdownMenuButton13"
                                                data-toggle="dropdown" aria-expanded="false" role="button">
                                                <i class="fas fa-cog mt-2"></i>
                                            </span>
                                            <div class="dropdown-menu
                                       dropdown-menu-right" aria-labelledby="dropdownMenuButton13" style="">
                                                <a class="dropdown-item copys" href="#"><i
                                                        class="far fa-copy mr-2"></i>Copy</a>
                                                <a href="#" class="dropdown-item edit-note1" data-toggle="modal"
                                                    data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                <a class="dropdown-item" data-extra-toggle="delete"
                                                    data-closest-elem=".item" href="#"><i
                                                        class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="forms-box">
                                    <div class="bg-info-light image-box text-center
                                 p-5">
                                        <img src="../assets/images/forms/13.png" class="img-fluid avatar-90"
                                            alt="image">
                                    </div>
                                    <div class="forms-text d-flex flex-wrap
                                 justify-content-between text-left">
                                        <div>
                                            <h5 class="mb-0"><i class="las la-file-alt
                                          text-dark mr-3"></i>Slant Prospects Express</h5>
                                        </div>
                                        <div class="dropdown">
                                            <span class="dropdown-toggle1" id="dropdownMenuButton14"
                                                data-toggle="dropdown" aria-expanded="false" role="button">
                                                <i class="fas fa-cog mt-2"></i>
                                            </span>
                                            <div class="dropdown-menu
                                       dropdown-menu-right" aria-labelledby="dropdownMenuButton14" style="">
                                                <a class="dropdown-item copys" href="#"><i
                                                        class="far fa-copy mr-2"></i>Copy</a>
                                                <a href="#" class="dropdown-item edit-note1" data-toggle="modal"
                                                    data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                <a class="dropdown-item" data-extra-toggle="delete"
                                                    data-closest-elem=".item" href="#"><i
                                                        class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="forms-box">
                                    <div class="bg-warning-light image-box text-center
                                 p-5">
                                        <img src="../assets/images/forms/10.png" class="img-fluid avatar-90"
                                            alt="image">
                                    </div>
                                    <div class="forms-text d-flex flex-wrap
                                 justify-content-between text-left">
                                        <div>
                                            <h5 class="mb-0"><i class="las la-file-alt
                                          text-dark mr-3"></i>Circle Prospects Express</h5>
                                        </div>
                                        <div class="dropdown">
                                            <span class="dropdown-toggle1" id="dropdownMenuButton=15"
                                                data-toggle="dropdown" aria-expanded="false" role="button">
                                                <i class="fas fa-cog mt-2"></i>
                                            </span>
                                            <div class="dropdown-menu
                                       dropdown-menu-right" aria-labelledby="dropdownMenuButton=15" style="">
                                                <a class="dropdown-item copys" href="#"><i
                                                        class="far fa-copy mr-2"></i>Copy</a>
                                                <a href="#" class="dropdown-item edit-note1" data-toggle="modal"
                                                    data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                <a class="dropdown-item" data-extra-toggle="delete"
                                                    data-closest-elem=".item" href="#"><i
                                                        class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="forms-box">
                                    <div class="bg-success-light image-box text-center
                                 p-5">
                                        <img src="../assets/images/forms/11.png" class="img-fluid avatar-90"
                                            alt="image">
                                    </div>
                                    <div class="forms-text d-flex flex-wrap
                                 justify-content-between text-left">
                                        <div>
                                            <h5 class="mb-0"><i class="las la-file-alt
                                          text-dark mr-3"></i>Pink Cube Prospects Express</h5>
                                        </div>
                                        <div class="dropdown">
                                            <span class="dropdown-toggle1" id="dropdownMenuButton16"
                                                data-toggle="dropdown" aria-expanded="false" role="button">
                                                <i class="fas fa-cog mt-2"></i>
                                            </span>
                                            <div class="dropdown-menu
                                       dropdown-menu-right" aria-labelledby="dropdownMenuButton16" style="">
                                                <a class="dropdown-item copys" href="#"><i
                                                        class="far fa-copy mr-2"></i>Copy</a>
                                                <a href="#" class="dropdown-item edit-note1" data-toggle="modal"
                                                    data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                <a class="dropdown-item" data-extra-toggle="delete"
                                                    data-closest-elem=".item" href="#"><i
                                                        class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="forms-box">
                                    <div class="bg-warning-light image-box text-center
                                 p-5">
                                        <img src="../assets/images/forms/08.png" class="img-fluid avatar-90"
                                            alt="image">
                                    </div>
                                    <div class="forms-text d-flex flex-wrap
                                 justify-content-between text-left">
                                        <div>
                                            <h5 class="mb-0"><i class="las la-file-alt
                                          text-dark mr-3"></i>Cube Prospects Express</h5>
                                        </div>
                                        <div class="dropdown">
                                            <span class="dropdown-toggle1" id="dropdownMenuButton15"
                                                data-toggle="dropdown" aria-expanded="false" role="button">
                                                <i class="fas fa-cog mt-2"></i>
                                            </span>
                                            <div class="dropdown-menu
                                       dropdown-menu-right" aria-labelledby="dropdownMenuButton15" style="">
                                                <a class="dropdown-item copys" href="#"><i
                                                        class="far fa-copy mr-2"></i>Copy</a>
                                                <a href="#" class="dropdown-item edit-note1" data-toggle="modal"
                                                    data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                <a class="dropdown-item" data-extra-toggle="delete"
                                                    data-closest-elem=".item" href="#"><i
                                                        class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="forms-box">
                                    <div class="bg-success-light image-box text-center
                                 p-5">
                                        <img src="../assets/images/forms/05.png" class="img-fluid avatar-90"
                                            alt="image">
                                    </div>
                                    <div class="forms-text d-flex flex-wrap
                                 justify-content-between text-left">
                                        <div>
                                            <h5 class="mb-3"><i class="las la-file-alt
                                          text-dark mr-3"></i>Scale Prospects Express</h5>
                                        </div>
                                        <div class="dropdown">
                                            <span class="dropdown-toggle1" id="dropdownMenuButton3"
                                                data-toggle="dropdown" aria-expanded="false" role="button">
                                                <i class="fas fa-cog mt-2"></i>
                                            </span>
                                            <div class="dropdown-menu
                                       dropdown-menu-right" aria-labelledby="dropdownMenuButton3" style="">
                                                <a class="dropdown-item copys" href="#"><i
                                                        class="far fa-copy mr-2"></i>Copy</a>
                                                <a href="#" class="dropdown-item edit-note1" data-toggle="modal"
                                                    data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                <a class="dropdown-item" data-extra-toggle="delete"
                                                    data-closest-elem=".item" href="#"><i
                                                        class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="forms-box">
                                    <div class="bg-info-light image-box text-center
                                 p-5">
                                        <img src="../assets/images/forms/07.png" class="img-fluid avatar-90"
                                            alt="image">
                                    </div>
                                    <div class="forms-text d-flex flex-wrap
                                 justify-content-between text-left">
                                        <div>
                                            <h5 class="mb-3"><i class="las la-file-alt
                                          text-dark mr-3"></i>Dapper Prospects Express</h5>
                                        </div>
                                        <div class="dropdown">
                                            <span class="dropdown-toggle1" id="dropdownMenuButton=6"
                                                data-toggle="dropdown" aria-expanded="false" role="button">
                                                <i class="fas fa-cog mt-2"></i>
                                            </span>
                                            <div class="dropdown-menu
                                       dropdown-menu-right" aria-labelledby="dropdownMenuButton=6" style="">
                                                <a class="dropdown-item copys" href="#"><i
                                                        class="far fa-copy mr-2"></i>Copy</a>
                                                <a href="#" class="dropdown-item edit-note1" data-toggle="modal"
                                                    data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                <a class="dropdown-item" data-extra-toggle="delete"
                                                    data-closest-elem=".item" href="#"><i
                                                        class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="forms-box">
                                    <div class="bg-danger-light image-box text-center
                                 p-5">
                                        <img src="../assets/images/forms/06.png" class="img-fluid avatar-90"
                                            alt="image">
                                    </div>
                                    <div class="forms-text d-flex flex-wrap
                                 justify-content-between text-left">
                                        <div>
                                            <h5 class="mb-0"><i class="las la-file-alt
                                          text-dark mr-3"></i>marvel Prospects Express</h5>
                                        </div>
                                        <div class="dropdown">
                                            <span class="dropdown-toggle1" id="dropdownMenuButton=thirteen"
                                                data-toggle="dropdown" aria-expanded="false" role="button">
                                                <i class="fas fa-cog mt-2"></i>
                                            </span>
                                            <div class="dropdown-menu
                                       dropdown-menu-right" aria-labelledby="dropdownMenuButton=thirteen" style="">
                                                <a class="dropdown-item copys" href="#"><i
                                                        class="far fa-copy mr-2"></i>Copy</a>
                                                <a href="#" class="dropdown-item edit-note1" data-toggle="modal"
                                                    data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                <a class="dropdown-item" data-extra-toggle="delete"
                                                    data-closest-elem=".item" href="#"><i
                                                        class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page end  -->
</div>

<div class="modal fade" id="edit-note1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Template</h3>
                <div class="btn-cancel p-0" data-dismiss="modal"><i class="las la-times"></i></div>
            </div>
            <div class="modal-body">
                <div class="popup text-left">
                    <div class="content edit-notes">
                        <div class="card card-transparent card-block card-stretch event-note mb-0">
                            <div class="card-body p-0 bukmark">

                                <div id="quill-toolbar1">
                                    <p>Virtual Digital Marketing Course every week on Monday, Wednesday and
                                        Saturday.Virtual Digital Marketing Course every week on Monday</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="d-flex flex-wrap align-items-ceter justify-content-end">
                    <div class="btn btn-primary mr-3" data-dismiss="modal">Cancel</div>
                    <div class="btn btn-outline-primary" data-dismiss="modal">Save</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
