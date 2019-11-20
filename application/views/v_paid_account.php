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

                                <h4 class="page-title">View Customer Account Rececivable List</h4>
                                <ol class="breadcrumb">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">View Active Account Rececivable</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <h4 class="m-t-0 header-title"><b>Customer Account Rececivable Data</b></h4>
                            <p class="text-muted font-13 m-b-30">
                               List of Paid Account Rececivable data 
                            </p>

                            <table id="datatable-buttons" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Phone Number</th>
                                    <th>Date</th>
                                    <th>Deadline</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                </tr>
                                </thead>


                                <tbody>
                                <?php
                                        $i = 1;
                                            
                                        foreach($paid as $list){ ?>
                                          
                                 <tr>
                                    <td><?php echo $list->debt_fname ?> <?php echo $list->debt_lname ?></td>
                                    <td><?php echo $list->debt_description ?></td>
                                    <td><?php echo $list->debt_phone ?></td>
                                    <td><?php echo $list->debt_date ?></td>
                                    <td><?php echo $list->debt_deadline ?></td>
                                    <td><?php echo number_format($list->debt_amount,2) ?></td>
                                    <td><?php  
                                        if($list->debt_status == 1){
                                            echo "Account Receivable";
                                        }else{
                                            echo "Paid";
                                        }?>
                                    </td>
                                    </tr>
                                    <?php } ?>
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
<script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/custombox/js/custombox.min.js"></script>
<script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/custombox/js/legacy.min.js"></script>

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