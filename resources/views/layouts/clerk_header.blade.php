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
        <link rel="shortcut icon" href="{{asset('assets/images/dbt/img2.png')}}">

        

        <!-- third party css -->
        <!-- <link href="{{asset('assets/css/vendor/dataTables.bootstrap5.css')}}" rel="stylesheet" type="text/css"> -->
        <!-- <link href="{{asset('assets/css/vendor/responsive.bootstrap5.css')}}" rel="stylesheet" type="text/css"> -->
        <link href="{{asset('assets/css/vendor/buttons.bootstrap5.css')}}" rel="stylesheet" type="text/css">
        <!-- <link href="{{asset('assets/css/vendor/select.bootstrap5.css')}}" rel="stylesheet" type="text/css"> -->
        <!-- third party css end -->

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
                <a href="{{ route('clerk-dashboard') }}" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img src="{{asset('assets/images/dbt/img2.png')}}" alt="" height="25" width="25">
                    </span>
                    <span class="logo-sm">
                        <img src="{{asset('assets/images/dbt/img2.png')}}" alt="" height="25" width="25">
                    </span>
                </a>

                <!-- LOGO -->
                <a href="{{ route('clerk-dashboard') }}" class="logo text-center logo-dark">
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
                            <a href="{{ route('clerk-dashboard') }}" class="side-nav-link">
                                <i class="uil-calender"></i>
                                <span> Dashboards </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="{{ route('student-add') }}" class="side-nav-link">
                                <i class="uil-calender"></i>
                                <span> Student Registration </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="{{ route('student-list') }}" class="side-nav-link">
                                <i class="uil-comments-alt"></i>
                                <span> Renewal Student </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="{{ route('student-aadhaar-list') }}" class="side-nav-link">
                                <i class="uil-comments-alt"></i>
                                <span> Verification Aadhaar </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="uil-comments-alt"></i>
                                <span> Reinitiate Failed Transaction </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="uil-comments-alt"></i>
                                <span> Student Updating Request </span>
                            </a>
                        </li>
                       
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false" aria-controls="sidebarEcommerce" class="side-nav-link">
                                <i class="uil-store"></i>
                                <span> SI Recommend / Unrecommend </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarEcommerce">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="javascript: void(0);">
                                            <i class="uil-store"></i>
                                            SI Recommend
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);"><i class="uil-store"></i>SI Unrecommmend</a>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);"><i class="uil-store"></i>Reverse The Status</a>
                                    </li>
                                </ul>
                            </div>
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
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="uil-comments-alt"></i>
                                <span> Cancel Admission / Left Students </span>
                            </a>
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
                                        <a href="javascript: void(0);"><i class="uil-store"></i>Disallow Transaction</a>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);"><i class="uil-store"></i>Approve Student Transfer</a>
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
                                        <a href="javascript: void(0);"><i class="uil-store"></i>Excess Payment Detail Report</a>
                                    </li>
                                     <li>
                                        <a href="javascript: void(0);"><i class="uil-store"></i>Left Students Report</a>
                                    </li>
                                     <li>
                                        <a href="javascript: void(0);"><i class="uil-store"></i>Installment Fund Transfer Report</a>
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
                </div>
            </div>

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    <!-- Topbar Start -->
                    <div class="navbar-custom">
                        
                        <ul class="list-unstyled topbar-menu float-end mb-0">
                           


                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <span class="account-user-avatar"> 
                                        <img src="{{asset('assets/images/dbt/img2.png')}}" alt="user-image" class="rounded-circle">
                                    </span>
                                    <span>
                                        <span class="account-user-name">{{ Auth::user()->email }} </span>
                                        <span class="account-position">Clerk</span>
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