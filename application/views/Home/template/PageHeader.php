<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">	
	<title>TelkomCloud</title>	
	<meta name="keywords" content="TelkomCloud" />
	<meta name="description" content="Portal Cloud">
	<meta name="author" content="Trobas">
	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo base_url();?>assets_1/img/telkom.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="<?php echo base_url();?>assets_1/img/telkom.ico">
	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<!-- Web Fonts  -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">
	<!-- Vendor CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets_1/vendor/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets_1/vendor/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets_1/vendor/animate/animate.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets_1/vendor/simple-line-icons/css/simple-line-icons.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets_1/vendor/owl.carousel/assets/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets_1/vendor/owl.carousel/assets/owl.theme.default.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets_1/vendor/magnific-popup/magnific-popup.min.css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets_1/css/theme.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets_1/css/theme-elements.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets_1/css/theme-blog.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets_1/css/theme-shop.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets_1/css/nice-select.css">
	<!-- Current Page CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets_1/vendor/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets_1/vendor/rs-plugin/css/layers.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets_1/vendor/rs-plugin/css/navigation.css">
	<!-- Skin CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets_1/css/skins/skin-shop-7.css"> 
	<!-- Demo CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets_1/css/demos/demo-shop-7.css">
	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets_1/css/custom.css">
	<!-- Head Libs -->
	<script src="<?php echo base_url();?>assets_1/vendor/modernizr/modernizr.min.js"></script>
	<!-- CSS Style -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets_1/css/styles.css">

	<link rel="stylesheet" href="<?php echo base_url();?>assets_1/css/jquery-ui.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets_1/css/styles.css">
