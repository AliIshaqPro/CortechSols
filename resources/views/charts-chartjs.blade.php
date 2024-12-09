<!doctype html>
<html lang="en">

    <head>
        
        @include('partials.title-meta', ['title' => 'Chartjs Charts'])

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

                    @include('partials.page-title', ['pagetitle' => 'Morvin', 'subtitle' => 'Charts', 'title' => 'Chartjs Charts'])


                    <div class="container-fluid">

                        <div class="page-content-wrapper">

                        


                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card">
                                        <div class="card-body">
                            
                                            <h4 class="header-title">Bar Chart</h4>
                                            <p class="card-title-desc">Example of bar chart chart js.</p>
        
                                            <canvas id="barChart"></canvas>
                            
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                </div> <!-- end col -->
                                <div class="col-xl-6">
                                    <div class="card">
                                        <div class="card-body">
                            
                                            <h4 class="header-title">Line Chart</h4>
                                            <p class="card-title-desc">Example of line chart chart js.</p>
        
                                            <canvas id="lineChart"></canvas>
                            
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                </div> <!-- end col -->
                            </div>
                            <!-- end row-->
        
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card">
                                        <div class="card-body">
                            
                                            <h4 class="header-title">Pie chart</h4>
                                            <p class="card-title-desc">Example of line pie chart js.</p>
                                            <div style="height: 300px; ">
                                                <canvas id="pie" class="mx-auto"> </canvas>            
                                            </div> 
                            
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                </div> <!-- end col -->
                                <div class="col-xl-6">
                                    <div class="card">
                                        <div class="card-body">
                            
                                            <h4 class="header-title">Donut chart</h4>
                                            <p class="card-title-desc">Example of donut chart js.</p>
                                            <div style="height: 300px; ">
                                                <canvas id="doughnut" class="mx-auto"> </canvas>            
                                            </div> 
                            
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                </div> <!-- end col -->
                            </div>
                            <!-- end row-->
    
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card">
                                        <div class="card-body">
                            
                                            <h4 class="header-title">Radar chart</h4>
                                            <p class="card-title-desc">Example of radar chart js.</p>
                                            <div style="height: 300px; ">
                                                <canvas id="radar" class="mx-auto"> </canvas>            
                                            </div> 
                            
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                </div> <!-- end col -->
                            </div>
                            <!-- end row-->

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

        <!-- Chart JS -->
        <script src="{{ asset('assets/libs/chart.js/chart.umd.js') }}"></script>
        <script src="{{ asset('assets/js/pages/chartjs.init.js') }}"></script> 

        <script src="{{ asset('assets/js/app.js') }}"></script>

    </body>
</html>
