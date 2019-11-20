<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="assets/images/favicon_1.ico">

    <title>PGI | PT. POLARIS GRAHA INTERNUSA</title>

    <link href="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">

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

    <style type="text/css">
        table {
            border-collapse: separate;
            border-spacing: 10px;
            /* Apply cell spacing */
        }

        table,
        th,
        td {
            border: 1px solid #666;
        }

        table td {
            padding: 10px;
            /* Apply cell padding */
        }

        table th {
            padding: 20px;
            /* Apply cell padding */
            font-weight: normal;
        }
    </style>

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

                            <h4 class="page-title">Lower Level First Shed Layout</h4>
                            <ol class="breadcrumb">
                                <li><a href="#">Dashboard</a></li>
                                <li class="active">View Layout</li>
                            </ol>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-box">
                                <h4 class="m-t-0 header-title"><b>Lower First Shed</b></h4>
                                <p class="text-muted font-13 m-b-30">
                                    Manage Inventory on Lower First Shed
                                </p>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="home">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <?php foreach ($layout2 as $list) {
                                                    $a = $list->layout_quantity; ?>
                                                    <table border="1">
                                                        <tr>
                                                            <td colspan="16" style="text-align:center; font-size:12px;padding:5px">FOODLET</td>
                                                        </tr>
                                                        <tr>
                                                            <?php
                                                                for ($i = 33; $i <= $a / 2; $i++) { ?>
                                                                <?php $flag = 0; ?>
                                                                <?php foreach ($check_layout as $list) { ?>
                                                                    <?php if ($list->layout_box_number == $i) { ?>
                                                                        <td>
                                                                            <button type="button" onclick="modal(<?php echo $list->id_item; ?>, <?php echo $i ?>)" class="btn waves-effect waves-light" style="background-color:#5fbeaa; color:white; width:100%" data-toggle="modal" data-target="#custom-width-modal<?php echo $i; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;"><?php echo $i ?></button>
                                                                        </td>
                                                                    <?php $flag = 1;
                                                                                } ?>
                                                                <?php
                                                                        }
                                                                        if ($flag == 0) { ?>
                                                                    <td>
                                                                        <button class="btn waves-effect waves-light" style="background-color:white; width:100%" data-toggle="modal" data-target="#custom-width-modal<?php echo $i; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;"><?php echo $i ?></button>
                                                                    </td>
                                                            <?php
                                                                    }
                                                                } ?>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="16" style="text-align:center">PATHWAY</td>
                                                        </tr>
                                                        <tr>
                                                            <?php
                                                                for ($i = 49; $i <= $a - 32; $i++) { ?>
                                                                <?php $flag = 0; ?>
                                                                <?php foreach ($check_layout as $list) { ?>
                                                                    <?php if ($list->layout_box_number == $i) { ?>
                                                                        <td>
                                                                            <button type="button" onclick="modal(<?php echo $list->id_item; ?>, <?php echo $i ?>)" class="btn waves-effect waves-light" style="background-color:#5fbeaa; color:white; width:100%" data-toggle="modal" data-target="#custom-width-modal<?php echo $i; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;"><?php echo $i ?></button>
                                                                        </td>
                                                                    <?php $flag = 1;
                                                                                } ?>
                                                                <?php
                                                                        }
                                                                        if ($flag == 0) { ?>
                                                                    <td>
                                                                        <button class="btn waves-effect waves-light" style="background-color:white; width:100%" data-toggle="modal" data-target="#custom-width-modal<?php echo $i; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;"><?php echo $i ?></button>
                                                                    </td>
                                                            <?php
                                                                    }
                                                                } ?>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="16" style="text-align:center; font-size:12px;padding:5px">FOODLET</td>
                                                        </tr>
                                                    </table>
                                                <?php } ?>
                                                <br>
                                                <br>

                                                <ul class="pagination pagination-split pull-right">
                                                    <li class>
                                                        <a href="<?php echo base_url() . 'c_layout/layoutdua' ?>"><i class="fa fa-angle-left"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url() . 'c_layout/layoutdua' ?>">1</a>
                                                    </li>
                                                    <li class="active">
                                                        <a href="<?php echo base_url() . 'c_layout/layoutdua_2' ?>">2</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url() . 'c_layout/layoutdua_3' ?>">3</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url() . 'c_layout/layoutdua_3' ?>"><i class="fa fa-angle-right"></i></a>
                                                    </li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>





                                </div>

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
        <!-- <div class="side-bar right-bar nicescroll">
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
        </div> -->
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


    <script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/moment/moment.js"></script>
    <script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/timepicker/bootstrap-timepicker.js"></script>
    <script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
    <script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

    <script src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/pages/jquery.form-pickers.init.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('form').parsley();
        });
    </script>


