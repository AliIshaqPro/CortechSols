<!doctype html>
<html lang="en">

    <head>
        
        @@include("partials/title-meta.html", {"title": "Form Wizard"})

        <!-- twitter-bootstrap-wizard css -->
        <link rel="stylesheet" href="assets/libs/twitter-bootstrap-wizard/prettify.css">


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

                    @@include("partials/page-title.html", {"pagetitle": "Morvin", "subtitle":"Forms" ,"title": "Form Wizard"})


                    <div class="container-fluid">

                        <div class="page-content-wrapper">

                        


                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title mb-4">Basic Pills Wizard</h4>
    
                                            <div id="basic-pills-wizard" class="twitter-bs-wizard">
                                                <ul class="twitter-bs-wizard-nav">
                                                    <li class="nav-item wizard-border">
                                                        <a href="#seller-details" class="nav-link" data-bs-toggle="tab">
                                                            <span class="step-number">01. Seller Details</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item wizard-border">
                                                        <a href="#company-document" class="nav-link" data-bs-toggle="tab">
                                                            <span class="step-number">02. Company Doct</span>
                                                        </a>
                                                    </li>
                                                    
                                                    <li class="nav-item wizard-border">
                                                        <a href="#bank-detail" class="nav-link" data-bs-toggle="tab">
                                                            <span class="step-number">03. Bank Details</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#confirm-detail" class="nav-link" data-bs-toggle="tab">
                                                            <span class="step-number">04. Confirm Detail</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content twitter-bs-wizard-tab-content">
                                                    <div class="tab-pane" id="seller-details">
                                                        <form>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="basicpill-firstname-input">First name</label>
                                                                        <input type="text" class="form-control" id="basicpill-firstname-input" placeholder="Enter First Name">
                                                                    </div>
                                                                </div><!-- end col -->
                                                                <div class="col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="basicpill-lastname-input">Last name</label>
                                                                        <input type="text" class="form-control" id="basicpill-lastname-input" placeholder="Enter Last Name">
                                                                    </div>
                                                                </div><!-- end col -->
                                                            </div><!-- end row -->
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="basicpill-phoneno-input">Phone</label>
                                                                        <input type="text" class="form-control" id="basicpill-phoneno-input" placeholder="Enter Phone Number">
                                                                    </div>
                                                                </div><!-- end col -->
                                                                <div class="col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="basicpill-email-input">Email</label>
                                                                        <input type="email" class="form-control" id="basicpill-email-input" placeholder="Enter E-mail">
                                                                    </div>
                                                                </div><!-- end col -->
                                                            </div><!-- end row -->
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="basicpill-address-input">Address</label>
                                                                        <textarea id="basicpill-address-input" class="form-control" rows="2" placeholder="Enter Address"></textarea>
                                                                    </div>
                                                                </div><!-- end col -->
                                                            </div><!-- end row -->
                                                        </form><!-- end form -->

                                                        <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                            <li class="next"><a href="#">Company Doct <i class="mdi mdi-arrow-right ms-1"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- end tab -->
                                                    <div class="tab-pane" id="company-document">
                                                      <div>
                                                        <form>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="basicpill-pancard-input">PAN Card</label>
                                                                        <input type="text" class="form-control" id="basicpill-pancard-input" placeholder="Enter Pan Card">
                                                                    </div>
                                                                </div>
                                                                <!-- end col -->
                                                                <div class="col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="basicpill-vatno-input">VAT/TIN No.</label>
                                                                        <input type="text" class="form-control" id="basicpill-vatno-input" placeholder="Enter VAT/TIN No.">
                                                                    </div>
                                                                </div>
                                                                <!-- end col -->
                                                            </div><!-- end row -->
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="basicpill-cstno-input">CST No.</label>
                                                                        <input type="text" class="form-control" id="basicpill-cstno-input" placeholder="Enter CST No.">
                                                                    </div>
                                                                </div><!-- end col -->
                                                                <div class="col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="basicpill-servicetax-input">Service Tax No.</label>
                                                                        <input type="text" class="form-control" id="basicpill-servicetax-input" placeholder="Enter Service Tax No.">
                                                                    </div>
                                                                </div><!-- end col -->
                                                            </div><!-- end row -->
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="basicpill-companyuin-input">Company UIN</label>
                                                                        <input type="text" class="form-control" id="basicpill-companyuin-input" placeholder="Enter Company UIN">
                                                                    </div>
                                                                </div>
                                                                <!-- end col -->
                                                                <div class="col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="basicpill-declaration-input">Declaration</label>
                                                                        <input type="text" class="form-control" id="basicpill-declaration-input" placeholder="Enter Declaration">
                                                                    </div>
                                                                </div>
                                                                <!-- end col -->
                                                            </div><!-- end row -->
                                                        </form><!-- end form -->

                                                        <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                            <li class="previous"><a href="#"><i class="mdi mdi-arrow-left me-1"></i> Seller Details</a></li>
                                                            <li class="next"><a href="#">Bank Details <i class="mdi mdi-arrow-right ms-1"></i></a></li>
                                                        </ul>
                                                      </div>
                                                    </div>
                                                    <!-- end tabpane -->
                                                    <div class="tab-pane" id="bank-detail">
                                                        <div>
                                                          <form>
                                                              <div class="row">
                                                                  <div class="col-lg-6">
                                                                      <div class="mb-3">
                                                                          <label class="form-label" for="basicpill-namecard-input">Name on Card</label>
                                                                          <input type="text" class="form-control" id="basicpill-namecard-input" placeholder="Enter Name On Card">
                                                                      </div>
                                                                  </div><!-- end col -->
                                                                  <div class="col-lg-6">
                                                                      <div class="mb-3">
                                                                          <label>Credit Card Type</label>
                                                                          <select class="form-select">
                                                                                <option selected>Select Card Type</option>
                                                                                <option value="AE">American Express</option>
                                                                                <option value="VI">Visa</option>
                                                                                <option value="MC">MasterCard</option>
                                                                                <option value="DI">Discover</option>
                                                                          </select>
                                                                      </div>
                                                                  </div><!-- end col -->
                                                              </div><!-- end row -->
                                                              <div class="row">
                                                                  <div class="col-lg-6">
                                                                      <div class="mb-3">
                                                                          <label class="form-label" for="basicpill-cardno-input">Credit Card Number</label>
                                                                          <input type="text" class="form-control" id="basicpill-cardno-input" placeholder="Enter Credit Card Number">
                                                                      </div>
                                                                  </div><!-- end col -->
                                                                  <div class="col-lg-6">
                                                                      <div class="mb-3">
                                                                          <label class="form-label" for="basicpill-card-verification-input">Card Verification Number</label>
                                                                          <input type="text" class="form-control" id="basicpill-card-verification-input" placeholder="Enter Card Verification Number">
                                                                      </div>
                                                                  </div><!-- end col -->
                                                              </div><!-- end row -->
                                                              <div class="row">
                                                                  <div class="col-lg-6">
                                                                      <div class="mb-3">
                                                                          <label class="form-label" for="basicpill-expiration-input">Expiration Date</label>
                                                                          <input type="text" class="form-control" id="basicpill-expiration-input" placeholder="Enter Expiration Date">
                                                                      </div>
                                                                  </div><!-- end col -->
                                                              </div><!-- end row -->
                                                          </form>

                                                          <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                            <li class="previous"><a href="#"><i class="mdi mdi-arrow-left me-1"></i> Company Doct</a></li>
                                                            <li class="next"><a href="#">Confirm Details <i class="mdi mdi-arrow-right ms-1"></i></a></li>
                                                        </ul>
                                                        </div>
                                                      </div>
                                                      <!-- end tabpane -->
                                                    <div class="tab-pane" id="confirm-detail">
                                                        <div class="row justify-content-center">
                                                            <div class="col-lg-6">
                                                                <div class="text-center">
                                                                    <div class="mb-4">
                                                                        <i class="mdi mdi-check-circle-outline text-success display-4"></i>
                                                                    </div>
                                                                    <div>
                                                                        <h5>Confirm Detail</h5>
                                                                        <p class="text-muted">If several languages coalesce, the grammar of the resulting</p>
                                                                    </div>
                                                                </div>
                                                            </div><!-- end col -->
                                                        </div>  
                                                        <!-- end row -->
                                                        <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                            <li class="previous"><a href="#"><i class="mdi mdi-arrow-left me-1"></i> Bank Details</a></li>
                                                            <li class="float-end"><a href="#">Confirm <i class="mdi mdi-arrow-right ms-1"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- end tabpane -->
                                                </div>
                                            </div>
                                        </div><!-- end cardbody -->
                                    </div><!-- end card -->
                                </div><!-- end col -->

                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title mb-4">Wizard with progressbar</h4>
    
                                            <div id="progrss-wizard" class="twitter-bs-wizard">
                                                <ul class="twitter-bs-wizard-nav nav-justified">
                                                    <li class="nav-item wizard-border">
                                                        <a href="#progress-seller-details" class="nav-link" data-bs-toggle="tab">
                                                            <span class="step-number">01. Seller Details</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item wizard-border">
                                                        <a href="#progress-company-document" class="nav-link" data-bs-toggle="tab">
                                                            <span class="step-number">02. Company Doct</span>
                                                        </a>
                                                    </li>
    
                                                    <li class="nav-item wizard-border">
                                                        <a href="#progress-bank-detail" class="nav-link" data-bs-toggle="tab">
                                                            <span class="step-number">03. Bank Details</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#progress-confirm-detail" class="nav-link" data-bs-toggle="tab">
                                                            <span class="step-number">04. Confirm Detail</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!-- end ul -->
                                                <div id="bar" class="progress mt-4">
                                                    <div class="progress-bar bg-success progress-bar-striped progress-bar-animated"></div>
                                                </div>
                                                <div class="tab-content twitter-bs-wizard-tab-content">
                                                    <div class="tab-pane" id="progress-seller-details">
                                                        <form>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="progress-basicpill-firstname-input">First name</label>
                                                                        <input type="text" class="form-control" id="progress-basicpill-firstname-input" placeholder="Enter First Name">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="progress-basicpill-lastname-input">Last name</label>
                                                                        <input type="text" class="form-control" id="progress-basicpill-lastname-input" placeholder="Enter Last Name">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end row -->
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="progress-basicpill-phoneno-input">Phone</label>
                                                                        <input type="text" class="form-control" id="progress-basicpill-phoneno-input" placeholder="Enter Phone Number">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="progress-basicpill-email-input">Email</label>
                                                                        <input type="email" class="form-control" id="progress-basicpill-email-input" placeholder="Enter Phone Number">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end row -->
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="progress-basicpill-address-input">Address</label>
                                                                        <textarea id="progress-basicpill-address-input" class="form-control" rows="2" placeholder="Enter Address"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end row -->
                                                        </form>
                                                        <!-- form -->
                                                        <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                            <li class="next"><a href="#">Company Doct <i class="mdi mdi-arrow-right ms-1"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- end tabpane -->
                                                    <div class="tab-pane" id="progress-company-document">
                                                      <div>
                                                        <form>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="progress-basicpill-pancard-input">PAN Card</label>
                                                                        <input type="text" class="form-control" id="progress-basicpill-pancard-input" placeholder="Enter PAN Card">
                                                                    </div>
                                                                </div>
    
                                                                <div class="col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="progress-basicpill-vatno-input">VAT/TIN No.</label>
                                                                        <input type="text" class="form-control" id="progress-basicpill-vatno-input" placeholder="Enter VAT/TIN No.">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="progress-basicpill-cstno-input">CST No.</label>
                                                                        <input type="text" class="form-control" id="progress-basicpill-cstno-input" placeholder="CST No.">
                                                                    </div>
                                                                </div>
                                                                <!-- end col -->
                                                                <div class="col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="progress-basicpill-servicetax-input">Service Tax No.</label>
                                                                        <input type="text" class="form-control" id="progress-basicpill-servicetax-input" placeholder="Service Tax No.">
                                                                    </div>
                                                                </div><!-- end col -->
                                                            </div><!-- end row -->
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="progress-basicpill-companyuin-input">Company UIN</label>
                                                                        <input type="text" class="form-control" id="progress-basicpill-companyuin-input" placeholder="Enter Company UIN">
                                                                    </div>
                                                                </div>
                                                                <!-- end col -->
                                                                <div class="col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="progress-basicpill-declaration-input">Declaration</label>
                                                                        <input type="text" class="form-control" id="progress-basicpill-declaration-input" placeholder="Declaration">
                                                                    </div>
                                                                </div><!-- end col -->
                                                            </div><!-- end row -->
                                                        </form><!-- end form -->

                                                        <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                            <li class="previous"><a href="#"><i class="mdi mdi-arrow-left me-1"></i> Seller Details</a></li>
                                                            <li class="next"><a href="#">Bank Details <i class="mdi mdi-arrow-right ms-1"></i></a></li>
                                                        </ul>
                                                      </div>
                                                    </div>
                                                    <!-- end tabpane -->
                                                    <div class="tab-pane" id="progress-bank-detail">
                                                        <div>
                                                          <form>
                                                              <div class="row">
                                                                  <div class="col-lg-6">
                                                                      <div class="mb-3">
                                                                          <label class="form-label" for="progress-basicpill-namecard-input">Name on Card</label>
                                                                          <input type="text" class="form-control" id="progress-basicpill-namecard-input">
                                                                      </div>
                                                                  </div>
                                                                  <!-- end col -->
                                                                  <div class="col-lg-6">
                                                                      <div class="mb-3">
                                                                          <label>Credit Card Type</label>
                                                                          <select class="form-select">
                                                                                <option selected>Select Card Type</option>
                                                                                <option value="AE">American Express</option>
                                                                                <option value="VI">Visa</option>
                                                                                <option value="MC">MasterCard</option>
                                                                                <option value="DI">Discover</option>
                                                                          </select>
                                                                      </div>
                                                                  </div>
                                                                  <!-- end col -->
                                                              </div>
                                                              <!-- end row -->
                                                              <div class="row">
                                                                  <div class="col-lg-6">
                                                                      <div class="mb-3">
                                                                          <label class="form-label" for="progress-basicpill-cardno-input">Credit Card Number</label>
                                                                          <input type="text" class="form-control" id="progress-basicpill-cardno-input" placeholder="Enter Credit Card Number">
                                                                      </div>
                                                                  </div><!-- end col -->
                                                                  <div class="col-lg-6">
                                                                      <div class="mb-3">
                                                                          <label class="form-label" for="progress-basicpill-card-verification-input">Card Verification Number</label>
                                                                          <input type="text" class="form-control" id="progress-basicpill-card-verification-input" placeholder="ENter Card Verification Number">
                                                                      </div>
                                                                  </div><!-- end col -->
                                                              </div><!-- end row -->
                                                              <div class="row">
                                                                  <div class="col-lg-6">
                                                                      <div class="mb-3">
                                                                          <label class="form-label" for="progress-basicpill-expiration-input">Expiration Date</label>
                                                                          <input type="text" class="form-control" id="progress-basicpill-expiration-input" placeholder="Expriration Date">
                                                                      </div>
                                                                  </div>
                                                                  <!-- end col -->
                                                              </div><!-- end row -->
                                                          </form><!-- end form -->

                                                          <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                            <li class="previous"><a href="#"><i class="mdi mdi-arrow-left me-1"></i> Company Doct</a></li>
                                                            <li class="next"><a href="#">Confirm Details <i class="mdi mdi-arrow-right ms-1"></i></a></li>
                                                        </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="progress-confirm-detail">
                                                        <div class="row justify-content-center">
                                                            <div class="col-lg-6">
                                                                <div class="text-center">
                                                                    <div class="mb-4">
                                                                        <i class="mdi mdi-check-circle-outline text-success display-4"></i>
                                                                    </div>
                                                                    <div>
                                                                        <h5>Confirm Detail</h5>
                                                                        <p class="text-muted">If several languages coalesce, the grammar of the resulting</p>
                                                                    </div>
                                                                </div>
                                                            </div><!-- end col -->
                                                        </div>
                                                        <!-- end row -->
                                                        <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                            <li class="previous"><a href="#"><i class="mdi mdi-arrow-left me-1"></i> Bank Details</a></li>
                                                            <li class="float-end"><a href="#">Confirm <i class="mdi mdi-arrow-right ms-1"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

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

       <!-- twitter-bootstrap-wizard js -->
       <script src="assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>

       <script src="assets/libs/twitter-bootstrap-wizard/prettify.js"></script>
       

       <!-- form wizard init -->
       <script src="assets/js/pages/form-wizard.init.js"></script>

        <script src="assets/js/app.js"></script>

    </body>
</html>