</head>
<body>

	<div class="body">

		<!-- header -->
		<header id="header">
			<div class="header-body">
				<div class="header-top">
					<div class="container">
						<div class="top-menu-area">
							<a href="#">Link <i class="fa fa-caret-down"></i></a>
							<ul class="top-menu">
								<!--
								<li><a href="<?php //echo base_url();?>Kategori">Kategori</a></li>
								-->
								<li><a href="<?php echo base_url();?>Keuntungan">Keuntungan</a></li>
								<li><a href="<?php echo base_url();?>Solusi">Solusi</a></li>
								<li><a href="<?php echo base_url();?>Testimonial">Testimonial</a></li>
								<li><a href="<?php echo base_url();?>Berita">Berita</a></li>
								<li><a href="<?php echo base_url();?>TentangKami">Tentang Kami</a></li>
								<li><a href="<?php echo base_url();?>Faq">Faq</a></li>
								<li><a href="<?php echo base_url();?>Support">Support</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="header-container container">
					<div class="header-row">
						<div class="header-column">
							<div class="col-md-12">
								<div class="col-md-3">
									<div class="header-logo">
										<a href="<?php echo base_url();?>Home">
											<img alt="Porto" width="100" height="62" src="<?php echo base_url();?>assets_1/img/telkom-cloud-logo4.png">
										</a>
									</div>
								</div>
								<div class="col-md-9">
									<div class="row">				
										<?php 
										$logged_in = $this->session->userdata('status')=='login' && ($this->session->userdata('level')=='customers');
										if($logged_in){
											?>
											<div class="cart-area">
												<div class="cart-dropdown">
													<a href="#" class="cart-dropdown-icon">
														<i class="fa fa-user"></i>
														<span class="cart-info">
															<span class="cart-text">Data Users</span>
														</span>
													</a>
													<div class="cart-dropdownmenu right">
														<div class="dropdownmenu-wrapper">
															<div class="cart-totals">
																<span><?php echo $this->session->name; ?></span>
															</div>
															<div class="cart-actions">
																<a href="<?php echo base_url();?>Users" class="btn btn-primary">Halaman User</a>
																<a href="<?php echo base_url();?>Customers/Logout" class="btn btn-primary">Keluar</a>
															</div>
														</div>
													</div>
												</div>
											</div>							
											<?php
										}else{
											?>
											<div class="header-nav-main push-kanan">
												<nav>
													<ul class="nav nav-pills" id="mainNav">
														<li class="dropdown dropdown-mega dropdown-mega-signin signin" id="headerAccount">
															<a class="dropdown-toggle" href="<?php echo base_url();?>">
																<i class="fa fa-user"></i> Masuk
															</a>
															<ul class="dropdown-menu">
																<li>
																	<div class="dropdown-mega-content">
																		<div class="row">
																			<div class="col-md-12">

																				<div class="signin-form">

																					<span class="dropdown-mega-sub-title">Masuk</span>
																					<?php if(!empty(@$notif)){ ?>
																					<div id="login-alert" class="alert alert-<?php echo @$notif['type'];?> col-sm-12"><?php echo @$notif['message'];?></div>
																					<?php } ?>
																					<form action="<?php echo base_url()?>Customers/login" method="post">
																						<div class="row">
																							<div class="form-group">
																								<div class="col-md-12 p-none">
																									<label>Alamat E-mail</label>
																									<input type="email" name="email" id="email" class="form-control input-lg" placeholder="E-mail" required="">
																								</div>
																							</div> 
																						</div>
																						<br>
																						<div class="row">
																							<div class="form-group">
																								<div class="col-md-12 p-none">
																									<label>Kata Sandi</label>
																									<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Kata Sandi" required="">
																								</div>
																							</div>
																						</div>
																						<div class="row">
																							<div class="col-md-6 " style="margin-left:-27px;margin-top:5px;">
																							<a class="pull-right mt-none p-none" href="<?php echo base_url();?>Customers/lupapass">Lupa Kata Sandi ?</a>
																							</div>
																							<div class="col-md-6 " style="margin-left: 27px;padding-right: 0px;margin-top: 5px;">
																								<button type="Submit" value="Submit" class="btn btn-primary pull-right mb-xl">Masuk</button>
																							</div>
																						</div>
																					</form>

																					<p class="sign-up-info">Belum Memiliki Akun ?? <a href="<?php echo base_url();?>Home/Akun" class="p-none m-none ml-xs">Daftar</a></p>

																				</div><!-- login -->

																			</div>
																		</div>
																	</div>
																</li>
															</ul>
														</li>
													</ul>
												</nav>
											</div>
											<?php } ?>
											<div class="cart-area">
												<div class="cart-dropdown">
													<a href="#" class="cart-dropdown-icon">
														<i class="minicart-icon"></i>
														<span class="cart-info">
															<span class="cart-qty"><?php echo $this->cart->total_items(); ?></span>
															<span class="cart-text">Keranjang</span>
														</span>
													</a>

													<div class="cart-dropdownmenu right">
														<div class="dropdownmenu-wrapper" id="detail_cart">

														</div>
													</div>
												</div>
											</div>

											<a href="#" class="mmenu-toggle-btn" title="Toggle menu">
												<i class="fa fa-bars"></i>
											</a>

											<div class="header-search" style="margin-top:15px;">
												<a href="#" class="search-toggle"><i class="fa fa-search"></i></a>
												<form action="#" method="get">
													<div class="header-search-wrapper">
														<input type="text" class="form-control" name="q" id="q" placeholder="Search..." required>
														<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
													</div>
												</form>
											</div>

											<div class="header-nav-main">
												<nav>
													<ul class="nav nav-pills" id="mainNav">
														<li class="dropdown active">
															<li>
																<a href="<?php echo base_url();?>Home">
																	Beranda 
																</a>
															</li>
															<li>
																<a href="<?php echo base_url();?>Toko">
																	Toko
																</a>
															</li>
															<li>
																<a href="<?php echo base_url();?>Demo/vMachine">
																	Demo
																</a>
															</li>
															<li>
																<a href="<?php echo base_url();?>Harga">
																	Harga
																</a>
															</li>
														</li>
													</ul>
												</nav>
											</div>
										</div>
									</div>
								</div> 
							</div>
						</div>
					</div>

					<div class="mobile-nav">
						<div class="mobile-nav-wrapper">
							<ul class="mobile-side-menu">
								<li><a href="<?php echo base_url();?>Home">Beranda</a></li>
								<li><a href="<?php echo base_url();?>Toko">Toko</a></li>
								<li><a href="<?php echo base_url();?>Demo/vMachine">Demo</a></li>
								<li><a href="<?php echo base_url();?>Harga">Harga</a></li>
								<li class="dropdown dropdown-mega dropdown-mega-signin signin" id="headerAccount">
									<a class="dropdown-toggle" href="page-login.html">
										<i class="fa fa-user"></i> Sign In
									</a>
									<ul class="dropdown-menu">
										<li>
											<div class="dropdown-mega-content">
												<div class="row">
													<div class="col-md-12">

														<div class="signin-form">

															<span class="dropdown-mega-sub-title">Sign In</span>

															<form action="<?php echo base_url();?>Customers/login" method="post">
																<div class="row">
																	<div class="form-group">
																		<div class="col-md-12 p-none">
																			<label>Username or E-mail Address</label>
																			<input type="email" id="email" name="email" class="form-control input-lg" placeholder="E-mail" required="">
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="form-group">
																		<div class="col-md-12 p-none">
																			<a class="pull-right mt-none p-none" id="headerRecover" href="#">(Lost Password?)</a>
																			<label>Password</label>
																			<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" required="">
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-6 pl-none">
																		<span class="remember-box checkbox">
																			<label for="rememberme">
																				<input type="checkbox" id="rememberme" name="rememberme">Remember Me
																			</label>
																		</span>
																	</div>
																	<div class="col-md-6 pr-none">
																		<button type="Submit" value="Submit" class="btn btn-primary pull-right mb-xl">Login</button>
																	</div>
																</div>
															</form>

															<p class="sign-up-info">Don't have an account yet? <a href="#" id="headerSignUp" class="p-none m-none ml-xs">Sign Up</a></p>

														</div>

														<div class="signup-form">
															<span class="dropdown-mega-sub-title">Create Account</span>

															<form action="/" id="frmSignUp" method="post">
																<div class="row">
																	<div class="form-group">
																		<div class="col-md-12 p-none">
																			<label>E-mail Address</label>
																			<input type="text" value="" class="form-control input-lg">
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="form-group">
																		<div class="col-md-6 pl-none">
																			<label>Password</label>
																			<input type="password" value="" class="form-control input-lg">
																		</div>
																		<div class="col-md-6 pr-none">
																			<label>Re-enter Password</label>
																			<input type="password" value="" class="form-control input-lg">
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-12 p-none">
																		<input type="submit" value="Create Account" class="btn btn-primary pull-right mb-xl" data-loading-text="Loading...">
																	</div>
																</div>
															</form>

															<p class="log-in-info">Already have an account? <a href="#" id="headerSignIn" class="p-none m-none ml-xs">Log In</a></p>
														</div>

														<div class="recover-form">
															<span class="dropdown-mega-sub-title">Reset My Password</span>
															<p>Complete the form below to receive an email with the authorization code needed to reset your password.</p>

															<form action="/" id="frmResetPassword" method="post">
																<div class="row">
																	<div class="form-group">
																		<div class="col-md-12 p-none">
																			<label>E-mail Address</label>
																			<input type="text" value="" class="form-control input-lg">
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-12 p-none">
																		<input type="submit" value="Submit" class="btn btn-primary pull-right mb-xl" data-loading-text="Loading...">
																	</div>
																</div>
															</form>

															<p class="log-in-info">Already have an account? <a href="#" id="headerRecoverCancel" class="p-none m-none ml-xs">Log In</a></p>
														</div>

													</div>
												</div>
											</div>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
					<div id="mobile-menu-overlay"></div>
					<div role="main" class="main"></div>
				</div>
			</header>
	<!-- header -->