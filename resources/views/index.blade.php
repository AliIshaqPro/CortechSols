<!doctype html>
<html lang="en">

<head>

    @include('partials.title-meta', ['title' => 'Dashboard'])

    <!-- plugin css -->
    <link href="{{ asset('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    @include('partials.head-css')

</head>


<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('partials.topbar')

        @include('partials.sidebar')

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">

                @include('partials.page-title', ['pagetitle' => 'Morvin', 'subtitle' => 'Dashboard', 'title' => 'Dashboard'])

                <div class="container-fluid">

                    <div class="page-content-wrapper">


                        <div class="row">
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title mb-4 float-sm-start">Employee Overview</h4>

                                        <div class="float-sm-end">
                                            <ul class="nav nav-pills">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Day</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Week</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Month</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#">Year</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="clearfix"></div>

                                        <div class="row align-items-center">
                                            <div class="col-xl-9">
                                                <div>
                                                    <div id="stacked-column-chart" class="apex-charts" dir="ltr"></div>
                                                </div>
                                            </div>

                                            <div class="col-xl-3">
                                                <div class="dash-info-widget mt-4 mt-lg-0 py-4 px-3 rounded">

                                                    <div class="media dash-main-border pb-2 mt-2">
                                                        <div class="avatar-sm mb-3 mt-2">
                                                            <span class="avatar-title rounded-circle bg-white shadow">
                                                                <i class="mdi mdi-account-outline text-primary font-size-18"></i>
                                                            </span>
                                                        </div>
                                                        <div class="media-body ps-3">
                                                            <h4 class="font-size-20">234</h4>
                                                            <p class="text-muted">Employees <a href="#" class="text-primary">View All <i class="mdi mdi-arrow-right"></i></a></p>
                                                        </div>
                                                    </div>

                                                    <div class="media mt-4 dash-main-border pb-2">
                                                        <div class="avatar-sm mb-3 mt-2">
                                                            <span class="avatar-title rounded-circle bg-white shadow">
                                                                <i class="mdi mdi-briefcase-outline text-primary font-size-18"></i>
                                                            </span>
                                                        </div>
                                                        <div class="media-body ps-3">
                                                            <h4 class="font-size-20">50</h4>
                                                            <p class="text-muted">Open Positions <a href="#" class="text-primary">View <i class="mdi mdi-arrow-right"></i></a></p>
                                                        </div>
                                                    </div>

                                                    <div class="media mt-4">
                                                        <div class="avatar-sm mb-2 mt-2">
                                                            <span class="avatar-title rounded-circle bg-white shadow">
                                                                <i class="mdi mdi-folder-open-outline text-primary font-size-18"></i>
                                                            </span>
                                                        </div>
                                                        <div class="media-body ps-3">
                                                            <h4 class="font-size-20">85</h4>
                                                            <p class="text-muted mb-0">Projects <a href="#" class="text-primary">View <i class="mdi mdi-arrow-right"></i></a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>



                            <div class="col-xl-4">
                                <div class="row">
                                    <div class="col-xl-6 col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <p class="font-size-16">Employees Hired</p>
                                                    <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                                        <span class="avatar-title rounded-circle bg-soft-primary">
                                                            <i class="mdi mdi-account-outline text-primary font-size-20"></i>
                                                        </span>
                                                    </div>
                                                    <h5 class="font-size-22">58</h5>
                                                    <p class="text-muted">70% Target</p>
                                                    <div class="progress mt-3" style="height: 4px;">
                                                        <div class="progress-bar progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="70"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <p class="font-size-16">Active Projects</p>
                                                    <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                                        <span class="avatar-title rounded-circle bg-soft-success">
                                                            <i class="mdi mdi-briefcase-outline text-success font-size-20"></i>
                                                        </span>
                                                    </div>
                                                    <h5 class="font-size-22">136</h5>
                                                    <p class="text-muted">80% Target</p>
                                                    <div class="progress mt-3" style="height: 4px;">
                                                        <div class="progress-bar progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="80"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-4">Revenue Statistics</h4>
                                        <div class="media">
                                            <h4>$14,235</h4>
                                            <div class="media-body ps-3">
                                                <div class="dropdown">
                                                    <button class="btn btn-light btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        This Month<i class="mdi mdi-chevron-down ms-1"></i>
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="#">Last Week</a>
                                                        <a class="dropdown-item" href="#">Last Month</a>
                                                        <a class="dropdown-item" href="#">Last Quarter</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <div id="stastics-chart"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="row">

                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title mb-4">Employee Activity</h4>

                                        <ul class="list-unstyled activity-wid mb-0">

                                            <li class="activity-list activity-border">
                                                <div class="activity-icon avatar-sm">
                                                    <img src="assets/images/users/avatar-7.jpg" class="avatar-sm rounded-circle" alt="">
                                                </div>
                                                <div class="media">
                                                    <div class="me-3">
                                                        <h5 class="font-size-15 mb-1">Your Manager Posted a New Task</h5>
                                                        <p class="text-muted font-size-14 mb-0">James Raphael</p>
                                                    </div>

                                                    <div class="media-body">
                                                        <div class="text-end d-none d-md-block">
                                                            <p class="text-muted font-size-13 mt-2 pt-1 mb-0"><i class="mdi mdi-timer-outline font-size-15 text-primary"></i> 3 days ago</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="activity-list activity-border">
                                                <div class="activity-icon avatar-sm">
                                                    <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                        <i class="ti-user font-size-16"></i>
                                                    </span>
                                                </div>
                                                <div class="media">
                                                    <div class="me-3">
                                                        <h5 class="font-size-15 mb-1">You have 5 pending employee requests.</h5>
                                                        <p class="text-muted font-size-14 mb-0">HR Department</p>
                                                    </div>

                                                    <div class="media-body">
                                                        <div class="text-end d-none d-md-block">
                                                            <p class="text-muted font-size-13 mt-2 pt-1 mb-0"><i class="mdi mdi-timer-outline font-size-15 text-primary"></i> 1 day ago</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="activity-list activity-border">
                                                <div class="activity-icon avatar-sm">
                                                    <span class="avatar-title bg-soft-success text-success rounded-circle">
                                                        <i class="ti-user font-size-16"></i>
                                                    </span>
                                                </div>
                                                <div class="media">
                                                    <div class="me-3">
                                                        <h5 class="font-size-15 mb-1">New Employee Onboarded</h5>
                                                        <p class="text-muted font-size-14 mb-0">Welcome to the team!</p>
                                                    </div>

                                                    <div class="media-body">
                                                        <div class="text-end d-none d-md-block">
                                                            <p class="text-muted font-size-13 mt-2 pt-1 mb-0"><i class="mdi mdi-timer-outline font-size-15 text-primary"></i> Today</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="activity-list activity-border">
                                                <div class="activity-icon avatar-sm">
                                                    <img src="assets/images/users/avatar-7.jpg" class="avatar-sm rounded-circle" alt="">
                                                </div>
                                                <div class="media">
                                                    <div class="me-3">
                                                        <h5 class="font-size-15 mb-1">Your Manager Posted a New Task</h5>
                                                        <p class="text-muted font-size-14 mb-0">James Raphael</p>
                                                    </div>

                                                    <div class="media-body">
                                                        <div class="text-end d-none d-md-block">
                                                            <p class="text-muted font-size-13 mt-2 pt-1 mb-0"><i class="mdi mdi-timer-outline font-size-15 text-primary"></i> 3 days ago</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="activity-list activity-border">
                                                <div class="activity-icon avatar-sm">
                                                    <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                        <i class="ti-user font-size-16"></i>
                                                    </span>
                                                </div>
                                                <div class="media">
                                                    <div class="me-3">
                                                        <h5 class="font-size-15 mb-1">You have 1 pending employee request.</h5>
                                                        <p class="text-muted font-size-14 mb-0">Finance Department</p>
                                                    </div>

                                                    <div class="media-body">
                                                        <div class="text-end d-none d-md-block">
                                                            <p class="text-muted font-size-13 mt-2 pt-1 mb-0"><i class="mdi mdi-timer-outline font-size-15 text-primary"></i> 1 day ago</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="activity-list">
                                                <div class="activity-icon avatar-sm">
                                                    <span class="avatar-title bg-soft-success text-success rounded-circle">
                                                        <i class="ti-user font-size-16"></i>
                                                    </span>
                                                </div>
                                                <div class="media">
                                                    <div class="me-3">
                                                        <h5 class="font-size-15 mb-1">New Employee Onboarded</h5>
                                                        <p class="text-muted font-size-14 mb-0">Welcome to the team!</p>
                                                    </div>

                                                    <div class="media-body">
                                                        <div class="text-end d-none d-md-block">
                                                            <p class="text-muted font-size-13 mt-2 pt-1 mb-0"><i class="mdi mdi-timer-outline font-size-15 text-primary"></i> Today</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>


                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-4">Employee Salary Goal</h4>

                                        <div class="mt-2 text-center">

                                            <div class="row">
                                                <div class="col-md-6">

                                                    <div class="mt-4 mt-sm-0">

                                                        <div id="list-chart-1" class="apex-charts" dir="ltr"></div>
                                                        <p class="text-muted mb-2 mt-2 pt-1">Total Salary Paid:</p>
                                                        <h5 class="font-size-18 mb-1">USD 13,545.65</h5>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 dash-goal">

                                                    <div class="mt-4 mt-sm-0">

                                                        <div id="list-chart-2" class="apex-charts" dir="ltr"></div>

                                                        <p class="text-muted mb-2 mt-2 pt-1">Salary Goal:</p>
                                                        <h5 class="font-size-18 mb-1">USD 84,265.45</h5>

                                                    </div>

                                                </div>
                                            </div>

                                        </div>


                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-4">Best Selling Software Services</h4>

                                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                            </div>
                                            <div class="carousel-inner">

                                                <div class="carousel-item active">
                                                    <div class="row align-items-center mb-5">
                                                        <div class="col-md-4">
                                                            <img src="{{ asset('assets/images/product/img-3.png') }}" class="img-fluid me-3" alt="Web Development Service">
                                                        </div>
                                                        <div class="col-md-7 offset-md-1">
                                                            <div class="mt-4 mt-sm-0">
                                                                <p class="text-muted mb-2">Web Development</p>
                                                                <h5 class="text-primary">Custom Web Application</h5>
                                                                <div class="row no-gutters mt-4">
                                                                    <div class="col-4">
                                                                        <div class="mt-1">
                                                                            <h4>1200</h4>
                                                                            <p class="text-muted mb-1">Projects Completed</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="mt-1">
                                                                            <h4>450</h4>
                                                                            <p class="text-muted mb-1">Ongoing Projects</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="mt-4 pt-1">
                                                                            <a href="" class="btn btn-primary btn-sm">Learn More</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="carousel-item">
                                                    <div class="row align-items-center mb-5">
                                                        <div class="col-md-4">
                                                            <img src="{{ asset('assets/images/product/img-5.png') }}" class="img-fluid me-3" alt="Mobile App Development Service">
                                                        </div>
                                                        <div class="col-md-7 offset-md-1">
                                                            <div class="mt-4 mt-sm-0">
                                                                <p class="text-muted mb-2">Mobile App Development</p>
                                                                <h5 class="text-primary">E-commerce Mobile App</h5>
                                                                <div class="row no-gutters mt-4">
                                                                    <div class="col-4">
                                                                        <div class="mt-1">
                                                                            <h4>800</h4>
                                                                            <p class="text-muted mb-1">Apps Developed</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="mt-1">
                                                                            <h4>250</h4>
                                                                            <p class="text-muted mb-1">Active Clients</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="mt-4 pt-1">
                                                                            <a href="" class="btn btn-primary btn-sm">View Project</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="carousel-item">
                                                    <div class="row align-items-center mb-5">
                                                        <div class="col-md-4">
                                                            <img src="{{ asset('assets/images/product/img-1.png') }}" class="img-fluid me-3" alt="Software Consulting Service">
                                                        </div>
                                                        <div class="col-md-7 offset-md-1">
                                                            <div class="mt-4 mt-sm-0">
                                                                <p class="text-muted mb-2">Consulting</p>
                                                                <h5 class="text-primary">IT Consulting</h5>
                                                                <div class="row no-gutters mt-4">
                                                                    <div class="col-4">
                                                                        <div class="mt-1">
                                                                            <h4>600</h4>
                                                                            <p class="text-muted mb-1">Consulting Hours</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="mt-1">
                                                                            <h4>150</h4>
                                                                            <p class="text-muted mb-1">Clients Served</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="mt-4 pt-1">
                                                                            <a href="" class="btn btn-primary btn-sm">Request a Consultation</a>
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


                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-4">Sales Progress by Region</h4>

                                        <div id="world-map-markers" style="height: 230px"></div>

                                        <div class="px-4 py-3 mt-4">
                                            <p class="mb-1">North America <span class="float-right">75%</span></p>
                                            <div class="progress mt-2" style="height: 6px;">
                                                <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>

                                            <p class="mt-3 mb-1">Europe <span class="float-right">55%</span></p>
                                            <div class="progress mt-2" style="height: 6px;">
                                                <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>

                                            <p class="mt-3 mb-1">Asia Pacific <span class="float-right">85%</span></p>
                                            <div class="progress mt-2" style="height: 6px;">
                                                <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                            </div>





                        </div>

                        <div class="row">

                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-4">Ad Campaigns by Social Source</h4>

                                        <ul class="inbox-wid list-unstyled mb-0">
                                            <li class="inbox-list-item">
                                                <a href="#">
                                                    <div class="media">
                                                        <div class="me-3 align-self-center">
                                                            <div class="avatar-sm rounded bg-primary align-self-center">
                                                                <span class="avatar-title">
                                                                    <i class="ti-facebook text-white font-size-18"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="media-body overflow-hidden mt-1">
                                                            <h5 class="font-size-15 mb-1">Facebook Campaign</h5>
                                                            <p class="text-muted mb-0">3.2k Clicks - 4.2k Impressions</p>
                                                        </div>
                                                        <p class="ms-2 pt-3">
                                                            <i class="mdi mdi-arrow-top-right text-success me-1"></i>50%
                                                        </p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="inbox-list-item">
                                                <a href="#">
                                                    <div class="media">
                                                        <div class="me-3 align-self-center">
                                                            <div class="avatar-sm rounded bg-info align-self-center">
                                                                <span class="avatar-title">
                                                                    <i class="ti-twitter-alt text-white font-size-18"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="media-body overflow-hidden mt-1">
                                                            <h5 class="font-size-15 mb-1">Twitter Campaign</h5>
                                                            <p class="text-muted mb-0">3.1k Clicks - 3.7k Impressions</p>
                                                        </div>
                                                        <p class="ms-2 pt-3">
                                                            <i class="mdi mdi-arrow-top-right text-success me-1"></i>45%
                                                        </p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="inbox-list-item">
                                                <a href="#">
                                                    <div class="media">
                                                        <div class="me-3 align-self-center">
                                                            <div class="avatar-sm rounded bg-danger align-self-center">
                                                                <span class="avatar-title">
                                                                    <i class="ti-linkedin text-white font-size-18"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="media-body overflow-hidden mt-1">
                                                            <h5 class="font-size-15 mb-1">LinkedIn Campaign</h5>
                                                            <p class="text-muted mb-0">4.3k Clicks - 4.3k Impressions</p>
                                                        </div>
                                                        <p class="ms-2 pt-3">
                                                            <i class="mdi mdi-arrow-bottom-right text-danger me-1"></i>30%
                                                        </p>
                                                    </div>
                                                </a>
                                            </li>

                                            <li class="inbox-list-item">
                                                <a href="#">
                                                    <div class="media">
                                                        <div class="me-3 align-self-center">
                                                            <div class="avatar-sm rounded bg-danger align-self-center">
                                                                <span class="avatar-title">
                                                                    <i class="ti-youtube text-white font-size-18"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="media-body overflow-hidden mt-1">
                                                            <h5 class="font-size-15 mb-1">YouTube Campaign</h5>
                                                            <p class="text-muted mb-0">4.2k Clicks - 3.7k Impressions</p>
                                                        </div>
                                                        <p class="ms-2 pt-3">
                                                            <i class="mdi mdi-arrow-top-right text-success me-1"></i>35%
                                                        </p>
                                                    </div>
                                                </a>
                                            </li>

                                            <li class="inbox-list-item">
                                                <a href="#" class="pb-0">
                                                    <div class="media">
                                                        <div class="me-3 align-self-center">
                                                            <div class="avatar-sm rounded bg-dark align-self-center">
                                                                <span class="avatar-title">
                                                                    <i class="ti-github text-white font-size-18"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="media-body overflow-hidden mt-1">
                                                            <h5 class="font-size-15 mb-1">GitHub Campaign</h5>
                                                            <p class="text-muted mb-2">4.9k Clicks - 4.1k Impressions</p>
                                                        </div>
                                                        <p class="ms-2 pt-3">
                                                            <i class="mdi mdi-arrow-top-right text-success me-1"></i>40%
                                                        </p>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>

                            </div>

                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-4">Top Projects of the Month</h4>
                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap mb-0">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Project</th>
                                                        <th>Client</th>
                                                        <th>Revenue</th>
                                                        <th>Invoice</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>#2356</td>
                                                        <td><img src="{{ asset('assets/images/product/img-7.png') }}" width="42" class="me-3" alt="">Project Management Tool</td>
                                                        <td>Kenneth Gittens</td>
                                                        <td>$200.00</td>
                                                        <td>42</td>
                                                        <td><span class="badge badge-pill badge-soft-primary font-size-13">Pending</span></td>
                                                    </tr>

                                                    <tr>
                                                        <td>#2564</td>
                                                        <td><img src="{{ asset('assets/images/product/img-8.png') }}" width="42" class="me-3" alt="">Custom ERP Development</td>
                                                        <td>Alfred Gordon</td>
                                                        <td>$242.00</td>
                                                        <td>54</td>
                                                        <td><span class="badge badge-pill badge-soft-success font-size-13">Active</span></td>
                                                    </tr>

                                                    <tr>
                                                        <td>#2125</td>
                                                        <td><img src="{{ asset('assets/images/product/img-10.png') }}" width="42" class="me-3" alt="">Mobile App Development</td>
                                                        <td>Keena Reyes</td>
                                                        <td>$320.00</td>
                                                        <td>65</td>
                                                        <td><span class="badge badge-pill badge-soft-success font-size-13">Active</span></td>
                                                    </tr>

                                                    <tr>
                                                        <td>#8587</td>
                                                        <td><img src="{{ asset('assets/images/product/img-11.png') }}" width="42" class="me-3" alt="">Web App for Business</td>
                                                        <td>Timothy Zuniga</td>
                                                        <td>$342.00</td>
                                                        <td>52</td>
                                                        <td><span class="badge badge-pill badge-soft-primary font-size-13">Pending</span></td>
                                                    </tr>

                                                    <tr>
                                                        <td>#2354</td>
                                                        <td><img src="{{ asset('assets/images/product/img-12.png') }}" width="42" class="me-3" alt="">Cloud-based Solution</td>
                                                        <td>Joann Wiliams</td>
                                                        <td>$320.00</td>
                                                        <td>25</td>
                                                        <td><span class="badge badge-pill badge-soft-primary font-size-13">Pending</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- end table-responsive -->
                                    </div>

                                </div>
                            </div>


                        </div>


                    </div>


                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            @include('partials.footer')
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    @include('partials.right-sidebar')

    @include('partials.vendor-scripts')

    <!-- apexcharts -->
    <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Plugins js-->
    <script src="{{ asset('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js') }}"></script>

    <script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script>

    <script src="{{ asset('assets/js/app.js') }}"></script>

</body>

</html>