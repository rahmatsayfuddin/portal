
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    <!-- START SIMPLE PANELS -->                
                    <div class="row">                    
                        <div class="col-md-10 col-md-offset-1">

                            <!-- START PRIMARY PANEL -->
                            <div class="panel panel-primary">
                                
                                <div class="panel-body">
                                    <div class="col-md-12">
                                        <h3><span class="icon icon-filter" style="color: #ff0027;"></span> Data Admin</h3>
                                    </div>
                                </div>
                            
                            </div>
                            <!-- END PRIMARY PANEL -->
                            <?php foreach ($officer as $key) {
                            ?>
                            <!-- START PRIMARY PANEL -->
                            <div class="panel panel-primary">
                                <div class="panel-body">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>CUST ID</td>
                                                <td>: <?php echo $key->OFFICER_ID; ?></td>
                                                <td><button class="btn btn-default"><i class="glyphicon glyphicon-home"></i></button></td>
                                            </tr>
                                            <tr>
                                                <td>CUST ID</td>
                                                <td>: <?php echo $key->OFFICER_NAME; ?></td>
                                            </tr>
                                            <tr>
                                                <td>CUST ID</td>
                                                <td>: <?php echo $key->OFFICER_EMAIL; ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END PRIMARY PANEL -->
                            <?php } ?>
                        </div>

                    </div>
                </div>