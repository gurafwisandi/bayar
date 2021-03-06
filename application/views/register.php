
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="author" content="www.frebsite.nl" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		
        <title>Registrasi</title>
		 
        <!-- Custom CSS -->
        <link href="<?=base_url()?>assets1/css/styles.css" rel="stylesheet">
		
		<!-- Custom Color Option -->
		<link href="<?=base_url()?>assets1/css/colors.css" rel="stylesheet">
		
    </head>
	
    <body class="log-bg">
	
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div id="preloader"><div class="preloader"><span></span><span></span></div></div>
		
		
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
		
            <!-- ========================== SignUp Elements ============================= -->
			<section class="log-space">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-11 col-md-11">
						
							<div class="row no-gutters position-relative log_rads">
								<div class="col-lg-6 col-md-5 bg-cover" style="background:#1f2431 url(<?=base_url()?>assets1/img/log.png)no-repeat;">
									<div class="lui_9okt6">
										<div class="_loh_revu97">
											<div id="reviews-login">
											
												<!-- Single Reviews -->
												<div class="_loh_r96">
													<div class="_bloi_quote"><i class="fa fa-quote-left"></i></div>
													<div class="_loh_r92">
														<h4>Good Services</h4>
													</div>
													<div class="_loh_r93">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>	
													</div>	
													<div class="_loh_foot_r93">
														<h4>Shilpa D. Setty</h4>
														<span>Team Leader</span>
													</div>												
												</div>
												
												<!-- Single Reviews -->
												<div class="_loh_r96">
													<div class="_bloi_quote"><i class="fa fa-quote-left"></i></div>
													<div class="_loh_r92">
														<h4>Good Services</h4>
													</div>
													<div class="_loh_r93">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>	
													</div>	
													<div class="_loh_foot_r93">
														<h4>Adam Wilsom</h4>
														<span>Mak Founder</span>
													</div>												
												</div>
												
												<!-- Single Reviews -->
												<div class="_loh_r96">
													<div class="_bloi_quote"><i class="fa fa-quote-left"></i></div>
													<div class="_loh_r92">
														<h4>Customer Support</h4>
													</div>
													<div class="_loh_r93">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>	
													</div>	
													<div class="_loh_foot_r93">
														<h4>Kunal M. Wilsom</h4>
														<span>CEO & Founder</span>
													</div>												
												</div>
												
												<!-- Single Reviews -->
												<div class="_loh_r96">
													<div class="_bloi_quote"><i class="fa fa-quote-left"></i></div>
													<div class="_loh_r92">
														<h4>Ultimate Services</h4>
													</div>
													<div class="_loh_r93">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>	
													</div>	
													<div class="_loh_foot_r93">
														<h4>Mark Jugermark</h4>
														<span>MCL Founder</span>
													</div>												
												</div>
												<!-- Single Reviews -->
												<div class="_loh_r96">
													<div class="_bloi_quote"><i class="fa fa-quote-left"></i></div>
													<div class="_loh_r92">
														<h4>Item Support</h4>
													</div>
													<div class="_loh_r93">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>	
													</div>	
													<div class="_loh_foot_r93">
														<h4>Kirti Washinton</h4>
														<span>Web Designer</span>
													</div>												
												</div>
											
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-lg-6 col-md-7 position-static p-4">
									<div class="log_wraps">
										<a href="https://bayaraja.id/" class="log-logo_head"><img src="<?=base_url()?>assets/assets/img/bayaraja.png" class="img-fluid" width="80" alt="" /></a>
										<div class="log__heads">
											<h4 class="mt-0 logs_title">Create An <span class="theme-cl">Account</span></h4>
										</div>
										
										<div class="form-group">
											<label>Nama*</label>
											<input type="text" name="nama" class="form-control" placeholder="Masukan Nama" size="20" onkeyup="this.value = this.value.toUpperCase()" required>
										</div>
										
										<div class="form-group">
											<label>Email*</label>
											<input type="email" name="email" class="form-control" placeholder="Masukan Email" size="20" onkeyup="this.value = this.value.toUpperCase()" required>
										</div>
										
										<div class="form-group">
											<label>Password*</label>
											<input type="password" name="password" class="form-control" placeholder="Masukan Password" required>
										</div>
										
											<button type="button" class="btn btn-theme w-100">Register</button>
										
										
										<div class="form-group text-center mb-0 mt-3">
											Have You Already An Account? <a href="<?=site_url('auth/login')?>" class="theme-cl">LogIn</a>
										</div>
										
									</div>
								</div>
							</div>
						
						</div>
					</div>
				</div>
			</section>
			<!-- ========================== Login Elements ============================= -->
			

		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->

		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		<script src="<?=base_url()?>assets1/js/jquery.min.js"></script>
		<script src="<?=base_url()?>assets1/js/popper.min.js"></script>
		<script src="<?=base_url()?>assets1/js/bootstrap.min.js"></script>
		<script src="<?=base_url()?>assets1/js/select2.min.js"></script>
		<script src="<?=base_url()?>assets1/js/slick.js"></script>
		<script src="<?=base_url()?>assets1/js/jquery.counterup.min.js"></script>
		<script src="<?=base_url()?>assets1/js/counterup.min.js"></script>
		<script src="<?=base_url()?>assets1/js/custom.js"></script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->

	</body>
</html>