<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <div class="text-center">
                    <a href="<?php echo base_url() . 'c_admin/index' ?>" class="logo" style="letter-spacing:1px; font-size:19px"><span>POLARISLIVESTOCK.</span></a>
                    <!-- Image Logo here -->
                    <!--<a href="index.html" class="logo">-->
                    <!--<i class="icon-c-logo"> <img src="assets/images/logo_sm.png" height="42"/> </i>-->
                    <!--<span><img src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/images/logo_light.png" height="20"/></span>-->
                    <!--</a>-->
                </div>
            </div>

            <!-- Button mobile view to collapse sidebar menu -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="">
                        <div class="pull-left">
                            <button class="button-menu-mobile open-left waves-effect waves-light">
                                <i class="md md-menu"></i>
                            </button>
                            <span class="clearfix"></span>
                        </div>

                        <ul class="nav navbar-nav hidden-xs">
                            <li><a href="#" class="waves-effect waves-light">Reports</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </li>
                        </ul>


                        <?php
                        $a = 0;
                        foreach ($notification as $list) {
                            $a++;
                            ?>
                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="dropdown top-menu-item-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                        <i class="icon-bell"></i> <span class="badge badge-xs badge-danger"><?= count($notification) ?></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-lg">
                                        <li class="notifi-title"><span class="label label-default pull-right">New <?= count($notification) ?></span>Notification</li>
                                        <li class="list-group slimscroll-noti notification-list">
                                            <!-- list item-->
                                            <a href="javascript:void(0);" class="list-group-item">
                                                <div class="media">
                                                    <div class="pull-left p-r-10">
                                                        <em class="fa fa-bell noti-primary"></em>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="media-heading"><?php echo $list->schedule_name ?></h5>
                                                        <p class="m-0">
                                                            <small><?php echo $list->schedule_description ?></small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="icon-size-fullscreen"></i></a>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" class="right-bar-toggle waves-effect waves-light"><i class="icon-settings"></i></a>
                                </li>
                                <li class="dropdown top-menu-item-xs">
                                    <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                        <?php foreach ($admin as $list) { ?>
                                            <img src="http://localhost/Skripsi/assets/Template_Thesis_Admin/Admin/light/assets/images/users/<?php echo $list->user_photo ?>" alt="user-img" class="img-circle"> </a>
                                <?php } ?>

                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url(); ?>c_login/edit/<?php echo $id_user; ?>"><i class="ti-user m-r-10 text-custom"></i> Profile</a></li>
                                    <li><a href="<?php echo base_url(); ?>c_login/editPassword/<?php echo $id_user; ?>"><i class="ti-settings m-r-10 text-custom"></i>Change Password</a></li>
                                    <li><a href="javascript:void(0)"><i class="ti-lock m-r-10 text-custom"></i> Lock screen</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?php echo base_url() . 'c_login/logout' ?>"><i class="ti-power-off m-r-10 text-danger"></i> Logout</a></li>
                                </ul>
                                </li>
                            </ul>
                        <?php } ?>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->

        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">
                <!--- Divider -->
                <div id="sidebar-menu">
                    <ul>

                        <li class="has_sub">
                            <a href="<?php echo base_url() . 'c_admin/index' ?>" class="waves-effect"><i class="ti-home"></i> <span> Dashboard </span></a>
                        </li>

                        <li class="text-muted menu-title">Inventory & Order </li>


                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="ion-calendar"></i><span> Schedule </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="<?php echo base_url() . 'c_schedule/add_schedule' ?>">Add Schedule</a></li>
                                <li><a href="<?php echo base_url() . 'c_schedule/view_schedule' ?>">View Schedule</a></li>
                            </ul>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="ion-social-usd	"></i><span> Debt </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="<?php echo base_url() . 'c_debt/add_debt' ?>">Add Customer Debt</a></li>
                                <li><a href="<?php echo base_url() . 'c_debt/view_debt' ?>">View Debt</a></li>
                            </ul>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class=" md-perm-contact-cal"></i><span> Contact </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="<?php echo base_url() . 'c_contact/add_contact' ?>">Add Contact</a></li>
                                <li><a href="<?php echo base_url() . 'c_contact/view_contact' ?>">View List</a></li>
                            </ul>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="ion-android-archive"></i><span> Supplier </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="<?php echo base_url() . 'c_supplier/add_supplier' ?>">Add Supplier</a></li>
                                <li><a href="<?php echo base_url() . 'c_supplier/view_supplier' ?>">View Supplier</a></li>
                            </ul>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="ion-person-add"></i><span> Staff </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="<?php echo base_url() . 'c_staff/add_staff' ?>">Add Staff</a></li>
                                <li><a href="<?php echo base_url() . 'c_staff/view_staff' ?>">View Staff</a></li>
                            </ul>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="ion-person-stalker"></i><span> Employee </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="<?php echo base_url() . 'c_employee/add_employee' ?>">Add Employee</a></li>
                                <li><a href="<?php echo base_url() . 'c_employee/view_employee' ?>">View Employee</a></li>
                            </ul>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="ion-android-storage"></i><span> Inventory </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="<?php echo base_url() . 'c_inventory/add_inventory' ?>">Add Item</a></li>
                                <li><a href="<?php echo base_url() . 'c_inventory/view_inventory' ?>">View Item</a></li>
                                <li><a href="form-validation.html">Stock Adjustment</a></li>
                            </ul>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="ion-cube"></i><span> Batch </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="<?php echo base_url() . 'c_batch/add_batch' ?>">Add Batch</a></li>
                                <li><a href="<?php echo base_url() . 'c_batch/view_active_batch' ?>">View Active Batch</a></li>
                                <li><a href="<?php echo base_url() . 'c_batch/view_arrived_batch' ?>">View Arrived Batch</a></li>
                            </ul>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="ion-ios7-paper"></i><span> Order </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="<?php echo base_url() . 'c_order/add_order' ?>">Add Order</a></li>
                                <li><a href="<?php echo base_url() . 'c_order/view_order' ?>">View Order</a></li>
                            </ul>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="ion-ios7-cart"></i><span> Purchase </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="<?php echo base_url() . 'c_purchase/add_purchase' ?>">Add Purchase</a></li>
                                <li><a href="<?php echo base_url() . 'c_purchase/view_purchase' ?>">View Purchase</a></li>
                            </ul>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="ion-ios7-gear"></i><span> Operational </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="<?php echo base_url() . 'c_operational/add_operational' ?>">Add Operational</a></li>
                                <li><a href="<?php echo base_url() . 'c_operational/view_operational' ?>">View Operational</a></li>
                            </ul>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="ion-social-buffer"></i><span> Layouting </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="<?php echo base_url() . 'c_layout/layoutsatu' ?>">Layout 1</a></li>
                                <li><a href="<?php echo base_url() . 'c_layout/layoutdua' ?>">Layout 2</a></li>
                                <li><a href="<?php echo base_url() . 'c_layout/layoutiga' ?>">Layout 3</a></li>
                            </ul>
                        </li>



                        <li class="text-muted menu-title">Reporting System</li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="ion-ios7-download"></i><span>History</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="<?php echo base_url() . 'c_history/view_history_incoming' ?>">Arrived Inventory</a></li>
                                <li><a href="<?php echo base_url() . 'c_history/view_history_outward' ?>">outward Inventory</a></li>
                            </ul>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="ion-ios7-download"></i><span>Invoice</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="<?php echo base_url() . 'c_invoice/add_invoice' ?>">Add Invoice</a></li>
                                <li><a href="<?php echo base_url() . 'c_invoice/view_invoice' ?>">View Invoice</a></li>
                            </ul>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="ti-files"></i><span> Trip Report </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="<?php echo base_url() . 'c_history/view_history_incoming' ?>">Arrived Inventory</a></li>
                                <li><a href="<?php echo base_url() . 'c_history/view_history_outward' ?>">outward Inventory</a></li>
                            </ul>
                        </li>

                        <li class="text-muted menu-title">Paper Release</li>


                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="ion-ios7-compose"></i><span> Permit </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="<?php echo base_url() . 'c_permit/add_permit' ?>">Create Permit</a></li>
                                <li><a href="<?php echo base_url() . 'c_permit/view_permit' ?>">View Permit</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- Left Sidebar End -->
    </div>
</body>