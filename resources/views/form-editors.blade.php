<!doctype html>
<html lang="en">

    <head>
        
        @@include("partials/title-meta.html", {"title": "Form Editors"})

            <!-- Summernote css -->
            <!-- <link href="assets/libs/summernote/summernote-bs4.min.css" rel="stylesheet" type="text/css" /> -->

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

                    @@include("partials/page-title.html", {"pagetitle": "Morvin", "subtitle":"Forms" ,"title": "Form Editors"})


                    <div class="container-fluid">

                        <div class="page-content-wrapper">

                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
    
                                            <h4 class="header-title">Tinymce wysihtml5</h4>
                                            <p class="card-title-desc">Bootstrap-wysihtml5 is a javascript
                                                plugin that makes it easy to create simple, beautiful wysiwyg editors
                                                with the help of wysihtml5 and Twitter Bootstrap.</p>
    
                                            <form method="post">
                                                <textarea id="elm1" name="area"></textarea>
                                            </form>
    
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

                <!--tinymce js-->
        <script src="assets/libs/tinymce/tinymce.min.js"></script>

        <!-- Summernote js -->
        <!-- <script src="assets/libs/summernote/summernote-bs4.min.js"></script> -->

        <!-- init js -->
        <script src="assets/js/pages/form-editor.init.js"></script>


        <script src="assets/js/app.js"></script>

    </body>
</html>
