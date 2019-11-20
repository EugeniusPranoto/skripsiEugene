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

    <link href="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" />
    <link href="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />
    <link href="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
    <link href="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

    <link href="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/bootstrap-table/css/bootstrap-table.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

    <script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/js/modernizr.min.js"></script>
    <link href="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
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

                            <h4 class="page-title">Create New Batch Order</h4>
                            <ol class="breadcrumb">
                                <li><a href="#">Dashboard</a></li>
                                <li class="active">Add Batch</li>
                            </ol>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-box">
                                <h4 class="m-t-0 header-title"><b>Order Form</b></h4>
                                <p class="text-muted font-13 m-b-30">
                                    Insert form for order record.
                                </p>

                                <form action="#" data-parsley-validate novalidate>
                                    <div class="form-group">
                                        <label for="lname">batch Number*</label>
                                        <input type="text" name="lname" parsley-trigger="change" required placeholder="Enter last name" class="form-control" id="emailAddress">
                                    </div>
                                    <div class="form-group">
                                        <label for="lname">Arrival Date*</label>
                                        <input type="text" name="lname" parsley-trigger="change" required placeholder="Enter last name" class="form-control" id="emailAddress">
                                    </div>
                                    <div class="form-group">
                                        <label for="lname">Transit Date*</label>
                                        <input type="text" name="lname" parsley-trigger="change" required placeholder="Enter last name" class="form-control" id="emailAddress">
                                    </div>
                                    <div class="form-group">
                                        <label for="lname">Arrival Destination*</label>
                                        <input type="text" name="lname" parsley-trigger="change" required placeholder="Enter last name" class="form-control" id="emailAddress">
                                    </div>
                                    <div class="form-group">
                                        <label for="fname">Item Code*</label>
                                        <input type="text" name="fname" parsley-trigger="change" required placeholder="Enter first name" class="form-control" id="userName">
                                    </div>
                                    <div class="form-group">
                                        <label for="date">Item Type*</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose">
                                            <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="fname">Glader Name*</label>
                                            <input type="text" name="fname" parsley-trigger="change" required placeholder="Enter first name" class="form-control" id="userName">
                                        </div>
                                        <div class="form-group">
                                            <label for="fname">Glader Phone Number*</label>
                                            <input type="text" name="fname" parsley-trigger="change" required placeholder="Enter first name" class="form-control" id="userName">
                                        </div>
                                        <div class="form-group">
                                            <label for="fname">Report*</label>
                                            <input type="text" name="fname" parsley-trigger="change" required placeholder="Enter first name" class="form-control" id="userName">
                                        </div>
                                        <div class="form-group">
                                            <label for="date">Receiver*</label>
                                            <input id="date" type="number" placeholder="Enter Phone Number" required class="form-control">
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="form-group text-right m-b-0">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit">
                                            Submit
                                        </button>
                                        <button type="reset" class="btn btn-default waves-effect waves-light m-l-5">
                                            Cancel
                                        </button>
                                    </div>
                            </div>





                            </form>
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


    <script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/js/jquery.core.js"></script>
    <script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/js/jquery.app.js"></script>


    <script type="text/javascript" src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/parsleyjs/parsley.min.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            $('form').parsley();
        });
    </script>

    <script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
    <script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/switchery/js/switchery.min.js"></script>
    <script type="text/javascript" src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/multiselect/js/jquery.multi-select.js"></script>
    <script type="text/javascript" src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
    <script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
    <script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>
    <script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
    <script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
    <script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>

    <script type="text/javascript" src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/autocomplete/jquery.mockjax.js"></script>
    <script type="text/javascript" src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/autocomplete/jquery.autocomplete.min.js"></script>
    <script type="text/javascript" src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/autocomplete/countries.js"></script>
    <script type="text/javascript" src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/pages/autocomplete.js"></script>

    <script type="text/javascript" src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/pages/jquery.form-advanced.init.js"></script>


    <script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/moment/moment.js"></script>
    <script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/timepicker/bootstrap-timepicker.js"></script>
    <script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
    <script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>



    <script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/bootstrap-table/js/bootstrap-table.min.js"></script>

    <script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/pages/jquery.bs-table.js"></script>
    <script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/pages/jquery.form-pickers.init.js"></script>

</body>

</html>