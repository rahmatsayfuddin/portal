    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        
                        <img src="<?php echo base_url(); ?>assets_2/logo.png" width="220" height="100" style="display: block;margin: 0 auto;">
                        
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="<?php echo base_url(); ?>assets_2/assets/images/abu2.png" alt="John Doe"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="<?php echo base_url(); ?>assets_1/img/men.png" alt="John Doe"/>
                            </div>
                            <div class="panel-body">                                                            
                                <center>
                                    <span class="label label-danger btn-block label-form" style="border-radius: 20px;background-color: #ed3237;padding-top: 15px;color: white;"><h3>Admin</h3></span>
                                </center>
                            </div>   
                        </div>                                                                        
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>Admin/MyAccount"><span class="fa fa-user-circle-o"></span> <span class="xn-text">My Account</span></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>Admin/Customer"><span class="fa fa-users"></span> <span class="xn-text">Customer</span></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>Admin/Invoice"><span class="fa fa-credit-card"></span> <span class="xn-text">Invoice</span></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>Admin/Product"><span class="fa fa-database"></span> <span class="xn-text">Product</span></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>Admin/Package"><span class="fa fa-archive"></span> <span class="xn-text">Package</span></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>Admin/Support"><span class="icon icon-support" style="font-size: 22px;"></span>&nbsp;&nbsp;&nbsp;<span class="xn-text">Support</span></a>
                    </li> 
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span style="font-size: 25px;" class="fa fa-arrow-circle-o-left"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#"><span style="font-size: 25px;" class="fa fa-bell"></span></a>
                        <div class="informer informer-danger">4</div>                     
                    </li>
                    <!-- END MESSAGES -->
                    <!-- TASKS -->
                    <li class="xn-icon-button">
                        <a href="#"><span style="font-size: 25px;" class="fa fa-question-circle"></span></a>                        
                    </li>
                    <!-- END TASKS -->
                    <!-- TASKS -->
                    <li class="xn-icon-button pull-right">
                        <a href="#"><span class="fa fa-user"></span></a>
                        <div class="informer informer-warning">3</div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-tasks"></span> User Management</h3>                                
                                <div class="pull-right">
                                    <span class="label label-warning">3 active</span>
                                </div>
                            </div>
                            <div class="panel-body list-group scroll" style="height: 150px;">                                
                                <a class="list-group-item" href="<?php echo base_url() ?>Dashboard_admin/changeprofileadmin">
                                    <button class="btn btn-primary btn-block">Change Profile</button>
                                </a>
                                <a class="list-group-item" href="<?php echo base_url() ?>Dashboard_admin/changepassadmin/">
                                    <button class="btn btn-primary btn-block">Change Password</button>
                                </a>
                                <a class="list-group-item" href="<?php echo base_url() ?>Admin/Logout/">
                                    <button class="btn btn-primary btn-block">Logout</button>
                                </a>                                
                            </div>     
                            <div class="panel-footer text-center">
                                <a href="pages-tasks.html">Show all tasks</a>
                            </div>                            
                        </div>                        
                    </li>
                    <!-- END TASKS -->
                    <!-- SEARCH -->
                    <li class="xn-search pull-right">
                        <form role="form">
                            <input type="text" name="search" placeholder="Search..."/ style="border-radius: 20px;border-color: white;">
                        </form>
                    </li>   
                    <!-- END SEARCH -->
                    <!-- SIGN OUT 
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    END SIGN OUT -->
                    <!-- MESSAGES -->
                    
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">                
                    <li class="active"></li>
                </ul>
                <!-- END BREADCRUMB --> 