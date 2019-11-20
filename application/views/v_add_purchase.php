<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="assets/images/favicon_1.ico">

    <title>PGI | PT. POLARIS GRAHA INTERNUSA</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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

                            <h4 class="page-title">Create New Item Data</h4>
                            <ol class="breadcrumb">
                                <li><a href="#">Dashboard</a></li>
                                <li class="active">Add Item</li>
                            </ol>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-box">
                                <h4 class="m-t-0 header-title"><b>Item Information</b></h4>
                                <p class="text-muted font-13 m-b-30">
                                    Insert data for inventory record.
                                </p>

                                <form action="<?php echo base_url() . 'c_inventory/InsertInventory' ?>" method="post" data-parsley-validate novalidate>
                                    <table id="myTable" class=" table order-list">
                                        <thead>
                                            <tr>
                                                <td>Item Code</td>
                                                <td>Type</td>
                                                <td>Trip</td>
                                                <td>Arrival Destination</td>
                                                <td>Arrival Date</td>
                                                <td>Weight</td>
                                                <td>Price</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="col-sm-2">
                                                    <input type="text" name="code_abc" value="<?php echo $code;echo $row; ?>" placeholder="Enter Code" class="form-control" />
                                                </td>
                                                <td class="col-sm-2">
                                                    <select name="type" parsley-trigger="change" placeholder="" required class="form-control" style="color:grey">
                                                        <?php foreach ($category as $list) { ?>
                                                            <option value="<?php echo $list->id_item_category ?>">
                                                                <?php echo $list->item_category ?>
                                                            </option>
                                                        <?php } ?>
                                                    </select>
                                                </td>
                                                <td class="col-sm-1">
                                                    <input type="text" name="trip" placeholder="Enter Trip" class="form-control" />
                                                </td>
                                                <td class="col-sm-2">
                                                    <input type="text" name="destination" placeholder="Enter Destination" class="form-control" />
                                                </td>
                                                <td class="col-sm-2">
                                                    <input type="date" name="date" placeholder="Enter Date" class="form-control" />
                                                </td>
                                                <td class="col-sm-1">
                                                    <input type="text" name="weight" placeholder="weight" class="form-control" />
                                                </td>
                                                <td class="col-sm-2">
                                                    <input type="text" name="price" placeholder="Enter Price" class="form-control" />
                                                    <input type="hidden" hidden name="counter" id="counter" placeholder="Enter Price" class="form-control" />
                                                </td>

                                                <td class="col-sm-2"><a class="deleteRow"></a>

                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="7" style="text-align: left;">
                                                    <input type="button" class="btn btn-lg btn-block " id="addrow" value="Add Row" />
                                                </td>
                                            </tr>
                                            <tr>
                                            </tr>
                                        </tfoot>
                                    </table>

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
    <script>
        $(document).ready(function() {
            var counter = 1;
            var counter1 = <?php echo $row + 1; ?>

            $("#addrow").on("click", function() {
                var newRow = $("<tr>");
                var cols = "";

                cols += '<td><input type="text" class="form-control" value="<?php echo $code ?>' + counter1 + ' " name="code_abc'+counter+'"/></td>';
                cols += '<td><select name="type' + counter + '" parsley-trigger="change"  required class="form-control" style="color:grey"><option>Bali</option><option>Simental</option><option>Limosin</option></select></td>';
                cols += '<td><input type="text" class="form-control" name="trip' + counter + '"/></td>';
                cols += '<td><input type="text" class="form-control" name="destination' + counter + '"/></td>';
                cols += '<td><input type="date" class="form-control" name="date' + counter + '"/></td>';
                cols += '<td><input type="text" class="form-control" name="weight' + counter + '"/></td>';
                cols += '<td><input type="text" class="form-control" name="price' + counter + '"/></td>';
                alert("trip"+counter);
                cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>';
                newRow.append(cols);
                $("table.order-list").append(newRow);
                counter1++;
                counter++;
                document.getElementById("counter").value = counter;
            });

            $("#submit").on("click", function() {

            });

            $("table.order-list").on("click", ".ibtnDel", function(event) {
                $(this).closest("tr").remove();
                counter -= 1
                document.getElementById("counter").value = counter;
            });


        });

        function calculateRow(row) {
            var price = +row.find('input[name^="price"]').val();

        }

        function calculateGrandTotal() {
            var grandTotal = 0;
            $("table.order-list").find('input[name^="price"]').each(function() {
                grandTotal += +$(this).val();
            });
            $("#grandtotal").text(grandTotal.toFixed(2));
        }
    </script>


</body>

</html>