	<!-- comingsoon -->
	<div role="main" class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 p-none" style="margin-top:-35px;">
                    <section class="parallax section section-parallax match-height" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="<?php echo base_url();?>assets_1/img/bg_header.png">
                        <div class="row">
                            <div class="container-fluid">
                                <div class="col-md-12">
									<div class="col-md-2" ></div>
										<div class="col-md-10" style="margin-bottom:-20px;">
											<img src="<?php echo base_url();?>assets_1/img/ic_cloud_1x1.png" alt="">
										</div>
									</div>
									<div class="col-md-12">
									<div class="col-md-2"></div>
									<div class="col-md-5">
										<h1 style="font-size:35px;margin-bottom:0px;font-weight:500">TELKOM<b>CLOUD</b></h1>
									</div>
									<div class="col-md-4">
									<?php 
										$logged_in = $this->session->userdata('status')=='login' && ($this->session->userdata('level')=='customers');
										if($logged_in){
									?>
										<a href="<?php echo base_url();?>Users" class="tp-caption btn btn-lg btn-primary" style="border-radius: 5px;">Dashboard User</a>
									<?php
										}else{
									?>
										<a href="<?php echo base_url();?>Home/Akun" class="tp-caption btn btn-lg btn-primary" style="border-radius: 5px;">Daftar Sekarang</a>
									<?php
										}
									?>
									</div>			
									</div>
									<div class="col-md-12">
									<div class="col-md-2"></div>
									<div class="col-md-4"><b style="font-size:34px;color:#000000">World Of Cloud</b></div>
								</div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div><!-- comingsoon -->
	<!-- PAGE SHOP -->
	<div role="main" class="main shop">
		<div class="container">
			
			<div class="row" style="border-bottom: solid 2px #cccccc !important">
                <div class="col-md-6">
                    <h3 class="mb-none"><strong>PRODUK TELKOMCLOUD</strong></h3><br>
                    <p>10 Produk Ditemukan</p>
                </div> <!-- COL MD 6 -->
                <div class="col-md-6">
					<div class="col-md-12 pull-right">
						<form class="form-horizontal form-bordered" method="get">
							<div class="form-group">
								<select class="pull-right">
									<option>Semua</option>
									<option>Favorit</option>
									<option>Pilihan</option>
								</select>
							</div> <!-- fORM2 -->
						</form>
					</div> <!-- COL MD 3 -->	
				</div> <!-- COL MD 6 -->
            </div> <!-- ROW -->

            <br>
			<div class="row">
				<div class="col-md-3">
                    <div class="panel-group" id="accordion6">
                        <div class="panel panel-default" style="border: none !important;">
                            <div class="panel-heading" style="background-color: #da2632;border-top-left-radius: 10px;
                            border-top-right-radius: 10px;">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" style="color: #ffffff;" data-parent="#accordion6" href="#collapse6One">
                                    KATEGORI
                                </a>
                            </h4>
                        </div>
                        <div id="collapse6One" class="accordion-body collapse in">
                            <div class="panel-body">
                                
                                <div class="panel-group" id="accordion1">
                                    <div class="panel panel-default" style="border: none;box-shadow: none !important;">
                                        <div class="panel-heading" style="background-color: #da263200;">
                                            <h4 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" style="    color: #000000;" data-parent="#accordion1" href="#collapse1">
                                                    <div class="col-md-12" style="padding-bottom: 5px;border-bottom: solid 2px #fafafa;">
                                                        <div class="col-md-6" style="color:#da2632">Semua</div>
                                                        <div class="col-md-6"><i class="icon-arrow-down	 icons" style="top: 5px;left: 55px;"></i></div>
                                                    </div>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapse1" class="accordion-body collapse in">
                                            <div class="panel-body">
                                                
                                                <div class="panel-group" id="accordion11">
                                                    <div class="panel panel-default" style="border: none;box-shadow: none !important;">
                                                        <div class="panel-heading" style="background-color: #da263200;">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle" data-toggle="collapse" style="    color: #000000;" data-parent="#accordion11" href="#collapse11">
                                                                    <div class="col-md-12" style="padding-bottom: 5px;border-bottom: solid 2px #fafafa;">
                                                                        <div class="col-md-6">Compute</div>
                                                                        <div class="col-md-6"><i class="icon-arrow-down	 icons" style="top: 5px;left: 55px;"></i></div>
                                                                    </div>
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse11" class="accordion-body collapse in">
                                                            <div class="panel-body" style="margin-top: 10px;">
                                                                
                                                                <ul style="border-bottom: solid 2px #fafafa"><a href="<?php echo base_url(); ?>Toko/ProductvMachine">vMachine</a></ul>
																<ul style="border-bottom: solid 2px #fafafa"><a href="<?php echo base_url(); ?>Toko/ProductDataCenter">vDataCenter</a></ul>
																<ul style="border-bottom: solid 2px #fafafa"><a href="<?php echo base_url(); ?>Toko/ProductFreeHosting">Hosting</a></ul>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel-group" id="accordion12">
                                                    <div class="panel panel-default" style="border: none;box-shadow: none !important;">
                                                        <div class="panel-heading" style="background-color: #da263200;">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle" data-toggle="collapse" style="    color: #000000;" data-parent="#accordion12" href="#collapse12">
                                                                    <div class="col-md-12 " style="padding-bottom: 5px;border-bottom: solid 2px #fafafa;">
                                                                        <div class="col-md-6">Aplikasi</div>
                                                                        <div class="col-md-6"><i class="icon-arrow-down	 icons" style="top: 5px;left: 55px;"></i></div>
                                                                    </div>
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse12" class="accordion-body collapse in">
                                                            <div class="panel-body" style="margin-top: 10px;">
                                                                <ul style="border-bottom: solid 2px #fafafa"><a href="<?php echo base_url(); ?>Toko/ProductEOffice">E-Office</a></ul>
																<ul style="border-bottom: solid 2px #fafafa"><a href="<?php echo base_url(); ?>Toko/ProductEKelurahan">E-Kelurahan</a></ul>
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
                    </div> </div>
                </div> <!-- COL MD 3 -->

				<div class="col-md-9">

					<div class="masonry-loader masonry-loader-showing">
								<ul class="products product-thumb-info-list" data-plugin-masonry>
									
									<li class="col-md-4 col-sm-12 col-xs-12 product">
										<span class="product-thumb-info">
											<a href="<?php echo base_url(); ?>Toko/ProductvMachine">
												<span class="product-thumb-info-image">
													<span class="product-thumb-info-act">
														<button style="border-radius: 20px;" type="button" class="btn btn-borders btn-secondary mr-xs mb-sm">Lihat</button>
														<button style="border-radius: 20px;" type="button" class="btn btn-default mr-xs mb-sm">Beli</button>
													</span>
													<span class="product-thumb-info-content">
															<div class="product-ratings">
																<div class="ratings-box">
																	<div class="rating" style="width:90%"></div>
																</div>    
															</div><!--
															<div class="ribbon-wrapper2">
																<div class="ribbon2">Featured</div>
															</div>-->
													</span>
													<img alt="" class="img-responsive" src="<?php echo base_url();?>assets_1/img/produk/telkomcloud.png">
													<span class="product-thumb-info-content">
														<h6>TelkomCloud Server merupakan server yang dirancang untuk memenuhi kebutuhan Anda</h6>
														<h6>by TelkomSigma</h6>
													</span>
												</span>
											</a>		
										</span>
									</li>
									<li class="col-md-4 col-sm-12 col-xs-12 product">
										<span class="product-thumb-info">
											<a href="<?php echo base_url(); ?>Toko/ProductDataCenter">
												<span class="product-thumb-info-image">
													<span class="product-thumb-info-act">
														<button style="border-radius: 20px;" type="button" class="btn btn-borders btn-secondary mr-xs mb-sm">Lihat</button>
														<button style="border-radius: 20px;" type="button" class="btn btn-default mr-xs mb-sm">Beli</button>
													</span>
													<span class="product-thumb-info-content">
														<div class="product-ratings">
															<div class="ratings-box">
																<div class="rating" style="width:90%"></div>
															</div>    
														</div>
													</span>
													<img alt="" class="img-responsive" src="<?php echo base_url();?>assets_1/img/produk/vdatacenter.png">
													<span class="product-thumb-info-content">
														<h6>vData Center memungkinkan Anda membangun sebuah mesin virtual (vMachine) yang disesuaikan...</h6>
														<h6>by TelkomSigma</h6>
													</span>
												</span>
											</a>		
										</span>
									</li>
									<li class="col-md-4 col-sm-12 col-xs-12 product">
										<span class="product-thumb-info">
											<a href="<?php echo base_url(); ?>Toko/ProductFreeHosting">
												<span class="product-thumb-info-image">
													<span class="product-thumb-info-act">
														<button style="border-radius: 20px;" type="button" class="btn btn-borders btn-secondary mr-xs mb-sm">Lihat</button>
														<button style="border-radius: 20px;" type="button" class="btn btn-default mr-xs mb-sm">Beli</button>
													</span>
													<span class="product-thumb-info-content">
														<div class="product-ratings">
															<div class="ratings-box">
																<div class="rating" style="width:90%"></div>
															</div>    
														</div>
													</span>
													<img alt="" class="img-responsive" src="<?php echo base_url();?>assets_1/img/produk/freehosting.png">
													<span class="product-thumb-info-content">
														<h6>Layanan Free Hosting dari TelkomSigma yang didukung infrasturktur.VPS/Cloud Dalam Negeri</h6>
														<h6>by TelkomSigma</h6>
													</span>
												</span>
											</a>		
										</span>
									</li>
									<li class="col-md-4 col-sm-12 col-xs-12 product">
										<span class="product-thumb-info">
											<a href="<?php echo base_url(); ?>Toko/ProductEmailZimbra">
												<span class="product-thumb-info-image">
													<span class="product-thumb-info-act">
														<button style="border-radius: 20px;" type="button" class="btn btn-borders btn-secondary mr-xs mb-sm">Lihat</button>
														<button style="border-radius: 20px;" type="button" class="btn btn-default mr-xs mb-sm">Beli</button>
													</span>
													<span class="product-thumb-info-content">
														<div class="product-ratings">
															<div class="ratings-box">
																<div class="rating" style="width:90%"></div>
															</div>    
														</div>
													</span>
													<img alt="" class="img-responsive" src="<?php echo base_url();?>assets_1/img/produk/email_zimbra.png">
													<span class="product-thumb-info-content">
														<h6>Lebih dari sekedar email, sebuah layanan kolaborasi sosial berbasiscloud computing</h6>
														<h6>by TelkomSigma</h6>
													</span>
												</span>
											</a>		
										</span>
									</li>
									<li class="col-md-4 col-sm-12 col-xs-12 product">
										<span class="product-thumb-info">
											<a href="<?php echo base_url(); ?>Toko/ProductEProject">
												<span class="product-thumb-info-image">
													<span class="product-thumb-info-act">
														<button style="border-radius: 20px;" type="button" class="btn btn-borders btn-secondary mr-xs mb-sm">Lihat</button>
														<button style="border-radius: 20px;" type="button" class="btn btn-default mr-xs mb-sm">Beli</button>
													</span>
													<span class="product-thumb-info-content">
														<div class="product-ratings">
															<div class="ratings-box">
																<div class="rating" style="width:90%"></div>
															</div>    
														</div>
													</span>
													<img alt="" class="img-responsive" src="<?php echo base_url();?>assets_1/img/produk/eproject.png">
													<span class="product-thumb-info-content">
														<h6>Aplikasi Project Management berbasis Cloud Computing yang menekankan kolaborasi...</h6>
														<h6>by TelkomSigma</h6>
													</span>
												</span>
											</a>		
										</span>
									</li>
									<li class="col-md-4 col-sm-12 col-xs-12 product">
										<span class="product-thumb-info">
											<a href="<?php echo base_url(); ?>Toko/ProductEOffice">
												<span class="product-thumb-info-image">
													<span class="product-thumb-info-act">
														<button style="border-radius: 20px;" type="button" class="btn btn-borders btn-secondary mr-xs mb-sm">Lihat</button>
														<button style="border-radius: 20px;" type="button" class="btn btn-default mr-xs mb-sm">Beli</button>
													</span>
													<span class="product-thumb-info-content">
														<div class="product-ratings">
															<div class="ratings-box">
																<div class="rating" style="width:90%"></div>
															</div>    
														</div>
													</span>
													<img alt="" class="img-responsive" src="<?php echo base_url();?>assets_1/img/produk/eoffice.png">
													<span class="product-thumb-info-content">
														<h6>Mempercepat pendistribusikan informasi dan proses administrasi persetujuan dari Cloud</h6>
														<h6>by TelkomSigma</h6>
													</span>
												</span>
											</a>		
										</span>
									</li>

									<li class="col-md-4 col-sm-12 col-xs-12 product">
										<span class="product-thumb-info">
											<a href="<?php echo base_url(); ?>Toko/ProductSiapOnline">
												<span class="product-thumb-info-image">
													<span class="product-thumb-info-act">
														<button style="border-radius: 20px;" type="button" class="btn btn-borders btn-secondary mr-xs mb-sm">Lihat</button>
														<button style="border-radius: 20px;" type="button" class="btn btn-default mr-xs mb-sm">Beli</button>
													</span>
													<span class="product-thumb-info-content">
														<div class="product-ratings">
															<div class="ratings-box">
																<div class="rating" style="width:90%"></div>
															</div>    
														</div>
													</span>
													<img alt="" class="img-responsive" src="<?php echo base_url();?>assets_1/img/produk/siap_online.png">
													<span class="product-thumb-info-content">
														<h6>Mengelola data dan informasi pendidikan dengan lebih cepat, mudah, akurat, terpadu dan berkesinambungan</h6>
														<h6>by TelkomSigma</h6>
													</span>
												</span>
											</a>		
										</span>
									</li>

									<li class="col-md-4 col-sm-12 col-xs-12 product">
										<span class="product-thumb-info">
											<a href="<?php echo base_url(); ?>Toko/ProductEAkademik">
												<span class="product-thumb-info-image">
													<span class="product-thumb-info-act">
														<button style="border-radius: 20px;" type="button" class="btn btn-borders btn-secondary mr-xs mb-sm">Lihat</button>
														<button style="border-radius: 20px;" type="button" class="btn btn-default mr-xs mb-sm">Beli</button>
													</span>
													<span class="product-thumb-info-content">
														<div class="product-ratings">
															<div class="ratings-box">
																<div class="rating" style="width:90%"></div>
															</div>    
														</div>
													</span>
													<img alt="" class="img-responsive" src="<?php echo base_url();?>assets_1/img/produk/eakademik.png">
													<span class="product-thumb-info-content">
														<h6>e-Akademik merupakan sistem informasi administrasi untuk perguruan tinggi yang terintegrasi dan transparan.</h6>
														<h6>by TelkomSigma</h6>
													</span>
												</span>
											</a>		
										</span>
									</li>

									<li class="col-md-4 col-sm-12 col-xs-12 product">
										<span class="product-thumb-info">
											<a href="<?php echo base_url(); ?>Toko/ProductEKelurahan">
												<span class="product-thumb-info-image">
													<span class="product-thumb-info-act">
														<button style="border-radius: 20px;" type="button" class="btn btn-borders btn-secondary mr-xs mb-sm">Lihat</button>
														<button style="border-radius: 20px;" type="button" class="btn btn-default mr-xs mb-sm">Beli</button>
													</span>
													<span class="product-thumb-info-content">
														<div class="product-ratings">
															<div class="ratings-box">
																<div class="rating" style="width:90%"></div>
															</div>    
														</div>
													</span>
													<img alt="" class="img-responsive" src="<?php echo base_url();?>assets_1/img/produk/ekelurahan.png">
													<span class="product-thumb-info-content">
														<h6>Aplikasi e-kelurahan sebagai sarana Layanan aplikasi pelayanan masyarakat di Kantor Kelurahan/Desa secara cepat</h6>
														<h6>by TelkomSigma</h6>
													</span>
												</span>
											</a>		
										</span>
									</li>

									<li class="col-md-4 col-sm-12 col-xs-12 product">
										<span class="product-thumb-info">
											<a href="<?php echo base_url(); ?>Toko/ProductEPuskesmas">
												<span class="product-thumb-info-image">
													<span class="product-thumb-info-act">
														<button style="border-radius: 20px;" type="button" class="btn btn-borders btn-secondary mr-xs mb-sm">Lihat</button>
														<button style="border-radius: 20px;" type="button" class="btn btn-default mr-xs mb-sm">Beli</button>
													</span>
													<span class="product-thumb-info-content">
														<div class="product-ratings">
															<div class="ratings-box">
																<div class="rating" style="width:90%"></div>
															</div>    
														</div>
													</span>
													<img alt="" class="img-responsive" src="<?php echo base_url();?>assets_1/img/produk/epuskesmas.png">
													<span class="product-thumb-info-content">
														<h6>Layanan asplikasi pelayanan masyarakat di Puskesmas secara cepat, akurat, dan mudah.</h6>
														<h6>by TelkomSigma</h6>
													</span>
												</span>
											</a>		
										</span>
									</li>


								</ul>
					</div>
					<!--
					<div class="row mb-xlg">
						<div class="col-md-12">
							<ul class="pagination">
								<li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#"><i class="fa fa-chevron-right"></i></a>
								</li>
							</ul>
						</div>
					</div>
					-->
				</div> <!-- COL MD 9 -->
			</div><!-- END ROW -->
		</div> 
	</div><!-- PAGE SHOP -->