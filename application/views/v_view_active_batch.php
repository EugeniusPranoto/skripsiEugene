<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon_1.ico">

        <title>PGI | PT. POLARIS GRAHA INTERNUSA</title>
        

        <link href="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <link href="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <link href="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
        <link href="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css"/>




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

                                <h4 class="page-title">View Batch Shipment</h4>
                                <ol class="breadcrumb">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">View Batch</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <h4 class="m-t-0 header-title"><b>Batch Code : </b></h4>
                            <h4 class="m-t-0 header-title"><b>Batch Name : </b></h4>
                            <h4 class="m-t-0 header-title"><b>Batch Departure Date : </b></h4>
                            <h4 class="m-t-0 header-title"><b>Batch Arrival Date : </b></h4>
                            <h4 class="m-t-0 header-title"><b>Amount of Cow : </b></h4>
                            <p class="text-muted font-13 m-b-30">
                               List of Available Batch Shipment                            </p>

                            <table id="datatable-buttons" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Tag Number</th>
                                    <th>Paint Number</th>
                                    <th>Lab Number</th>
                                    <th>Weight</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    
                                </tr>
                                </thead>


                                <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                     
                                   
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    
                                   
                                </tr>
                                <tr>
                                    <td>Ashton Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>66</td>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    
                                
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

<script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/datatables/dataTables.bootstrap.js"></script>

<script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/datatables/buttons.bootstrap.min.js"></script>
<script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/datatables/jszip.min.js"></script>
<script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/datatables/pdfmake.min.js"></script>
<script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/datatables/vfs_fonts.js"></script>
<script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/datatables/buttons.html5.min.js"></script>
<script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/datatables/buttons.print.min.js"></script>
<script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
<script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/datatables/dataTables.keyTable.min.js"></script>
<script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/datatables/responsive.bootstrap.min.js"></script>
<script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/datatables/dataTables.scroller.min.js"></script>
<script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/datatables/dataTables.colVis.js"></script>
<script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/datatables/dataTables.fixedColumns.min.js"></script>

<script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/pages/datatables.init.js"></script>


<script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/js/jquery.core.js"></script>
<script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/js/jquery.app.js"></script>


<script type="text/javascript">
    $(document).ready(function () {
        $('#datatable').dataTable();
        $('#datatable-keytable').DataTable({keys: true});
        $('#datatable-responsive').DataTable();
        $('#datatable-colvid').DataTable({
            "dom": 'C<"clear">lfrtip',
            "colVis": {
                "buttonText": "Change columns"
            }
        });
        $('#datatable-scroller').DataTable({
            ajax: "assets/plugins/datatables/json/scroller-demo.json",
            deferRender: true,
            scrollY: 380,
            scrollCollapse: true,
            scroller: true
        });
        var table = $('#datatable-fixed-header').DataTable({fixedHeader: true});
        var table = $('#datatable-fixed-col').DataTable({
            scrollY: "300px",
            scrollX: true,
            scrollCollapse: true,
            paging: false,
            fixedColumns: {
                leftColumns: 1,
                rightColumns: 1
            }
        });
    });
    TableManageButtons.init();

</script>

</body>
</html>