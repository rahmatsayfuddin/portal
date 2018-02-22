<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>Login</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" href="<?php echo base_url(); ?>assets_2/favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url(); ?>assets_2/css/theme-red.css"/>
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
        
        <div class="login-container">
        
            <div class="login-box animated fadeInDown">
                <center>
                    <h3 style="color: white;">TelkomCloud Admin</h3>
                </center>
                <div class="login-body">
                    <div class="login-title"><strong>Log In</strong> to your account Admin</div>
                    <div><?php echo $this->session->flashdata('msgloginadmin'); ?></div>
                    <form action="<?php echo base_url();?>Admin/ActionLogin" class="form-horizontal" method="post">
                        <div class="form-group">
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" placeholder="E-mail Address" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6">
                                <a href="<?php echo base_url(); ?>Dashboard_admin/forgetpassadmin" class="btn btn-link btn-block">Forgot your password?</a>
                            </div>
                            <div class="col-md-6">
                                <button type="Submit" value="Submit" class="btn btn-info btn-block">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; 2017 TelkomCloud
                    </div>
                    <div class="pull-right">
                        <a href="<?php echo base_url(); ?>Home/terms/">Terms and Conditions</a> |
                        <a href="<?php echo base_url(); ?>Home/privacy/">Privacy</a> |
                        <a href="<?php echo base_url(); ?>">Contact Us</a>
                    </div>
                </div>
            </div>
            
        </div>
        
    </body>
</html>