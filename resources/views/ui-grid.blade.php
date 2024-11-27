<!doctype html>
<html lang="en">

    <head>
        
        @@include("partials/title-meta.html", {"title": "Grid"})

        @@include("partials/head-css.html")

    </head>

    
    <body>

        <!-- Begin page -->
        <div id="layout-wrapper">

            @@include("partials/topbar.html")

            @@include("partials/sidebar.html")

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">

                    @@include("partials/page-title.html", {"pagetitle": "Morvin", "subtitle":"UI Elements" ,"title": "Grid"})


                    <div class="container-fluid">

                        <div class="page-content-wrapper">

                        


                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
            
                                            <h4 class="header-title">Grid Options</h4>
                                            <p class="card-title-desc">See how aspects of the Bootstrap grid
                                                system work across multiple devices with a handy table.</p>
            
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-striped table-nowrap mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col"></th>
                                                            <th scope="col" class="text-center">
                                                              xs<br>
                                                              <span class="fw-normal">&lt;576px</span>
                                                            </th>
                                                            <th scope="col" class="text-center">
                                                              sm<br>
                                                              <span class="fw-normal">≥576px</span>
                                                            </th>
                                                            <th scope="col" class="text-center">
                                                              md<br>
                                                              <span class="fw-normal">≥768px</span>
                                                            </th>
                                                            <th scope="col" class="text-center">
                                                              lg<br>
                                                              <span class="fw-normal">≥992px</span>
                                                            </th>
                                                            <th scope="col" class="text-center">
                                                              xl<br>
                                                              <span class="fw-normal">≥1200px</span>
                                                            </th>
                                                            <th scope="col" class="text-center">
                                                              xxl<br>
                                                              <span class="fw-normal">≥1400px</span>
                                                            </th>
                                                          </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th class="text-nowrap" scope="row">Grid behavior</th>
                                                        <td>Horizontal at all times</td>
                                                        <td colspan="5">Collapsed to start, horizontal above breakpoints</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-nowrap" scope="row">Max container width</th>
                                                        <td>None (auto)</td>
                                                        <td>540px</td>
                                                        <td>720px</td>
                                                        <td>960px</td>
                                                        <td>1140px</td>
                                                        <td>1320px</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-nowrap" scope="row">Class prefix</th>
                                                        <td><code>.col-</code></td>
                                                        <td><code>.col-sm-</code></td>
                                                        <td><code>.col-md-</code></td>
                                                        <td><code>.col-lg-</code></td>
                                                        <td><code>.col-xl-</code></td>
                                                        <td><code>.col-xxl-</code></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-nowrap" scope="row"># of columns</th>
                                                        <td colspan="6">12</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-nowrap" scope="row">Gutter width</th>
                                                        <td colspan="6">24px (12px on each side of a column)</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-nowrap" scope="row">Custom gutters</th>
                                                        <td colspan="6">Yes</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-nowrap" scope="row">Nestable</th>
                                                        <td colspan="6">Yes</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-nowrap" scope="row">Offsets</th>
                                                        <td colspan="6">Yes</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-nowrap" scope="row">Column ordering</th>
                                                        <td colspan="6">Yes</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
            
                            </div> <!-- end row -->

                        </div>
        
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

              
                
                @@include("partials/footer.html")
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        @@include("partials/right-sidebar.html")

        @@include("partials/vendor-scripts.html")

        <script src="assets/js/app.js"></script>

    </body>
</html>