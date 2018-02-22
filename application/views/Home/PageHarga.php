    <div role="main" class="main" style="margin-bottom:50px;">
        <section class="page-header">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="#">Beranda</a></li>
                    
                    <li><a href="#">Harga</a></li>
                    
                </ul>
            </div>
        </section>
        
        <div class="container">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="row">               
                    <aside class="col-md-2 col-sm-2 col-xs-2 sidebar shop-sidebar">
                        <div class="panel-group">
                            <div class="toolbar mb-none">
                                <h2>Kategori</h2>
                            </div>
                            <br>
                            <div class="panel panel-default" style="padding-top: 10px;">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" href="#panel-filter-category">
                                            Compute
                                        </a>
                                    </h4>
                                </div>
                                <div id="panel-filter-category" class="accordion-body collapse in">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="<?php echo base_url() ?>Harga">vMachine</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                        
                        
                        <div class="col-md-6 col-sm-6 col-xs-6 sidebar shop-sidebar ">
                            <div class="toolbar mb-none">
                                <h2>Virtual Machine</h2>
                            </div>
                            <br>
                            <div class="panel panel-default" style="padding-top: 10px;">
                                <div class="panel-heading" style="border: solid 1px #dddddd;">
                                    <h4 class="panel-title">
                                        Compute
                                    </h4>
                                </div>
                                <div id="panel-filter-category" class="accordion-body collapse in">
                                    <div class="panel-body">
                                        <form class="form-horizontal form-pricing" style="padding-bottom:0px;" role="form">
                                            
                                            <div class="price-slider">
                                                
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <p style="font-style:bold">vCPU</p>
                                                    </div>
                                                    <div class="col-md-9">   
                                                        <div class="col-sm-12">
                                                            <div id="slider"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="price-slider">
                                                
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <p style="font-style:bold">RAM (GB)</p>
                                                    </div>
                                                    <div class="col-md-9">   
                                                        <div class="col-sm-12">
                                                            <div id="slider2"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </form> 
                                    </div>
                                </div>
                            </div>
                            
                            <div class="panel panel-default" style="padding-top: 10px;">
                                <div class="panel-heading" style="border: solid 1px #dddddd;">
                                    <h4 class="panel-title">
                                        Storage
                                    </h4>
                                </div>
                                <div id="panel-filter-category" class="accordion-body collapse in">
                                    <div class="panel-body">
                                        <form class="form-horizontal form-pricing" style="padding-bottom:0px;" role="form">
                                            
                                            <div class="price-slider">
                                                
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <p style="font-style:bold">SATA (GB)</p>
                                                    </div>
                                                    <div class="col-md-9">   
                                                        <div class="col-sm-12">
                                                            <div id="slider3"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="price-slider">
                                                
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <p style="font-style:bold">SAS (GB)</p>
                                                    </div>
                                                    <div class="col-md-9">   
                                                        <div class="col-sm-12">
                                                            <div id="slider4"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form> 
                                    </div>
                                </div>
                            </div>
                            
                            <div class="panel panel-default" style="padding-top: 10px;">
                                <div class="panel-heading" style="border: solid 1px #dddddd;">
                                    <h4 class="panel-title">
                                        Cloud Network Services
                                    </h4>
                                </div>
                                <div id="panel-filter-category" class="accordion-body collapse in">
                                    <div class="panel-body">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="col-md-3 col-sm-3 col-xs-3"><p>IP Public</p></div>
                                            <div class="col-md-9">   
                                                <div class="col-sm-12">
                                                    <div id="slider5"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12" style="margin-left: -20px;">
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                
                                                <form action="" id="firewallform" name="firewallform" onsubmit="return false;">
                                                    <div class="checkbox">
                                                        <label style="font-size: 1em">
                                                            <input type="checkbox" id="includeFirewalls" name="includeFirewalls" value="" onclick="firewallTotal() + TotalSemua()">
                                                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                                           VNS Firewall
                                                        </label>
                                                    </div>
                                                </form>
                                                
                                                
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <form action="" id="vpnform" onsubmit="return false;">
                                                    <div class="checkbox">
                                                        <label style="font-size: 1em">
                                                            <input type="checkbox" id="includeVpns" value="" onclick="vpnTotal() + TotalSemua()">
                                                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                                            VNS VPN
                                                        </label>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12" style="margin-left: -20px;">
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <form action="" id="loadform" onsubmit="return false;">
                                                    <div class="checkbox">
                                                        <label style="font-size: 1em">
                                                            <input type="checkbox" id="includeLoads" value="" onclick="loadTotal() + TotalSemua() ">
                                                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                                            VNS Load Balancer
                                                        </label>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <form action="" id="vlanform" onsubmit="return false;">
                                                    <div class="checkbox">
                                                        <label style="font-size: 1em">
                                                            <input type="checkbox" id="includeVlans" value="" onclick="vlanTotal() + TotalSemua()">
                                                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                                            Additional vLAN
                                                        </label>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="panel panel-default" style="padding-top: 10px;">
                                <div class="panel-heading" style="border: solid 1px #dddddd;">
                                    <h4 class="panel-title">
                                        Cloud Software Services
                                    </h4>
                                </div>
                                <div id="panel-filter-category" class="accordion-body collapse in">
                                    <div class="panel-body">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="col-md-2 col-sm-2 col-xs-2">
                                                <p>OS</p>
                                            </div>
                                            <div class="col-md-10 col-sm-10 col-xs-10">
                                                <form action="" id="cakeform" onsubmit="return false;">
                                                    <select id="filling" name='filling' onchange="calculateTotal() + TotalSemua()">
                                                        <option value="None">Select OS</option>
                                                        <option value="windows2008">Windows Server 2008</option>
                                                        <option value="windows2012">Windows Server 2012</option>
                                                        <option value="windows2012r2">Windows Server 2012 R2</option>
                                                        <option value="remote">Windows Remote Dekstop Service</option>
                                                        <option value="linux">Red Hat Linux Enterprice</option>
                                                    </select>
                                                </form>
                                            </div>
                                        </div>
                                        <br><br><br><br>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="col-md-2 col-sm-2 col-xs-2">
                                                <p>Database</p>
                                            </div>
                                            <div class="col-md-10 col-sm-10 col-xs-10">
                                                <form action="" id="cakeform2" onsubmit="return false;">
                                                    <select id="databaseselect" name='databaseselect' onchange="databaseTotal() + TotalSemua()">
                                                        <option value="None">Select Database</option>
                                                        <option value="web">MYSQL SERVER WEB</option>
                                                        <option value="standart">MYSQL SERVER STANDART</option>
                                                        <option value="enterprice">MYSQL SERVER Enterprice</option>
                                                    </select>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                        
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <div class="toolbar mb-none">
                                <h2>Rincian</h2>
                            </div>
                            <br>
                            <div style="background-color:#666666;height:875px;margin-top:10px;">
                                <div class="price-form">
                                    <div style="background-color:#666666;height:700px;">
                                        <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top:10px;">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <h3 style="font-size:15px;color:#ff5757">Compute</h3>
                                                    <div class="col-md-7 col-sm-7 col-xs-7">
                                                        <h2 style="font-size:12px;color:#ffffff"><span id="amount-label"></span> vCPU</h2>
                                                        <h2 style="font-size:12px;color:#ffffff"><span id="duration-label"></span> Gb/RAM</h2>
                                                    </div>
                                                    <div class="col-md-5 col-sm-5 col-xs-5">
                                                        <h2 style="font-size:12px;color:#ffffff"><span id="total-label1"></span></h2>
                                                        <h2 style="font-size:12px;color:#ffffff"><span id="total-label2"></span></h2>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <h3 style="font-size:15px;color:#ff5757">Storage</h3>
                                                    <div class="col-md-7 col-sm-7 col-xs-7">
                                                        <h2 style="font-size:12px;color:#ffffff"><span id="sata-label"></span> GB/SATA</h2>
                                                        <h2 style="font-size:12px;color:#ffffff"><span id="sas-label"></span> GB/SAS</h2>
                                                    </div>
                                                    <div class="col-md-5 col-sm-5 col-xs-5">
                                                        <h2 style="font-size:12px;color:#ffffff"><span id="total-label3"></span></h2>
                                                        <h2 style="font-size:12px;color:#ffffff"><span id="total-label4".></span></h2>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <h3 style="font-size:15px;color:#ff5757">Cloud Network Services</h3>
                                                    <div class="col-md-7 col-sm-7 col-xs-7">
                                                        <h2 style="font-size:12px;color:#ffffff"><span id="ip-label"></span> - IP public</h2>
                                                        <h2 style="font-size:12px;color:#ffffff">Firewall</h2>
                                                        <h2 style="font-size:12px;color:#ffffff">VPN</h2>
                                                        <h2 style="font-size:12px;color:#ffffff">Load Balancer</h2>
                                                        <h2 style="font-size:12px;color:#ffffff">VLAN</h2>
                                                        <div id="includecandles"w></div>                            
                                                    </div>
                                                    <div class="col-md-5 col-sm-5 col-xs-5">
                                                        <h2 style="font-size:12px;color:#ffffff"><span id="total-label5"></span></h2>
                                                        <h2 style="font-size:12px;color:#ffffff"><span id="totalPriceFirewall">Rp. 0</span></h2>
                                                        <h2 style="font-size:12px;color:#ffffff"><span id="totalPriceVpn">Rp. 0</span></h2>
                                                        <h2 style="font-size:12px;color:#ffffff"><span id="totalPriceLoad">Rp. 0</span></h2>
                                                        <h2 style="font-size:12px;color:#ffffff"><span id="totalPriceVlan">Rp. 0</span></h2>    
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <h3 style="font-size:15px;color:#ff5757">Cloud Software Services</h3>
                                                    <div class="col-md-7 col-sm-7 col-xs-7">
                                                        <h2 style="font-size:12px;color:#ffffff">Operating System</h2>
                                                        <h2 style="font-size:12px;color:#ffffff">Database</h2>                          
                                                    </div>
                                                    <div class="col-md-5 col-sm-5 col-xs-5">
                                                        <h2 style="font-size:12px;color:#ffffff"><span id="totalPriceos">Rp. 0</span></h2>
                                                        <h2 style="font-size:12px;color:#ffffff"><span id="totalPricedb">Rp. 0</span></h2>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <hr class="" style="width: 100%;margin-left:0px;height:3px;background-color:#ffffff">
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                                <h3 style="text-align:center;color: #fefefe;"><b>
                                                    <span name="totalPricesemua" id="totalPricesemua">Rp. 0</span></b>
                                                </h3>
                                                <span id="total-slider"></span>
                                                    <form  method="POST" action="<?php echo base_url();?>Cart/add_cart">
                                                        
                                                        <input type="hidden" id="pack_id" name="pack_id" value="70" class="form-control">
                                                        <input type="hidden" id="prod_id" name="prod_id" value="10" class="form-control">
                                                        <input type="hidden" id="pack_name" name="pack_name" value="VMachine Ala Carte" class="form-control">

                                                        <input type="hidden" id="amount" name="amount" class="form-control">
                                                        <input type="hidden" id="duration" name="duration" class="form-control">
                                                        <input type="hidden" id="sata" name="sata" class="form-control">
                                                        <input type="hidden" id="sas" name="sas" class="form-control">
                                                        <input type="hidden" id="ip" name="ip" class="form-control">
                                                        <input type="hidden" id="firewall" name="firewall" class="form-control">
                                                        <input type="hidden" id="load_balancer" name="load_balancer" class="form-control">
                                                        <input type="hidden" id="vpn" name="vpn" class="form-control">
                                                        <input type="hidden" id="vlan" name="vlan" class="form-control">
                                                        <input type="hidden" id="os" name="os" class="form-control">
                                                        <input type="hidden" id="db" name="db" class="form-control">
                                                        
                                                        <input type="hidden" id="totalall" name="totalall" class="form-control">

                                                        <button type="Submit" value="Submit" class="btn btn-primary">TAMBAHKAN ORDER</button>
                                                    </form>                                                            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>