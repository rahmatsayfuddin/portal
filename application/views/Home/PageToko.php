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