			<div role="main" class="main">

				<div class="slider-with-overlay">

					<div class="slider-container rev_slider_wrapper" style="height: 560px;">
						<div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 560}">
							<ul>
								<li data-transition="fade">
									<img src="<?php echo base_url();?>assets_1/img/bg_content/bg_login.png"  
										alt=""
										data-bgposition="center center" 
										data-bgfit="cover" 
										data-bgrepeat="no-repeat" 
										class="rev-slidebg">
								</li>
							</ul>
						</div>
					</div>

					<div class="slider-contact-form">
						<div class="container">

							<div class="row">
								<div class="col-md-10 col-md-offset-1">

									<div class="featured-boxes mt-none mb-none">
										<div class="col-md-6 col-md-offset-3" style="padding: 0px;">

											<div class="featured-box featured-box-primary">
											
												<div class="box-content">
													<center>
														<h4 class="mb-none" style="color: #000000;">Form Lupa Password</h4>
													</center><br>
													<div><?php echo $this->session->flashdata('msglupapass'); ?></div>
													<?php echo form_open('Customers/forgotpass'); ?>
														<div class="row">
															<div class="form-group">
																<div class="col-md-12">
																	<label>Inputkan E-mail Anda*</label>
																	<input type="email" data-msg-required="Mohon Inputkan E-mail Anda" data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="form-group">
																<div class="col-md-12">
																	<a href="<?php echo base_url();?>Home/Akun"><label>Register Akun ?</label></a>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-6 pull-right">
																<button type="Submit" value="Submit" class="btn btn-danger btn-icon btn-block mb-xl" data-loading-text="Loading...">
																Submit E-mail
																</button>
															</div>
														</div>
													<?php echo form_close(); ?>

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