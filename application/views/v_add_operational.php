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

                            <h4 class="page-title">Operational Cost Data</h4>
                            <ol class="breadcrumb">
                                <li><a href="#">Dashboard</a></li>
                                <li class="active">Add Operational Costing</li>
                            </ol>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-box">
                                <h4 class="m-t-0 header-title"><b>Operation & Maintanance</b></h4>
                                <p class="text-muted font-13 m-b-30">
                                    Insert data for operation & maintanance cost record.
                                </p>

                                <form action="<?php echo base_url() . 'c_operational/InsertOperational' ?>" method="post" data-parsley-validate novalidate>
                                    <div class="form-group">
                                        <label>Operation Name*</label>
                                        <input type="text" name="name" parsley-trigger="change" required placeholder="Enter operation name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Date*</label>
                                        <div class="input-group">
                                            <input type="date" name="date" readonly value="<?php echo date('Y-m-d'); ?>" class="form-control">
                                            <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Employee InCharge*</label>
                                        <select class="form-control" name="employee" id="employee">
                                            <?php
                                            foreach ($employee as $List) { ?>
                                                <option value="<?= $List->user_fname ?>"><?= $List->user_fname ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Cow*</label><br>
                                        <div class="checkbox checkbox-inline" >
		                                            <input type="checkbox" id="inlineCheckbox1" value="option1" checked>
		                                            <label for="inlineCheckbox1"> Manual </label>
		                                        </div>
		                                        <div class="checkbox checkbox-success checkbox-inline">
		                                            <input type="checkbox" id="inlineCheckbox2" value="option1" >
		                                            <label for="inlineCheckbox2"> Select All </label>
		                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Cow Tag Number*</label>
                                        <select class="form-control" name="item" id="item" parsley-trigger="change">
                                            <?php
                                            foreach ($item as $itemList) { ?>
                                                <option value="<?= $itemList->id_item ?>"><?= $itemList->item_code ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Inventory Used*</label>
                                        <input type="text" name="inventory" parsley-trigger="change" required placeholder="Enter operation name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Operation Cost*</label>
                                        <input type="number" name="cost"  id="txt1" onkeyup="sum();" parsley-trigger="change" placeholder="Enter Phone Number" required class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Operation Quantity*</label>
                                        <input type="number" name="quantity" id="txt2" onkeyup="sum();" parsley-trigger="change" placeholder="Enter Phone Number" required class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Operation Amount*</label>
                                        <input type="number" name="amount" readonly id="txt3" parsley-trigger="change" placeholder="Enter Phone Number" required class="form-control">
                                    </div>

                                    


                                    <br>
                                    <br>

                                    <div class="form-group text-right m-b-0">
                                        <button type="reset" class="btn btn-default waves-effect waves-light m-l-5">
                                            Cancel
                                        </button>
                                        <button class="btn btn-primary waves-effect waves-light" type="submit">
                                            Submit
                                        </button>

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
        
        <!-- /Right-bar -->


    </div>
    <!-- END wrapper -->

    <script>
        var resizefunc = [];
    </script>

    <!-- jQuery  -->

    <script>
        function sum() {
            var txtFirstNumberValue = document.getElementById('txt1').value;
            var txtSecondNumberValue = document.getElementById('txt2').value;
            var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
            if (!isNaN(result)) {
                document.getElementById('txt3').value = result;
            }
        }
</script>

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
    <script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
    <script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>



    <script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/bootstrap-table/js/bootstrap-table.min.js"></script>

    <script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/pages/jquery.bs-table.js"></script>
    <script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/pages/jquery.form-pickers.init.js"></script>
    


    <script type="text/javascript" src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/parsleyjs/parsley.min.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            $('form').parsley();
        });
    </script>


</body>

</html>