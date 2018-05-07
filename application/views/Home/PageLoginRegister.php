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
										<!-- <div class="col-md-6" style="padding: 0px;">

											<div class="featured-box featured-box-primary">
											
												<div class="box-content">
													
													<center>
														<h4 class="mb-none" style="color: #000000;">SUDAH MEMILIKI AKUN</h4>
													</center>
													<div><?php echo $this->session->flashdata('msgcheckout'); ?></div>
													<div><?php echo $this->session->flashdata('msgpassword'); ?></div>
													<div><?php echo $this->session->flashdata('msg'); ?></div>
													<?php echo form_open('Customers/login'); ?>
														<div class="row">
															<div class="form-group">
																<div class="col-md-12">
																	<label>E-mail*</label>
																	<input type="email" data-msg-required="Mohon Inputkan E-mail Anda" data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="form-group">
																<div class="col-md-12">
																	<label>Kata Sandi*</label>
																	<input type="password" value="" data-msg-required="Mohon Inputkan Password Anda" maxlength="100" class="form-control" name="password" id="password" required>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="form-group">
																<div class="col-md-12">
																	<a href="<?php echo base_url();?>Customers/lupapass"><label>Lupa Kata Sandi ?</label></a>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-6">
																<label class="checkbox-inline">
																	<input type="checkbox" id="inlineCheckbox1" value="option1"> Tetap Masuk
																</label>
															</div>
															<div class="col-md-6">
																<button type="Submit" value="Log In" class="btn btn-danger btn-icon btn-block mb-xl" data-loading-text="Loading...">
																Login
																</button>
															</div>
														</div>
														<div class="row">
															<div class="col-md-12">
																<div class="alert alert-success hidden" id="contactSuccess">
																	Message has been sent to us.
																</div>

																<div class="alert alert-danger hidden" id="contactError">
																	Error sending your message.
																</div>
															</div>
														</div>
													<?php echo form_close(); ?>

												</div>
											</div>

										</div> -->

										<div class="col-md-8 col-md-offset-2" style="padding: 0px;">

											<div class="featured-box featured-box-primary">

												<div class="box-content">
													<center>
														<h4 class="mb-none" style="color: #000000;">Akun Baru</h4>
													</center>
													<div><?php echo $this->session->flashdata('msgdaftar'); ?></div>
													<?php echo form_open('Customers/register_clm'); ?>
													<div class="row">
														<div class="form-group">
															<div class="col-md-12">
																<label>Nama Depan*</label>
																<input type="text" data-msg-required="Inputkan Nama" maxlength="100" class="form-control" name="nama_depan" id="nama" required>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="form-group">
															<div class="col-md-12">
																<label>Nama Belakang*</label>
																<input type="text" data-msg-required="Inputkan Nama" maxlength="100" class="form-control" name="nama_belakang" id="nama" required>
															</div>
														</div>
													</div>

													<div class="row">
														<div class="form-group">
															<div class="col-md-12">
																<label>E-mail*</label>
																<input type="email" data-msg-required="Mohon Inputkan E-mail Anda" maxlength="100" class="form-control" name="email" id="email" required>
															</div>
														</div>
													</div>
													
														<!--
														<div class="row">
															<div class="form-group">
																<div class="col-md-12">
																	<label>Ulangi Password*</label>
																	<input type="password" value="" data-msg-required="Mohon Ulangi Inputkan Password Anda" maxlength="100" class="form-control" name="re_password" id="re_password" required>
																</div>
															</div>
														</div>
													-->
													<div class="row">
														<div class="form-group">
															<div class="col-md-6">
																<label>Username*</label>
																<input type="text" data-msg-required="Inputkan Username" maxlength="100" class="form-control" name="username" id="username" required>
															</div>
															<div class="col-md-6">
																<label>Kata Sandi*</label>
																<input type="password" data-msg-required="Mohon Inputkan Password Anda" maxlength="100" class="form-control" name="password" id="password" required>
															</div>
															<!-- <div class="col-md-6">
																<label>No Tlpn</label>
																<input type="text" data-msg-required="Inputkan No Telpn" maxlength="100" class="form-control" name="no_tlpn" id="no_tlpn" required>
															</div> -->
														</div>
													</div>
													<div class="row">
														<div class="form-group">
															<div class="col-md-6">
															<!-- 	<label>Jenis Kelamin</label><br>
																<div class="col-md-5">
																	<div class="radio-custom">
																		<input type="radio" id="gender" name="gender" value="1">
																		<label for="radioExample1">Pria</label>
																	</div>
																</div>
																<div class="col-md-7">
																	<div class="radio-custom">
																		<input type="radio" id="gender" name="gender" value="0">
																		<label for="radioExample2">Wanita</label>
																	</div>
																</div> -->
															</div>
															<div class="col-md-6">
																	<!--
																	<label>Tanggal Lahir</label>
																	<div class="col-md-12">	
																	</div>
																-->
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-12">
															<button type="submit" value="Register" class="btn btn-danger btn-icon btn-block mb-xl" data-loading-text="Loading...">Daftar</button>
														</div>
													</div>
													<div class="row">
														<div class="col-md-12">
															<div class="alert alert-success hidden" id="contactSuccess">
																Message has been sent to us.
															</div>

															<div class="alert alert-danger hidden" id="contactError">
																Error sending your message.
															</div>
														</div>
													</div>
														<!--
														<div class="row">
															<div class="col-md-12">
																<div class="checkbox-custom checkbox-default">
																	<input type="checkbox" checked="" id="checkboxExample1">
																	<label for="checkboxExample1">Saya Ingin Tetap Login</label>
																</div>

																<div class="checkbox-custom checkbox-default">
																	<input type="checkbox" checked="" id="checkboxExample1">
																	<label for="checkboxExample1">Langganan Berita</label>
																</div>
															</div>
														</div>
													-->
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