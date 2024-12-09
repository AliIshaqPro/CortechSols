<!doctype html>
<html lang="en">

    <head>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet">

        @include('partials.title-meta', ['title' => 'Apex Charts'])

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

                    @include('partials.page-title', ['pagetitle' => 'Morvin', 'subtitle' => 'Charts', 'title' => 'Apex Charts'])



                    <div class="container-fluid">

                        <div class="page-content-wrapper">

                        


                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title mb-4">Line with Data Labels</h4>
    
                                            <div id="line_chart_datalabel" class="apex-charts" dir="ltr"></div>                              
                                        </div>
                                    </div><!--end card-->
                                </div>
    
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title mb-4">Dashed Line</h4>
                                            
                                            <div id="line_chart_dashed" class="apex-charts" dir="ltr"></div>        
                                        </div>
                                    </div><!--end card-->
                                </div>
                            </div>
                            <!-- end row -->
    
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title mb-4">Spline Area</h4>
    
                                            <div id="spline_area" class="apex-charts" dir="ltr"></div>                      
                                        </div>
                                    </div><!--end card-->
                                </div>
    
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title mb-4">Column Charts</h4>
                                            
                                            <div id="column_chart" class="apex-charts" dir="ltr"></div>                                      
                                        </div>
                                    </div><!--end card-->
                                </div>
                            </div>
                            <!-- end row -->
    
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title mb-4">Column with Data Labels</h4>
                                            
                                            <div id="column_chart_datalabel" class="apex-charts" dir="ltr"></div>
                                        </div>
                                    </div><!--end card-->
                                </div>
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title mb-4">Bar Chart</h4>
                                            
                                            <div id="bar_chart" class="apex-charts" dir="ltr"></div>
                                        </div>
                                    </div><!--end card-->
                                </div>
                            </div>  
                            <!-- end row -->
    
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title mb-4">Line, Column & Area Chart</h4>
                                            
                                            <div id="mixed_chart" class="apex-charts" dir="ltr"></div> 
                                        </div>
                                    </div><!--end card-->
                                </div>
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title mb-4">Radial Chart</h4>
                                            
                                            <div id="radial_chart" class="apex-charts" dir="ltr"></div>  
                                        </div>
                                    </div><!--end card-->
                                    
                                </div>
                            </div>
                            <!-- end row -->
    
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title mb-4">Pie Chart</h4>
                                            
                                            <div id="pie_chart" class="apex-charts" dir="ltr"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title mb-4">Donut Chart</h4>
                                            
                                            <div id="donut_chart" class="apex-charts"  dir="ltr"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
    

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

        <!-- Plugin Js-->
        <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
        <!-- demo js-->
        <script src="{{ asset('assets/js/pages/apexcharts.init.js') }}"></script>

        <script src="{{ asset('assets/js/app.js') }}"></script>

    </body>
</html>
