	<?php
		foreach ($users as $key) {
			$CUST_PICT = $key->CUST_PICT;
		}												
	?>
	
	<!-- Page Dashboard Admin -->
	<div role="main" class="main">
		<div class="container">
			<div class="row">
				<br>
			</div><!-- ROW -->
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-3">
							<div class="tabs tabs-vertical tabs-left tabs-navigation">
										<ul class="nav nav-tabs col-sm-3">
											<li class="active">
												<a href="#tabsNavigation1" data-toggle="tab"><i class="fa fa-user-circle"></i> Akun Saya</a>
											</li>
											<!--
											<li>
												<a href="#tabsNavigation2" data-toggle="tab"><i class="fa fa-user-o"></i> Profil</a>
											</li>
											<li>
												<a href="#tabsNavigation3" data-toggle="tab"><i class="fa fa-server"></i> Produk</a>
											</li>
											-->
											<li>
												<a href="#tabsNavigation3" data-toggle="tab"><i class="fa fa-clock-o"></i> Riwayat Transaksi</a>
											</li>
											<!--
											<li>
												<a href="#tabsNavigation5" data-toggle="tab"><i class="fa fa-group"></i> Support</a>
											</li>
											-->
										</ul>
							</div>
						</div> <!-- COL MD 3 -->
						<div class="col-md-9">
							<div class="tab-pane tab-pane-navigation active" id="tabsNavigation1">
								<div class="container">
											
											<div class="row">
												<div class="col-md-8 col-sm-12">
													<img class="pull-left" width="100" src="<?php echo base_url();?>assets_1/img/<?php echo $CUST_PICT;?>" alt="">
												</div>
											</div>
											<div class="row">
												<div class="pricing-table">
													<div class="col-md-9 col-sm-12">	
														<div class="plan" style="text-align: left;">
															<h3>Profil</h3>
															<ul>
																<li><strong>Nama</strong> <?php echo $key->CUST_NAME; ?></li>
																<li><strong>E-mail</strong> <?php echo $key->CUST_EMAIL; ?></li>
																<li><strong>Password</strong> <a href="<?php echo base_url();?>Customers/changepass">Ganti Password</a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											
								</div>
							</div> <!-- TAB NAV1 -->
							<div class="tab-pane tab-pane-navigation" id="tabsNavigation2">
								<div class="container">
											<div class="row">
												<div class="col-md-8 col-sm-12">
													<img class="pull-left" width="100" src="img/article/mou2.png" alt="">
												</div>
											</div>
											<div class="row">
												<div class="pricing-table">
													<div class="col-md-9 col-sm-12">
														<div class="plan" style="text-align: left;">
															<h3>Profil</h3>
															<ul>
																<li><strong>Nama</strong> Fiki Kurnia Robby</li>
																<li><strong>E-mail</strong> </li>
																<li><strong>Password</strong> <a href="#">Ganti Password</a></li>
															</ul>
														</div>
													</div>

												</div>
											</div>
								</div>
							</div> <!-- TAB NAV2 -->
							<div class="tab-pane tab-pane-navigation" id="tabsNavigation3">
								<section class="panel panel-admin">
											<header class="panel-heading">
												<div class="panel-actions">
													<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
													<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
												</div>
										
												<h2 class="panel-title">Data Invoice</h2>
											</header>
											<div class="panel-body">
												<div class="table-responsive">
													<table class="table table-bordered table-striped table-condensed mb-none">
														<thead>
															<tr>
																<th>No</th>
																<th>InvoiceNo</th>
																<th class="text-right">PackID</th>
																<th class="text-right">InvAmount</th>
																<th class="text-right">InvDate</th>
																<th class="text-right">InvTotal</th>
																<th class="text-right">BillingMode</th>
															</tr>
														</thead>
														<tbody>
															<?php
																$no=0;
																foreach ($invoice as $kunci) {
																$no++;
															?>
															<tr>
																<td><?php echo $no; ?></td>
																<td class="text-right"><?php echo $kunci->INV_NO;?></td>
																<td class="text-right"><?php echo $kunci->PACK_ID;?></td>
																<td class="text-right"><?php echo number_format($kunci->INV_AMOUNT);?></td>
																<td class="text-right"><?php echo $kunci->INV_DATE;?></td>
																<td class="text-right"><?php echo number_format($kunci->INV_TOTAL);?></td>
																<td class="text-right"><?php echo $kunci->BILLING_MODE;?></td>
															</tr>
															<?php
																}
															?>
														</tbody>
													</table>
												</div>
											</div>
								</section>
							</div> <!-- TAB NAV3 -->
							
							<div class="tab-pane tab-pane-navigation" id="tabsNavigation5">
										<h4>Sliders</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia.</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula. Fusce eget metus lorem, ac viverra leo. Nullam convallis, arcu vel pellentesque sodales, nisi est varius diam, ac ultrices sem ante quis sem. Proin ultricies volutpat sapien, nec scelerisque ligula mollis lobortis.</p>
							</div> <!-- TAB NAV5 -->
							<div class="tab-pane tab-pane-navigation" id="tabsNavigation6">
										<h4>Icons</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia.</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula. Fusce eget metus lorem, ac viverra leo. Nullam convallis, arcu vel pellentesque sodales, nisi est varius diam, ac ultrices sem ante quis sem. Proin ultricies volutpat sapien, nec scelerisque ligula mollis lobortis.</p>
							</div><!-- TAB NAV6 -->
						</div> <!-- COL MD 9 -->
					</div><!-- ROW -->
				</div><!-- COL MD 12 -->
			</div><!-- ROW -->
		</div><!-- container -->
	</div><!-- Page Dashboard Admin -->