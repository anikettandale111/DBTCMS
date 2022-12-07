<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
        <meta content="Coderthemes" name="author">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/dbt/img2.ico')}}">

        <!-- third party css -->
        <link href="{{asset('assets/css/vendor/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css">
        <!-- third party css end -->

        <!-- App css -->
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="light-style">
        <link href="{{asset('assets/css/app-dark.min.css')}}" rel="stylesheet" type="text/css" id="dark-style">

    </head>

    <body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        <!-- Begin page -->
        <div class="wrapper">
            <!-- ========== Left Sidebar Start ========== -->
            <div class="leftside-menu">
    
                <!-- LOGO -->
                <a href="{{ route('po-dashboard') }}" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img src="{{asset('assets/images/dbt/img2.png')}}" alt="" height="25" width="25">
                    </span>
                    <span class="logo-sm">
                        <img src="{{asset('assets/images/dbt/img2.png')}}" alt="" height="25" width="25">
                    </span>
                </a>

                <!-- LOGO -->
                <a href="{{ route('po-dashboard') }}" class="logo text-center logo-dark">
                    <span class="logo-lg">
                        <img src="{{asset('assets/images/dbt/img2.png')}}" alt="" height="25" width="25">
                    </span>
                    <span class="logo-sm">
                        <img src="{{asset('assets/images/dbt/img2.png')}}" alt="" height="25" width="25">
                    </span>
                </a>
    
                <div class="h-100" id="leftside-menu-container" data-simplebar="">

                    <!--- Sidemenu -->
                    <ul class="side-nav">

                       

                        <li class="side-nav-item">
                            <a href="{{ route('po-dashboard') }}" class="side-nav-link">
                                <i class="uil-calender"></i>
                                <span> Dashboard </span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="uil-calender"></i>
                                <span> Student Updation Request </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="uil-comments-alt"></i>
                                <span> Payment Status </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="uil-comments-alt"></i>
                                <span> Payment Recovery </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="uil-comments-alt"></i>
                                <span> Excess Payment Recovery </span>
                            </a>
                        </li>

                        
                       
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false" aria-controls="sidebarEcommerce" class="side-nav-link">
                                <i class="uil-store"></i>
                                <span> Masters </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarEcommerce">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="javascript: void(0);"><i class="uil-store"></i>Add User</a>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);"><i class="uil-store"></i>School Master</a>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);"><i class="uil-store"></i>Taluka Master</a>
                                    </li>
                                </ul>
                            </div>
                        </li>


                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarMore" aria-expanded="false" aria-controls="sidebarMore" class="side-nav-link">
                                <i class="uil-store"></i>
                                <span> More </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarMore">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="javascript: void(0);"><i class="uil-store"></i>Initiate Student Transfer</a>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);"><i class="uil-store"></i>Locked User</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarReports" aria-expanded="false" aria-controls="sidebarReports" class="side-nav-link">
                                <i class="uil-store"></i>
                                <span>Reports </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarReports">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="javascript: void(0);"><i class="uil-store"></i>All Student Report</a>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);"><i class="uil-store"></i>Student Updation Report</a>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);"><i class="uil-store"></i>Benefit transfer status report</a>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);"><i class="uil-store"></i>Excess Payment Detail Report</a>
                                    </li>
                                     <li>
                                        <a href="javascript: void(0);"><i class="uil-store"></i>Left Students Report</a>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);"><i class="uil-store"></i>Installment Fund Transfer Report</a>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);"><i class="uil-store"></i>Treasary Bill Submission Report</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="uil-comments-alt"></i>
                                <span> School Profile </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="uil-comments-alt"></i>
                                <span> User Profile </span>
                            </a>
                        </li>
                    </ul>

                    <!-- <div class="clearfix"></div> -->

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    <!-- Topbar Start -->
                    <div class="navbar-custom">
                        <ul class="list-unstyled topbar-menu float-end mb-0">
                            <li class="dropdown notification-list d-lg-none">
                                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="dripicons-search noti-icon"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                                    <form class="p-3">
                                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                    </form>
                                </div>
                            </li>


                            <!-- <li class="dropdown notification-list d-none d-sm-inline-block">
                                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="dripicons-view-apps noti-icon"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg p-0">
                                    <div class="p-2">
                                        <div class="row g-0">
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#">
                                                    <img src="{{asset('assets/images/brands/slack.png')}}" alt="slack">
                                                    <span>Slack</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#">
                                                    <img src="{{asset('assets/images/brands/github.png')}}" alt="Github">
                                                    <span>GitHub</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#">
                                                    <img src="{{asset('assets/images/brands/dribbble.png')}}" alt="dribbble">
                                                    <span>Dribbble</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="row g-0">
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#">
                                                    <img src="{{asset('assets/images/brands/bitbucket.png')}}" alt="bitbucket">
                                                    <span>Bitbucket</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#">
                                                    <img src="{{asset('assets/images/brands/dropbox.png')}}" alt="dropbox">
                                                    <span>Dropbox</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#">
                                                    <img src="{{asset('assets/images/brands/g-suite.png')}}" alt="G Suite">
                                                    <span>G Suite</span>
                                                </a>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </li> -->

                            <!-- <li class="notification-list">
                                <a class="nav-link end-bar-toggle" href="javascript: void(0);">
                                    <i class="dripicons-gear noti-icon"></i>
                                </a>
                            </li> -->

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <span class="account-user-avatar"> 
                                        <img src="{{asset('assets/images/dbt/img2.png')}}" alt="user-image" class="rounded-circle">
                                    </span>
                                    <span>
                                        <span class="account-user-name">{{ Auth::user()->email }}</span>
                                        <span class="account-position">PO</span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                    <div class=" dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>

                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-circle me-1"></i>
                                        <span>My Account</span>
                                    </a>

                                    <!-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-edit me-1"></i>
                                        <span>Settings</span>
                                    </a>

                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-lifebuoy me-1"></i>
                                        <span>Support</span>
                                    </a>

                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-lock-outline me-1"></i>
                                        <span>Lock Screen</span>
                                    </a> -->

                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="dropdown-item notify-item">
                                        <i class="mdi mdi-logout me-1"></i>
                                        <span>Logout</span>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                        </ul>
                        <button class="button-menu-mobile open-left">
                            <i class="mdi mdi-menu"></i>
                        </button>

                        <div class="app-search dropdown d-none d-lg-block">
                            <h3>DIRECT BENEFIT TRANSFER(DBT) </h3>
                            <h4>Tribal Development Commissionerate</h4>
                        </div>
                    </div>
                    <!-- end Topbar -->