</body>

</html>

<script>
        

        $('#id_item').change(function() {
                var id_item = $(this).val();
               
                $.ajax({
                    url: "<?php echo site_url('c_layout/getHistory_layout_dua'); ?>",
                    method: "POST",
                    data: {
                        id_item: id_item
                    },
                    async: true,
                    dataType: 'json',
                    success: function(data) {
                        var html1 = '';
                        var html2 = '';
                        var html3 = '';
                        var html4 = '';
                        var html5 = '';
                    
                        var j;
                        var temp;
                        for (j = 0; j <= data.length; j++) {
                           
                            if(j > 0 && j < data.length)
                            {
                                html1 += '<input type="text" style="text-align:center" value=' + data[j].layout_box_number + ' class="form-control">';
                            }
                            else if(j == data.length)
                            {
                                html1 += '<input type="text" style="text-align:center" value="" class="form-control">';
                            }
                            
                        }
                        $('#layoutB').html(html1);

                        var a;
                        for (number = 0; number < data.length; number++) {
                            
                            html4 += '<input type="text" style="text-align:center" value=' + data[number].layout_box_number + ' class="form-control">';
                            
                        }
                        $('#layoutA').html(html4);
                        

                        var date;
                        for (date = 0; date < data.length; date++) {
                            html2 += '<input type="text" style="text-align:center" value=' + data[date].layout_details_date + ' class="form-control">';
                            
                        }
                        $('#date').html(html2);

                        var layout;
                        for (layout = 0; layout < data.length; layout++) {
                            html3 += '<input type="text" style="text-align:center" value=' + data[layout].layout_name + ' class="form-control">';
                            
                        }
                        $('#name').html(html3);

                        var time;
                        for (time = 0; time < data.length; time++) {
                            html5 += '<input type="text" style="text-align:center" value=' + data[time].layout_details_time + ' class="form-control">';
                            
                        }
                        $('#time').html(html5);
                        
                    }
                });
                return false;
            });
        
    </script>

