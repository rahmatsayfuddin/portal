			<div role="main" class="main">
				<div class="cart">
					<div class="container">
						<h1 class="h2 heading-primary mt-lg clearfix">
							<span>Lihat Keranjang</span>
						</h1>
						<div class="row">
							<div><?php echo $this->session->flashdata('msgkeranjang'); ?></div>
						</div>
						<div class="row">
							<div class="col-md-8 col-lg-9">
								<div class="cart-table-wrap">
									<table class="cart-table">
										<thead>
											<tr>
												<th></th>
												<th></th>
												<th>Product Name</th>
												<th>Addons</th>
												<th>Unit Price</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="product-action-td">
													
												</td>
												<td class="product-image-td">
													
												</td>
												<td class="product-name-td">
													
												</td>
												<td></td>
												<td>
												</td>
											</tr>
											
										</tbody>
										<tfoot>
											<tr>
												<td colspan="6" class="clearfix">
													<a href="<?php echo base_url();?>Toko">
														<button class="btn btn-default hover-primary btn-continue">Melanjutkan Belanja</button>
													</a>
													<button class="btn btn-default hover-primary btn-clear">Bersihkan Keranjang</button>
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
															<td>Rp 0</td>
														</tr>
														<tr>
															<td>Pajak 10%</td>
															<td>Rp 0</td>
														</tr>
														<tr>
															<td>GrandTotal</td>
															<td>Rp 0</td>
														</tr>
													</tbody>
												</table>
												<div class="totals-table-action">
													
														<button type="Submit" value="Submit" class="btn btn-primary btn-block" disabled="" style="color: #000000;">Proceed to Checkout</button>
													
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