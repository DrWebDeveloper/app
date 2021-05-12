<!-- Wrapper Start -->
<div class="wrapper">

    <div class="iq-sidebar  sidebar-default ">
        <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
            <a href="{{ route('home') }}" class="header-logo">

                <img src="{{ url('public/images/logo/'.App\Models\Setting::first()->site_logo_sidebar) }}" class="img-fluid  light-logo" alt="logo"  style="height:58px !important">
                {{-- <h5 class="logo-title text-white ml-3 mt-1">{{ config('app.name') }}</h5> --}}
                <!--
<img src="" class="img-fluid  light-logo" alt="logo"><h5 class="logo-title ml-3 mt-1">Prospects Express</h5>
 -->
            </a>

            <div class="iq-menu-bt-sidebar ">
                <svg class="svg-icon feather feather-repeat wrapper-menu animated rotation"
                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="17 1 21 5 17 9"></polyline>
                    <path d="M3 11V9a4 4 0 0 1 4-4h14"></path>
                    <polyline points="7 23 3 19 7 15"></polyline>
                    <path d="M21 13v2a4 4 0 0 1-4 4H3"></path>
                </svg>
            </div>
        </div>
        <div class="data-scrollbar" data-scroll="1">
            <nav class="iq-sidebar-menu">
                <ul id="iq-sidebar-toggle" class="iq-menu">

                    <li class="{{ \Request::route()->getName() == 'home' ? 'active' : '' }}">
                        <a href="{{ route('home') }}" class="svg-icon">
                            <i class="las la-home" style="font-size:22px"></i>
                            <span class="">{{ __('all.home') }}</span>
                        </a>
                    </li>

                    <li class="{{ \Request::route()->getName() == 'plans' ? 'active' : '' }}">
                        <a href="{{ route('plans') }}">
                            <i class="las la-coins" style="font-size:22px"></i><span>Plans</span>
                        </a>
                    </li>

                    @if (isset(Auth::user()->membership) && Auth::user()->membership == 'Premium')
                        <li class="{{ \Request::route()->getName() == 'purchases' ? 'active' : '' }}">
                            <a href="{{ route('purchases') }}">
                                <i class="las la-credit-card" style="font-size:22px"></i><span>Purchase History</span>
                            </a>
                        </li>
                    @endif

                    <li class="{{ \Request::route()->getName() == 'account' ? 'active' : '' }}">
                        <a href="{{ route('account') }}" class="">
                            <i class="las la-user" style="font-size:22px"></i>
                            <span class="">{{ __('all.account') }}</span>
                        </a>
                    </li>

                    {{-- <li class="{{ \Request::route()->getName() == 'affiliate' ? 'active' : '' }}">
                        <a href="{{ route('affiliate') }}" class="">
                            <i class="las la-user-tie" style="font-size:22px"></i><span>{{ __('all.affiliate') }}</span>
                        </a>
                    </li> --}}


                    <li class="{{ \Request::route()->getName() == 'help' ? 'active' : '' }}">
                        <a href="{{ route('help') }}" class="">
                            <i class="las la-pager" style="font-size:22px"></i><span>{{ __('all.help') }}</span>
                        </a>
                    </li>
{{--
                    <li class="{{ \Request::route()->getName() == 'contact' ? 'active' : '' }}">
                        <a href="{{ route('contact') }}" class="">
                            <i class="las la-cubes" style="font-size:22px"></i><span>{{ __('all.contact') }}</span>
                        </a>
                    </li> --}}







                    {{-- <ul id="pages-maintenance" class="iq-submenu collapse" data-parent="#otherpage">
                        </ul>
                        <a href="#otherpage" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                                    <i>
                                        <svg width="20" class="svg-icon" id="iq-main-9" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14" />
                                        </svg>
                                    </i>
                                    <span>other page</span>
                                    <i class="las la-angle-right iq-arrow-right arrow-active" style="font-size:22px"></i>
                                    <i class="las la-angle-down iq-arrow-right arrow-hover" style="font-size:22px"></i>
                                </a> --}}


                    <ul id="otherpage" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">



                        <li class=" ">
                            <a href="#user" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                <i class="las la-user-cog" style="font-size:22px"></i><span>User Details</span>
                                <i class="las la-angle-right iq-arrow-right arrow-active" style="font-size:22px"></i>
                                <i class="las la-angle-down iq-arrow-right arrow-hover" style="font-size:22px"></i>
                            </a>
                            <ul id="user" class="iq-submenu collapse" data-parent="#otherpage">
                                <li class="">
                                    <a href="{{ route('account') }}">
                                        <i class="las la-id-card" style="font-size:22px"></i><span>User Profile</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="'public/app/user-add.html">
                                        <i class="las la-user-plus" style="font-size:22px"></i><span>User Add</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="public/app/user-list.html">
                                        <i class="las la-list-alt" style="font-size:22px"></i><span>User List</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="#ui" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                <i class="lab la-uikit iq-arrow-left" style="font-size:22px"></i><span>UI Elements</span>
                                <i class="las la-angle-right iq-arrow-right arrow-active" style="font-size:22px"></i>
                                <i class="las la-angle-down iq-arrow-right arrow-hover" style="font-size:22px"></i>
                            </a>
                            <ul id="ui" class="iq-submenu collapse" data-parent="#otherpage">
                                <li class="">
                                    <a href="./ui-avatars.html">
                                        <i class="las la-user-tie" style="font-size:22px"></i><span>Avatars</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="./ui-alerts.html">
                                        <i class="las la-exclamation-triangle" style="font-size:22px"></i><span>Alerts</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="./ui-badges.html">
                                        <i class="las la-id-badge" style="font-size:22px"></i><span>Badges</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="./ui-breadcrumb.html">
                                        <i class="las la-ellipsis-h" style="font-size:22px"></i><span>Breadcrumb</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="./ui-buttons.html">
                                        <i class="las la-ticket-alt" style="font-size:22px"></i><span>Buttons</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="./ui-buttons-group.html">
                                        <i class="las la-object-group" style="font-size:22px"></i><span>Buttons Group</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="./ui-boxshadow.html">
                                        <i class="las la-boxes" style="font-size:22px"></i><span>Box Shadow</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="./ui-colors.html">
                                        <i class="las la-brush" style="font-size:22px"></i><span>Colors</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="./ui-cards.html">
                                        <i class="las la-credit-card" style="font-size:22px"></i><span>Cards</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="./ui-carousel.html">
                                        <i class="las la-sliders-h" style="font-size:22px"></i><span>Carousel</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="./ui-grid.html">
                                        <i class="las la-th-large" style="font-size:22px"></i><span>Grid</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="./ui-helper-classes.html">
                                        <i class="las la-hands-helping" style="font-size:22px"></i><span>Helper classes</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="./ui-images.html">
                                        <i class="las la-image" style="font-size:22px"></i><span>Images</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="./ui-list-group.html">
                                        <i class="las la-list-alt" style="font-size:22px"></i><span>list Group</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="./ui-media-object.html">
                                        <i class="las la-photo-video" style="font-size:22px"></i><span>Media</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="./ui-modal.html">
                                        <i class="las la-columns" style="font-size:22px"></i><span>Modal</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="./ui-notifications.html">
                                        <i class="las la-bell" style="font-size:22px"></i><span>Notifications</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="./ui-pagination.html">
                                        <i class="las la-ellipsis-h" style="font-size:22px"></i><span>Pagination</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="./ui-popovers.html">
                                        <i class="las la-spinner" style="font-size:22px"></i><span>Popovers</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="./ui-progressbars.html">
                                        <i class="las la-heading" style="font-size:22px"></i><span>Progressbars</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="./ui-typography.html">
                                        <i class="las la-tablet" style="font-size:22px"></i><span>Typography</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="./ui-tabs.html">
                                        <i class="las la-tablet" style="font-size:22px"></i><span>Tabs</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="./ui-tooltips.html">
                                        <i class="las la-magnet" style="font-size:22px"></i><span>Tooltips</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="./ui-embed-video.html">
                                        <i class="las la-play-circle" style="font-size:22px"></i><span>Video</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class=" ">
                            <a href="#table" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                <i class="las la-table iq-arrow-left" style="font-size:22px"></i><span>Table</span>
                                <i class="las la-angle-right iq-arrow-right arrow-active" style="font-size:22px"></i>
                                <i class="las la-angle-down iq-arrow-right arrow-hover" style="font-size:22px"></i>
                            </a>
                            <ul id="table" class="iq-submenu collapse" data-parent="#otherpage">
                                <li class="">
                                    <a href="./tables-basic.html">
                                        <i class="las la-border-all" style="font-size:22px"></i><span>Basic Tables</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="./table-data.html">
                                        <i class="lab la-microsoft" style="font-size:22px"></i><span>Data Table</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="./table-editable.html">
                                        <i class="lab la-buromobelexperte" style="font-size:22px"></i><span>Editable Table</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="./table-tree.html">
                                        <i class="las la-tree" style="font-size:22px"></i><span>Table Tree</span>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class=" ">
                            <a href="#auth" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                <i class="las la-torah iq-arrow-left" style="font-size:22px"></i><span>Authentication</span>
                                <i class="las la-angle-right iq-arrow-right arrow-active" style="font-size:22px"></i>
                                <i class="las la-angle-down iq-arrow-right arrow-hover" style="font-size:22px"></i>
                            </a>
                            <ul id="auth" class="iq-submenu collapse" data-parent="#otherpage">
                                <li class="">
                                    <a href="./signin.html">
                                        <i class="las la-sign-in-alt" style="font-size:22px"></i><span>Login</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="./signup.html">
                                        <i class="las la-registered" style="font-size:22px"></i><span>Register</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="./forgetpassword.html">
                                        <i class="las la-unlock-alt" style="font-size:22px"></i><span>Recover Password</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="./auth-confirm-mail.html">
                                        <i class="las la-envelope-square" style="font-size:22px"></i><span>Confirm Mail</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="./auth-lock-screen.html">
                                        <i class="las la-lock" style="font-size:22px"></i><span>Lock Screen</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="{{ route('plans') }}">
                                <i class="las la-coins" style="font-size:22px"></i><span>Plan</span>

                            </a>
                            <ul id="pricing" class="iq-submenu collapse" data-parent="#otherpage">
                                <li class="">
                                    <a href="{{ route('plans') }}">
                                        <i class="las la-weight" style="font-size:22px"></i><span>Pricing 1</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="./pricing-1.html">
                                        <i class="las la-crutch" style="font-size:22px"></i><span>Pricing 2</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="#pages-error" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                <i class="las la-exclamation-triangle" style="font-size:22px"></i><span>Error</span>
                                <i class="las la-angle-right iq-arrow-right arrow-active" style="font-size:22px"></i>
                                <i class="las la-angle-down iq-arrow-right arrow-hover" style="font-size:22px"></i>
                            </a>
                            <ul id="pages-error" class="iq-submenu collapse" data-parent="#otherpage">
                                <li class="">
                                    <a href="./pages-error.html">
                                        <i class="las la-bomb" style="font-size:22px"></i><span>Error 404</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="./pages-error-500.html">
                                        <i class="las la-exclamation-circle" style="font-size:22px"></i><span>Error 500</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="./pages-invoice.html" class="">
                                <i class="las la-receipt" style="font-size:22px"></i><span>Invoice</span>
                            </a>
                            <ul id="pages-invoice" class="iq-submenu collapse" data-parent="#otherpage">
                            </ul>
                        </li>
                        <li class="">
                            <a href="{{ route('help') }}" class="">
                                <i class="las la-pager" style="font-size:22px"></i><span>Blank Page</span>
                            </a>
                            <ul id="pages-blank-page" class="iq-submenu collapse" data-parent="#otherpage">
                            </ul>
                        </li>
                        <li class="">
                            <a href="{{ route('contact') }}" class="">
                                <i class="las la-cubes" style="font-size:22px"></i><span>Maintenance</span>
                            </a>
                            <ul id="pages-maintenance" class="iq-submenu collapse" data-parent="#otherpage">
                            </ul>
                        </li>
                    </ul>

                    </li>
                </ul>
                <a href="{{ App\Models\Setting::first()->banner_link }}"><img src="{{ url('public/images/'.App\Models\Setting::first()->banner) }}" class="cntr" alt=""></a>
                {{-- <div>
                            <a href="#"><img src="{{ url('public/assets/images/promo.png') }}" style="max-width: 108%;"></a>
                        </div> --}}
            </nav>
            <div class="p-3"></div>

        </div>
    </div>
    <div class="iq-top-navbar">
        <div class="iq-navbar-custom">
            <nav class="navbar navbar-expand-lg navbar-light">

                <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                    <i class="ri-menu-line wrapper-menu" style="font-size:22px"></i>
                    <a href="{{ route('home') }}" class="header-logo">
                        <img src="{{ url('public/images/logo/'.App\Models\Setting::first()->site_logo) }}" class="img-fluid  light-logo"
                            alt="logo" style="height:70px !important">
                        {{-- <h5 class="logo-title ml-3 mt-1">Prospects Express</h5> --}}

                        <!-- < img src="{{ url('public/assets/images/logo.png') }}" class="img-fluid  light-logo" alt="logo"><h5 class="logo-title ml-3 mt-1"> Prospects Express</h5> -->
                    </a>

                    <div class="navbar-breadcrumb">
                        <h4>@yield('title')</h4>
                    </div>
                </div>
                {{-- Your Current language is {{ App::currentLocale() }}
                    <div class="d-flex align-items-center justify-content-between">

                        <div class="dropdown">
                            <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Language
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{ route('lang',['locale'=>'en']) }}">English</a>
                                <a class="dropdown-item" href="{{ route('lang',['locale'=>'fr']) }}">French</a>
                            </div>
                        </div> --}}
                {{-- <div class="form-group mb-0 mr-4 position-relative" style="font-size: 13px;cursor: pointer;">
                        <img src="{{ url('public/assets/images/language.png') }}" class="light-logo" alt="logo"> <span>English</span>
                        </div> --}}
                <div class="iq-search-bar device-search" style="display:none">
                    <form action="#" class="searchbox">
                        <a class="search-link" href="#"><i class="ri-search-line" style="display:none;" style="font-size:22px"></i></a>
                        <input type="text" class="text search-input"
                            placeholder="Search for your document , people,...">
                    </form>
                </div>
                <div class="d-flex align-items-center">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-label="Toggle navigation">
                        <i class="ri-menu-3-line" style="font-size:22px"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto navbar-list align-items-center">
                            <li class="nav-item nav-icon search-content">
                                <a href="#" class="search-toggle rounded" id="dropdownSearch" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="ri-search-line" style="display:none;" style="font-size:22px"></i>
                                </a>
                                <div class="iq-search-bar iq-sub-dropdown dropdown-menu"
                                    aria-labelledby="dropdownSearch">
                                    <form action="#" class="searchbox p-2">
                                        <div class="form-group mb-0 position-relative">
                                            <input type="text" class="text search-input font-size-12"
                                                placeholder="type here to search...">
                                            <a href="#" class="search-link"><i class="las la-search" style="font-size:22px"></i></a>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item nav-icon dropdown">
                                <a href="#" class="search-toggle dropdown-toggle" style=" display: none;"
                                    id="dropdownMenuButtontwo" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="ri-notification-line" style="font-size:22px"></i>
                                    <span class="bg-primary dots"></span>
                                </a>
                                <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButtontwo">
                                    <div class="card shadow-none m-0">
                                        <div class="card-body p-0 ">
                                            <div class="p-4">
                                                <a href="#" class="iq-sub-card">
                                                    <div class="media align-items-center cust-card pb-4">
                                                        <div class="">
                                                            <img class="avatar-50 rounded-small"
                                                                src="{{ url('public/assets/images/user/01.jpg') }}"
                                                                alt="01">
                                                        </div>
                                                        <div class="media-body ml-4">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between">
                                                                <h5 class="mb-0">Emma Watson</h5>
                                                                <small class="text-dark"><b>12 : 47
                                                                        pm</b></small>
                                                            </div>
                                                            <small class="mb-0 font-size-14">Lorem ipsum dolor
                                                                sit amet</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="iq-sub-card">
                                                    <div class="media align-items-center cust-card">
                                                        <div class="">
                                                            <img class="avatar-50 rounded-small"
                                                                src="public/assets/images/user/02.jpg" alt="02">
                                                        </div>
                                                        <div class="media-body ml-4">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between">
                                                                <h5 class="mb-0">Ashlynn Franci</h5>
                                                                <small class="text-dark"><b>11 : 30
                                                                        pm</b></small>
                                                            </div>
                                                            <small class="mb-0 font-size-14">Lorem ipsum dolor
                                                                sit amet</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="iq-sub-card">
                                                    <div class="media align-items-center cust-card pt-3">
                                                        <div class="">
                                                            <img class="avatar-50 rounded-small"
                                                                src="public/assets/images/user/03.jpg" alt="03">
                                                        </div>
                                                        <div class="media-body ml-4">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between">
                                                                <h5 class="mb-0">Kianna Carder</h5>
                                                                <small class="text-dark"><b>11 : 21
                                                                        pm</b></small>
                                                            </div>
                                                            <small class="mb-0 font-size-14">Lorem ipsum dolor
                                                                sit amet</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <a class="right-ic btn btn-primary btn-block position-relative iq-logout"
                                                href="#" role="button">
                                                View All
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>@auth()
                                    @if (Auth::user()->admin == 1)
                                        <a href="{{ route('admin') }}">Admin Panel</a>
                                    @endif


                                @endauth
                            </li>
                            <li class="nav-item nav-icon dropdown">


                                <a href="#" class="search-toggle iq-user-toggle dropdown-toggle" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="{{ url('public/assets/images/user/one.png') }}"
                                        class="img-fluid rounded-small" alt="user">
                                </a>
                                <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <div class="card mb-0">

                                        <div class="card-body p-0">
                                            <div class="profile-header">
                                                <div class="profile-details">
                                                    <a href="{{ route('dashboard') }}" class="iq-sub-card">
                                                        <div class="rounded bg-info iq-card-icon-small">
                                                            <i class="ri-file-user-line" style="font-size:22px"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5 class="mb-0">My Dashboard</h5>
                                                            <p class="mb-0 font-size-14">View personal profile
                                                                details</p>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="profile-details">
                                                    <a href="{{ route('editprofile') }}" class="iq-sub-card">
                                                        <div class="rounded bg-success iq-card-icon-small">
                                                            <i class="ri-profile-line" style="font-size:22px"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5 class="mb-0">Edit Profile</h5>
                                                            <p class="mb-0 font-size-14">Modify Your details</p>
                                                        </div>
                                                    </a>
                                                </div>

                                                <!-- <div class="profile-details">
                                                            <a href="{{ route('settings') }}"
                                                                class="iq-sub-card">
                                                                <div class="rounded bg-danger iq-card-icon-small">
                                                                    <i class="ri-account-box-line" style="font-size:22px"></i>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h5 class="mb-0">Account</h5>
                                                                    <p class="mb-0 font-size-14">Manage your account
                                                                        parameters.</p>
                                                                </div>
                                                            </a>
                                                        </div> -->


                                                <div class="profile-details">
                                                    <a href="{{ route('settings') }}"
                                                        class="iq-sub-card border-none">
                                                        <div class="rounded bg-warning iq-card-icon-small">
                                                            <i class="ri-lock-line" style="font-size:22px"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5 class="mb-0">Settings</h5>
                                                            <p class="mb-0 font-size-14">Control your privacy
                                                                parameters.</p>
                                                        </div>
                                                    </a>
                                                </div>

                                            </div>
                                            @auth
                                            <a href="{{ route('logout') }}"
                                                class="right-ic btn btn-primary btn-block   position-relative iq-logout"
                                                onclick="" role="button">
                                                {{ __('Log out') }}
                                            </a>
                                            @endauth
                                            @guest()

                                            <a href="{{ route('login') }}"
                                                class="right-ic btn btn-primary btn-block   position-relative iq-logout"
                                                onclick="" role="button">
                                                {{ __('Login') }}
                                            </a>
                                            @endguest


                                        </div>
                                    </div>
                                </div>

                            </li>
                        </ul>
                    </div>
                </div>
        </div>
        </nav>
    </div>
</div>
