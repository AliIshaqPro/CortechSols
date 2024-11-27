<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{ url('/') }}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="20">
                    </span>
                </a>

                <a href="{{ url('/') }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="20">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 d-lg-none header-item waves-effect waves-light" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                <i class="mdi mdi-menu"></i>
            </button>

            <div class="topbar-social-icon me-3 d-none d-md-block">
                <ul class="list-inline title-tooltip m-0">
                    <li class="list-inline-item">
                        <a href="{{ route('email.inbox') }}" data-toggle="tooltip" data-placement="top" title="Email">
                            <i class="mdi mdi-email-outline"></i>
                        </a>
                    </li>

                    <li class="list-inline-item">
                        <a href="{{ route('chat.index') }}" data-toggle="tooltip" data-placement="top" title="Chat">
                            <i class="mdi mdi-tooltip-outline"></i>
                        </a>
                    </li>

                    <li class="list-inline-item">
                        <a href="{{ route('calendar.index') }}" data-toggle="tooltip" data-placement="top" title="Calendar">
                            <i class="mdi mdi-calendar"></i>
                        </a>
                    </li>

                    <li class="list-inline-item">
                        <a href="{{ route('pages.invoice') }}" data-toggle="tooltip" data-placement="top" title="Printer">
                            <i class="mdi mdi-printer"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>


        <!-- Search input -->
        <div class="search-wrap" id="search-wrap">
            <div class="search-bar">
                <input class="search-input form-control" placeholder="Search" />
                <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                    <i class="mdi mdi-close-circle"></i>
                </a>
            </div>
        </div>

        <div class="d-flex">

            <div class="dropdown d-none d-lg-inline-block">
                <button type="button" class="btn header-item toggle-search noti-icon waves-effect" data-target="#search-wrap">
                    <i class="mdi mdi-magnify"></i>
                </button>
            </div>

            <div class="dropdown d-none d-md-block ms-2">
                <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="me-2" src="{{ asset('assets/images/flags/us.jpg') }}" alt="Header Language" height="16"> English <span class="mdi mdi-chevron-down"></span>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <img src="{{ asset('assets/images/flags/germany.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle"> German </span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <img src="{{ asset('assets/images/flags/italy.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle"> Italian </span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <img src="{{ asset('assets/images/flags/french.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle"> French </span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <img src="{{ asset('assets/images/flags/spain.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle"> Spanish </span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <img src="{{ asset('assets/images/flags/russia.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle"> Russian </span>
                    </a>
                </div>
            </div>

            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="mdi mdi-fullscreen"></i>
                </button>
            </div>




            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-bell-outline bx-tada"></i>
                    <span class="badge bg-danger rounded-pill">3</span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0"> Notifications </h6>
                            </div>
                            <div class="col-auto">
                                <a href="{{ route('notifications.index') }}" class="small"> View All</a>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 230px;">
                        <a href="{{ route('order.details', ['order' => 1]) }}" class="text-reset notification-item">
                            <div class="media">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                        <i class="mdi mdi-cart text-white"></i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">Your order is placed</h6>
                                    <div class="font-size-13 text-muted">
                                        <p class="mb-1">If several languages coalesce the grammar</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('user.profile', ['user' => 3]) }}" class="text-reset notification-item">
                            <div class="media">
                                <img src="{{ asset('assets/images/users/avatar-3.jpg') }}"
                                    class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">James Lemire</h6>
                                    <div class="font-size-13 text-muted">
                                        <p class="mb-1">It will seem like simplified English.</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hour ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('shipment.details', ['shipment' => 2]) }}" class="text-reset notification-item">
                            <div class="media">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-success rounded-circle font-size-16">
                                        <i class="mdi mdi-check text-white"></i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">Your item is shipped</h6>
                                    <div class="font-size-13 text-muted">
                                        <p class="mb-1">If several languages coalesce the grammar</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="{{ route('user.profile', ['user' => 4]) }}" class="text-reset notification-item">
                            <div class="media">
                                <img src="{{ asset('assets/images/users/avatar-4.jpg') }}"
                                    class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">Salena Layfield</h6>
                                    <div class="font-size-13 text-muted">
                                        <p class="mb-1">As a skeptical Cambridge friend of mine occidental.</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hour ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="p-2 border-top">
                        <a class="btn btn-sm btn-link font-size-14 w-100 text-center" href="{{ route('notifications.index') }}">
                            <i class="mdi mdi-arrow-right-circle me-1"></i> View More..
                        </a>
                    </div>
                </div>
            </div>


            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="{{ asset('assets/images/users/avatar-7.jpg') }}"
                        alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1">{{ Auth::user()->name ?? 'Guest' }}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="{{ route('profile.show') }}">
                        <i class="mdi mdi-account-circle-outline font-size-16 align-middle me-1"></i> Profile
                    </a>
                    <a class="dropdown-item" href="{{ route('wallet.index') }}">
                        <i class="mdi mdi-wallet-outline font-size-16 align-middle me-1"></i> My Wallet
                    </a>
                    <a class="dropdown-item d-block" href="{{ route('settings.index') }}">
                        <span class="badge badge-success float-end">11</span>
                        <i class="mdi mdi-cog-outline font-size-16 align-middle me-1"></i> Settings
                    </a>
                    <a class="dropdown-item" href="{{ route('lockscreen') }}">
                        <i class="mdi mdi-lock-open-outline font-size-16 align-middle me-1"></i> Lock screen
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="mdi mdi-power font-size-16 align-middle me-1 text-danger"></i> Logout
                    </a>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                    <i class="mdi mdi-cog-outline font-size-20"></i>
                </button>
            </div>

            <!-- Add a logout form if not already present -->
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>


        </div>
    </div>
