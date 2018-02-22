			
			<div role="main" class="main">
				<div class="cart">
					<div class="container">
						<h1 class="h2 heading-primary mt-lg clearfix">
							<span>Lihat Keranjang</span>
						</h1>
						<div><?php echo $this->session->flashdata('msgkeranjang'); ?></div>
						<div class="row">
							<div class="col-md-8 col-lg-9">
								<div class="cart-table-wrap">
									<table class="cart-table">
										<thead>
											<tr>
												<th></th>
												<th colspan="6">Nama Produk</th>
												<th colspan="2">Harga Produk</th>
											</tr>
										</thead>
										<tbody>
											<?php 
												foreach ($datacart as $key) {
											?>
											<tr>
												<td></td>
												<?php if ($key['id']==70) {
												?>
													<td colspan="6"><h4 class="product-name"><?php echo 'Paket '.$key['name']; ?></h4></td>
												<?php
												}else{
												?>
													<td colspan="6"><h4 class="product-name"><?php echo $key['name'].' - '.$key['options']['vcpupaket'].','.$key['options']['rampaket']; ?></h4></td>
												<?php } ?>
											</tr>
											<tr>
												<td rowspan="6" width="3%">
													<a href="<?php echo base_url().'Viewcart/hapuscartinview/'.$key['rowid'];?>" title="Remove product" class="btn-remove"><i class="fa fa-times"></i></a>
												</td>
												<td class="product-image-td" rowspan="6">
													<a href="#" title="Product Name">
														<img src="<?php echo base_url();?>assets_1/img/logo_sas_ias/vm.png" alt="Product Name">
													</a>
												</td>
												<td>
													<h6>VCPU</h6>
												</td>
												<td>
													<?php
														if ($key['id']=='70') {
															echo '<h6>: '.$key['options']['vcpu'].' vCPU</h6>';
														}else{
															echo '<h6>: '.$key['options']['vcpupaket'].'</h6>';
														}
													?>
												</td>
												<td></td>
												<td>
													<h6>RAM</h6>
												</td>
												<td>
													<?php
														if ($key['id']=='70') {
															echo '<h6>: '.$key['options']['ram'].' GB</h6>';
														}else{
															echo '<h6>: '.$key['options']['rampaket'].'</h6>';
														}
													?>
												</td>
												<td rowspan="6">
													<span class="text-primary">Rp <?php echo number_format($key['price']); ?></span>
												</td>
											</tr>
											<tr>
												<td>
													<h6>SATA</h6>
												</td>
												<td>
													<h6><?php echo ': '.$key['options']['sata'].' GB'; ?></h6>
												</td>
												<td></td>
												<td>
													<h6>SAS</h6>
												</td>
												<td>
													<h6><?php echo ': '.$key['options']['sas'].' GB'; ?></h6>
												</td>
											</tr>
											<tr>
												<td>
													<h6>IP Publik</h6>
												</td>
												<td>
													<h6><?php echo ': '.$key['options']['ip'].' IP'; ?></h6>
												</td>
												<td></td>
												<td>
													
												</td>
												<td>
													
												</td>
											</tr>
											<tr>
												<td>
													<h6>VNS Firewall</h6>
												</td>
												<td>
													<?php 
														if ($key['options']['firewall']=='1') {
															echo "<h6>: Ya</h6>";
														}else{
															echo "<h6>: Tidak</h6>";
														}
													?>
												</td>
												<td></td>
												<td>
													<h6>VNS Load Balancer</h6>
												</td>
												<td>
													<?php 
														if ($key['options']['loadbalancer']=='1') {
															echo "<h6>: Ya</h6>";
														}else{
															echo "<h6>: Tidak</h6>";
														}
													?>
												</td>
											</tr>
											<tr>
												<td>
													<h6>VNS VPN</h6>
												</td>
												<td>
													<?php 
														if ($key['options']['vpn']=='1') {
															echo "<h6>: Ya</h6>";
														}else{
															echo "<h6>: Tidak</h6>";
														}
													?>
												</td>
												<td></td>
												<td>
													<h6>Additional Vlan</h6>
												</td>
												<td>
													<?php 
														if ($key['options']['vlan']=='1') {
															echo "<h6>: Ya</h6>";
														}else{
															echo "<h6>: Tidak</h6>";
														}
													?>
												</td>
											</tr>
											<tr>
												<td>
													<h6>OS</h6>
												</td>
												<td>
													<?php 
														if ($key['options']['os']=='windows2008') {
															echo "<h6>: Windows Server 2008</h6>";
														}else if ($key['options']['os']=='windows2012') {
															echo "<h6>: Windows Server 2012</h6>";
														}else if ($key['options']['os']=='windows2012r2') {
															echo "<h6>: Windows Server 2012 R2</h6>";
														}else if ($key['options']['os']=='remote') {
															echo "<h6>: Windows Remote Dekstop Service</h6>";
														}else if ($key['options']['os']=='linux') {
															echo "<h6>: Ret Hat Linux Enterprice</h6>";
														}else{
															echo "<h6>: Tidak</h6>";
														}
													?>
												</td>
												<td></td>
												<td>
													<h6>Database</h6>
												</td>
												<td>
													<?php 
														if ($key['options']['db']=='web') {
															echo "<h6>: MYSQL Server Web</h6>";
														}else if ($key['options']['db']=='standart') {
															echo "<h6>: MYSQL Server Standart</h6>";
														}else if ($key['options']['db']=='enterprice') {
															echo "<h6>: MYSQL Server Enterprice</h6>";
														}else{
															echo "<h6>: Tidak</h6>";
														}
													?>
												</td>
											</tr>
											<?php } ?>
										</tbody>
										<tfoot>
											<tr>
												<td colspan="8" class="clearfix">
													<a href="<?php echo base_url();?>Toko">
														<button class="btn btn-danger hover-primary btn-continue">Melanjutkan Belanja</button>
													</a>
													<a href="<?php echo base_url();?>Viewcart/Bersihkan">
														<button class="btn btn-default hover-primary btn-clear">Bersihkan Keranjang</button>
													</a>
												</td>
											</tr> 
										</tfoot>	
									</table>
								</div>
							</div>
							<aside class="col-md-4 col-lg-3 sidebar shop-sidebar">
								<div class="panel-group">

									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a class="accordion-toggle" data-toggle="collapse" href="#panel-cart-total">
													Total Belanja
												</a>
											</h4>
										</div>
										<div id="panel-cart-total" class="accordion-body collapse in">
											<div class="panel-body">
												<table class="totals-table">
													<tbody>
														<tr>
															<td>Total</td>
															<td>Rp <?php echo number_format($this->cart->total()); ?></td>
														</tr>
														<tr>
															<td>Pajak 10%</td>
															<td>Rp <?php echo number_format($ppn);?></td>
														</tr>
														<tr>
															<td>GrandTotal</td>
															<td>Rp <?php echo number_format($grandtotal);?></td>
														</tr>
													</tbody>
												</table>
												<div class="totals-table-action">
													<form method="POST" action="<?php echo base_url();?>Finnet" target="_blank">
														
														<select id="method" name='method' required="">
		                                                    <option value=""><center>Pilih Metode Kartu Kredit</center></option>
		                                                    <option value="1">Kartu Kredit</option>
		                                                    <option value="2">Kartu kredit Recurring</option>
		                                                </select>
		                                                <input type="hidden" name="customer" id="customer" value="<?php echo $this->session->userdata('idcust'); ?>">
														<input type="hidden" name="product" id="product" value="<?php echo $key['id']; ?>">
														<input type="hidden" name="amount" id="amount" value="<?php echo $this->cart->total(); ?>">
														<button style="border-radius: 5px;" type="Submit" value="Submit" class="btn btn-primary btn-block">Proses ke Pembayaran</button>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</aside>
						</div>

						
					</div>
				</div>

			</div>