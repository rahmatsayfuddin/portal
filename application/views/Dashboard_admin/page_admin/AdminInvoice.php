
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    <!-- START SIMPLE PANELS -->                
                    <div class="row">                    
                        <div class="col-md-12">

                            <!-- START PRIMARY PANEL -->
                            <div class="panel panel-primary">
                                
                                <div class="panel-body">
                                    <div class="col-md-12">
                                        <h3><span class="icon icon-filter" style="color: #ff0027;"></span> Data Invoice</h3>
                                    </div>
                                    
                                    <!-- START CHECKBOXES RADIO AND SELECT -->
                                    <form class="form-horizontal">
                                    
                                        <div class="form-group">
                                            <div class="col-md-12">  
                                                <div class="col-md-2 col-xs-6 control-label"><h4>Cari Data</h4></div>
                                                <div class="col-md-10 col-xs-6">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <span class="fa fa-search"></span>
                                                        </div>
                                                        <input type="text" id="search" name="search" class="form-control" placeholder="Cari Pelanggan"/>
                                                        <div class="input-group-btn">
                                                            <button class="btn btn-primary" onclick="search('Invoice');return false">Search</button>
                                                        </div>
                                                        <div class="input-group-btn">
                                                            <button class="btn btn-default" onclick="refresh('Invoice');return false">Refresh</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                    </form>
                                    <!-- END OF CHECKBOXES RADIO AND SELECT -->

                                </div>
                            
                            </div>
                            <!-- END PRIMARY PANEL -->

                            <!-- START PRIMARY PANEL -->
                            <div class="panel panel-primary">
                                <div class="panel-body">
                                    <div id="content-invoice" class="table-responsive" style="min-height: 200px;"></div>
                                </div>
                            </div>
                            <!-- END PRIMARY PANEL -->
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <!-- START TOOLTIPS -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">TelkomSigma</h3>
                                </div>       
                                <div class="panel-body">
                                    <button type="button" class="btn btn-danger popover-dismiss" title="Dismissible popover" data-content="And here's some amazing content. It's very engaging. Right?">Halaman ini dimuat dalam {elapsed_time} detik, Penggunaan memory {memory_usage}</button>
                                </div>
                            </div>
                            <!-- END TOOLTIPS -->
                        </div>
                    </div>
                </div>