</header>

<div class="topnav">
    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">
                            <i class="dripicons-home me-2"></i> Dashboard
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-uielement" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="dripicons-suitcase me-2"></i> UI Elements <div class="arrow-down"></div>
                        </a>

                        <div class="dropdown-menu mega-dropdown-menu px-2 dropdown-mega-menu-xl" aria-labelledby="topnav-uielement">
                            <div class="row">
                                <div class="col-lg-4">
                                    <a href="{{ route('ui.alerts') }}" class="dropdown-item">Alerts</a>
                                    <a href="{{ route('ui.buttons') }}" class="dropdown-item">Buttons</a>
                                    <a href="{{ route('ui.cards') }}" class="dropdown-item">Cards</a>
                                    <a href="{{ route('ui.carousel') }}" class="dropdown-item">Carousel</a>
                                    <a href="{{ route('ui.dropdowns') }}" class="dropdown-item">Dropdowns</a>
                                    <a href="{{ route('ui.grid') }}" class="dropdown-item">Grid</a>
                                    <a href="{{ route('ui.images') }}" class="dropdown-item">Images</a>
                                </div>
                                <div class="col-lg-4">
                                    <a href="{{ route('ui.lightbox') }}" class="dropdown-item">Lightbox</a>
                                    <a href="{{ route('ui.modals') }}" class="dropdown-item">Modals</a>
                                    <a href="{{ route('ui.rangeslider') }}" class="dropdown-item">Range Slider</a>
                                    <a href="{{ route('ui.session-timeout') }}" class="dropdown-item">Session Timeout</a>
                                    <a href="{{ route('ui.progressbars') }}" class="dropdown-item">Progress Bars</a>
                                    <a href="{{ route('ui.sweet-alert') }}" class="dropdown-item">Sweet-Alert</a>
                                    <a href="{{ route('ui.tabs-accordions') }}" class="dropdown-item">Accordions</a>
                                </div>
                                <div class="col-lg-4">
                                    <a href="{{ route('ui.typography') }}" class="dropdown-item">Typography</a>
                                    <a href="{{ route('ui.video') }}" class="dropdown-item">Video</a>
                                    <a href="{{ route('ui.general') }}" class="dropdown-item">General</a>
                                    <a href="{{ route('ui.colors') }}" class="dropdown-item">Colors</a>
                                    <a href="{{ route('ui.rating') }}" class="dropdown-item">Rating</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-apps" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="dripicons-archive me-2"></i> Apps <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-apps">
                            <a href="{{ route('calendar.index') }}" class="dropdown-item">Calendar</a>
                            <a href="{{ route('chat.index') }}" class="dropdown-item">Chat</a>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-ecommerce" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Ecommerce <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-ecommerce">
                                    <a href="{{ route('ecommerce.products') }}" class="dropdown-item">Products</a>
                                    <a href="{{ route('ecommerce.product-detail') }}" class="dropdown-item">Product Detail</a>
                                    <a href="{{ route('ecommerce.orders') }}" class="dropdown-item">Orders</a>
                                    <a href="{{ route('ecommerce.customers') }}" class="dropdown-item">Customers</a>
                                    <a href="{{ route('ecommerce.cart') }}" class="dropdown-item">Cart</a>
                                    <a href="{{ route('ecommerce.checkout') }}" class="dropdown-item">Checkout</a>
                                    <a href="{{ route('ecommerce.shops') }}" class="dropdown-item">Shops</a>
                                    <a href="{{ route('ecommerce.add-product') }}" class="dropdown-item">Add Product</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-email" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Email <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-email">
                                    <a href="{{ route('email.inbox') }}" class="dropdown-item">Inbox</a>
                                    <a href="{{ route('email.read') }}" class="dropdown-item">Email Read</a>
                                    <a href="{{ route('email.compose') }}" class="dropdown-item">Email Compose</a>
                                </div>
                            </div>
                        </div>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-form" role="button">
                            <i class="dripicons-inbox me-2"></i> Components <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-form">
                            <!-- Forms Dropdown -->
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-form" role="button">
                                    Forms <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-form">
                                    <a href="{{ route('form-elements') }}" class="dropdown-item">Form Elements</a>
                                    <a href="{{ route('form-validation') }}" class="dropdown-item">Form Validation</a>
                                    <a href="{{ route('form-advanced') }}" class="dropdown-item">Form Advanced</a>
                                    <a href="{{ route('form-editors') }}" class="dropdown-item">Form Editors</a>
                                    <a href="{{ route('form-uploads') }}" class="dropdown-item">Form Upload</a>
                                    <a href="{{ route('form-xeditable') }}" class="dropdown-item">Form Xeditable</a>
                                    <a href="{{ route('form-wizard') }}" class="dropdown-item">Form Wizard</a>
                                    <a href="{{ route('form-mask') }}" class="dropdown-item">Form Mask</a>
                                </div>
                            </div>

                            <!-- Charts Dropdown -->
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-chart" role="button">
                                    Charts <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-chart">
                                    <a href="{{ route('charts-apex') }}" class="dropdown-item">Apex charts</a>
                                    <a href="{{ route('charts-chartist') }}" class="dropdown-item">Chartist</a>
                                    <a href="{{ route('charts-chartjs') }}" class="dropdown-item">Chartjs Chart</a>
                                    <a href="{{ route('charts-flot') }}" class="dropdown-item">Flot Chart</a>
                                    <a href="{{ route('charts-knob') }}" class="dropdown-item">Knob Chart</a>
                                    <a href="{{ route('charts-sparkline') }}" class="dropdown-item">Sparkline Chart</a>
                                </div>
                            </div>

                            <!-- Tables Dropdown -->
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-table" role="button">
                                    Tables <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-table">
                                    <a href="{{ route('tables-basic') }}" class="dropdown-item">Basic Tables</a>
                                    <a href="{{ route('tables-datatable') }}" class="dropdown-item">Data Tables</a>
                                    <a href="{{ route('tables-responsive') }}" class="dropdown-item">Responsive Table</a>
                                    <a href="{{ route('tables-editable') }}" class="dropdown-item">Editable Table</a>
                                </div>
                            </div>

                            <!-- Icons Dropdown -->
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-icons" role="button">
                                    Icons <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-icons">
                                    <a href="{{ route('icons-materialdesign') }}" class="dropdown-item">Material Design</a>
                                    <a href="{{ route('icons-dripicons') }}" class="dropdown-item">Dripicons</a>
                                    <a href="{{ route('icons-fontawesome') }}" class="dropdown-item">Font awesome</a>
                                    <a href="{{ route('icons-themify') }}" class="dropdown-item">Themify Icons</a>
                                </div>
                            </div>

                            <!-- Maps Dropdown -->
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-map" role="button">
                                    Maps <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-map">
                                    <a href="{{ route('maps-google') }}" class="dropdown-item">Google Maps</a>
                                    <a href="{{ route('maps-vector') }}" class="dropdown-item">Vector Maps</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-more" role="button">
                            <i class="dripicons-copy me-2"></i> Extra Pages <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-more">
                            <!-- Authentication Dropdown -->
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-auth" role="button">
                                    Authentication <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-auth">
                                    <a href="{{ route('auth-login') }}" class="dropdown-item">Login</a>
                                    <a href="{{ route('auth-register') }}" class="dropdown-item">Register</a>
                                    <a href="{{ route('auth-recoverpw') }}" class="dropdown-item">Re-Password</a>
                                    <a href="{{ route('auth-lock-screen') }}" class="dropdown-item">Lock Screen</a>
                                </div>
                            </div>

                            <!-- Pages Dropdown -->
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-utility" role="button">
                                    Pages <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-utility">
                                    <a href="{{ route('pages-timeline') }}" class="dropdown-item">Timeline</a>
                                    <a href="{{ route('pages-invoice') }}" class="dropdown-item">Invoice</a>
                                    <a href="{{ route('pages-blank') }}" class="dropdown-item">Blank Page</a>
                                    <a href="{{ route('pages-404') }}" class="dropdown-item">Error 404</a>
                                    <a href="{{ route('pages-500') }}" class="dropdown-item">Error 500</a>
                                    <a href="{{ route('pages-pricing') }}" class="dropdown-item">Pricing</a>
                                    <a href="{{ route('pages-maintenance') }}" class="dropdown-item">Maintenance</a>
                                    <a href="{{ route('pages-comingsoon') }}" class="dropdown-item">Coming Soon</a>
                                    <a href="{{ route('pages-faq') }}" class="dropdown-item">FAQs</a>
                                </div>
                            </div>
                        </div>
                    </li>




                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-layout" role="button">
                            <i class="dripicons-device-desktop me-2"></i> Layouts <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-layout">

                            <!-- Vertical Layouts Dropdown -->
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-verti" role="button">
                                    Vertical <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-verti">
                                    <a href="{{ route('layouts-dark-sidebar') }}" class="dropdown-item">Dark Sidebar</a>
                                    <a href="{{ route('layouts-compact-sidebar') }}" class="dropdown-item">Compact Sidebar</a>
                                    <a href="{{ route('layouts-icon-sidebar') }}" class="dropdown-item">Icon Sidebar</a>
                                    <a href="{{ route('layouts-boxed') }}" class="dropdown-item">Boxed Layout</a>
                                    <a href="{{ route('layouts-preloader') }}" class="dropdown-item">Preloader</a>
                                </div>
                            </div>

                            <!-- Horizontal Layouts Dropdown -->
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-hori" role="button">
                                    Horizontal <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-hori">
                                    <a href="{{ route('layouts-horizontal') }}" class="dropdown-item">Horizontal</a>
                                    <a href="{{ route('layouts-hori-topbar-light') }}" class="dropdown-item">Topbar light</a>
                                    <a href="{{ route('layouts-hori-boxed-width') }}" class="dropdown-item">Boxed width</a>
                                    <a href="{{ route('layouts-hori-preloader') }}" class="dropdown-item">Preloader</a>
                                    <a href="{{ route('layouts-hori-colored-header') }}" class="dropdown-item">Colored Header</a>
                                </div>
                            </div>
                        </div>
                    </li>


                </ul>
            </div>
        </nav>
    </div>
</div>