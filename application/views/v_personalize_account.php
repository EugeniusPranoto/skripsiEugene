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

                            <h4 class="page-title">View Account Receivable Information</h4>
                            <ol class="breadcrumb">
                                <li><a href="#">Dashboard</a></li>
                                <li class="active">View Account Receivable</li>
                            </ol>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-box">
                                <h4 class="m-t-0 header-title"><b>Account Receivable Information</b></h4>
                                <p class="text-muted font-13 m-b-30">
                                    Insert data for Account Receivable record.
                                </p>

                                <form action="" method="post" data-parsley-validate novalidate>
                                    <div class="form-group">
                                        <label>Account Receivable Name*</label>
                                        <select class="form-control" name="debt_fname" id="debt_fname">
                                            <?php
                                            foreach ($account as $list) { ?>
                                                <option value="<?= $list->debt_fname ?>"><?= $list->debt_fname ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <br>
                                    <br>
                                    <p><b>ACCOUNT RECEIVABLE</b></p>
                                    <table border=1 style="width:100%">
                                        <tr>
                                            <th style="text-align:center">First Name</th>
                                            <th style="text-align:center">Last Name</th>
                                            <th style="text-align:center">Description</th>
                                            <th style="text-align:center">Date</th>
                                            <th style="text-align:center">Deadline</th>
                                            <th style="text-align:center">Status</th>
                                            <th style="text-align:center">Amount</th>

                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group" id="fname"></div>
                                            </td>
                                            <td>
                                                <div class="form-group" id="lname"></div>
                                            </td>
                                            <td>
                                                <div class="form-group" id="description"></div>
                                            </td>
                                            <td>
                                                <div class="form-group" id="test3"></div>
                                            </td>
                                            <td>
                                                <div class="form-group" id="deadline"></div>
                                            </td>
                                            <td>
                                                <div class="form-group" id="status"></div>
                                            </td>
                                            <td>
                                                <div class="form-group" id="amount"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="6" style="text-align:center"><b>Total</b></td>
                                            <td style="text-align:center" id="grand_total"></td>
                                        </tr>
                                    </table>
                                    <br>
                                    <br>
                                    <br>
                                    <p><b>PAYED ACCOUNT RECEIVABLE</b></p>
                                    <table border=1 style="width:100%">
                                        <tr>
                                            <th style="text-align:center">First Name</th>
                                            <th style="text-align:center">Last Name</th>
                                            <th style="text-align:center">Description</th>
                                            <th style="text-align:center">Date</th>
                                            <th style="text-align:center">Status</th>
                                            <th style="text-align:center">Amount</th>

                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group" id="fnameP"></div>
                                            </td>
                                            <td>
                                                <div class="form-group" id="lnameP"></div>
                                            </td>
                                            <td>
                                                <div class="form-group" id="descriptionP"></div>
                                            </td>
                                            <td>
                                                <div class="form-group" id="test3P"></div>
                                            </td>
                                            <td>
                                                <div class="form-group" id="statusP"></div>
                                            </td>
                                            <td>
                                                <div class="form-group" id="amountP"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" style="text-align:center"><b>Total</b></td>
                                            <td style="text-align:center" id="grand_totalP"></td>
                                        </tr>
                                    </table>
                                    <br>
                                    <br>
                                    <br>
                                    <table border=1 style="width:100%">
                                        <tr>
                                            <td colspan="6" style="text-align:center"><b>Grand Total</b></td>
                                            <td style="text-align:center" id="change"></td>
                                        </tr>
                                    </table>

                                    <br>
                                    <br>
                                    <br>
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
    
    <script type="text/javascript" src="<?php echo base_url() . 'assets/jquery-3.3.1.js' ?>"></script>
    <script type="text/javascript">

        const formatter = new Intl.NumberFormat('id-ID', {
        style: 'currency',
        currency: 'IDR',
        minimumFractionDigits: 2
        })

        $(document).ready(function() {
            var total_final = 0;
            var total = 0;       
            var total1 = 0;    
            $('#debt_fname').change(function() {
                var debt_fname = $(this).val();
               
                $.ajax({
                    url: "<?php echo site_url('c_debt/getAccount'); ?>",
                    method: "POST",
                    data: {
                        debt_fname: debt_fname
                    },
                    async: true,
                    dataType: 'json',
                    success: function(data) {
                        var html1 = '';
                        var html2 = '';
                        var html3 = '';
                        var html4 = '';
                        var html5 = '';
                        var html6 = '';
                        var html13 = '';

                        var j;
                        for (j = 0; j < data.length; j++) {
                            html3 += '<input type="text" style="text-align:center" value=' + data[j].debt_date + ' class="form-control">';
                        }
                        $('#test3').html(html3);

                        var deadline;
                        for (deadline = 0; deadline < data.length; deadline++) {
                            html13 += '<input type="text" style="text-align:center" value=' + data[deadline].debt_deadline + ' class="form-control">';
                        }
                        $('#deadline').html(html13);

                        var fname;
                        for (fname = 0; fname < data.length; fname++) {
                            html1 += '<input type="text" style="text-align:center" value=' + data[fname].debt_fname + ' class="form-control">';
                        }
                        $('#fname').html(html1);

                        var amount;
                        total = 0;
                        for (amount = 0; amount < data.length; amount++) {
                            html2 += '<input type="text" style="text-align:center" value=' + data[amount].debt_amount + ' class="form-control">';
                            total = total + Number(data[amount].debt_amount);
                            
                        }
                        $('#amount').html(html2);
                        
                        var lname;
                        for (lname = 0; lname < data.length; lname++) {
                            html4 += '<input type="text" style="text-align:center" value=' + data[lname].debt_lname + ' class="form-control">';
                        }
                        $('#lname').html(html4);

                        var description;
                        for (description = 0; description < data.length; description++) {
                            html5 += '<input type="text" style="text-align:center" value=' + data[description].debt_description + ' class="form-control">';
                        }
                        $('#description').html(html5);

                        var status;
                        var test;
                        for (status = 0; status < data.length; status++) {
                            test = data[status].debt_status;
                            if (test == 1) {
                                html6 += '<input type="text" style="text-align:center" value="Account Receivable" class="form-control">';
                            } else {

                            }
                        }
                        $('#status').html(html6);
                        $('#grand_total').html(formatter.format(total));
                        total_final = total - total1;
                        $('#change').html(formatter.format(total_final));
                        
                        
                        
                    }
                });
                return false;
            });
            var test = 10;
            $('#debt_fname').change(function() {
                var debt_fname = $(this).val();
                $.ajax({
                    url: "<?php echo site_url('c_debt/getPayment'); ?>",
                    method: "POST",
                    data: {
                        debt_fname: debt_fname
                    },
                    async: true,
                    dataType: 'json',
                    success: function(data) {
                        var html7 = '';
                        var html8 = '';
                        var html9 = '';
                        var html10 = '';
                        var html11 = '';
                        var html12 = '';


                        var date;
                        for (date = 0; date < data.length; date++) {
                            html9 += '<input type="text" style="text-align:center" value=' + data[date].debt_date + ' class="form-control">';
                        }
                        $('#test3P').html(html9);

                        var fname1;
                        for (fname1 = 0; fname1 < data.length; fname1++) {
                            html7 += '<input type="text" style="text-align:center" value=' + data[fname1].debt_fname + ' class="form-control">';
                        }
                        $('#fnameP').html(html7);

                        var amount1;
                        total1 = 0;
                        var total2 = 100000;
                        var total3 = 0;
                        for (amount1 = 0; amount1 < data.length; amount1++) {
                            html12 += '<input type="text" style="text-align:center" value=' + data[amount1].debt_amount + ' class="form-control">';
                            total1 = total1 + Number(data[amount1].debt_amount);
                        }
                        $('#amountP').html(html12);

                        var lname1;
                        for (lname1 = 0; lname1 < data.length; lname1++) {
                            html8 += '<input type="text" style="text-align:center" value=' + data[lname1].debt_lname + ' class="form-control">';
                        }
                        $('#lnameP').html(html8);

                        var description1;
                        for (description1 = 0; description1 < data.length; description1++) {
                            html10 += '<input type="text" style="text-align:center" value=' + data[description1].debt_description + ' class="form-control">';
                        }
                        $('#descriptionP').html(html10);

                        var status1;
                        var test1;
                        for (status1 = 0; status1 < data.length; status1++) {
                            test1 = data[status1].debt_status;
                            if (test1 == 2) {
                                html11 += '<input type="text" style="text-align:center" value="Paid" class="form-control">';
                            } else {

                            }
                        }
                        $('#statusP').html(html11);
                        $('#grand_totalP').html(formatter.format(total1));
                        var akumulasi  = 0;
                        total_final = 0;
                        total_final = total - total1;
                        //print(total_final);
                        
                        $('#change').html(formatter.format(total_final));
                        
                       // alert(total1);
                        
                    }
                });
                return false;
            });
                
        });

        

    </script>

    

</body>

</html>