<?php
for ($i = 1; $i <= $a; $i++) {
    $id_item = '';
    foreach ($check as $list) {
        if ($list->layout_box_number == $i) {
            $id_item = $list->id_item;
        }
    }
    ?>

    <div id="custom-width-modal<?php echo $i; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Shed Number Details</h4>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url() . 'c_layout/InsertItem/' . $i ?>" method="post" data-parsley-validate novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-1" class="control-label">Item Code</label>
                                    <select class="form-control" name="id_item" id="id_item<?php echo $i ?>">
                                        <?php
                                            $idbarang = 0;
                                            
                                            foreach ($item as $itemList) { 
                                            $flag = 0;    
                                            $itemA =  $itemList->id_item;
                                                foreach ($check as $list) { 
                                                    $checkA =  $list->id_item;    
                                                    if($itemA == $checkA){ ?>
                                                         <?php  $flag = 1;  
                                                     }
                                                }
                                            if($flag == 0){ ?>
                                                <option value="<?= $itemList->id_item ?>" <?php if ($itemList->id_item == $id_item) {
                                                    $idbarang = $itemList->id_item; ?> selected <?php } ?>><?= $itemList->item_code ?></option>
                                           <?php }
                                               }
                                            ?>
        
                                    
                                    
                                    
                                      
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-2" class="control-label">Cow Type</label>
                                    <input type="text" id="type<?php echo $i; ?>" value="" name="type" readonly value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Current Weight</label>
                                    <input type="text" id="test3<?php echo $i; ?>" name="current" readonly class="form-control" name="item_weight">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="field-4" class="control-label">Date Arrived</label>
                                    <input type="text" id="date<?php echo $i; ?>" name="date" readonly value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="field-5" class="control-label">Arrived From</label>
                                    <input type="text" id="arrival<?php echo $i; ?>" name="arrival" readonly value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="field-6" class="control-label">Purcased price</label>
                                    <input type="text" id="price<?php echo $i; ?>" name="price" readonly value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-7" class="control-label">Status</label>
                                    <input type="text" id="status<?php echo $i; ?>" name="status" readonly value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-8" class="control-label">Box Number</label>
                                    <input type="text" name="number" readonly value="<?php echo $i ?>" class="form-control">
                                </div>
                            </div>
                        </div>


                        <script>
                            function myFunction<?= $i; ?>() {
                                // Get the checkbox
                                var checkBox = document.getElementById("myCheck<?= $i; ?>");
                                // Get the output text
                                var text = document.getElementById("text<?= $i; ?>");

                                // If the checkbox is checked, display the output text
                                if (checkBox.checked == true) {
                                    text.style.display = "block";
                                } else {
                                    text.style.display = "none";
                                }
                            }
                        </script>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="checkbox" value="1" name="checkbox" id="myCheck<?= $i; ?>" onclick="myFunction<?= $i; ?>()"> Relocate

                                    <div id="text<?= $i; ?>" style="display:none">
                                        <br>
                                        <label for="field-8" class="control-label">Change Layout</label>
                                        <select class="form-control" name="id_layout" id="id_layout<?php echo $i; ?>">
                                            <?php
                                                foreach ($layoutlist as $list) { ?>
                                                <option value="<?= $list->id_layout ?>"><?= $list->layout_name ?></option>
                                            <?php } ?>
                                        </select>

                                        <br>
                                        <label for="field-9" class="control-label">Relocate To</label>
                                        <select class="form-control" name="relocate" id="relocate<?php echo $i; ?>">
                                            <?php for ($j = 1; $j <= 96; $j++) {
                                                    $flag = 0;
                                                    foreach ($relocate as $list) { ?>
                                                    <?php if ($list->layout_box_number == $j) { ?>
                                                    <?php $flag = 1;
                                                                    break;
                                                                }
                                                            }
                                                            if ($flag == 0) {
                                                                ?>
                                                    <option><?php echo $j ?></option>
                                            <?php
                                                    }
                                                }   ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>




                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                    <a href="<?php echo base_url() . 'c_layout/delete_item/' . $idbarang ?>"><button type="button" class="btn btn-danger waves-effect">Delete</button></a>
                    <a href="<?php echo base_url() . 'c_layout/InsertItem' ?>"><button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button></a>
                </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function modal(id_item, kotak) {
            console.log(id_item);
            $.ajax({
                url: "<?php echo site_url('c_layout/getCode'); ?>",
                method: "POST",
                data: {
                    id_item: id_item
                },
                async: true,
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    $('#test3' + kotak).val(data[0].item_weight);
                    $('#type' + kotak).val(data[0].item_category);
                    $('#date' + kotak).val(data[0].item_date);
                    $('#arrival' + kotak).val(data[0].item_arrival);
                    $('#price' + kotak).val(data[0].item_price);
                    $('#status' + kotak).val(data[0].item_status);

                }
            });
        }
        $(document).ready(function() {
            $('#id_item<?php echo $i; ?>').change(function() {
                var id_item = $(this).val();
                $.ajax({
                    url: "<?php echo site_url('c_layout/getCode'); ?>",
                    method: "POST",
                    data: {
                        id_item: id_item
                    },
                    async: true,
                    dataType: 'json',
                    success: function(data) {
                        $('#test3<?php echo $i; ?>').val(data[0].item_weight);
                        $('#type<?php echo $i; ?>').val(data[0].item_category);
                        $('#date<?php echo $i; ?>').val(data[0].item_date);
                        $('#arrival<?php echo $i; ?>').val(data[0].item_arrival);
                        $('#price<?php echo $i; ?>').val(data[0].item_price);
                        $('#status<?php echo $i; ?>').val(data[0].item_status);

                    }
                });
                return false;
            });

        });

        $(document).ready(function() {

            $('#id_layout<?php echo $i; ?>').change(function() {
                var id_layout = $(this).val();
                $.ajax({
                    url: "<?php echo site_url('c_layout/getLayout'); ?>",
                    method: "POST",
                    data: {
                        id_layout: id_layout
                    },
                    async: true,
                    dataType: 'json',
                    success: function(data) {
                        $('#relocate<?php echo $i; ?>').empty();
                        for (i = 1; i <= data.layout[0].layout_quantity; i++) {
                            if (data.detail.length > 0) {
                                for (j = 0; j < data.detail.length; j++) {
                                    if (i != data.detail[j].layout_box_number) {
                                        $('#relocate<?php echo $i; ?>').append(`<option value='` + i + `'>` + i + `</option>`);
                                    }
                                }
                            } else {
                                $('#relocate<?php echo $i; ?>').append(`<option value='` + i + `'>` + i + `</option>`);
                            }

                        }
                    }
                });
                return false;
            });
        });
</script>

    
    

<?php } ?>