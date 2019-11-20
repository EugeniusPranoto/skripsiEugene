<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
		<meta name="author" content="Coderthemes">

		<link rel="shortcut icon" href="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/images/favicon_1.ico">

		<title>PGI | PT. POLARIS GRAHA INTERNUSA</title>
		
		<!--Form Wizard-->
        <link rel="stylesheet" type="text/css" href="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/jquery.steps/css/jquery.steps.css" />

		<link href="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/js/modernizr.min.js"></script>

	</head>

	<body class="fixed-left">

		<!-- Begin page -->
		<div id="wrapper">

            <!-- Top Bar Start -->
            
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <?php include('navbar.php'); ?>
            
			<!-- Left Sidebar End -->

			<!-- ============================================================== -->
			<!-- Start right Content here -->
			<!-- ============================================================== -->
			<div class="content-page">
				<!-- Start content -->
				<div class="content">
					<div class="container">

						<!-- Page-Title -->
						<div class="row">
							<div class="col-sm-12">
                                <div class="btn-group pull-right m-t-15">
                                    <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i class="fa fa-cog"></i></span></button>
                                    <ul class="dropdown-menu drop-menu-right" role="menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>

								<h4 class="page-title">Form Wizard</h4>
								<ol class="breadcrumb">
									<li>
										<a href="#">Ubold</a>
									</li>
									<li>
										<a href="#">Components</a>
									</li>
									<li class="active">
										Form Wizard
									</li>
								</ol>
							</div>
						</div>
                <!-- Wizard with Validation -->
                        
                        <div class="row">
							<div class="col-sm-12">
								<div class="card-box">
									<h4 class="m-t-0 header-title"><b>Wizard with Validation</b></h4>
									<p class="text-muted m-b-30 font-13">
										Use the button classes on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> element.
									</p>
									
									<form id="wizard-validation-form" action="#">
                                        <div>
                                            <h3>Land Expedition</h3>
                                            <section>
                                            <div class="form-group clearfix">
                                                    <label class="col-lg-2 control-label " for="userName2">Number of Cows Delivered*</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="userName2" name="userName" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group clearfix">
                                                    <label class="col-lg-2 control-label " for="userName2">Number of Trucks*</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="userName2" name="userName" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group clearfix">
                                                    <label class="col-lg-2 control-label " for="password2"> Total Amount of Trucks*</label>
                                                    <div class="col-lg-10">
                                                        <input id="password2" name="password" type="text" class="required form-control">

                                                    </div>
                                                </div>
                                                <div class="form-group clearfix">
                                                    <label class="col-lg-2 control-label " for="confirm2">Contact Person*</label>
                                                    <div class="col-lg-10">
                                                        <input id="confirm2" name="confirm" type="text" class="required form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group clearfix">
                                                    <label class="col-lg-2 control-label " for="confirm2">Contact Number*</label>
                                                    <div class="col-lg-10">
                                                        <input id="confirm2" name="confirm" type="text" class="required form-control">
                                                    </div>
                                                </div>
                                                
                                            </section>
                                            <h3>Shipment</h3>
                                            <section>

                                                <div class="form-group clearfix">
                                                    <label class="col-lg-2 control-label" for="name2"> Number of Ships Used*</label>
                                                    <div class="col-lg-10">
                                                        <input id="name2" name="name" type="text" class="required form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group clearfix">
                                                    <label class="col-lg-2 control-label " for="surname2"> Total Cost of Ship*</label>
                                                    <div class="col-lg-10">
                                                        <input id="surname2" name="surname" type="text" class="required form-control">

                                                    </div>
                                                </div>
                                                <div class="form-group clearfix">
                                                    <label class="col-lg-2 control-label " for="address2">Departure Date</label>
                                                    <div class="col-lg-10">
                                                        <input id="address2" name="address" type="text" class="form-control">
                                                </div>
                                                </div>
                                                <div class="form-group clearfix">
                                                    <label class="col-lg-2 control-label " for="address2">Departure Time</label>
                                                    <div class="col-lg-10">
                                                        <input id="address2" name="address" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group clearfix">
                                                    <label class="col-lg-2 control-label " for="address2">Arrival Date</label>
                                                    <div class="col-lg-10">
                                                        <input id="address2" name="address" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group clearfix">
                                                    <label class="col-lg-2 control-label " for="address2">Arrival Time</label>
                                                    <div class="col-lg-10">
                                                        <input id="address2" name="address" type="text" class="form-control">
                                                    </div>
                                                </div>

                                            </section>
                                            <h3>Hotel</h3>
                                            <section>
                                            <div class="form-group clearfix">
                                                    <label class="col-lg-2 control-label " for="address2">Number of Cows Stayed</label>
                                                    <div class="col-lg-10">
                                                        <input id="address2" name="address" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group clearfix">
                                                    <label class="col-lg-2 control-label " for="address2">Duration</label>
                                                    <div class="col-lg-10">
                                                        <input id="address2" name="address" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group clearfix">
                                                    <label class="col-lg-2 control-label " for="address2">Total Amount of Duration</label>
                                                    <div class="col-lg-10">
                                                        <input id="address2" name="address" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </section>
                                            <h3>Glader Expanse</h3>
                                            <section>
                                            <div class="form-group clearfix">
                                                    <label class="col-lg-2 control-label " for="address2">Number of Glader Used</label>
                                                    <div class="col-lg-10">
                                                        <input id="address2" name="address" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group clearfix">
                                                    <label class="col-lg-2 control-label " for="address2">Total Cost of Glader</label>
                                                    <div class="col-lg-10">
                                                        <input id="address2" name="address" type="text" class="form-control">
                                                    </div>
                                                </div>    

                                            </section>
                                        </div>
                                    </form>
								</div>
							</div>
						</div>
                        <!-- End row -->

                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer">
                    © 2016. All rights reserved.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar nicescroll">
                <h4 class="text-center">Chat</h4>
                <div class="contact-list nicescroll">
                    <ul class="list-group contacts-list">
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-1.jpg" alt="">
                                </div>
                                <span class="name">Chadengle</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-2.jpg" alt="">
                                </div>
                                <span class="name">Tomaslau</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-3.jpg" alt="">
                                </div>
                                <span class="name">Stillnotdavid</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-4.jpg" alt="">
                                </div>
                                <span class="name">Kurafire</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-5.jpg" alt="">
                                </div>
                                <span class="name">Shahedk</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-6.jpg" alt="">
                                </div>
                                <span class="name">Adhamdannaway</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-7.jpg" alt="">
                                </div>
                                <span class="name">Ok</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-8.jpg" alt="">
                                </div>
                                <span class="name">Arashasghari</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-9.jpg" alt="">
                                </div>
                                <span class="name">Joshaustin</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-10.jpg" alt="">
                                </div>
                                <span class="name">Sortino</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /Right-bar -->


        </div>
        <!-- END wrapper -->

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/js/jquery.min.js"></script>
        <script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/js/bootstrap.min.js"></script>
        <script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/js/detect.js"></script>
        <script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/js/fastclick.js"></script>
        <script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/js/jquery.slimscroll.js"></script>
        <script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/js/jquery.blockUI.js"></script>
        <script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/js/waves.js"></script>
        <script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/js/wow.min.js"></script>
        <script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/js/jquery.nicescroll.js"></script>
        <script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/js/jquery.scrollTo.min.js"></script>


        <script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/js/jquery.core.js"></script>
        <script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/js/jquery.app.js"></script>

        <!--Form Wizard-->
        <script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/jquery.steps/js/jquery.steps.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/jquery-validation/js/jquery.validate.min.js"></script>

        <!--wizard initialization-->
        <script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/pages/jquery.wizard-init.js" type="text/javascript"></script>

	
	</body>
</html>