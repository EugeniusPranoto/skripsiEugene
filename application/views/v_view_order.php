<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon_1.ico">

        <title>PGI | PT. POLARIS GRAHA INTERNUSA</title>
        

		<link href="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/bootstrap-table/css/bootstrap-table.min.css" rel="stylesheet" type="text/css" />
		<link href="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/custombox/css/custombox.css" rel="stylesheet">
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

                                <h4 class="page-title">View Customer Order List</h4>
                                <ol class="breadcrumb">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">View Order</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
							<div class="col-sm-12">
								<div class="card-box">
									<h4 class="m-t-0 header-title"><b>Order Number:</b></h4>
									<h4 class="m-t-0 header-title"><b>Order Date:</b></h4>
									<p class="text-muted font-13">
										List Of Orders.
									</p>
									
									<table data-toggle="table"
										   data-search="true"
										   data-show-refresh="true"
										   data-show-toggle="true"
										   data-show-columns="true"
										   data-sort-name="id"
										   data-page-list="[5, 10, 20]"
										   data-page-size="5"
										   data-pagination="true" data-show-pagination-switch="true" class="table-bordered ">
										<thead>
											<tr>
												<th data-field="id" data-sortable="true" data-formatter="invoiceFormatter">Order ID</th>
												<th data-field="name" data-sortable="true">Name</th>
												<th data-field="date" data-sortable="true" data-formatter="dateFormatter">Delivery Date </th>
												<th data-field="amount" data-align="center" data-sortable="true" data-sorter="priceSorter">Delivery Location</th>
												<th data-field="time" data-align="center" data-sortable="true" >Delivery Time</th>
												<th data-field="status" data-align="center" data-sortable="true" data-formatter="statusFormatter">Status</th>
												<th data-field="Action" data-align="center" data-sortable="true" data-formatter="statusFormatter">Action</th>
												
											</tr>
										</thead>
										
										
										<tbody>
											<tr>
												<td>UB-1609</td>
												<td>Boudreaux</td>
												<td>26/03/2019</td>
												<td>Citra Indah</td>
												<td>15.00</td>
												<td>Paid</td>
												<td ><a href="<?php echo base_url(). 'c_supplier/edit_supplier' ?>"><button class="btn btn-icon waves-effect waves-light btn-warning"> <i class="fa fa-wrench"></i></button></a>
                                      <button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#custom-width-modal">View Data</button>
                                    <div id="custom-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog" style="width:55%;">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title" id="custom-width-modalLabel">Modal Heading</h4>
                                                </div>
                                                <div class="modal-body" style="text-align:left">
													<h4>RECEIVER NAME</h4>
													<h4>RECEIVER PHONE NUMBER</h4>
													<h4>Notes</h4>
													
                                                    
                                                    <hr>
                                                    <h4>Overflowing text to show scroll behavior</h4>
                                                    
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                </td>
												
												
											</tr>
											<tr>
												<td>UB-1610</td>
												<td>Boudreaux</td>
												<td>26/03/2019</td>
												<td>Citra Indah</td>
												<td>15.00</td>
												<td>Paid</td>
												<td ><a href="<?php echo base_url(). 'c_supplier/edit_supplier' ?>"><button class="btn btn-icon waves-effect waves-light btn-warning"> <i class="fa fa-wrench"></i></button></a>
                                      <button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#custom-width-modal">View Data</button>
                                    <div id="custom-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog" style="width:55%;">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title" id="custom-width-modalLabel">Modal Heading</h4>
                                                </div>
                                                <div class="modal-body" style="text-align:left">
													<h4>RECEIVER NAME</h4>
													<h4>RECEIVER PHONE NUMBER</h4>
													<h4>Notes</h4>
													
                                                    
                                                    <hr>
                                                    <h4>Overflowing text to show scroll behavior</h4>
                                                    
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                </td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
                        
                        
    
    
     

            		</div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer">
                    © 2019. All rights reserved. PT Polaris Graha Internusa
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

        <script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/bootstrap-table/js/bootstrap-table.min.js"></script>
        <script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/pages/jquery.bs-table.js"></script>


        <script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/js/jquery.core.js"></script>
		<script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/js/jquery.app.js"></script>

		    <!-- Modal-Effect -->
			<script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/custombox/js/custombox.min.js"></script>
        <script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/custombox/js/legacy.min.js"></script>





</body>
</html>