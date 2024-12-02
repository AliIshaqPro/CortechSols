<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">


        <div class="user-sidebar text-center">
            <div class="dropdown">
                <div class="user-img">
                    <img src="assets/images/users/avatar-7.jpg" alt="" class="rounded-circle">
                    <span class="avatar-online bg-success"></span>
                </div>
                <div class="user-info">
                    <h5 class="mt-3 font-size-16 text-white">M Shahzaib</h5>
                    <span class="font-size-13 text-white-50">Administrator</span>
                </div>
            </div>
        </div>



        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="dripicons-home"></i><span class="badge rounded-pill bg-info float-end">3</span>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('calendar') }}" class="waves-effect">
                        <i class="dripicons-calendar"></i>
                        <span>Calendar</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('chat') }}" class="waves-effect">
                        <i class="dripicons-message"></i>
                        <span>Active Projects</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="dripicons-cart"></i>
                        <span>Task Tracker</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('ecommerce.products') }}">Products</a></li>
                        <li><a href="{{ route('ecommerce.product-detail') }}">Product Detail</a></li>
                        <li><a href="{{ route('ecommerce.orders') }}">Orders</a></li>
                        <li><a href="{{ route('ecommerce.customers') }}">Customers</a></li>
                        <li><a href="{{ route('ecommerce.cart') }}">Cart</a></li>
                        <li><a href="{{ route('ecommerce.checkout') }}">Checkout</a></li>
                        <li><a href="{{ route('ecommerce.shops') }}">Shops</a></li>
                        <li><a href="{{ route('ecommerce.add-product') }}">Add Product</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="dripicons-mail"></i>
                        <span>Team Availability</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('email.inbox') }}">Inbox</a></li>
                        <li><a href="{{ route('email.read') }}">Email Read</a></li>
                        <li><a href="{{ route('email.compose') }}">Email Compose</a></li>
                    </ul>
                </li>

                <li class="menu-title">Project Progress</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="dripicons-suitcase"></i>
                        <span>Client Updates</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('ui.alerts') }}">Alerts</a></li>
                        <li><a href="{{ route('ui.buttons') }}">Buttons</a></li>
                        <li><a href="{{ route('ui.cards') }}">Cards</a></li>
                        <li><a href="{{ route('ui.carousel') }}">Carousel</a></li>
                        <li><a href="{{ route('ui.dropdowns') }}">Dropdowns</a></li>
                        <li><a href="{{ route('ui.grid') }}">Grid</a></li>
                        <li><a href="{{ route('ui.images') }}">Images</a></li>
                        <li><a href="{{ route('ui.lightbox') }}">Lightbox</a></li>
                        <li><a href="{{ route('ui.modals') }}">Modals</a></li>
                        <li><a href="{{ route('ui.rangeslider') }}">Range Slider</a></li>
                        <li><a href="{{ route('ui.session-timeout') }}">Session Timeout</a></li>
                        <li><a href="{{ route('ui.progressbars') }}">Progress Bars</a></li>
                        <li><a href="{{ route('ui.sweet-alert') }}">Sweet-Alert</a></li>
                        <li><a href="{{ route('ui.tabs-accordions') }}">Accordions</a></li>
                        <li><a href="{{ route('ui.typography') }}">Typography</a></li>
                        <li><a href="{{ route('ui.video') }}">Video</a></li>
                        <li><a href="{{ route('ui.general') }}">General</a></li>
                        <li><a href="{{ route('ui.colors') }}">Colors</a></li>
                        <li><a href="{{ route('ui.rating') }}">Rating</a></li>
                    </ul>
                </li>






                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="dripicons-to-do"></i>
                        <span class="badge rounded-pill bg-danger float-end">6</span>
                        <span>Bug Tracker</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('forms.elements') }}">Form Elements</a></li>
                        <li><a href="{{ route('forms.validation') }}">Form Validation</a></li>
                        <li><a href="{{ route('forms.advanced') }}">Form Advanced</a></li>
                        <li><a href="{{ route('forms.editors') }}">Form Editors</a></li>
                        <li><a href="{{ route('forms.uploads') }}">Form Upload</a></li>
                        <li><a href="{{ route('forms.wizard') }}">Form Wizard</a></li>
                        <li><a href="{{ route('forms.mask') }}">Form Mask</a></li>
                    </ul>

                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="dripicons-graph-pie"></i>
                        <span>Time Logs</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('charts.apex') }}">Apex charts</a></li>
                        <li><a href="{{ route('charts.chartist') }}">Chartist</a></li>
                        <li><a href="{{ route('charts.chartjs') }}">Chartjs Chart</a></li>
                        <li><a href="{{ route('charts.flot') }}">Flot Chart</a></li>
                        <li><a href="{{ route('charts.knob') }}">Knob Chart</a></li>
                        <li><a href="{{ route('charts.sparkline') }}">Sparkline Chart</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="dripicons-toggles"></i>
                        <span>Employee Performance</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('tables.basic') }}">Basic Tables</a></li>
                        <li><a href="{{ route('tables.datatable') }}">Data Tables</a></li>
                        <li><a href="{{ route('tables.responsive') }}">Responsive Table</a></li>
                        <li><a href="{{ route('tables.editable') }}">Editable Table</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="dripicons-basket"></i>
                        <span>Deadlines</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('icons.materialdesign') }}">Material Design</a></li>
                        <li><a href="{{ route('icons.dripicons') }}">Dripicons</a></li>
                        <li><a href="{{ route('icons.fontawesome') }}">Font awesome</a></li>
                        <li><a href="{{ route('icons.themify') }}">Themify Icons</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="dripicons-map"></i>
                        <span>Code Access</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="maps-google.html">Google Maps</a></li>
                        <li><a href="maps-vector.html">Vector Maps</a></li>
                    </ul>


                </li>

                <li class="menu-title">Budget Overview</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="dripicons-device-desktop"></i>
                        <span>Layouts</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Vertical</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="{{ route('layouts.dark-sidebar') }}">Dark Sidebar</a></li>
                                <li><a href="{{ route('layouts.compact-sidebar') }}">Compact Sidebar</a></li>
                                <li><a href="layouts-icon-sidebar.html">Icon Sidebar</a></li>   
                                <li><a href="{{ route('layouts.boxed') }}">Boxed Layout</a></li>
                                <li><a href="layouts-preloader.html">Preloader</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Horizontal</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="{{ route('layouts.horizontal') }}">Horizontal</a></li>
                                <li><a href="{{ route('layouts.hori-topbar-light') }}">Topbar light</a></li>
                                <li><a href="{{ route('layouts.hori-boxed-width') }}">Boxed width</a></li>
                                <li><a href="{{ route('layouts.hori-preloader') }}">Preloader</a></li>
                                <li><a href="{{ route('layouts.hori-colored-header') }}">Colored Header</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>




                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="dripicons-user-group"></i>
                        <span>Invoices</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('auth.login') }}">Login</a></li>
                        <li><a href="{{ route('auth.register') }}">Register</a></li>
                        <li><a href="{{ route('auth.recoverpw') }}">Re-Password</a></li>
                        <li><a href="{{ route('auth.lock-screen')
 }}">Lock Screen</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="dripicons-copy"></i>
                        <span>Team Chat</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('pages.timeline') }}">Timeline</a></li>
                        <li><a href="{{ route('pages.invoice') }}">Invoice</a></li>
                        <li><a href="{{ route('pages.blank') }}">Blank Page</a></li>
                        <li><a href="/404">Error 404</a></li>
                        <li><a href="/500">Error 500</a></li>
                        <li><a href="{{ route('pages.pricing') }}">Pricing</a></li>
                        <li><a href="{{ route('pages.maintenance') }}">Maintenance</a></li>
                        <li><a href="/coming-soon">Coming Soon</a></li>
                        <li><a href="{{ route('pages.faq') }}">FAQs</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="dripicons-checklist"></i>
                        <span>Resource Allocation</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="javascript: void(0);">Level 1.1</a></li>
                        <li><a href="javascript: void(0);" class="has-arrow">Level 1.2</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);">Level 2.1</a></li>
                                <li><a href="javascript: void(0);">Level 2.2</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>


            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->