		<!-- Header -->
		<header class="header">
			<!-- Topbar -->
			<div class="topbar ">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-12">
							<!-- Top Contact -->
							<div class="top-contact d-none d-sm-block">
								<div class="single-contact">
								<i class="fa fa-phone"></i>
								Phone: +234 817 936 1381
							</div> 

							<div class="single-contact">
								<i class="fa fa-envelope-open"></i>
								Email: info@schoolsupportcentre.com
							</div>	

								<div class="single-contact">
									<i class="fa fa-clock-o"></i>
									Opening: 08AM - 05PM</div> 
							</div>
							<!-- End Top Contact -->
						</div>	
						<div class="col-lg-4 col-12 ">
							<div class="topbar-right ">
								<!-- Social Icons -->
								<ul class="social-icons ">
										<li><a href="https://www.facebook.com/trenovasupportcentre" target="_blank"><i class="fa fa-facebook"></i></a></li>
										<li><a href="https://twitter.com/trenova_academy" target="_blank"><i class="fa fa-twitter"></i></a></li>
										<li><a href="http://www.instagram.com/trenovaacademy" target="_blank"><i class="fa fa-instagram"></i></a></li>	
										<li><a href="https://linkedin.com/company/trenova-school-support-center"  target="_blank"><i class="fa fa-linkedin"></i></a></li>
								</ul>															
								<div class="button">
									<?php if(isset($_SESSION["u_id"])): ?>
									<a class="bizwheel-btn font-weight-bold" href="<?php $_SERVER['PHP_SELF']?>?log-out=true">Logout</a>
									<?php else: ?>
									<a href="sign-up" class="bizwheel-btn font-weight-bold">Sign Up</a>
									<?php endif;?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Topbar -->
			<!-- Middle Header -->
			<div class="middle-header">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="middle-inner">
								<div class="row">
									<div class="col-lg-2 col-md-3 col-12">
										<!-- Logo -->
										<div class="logo">
											<!-- Image Logo -->
											<div class="img-logo position-relative ">
												<div class='top-menu-img position-absolute d-none d-sm-block shadow'>
												<a href="./">
													<img src="img/trenova_img/trenova_logo.jpeg" class="img-fluid rounded" alt="trenova_logo">
												</a>
												</div>
											</div>
										</div>								
										<div class="mobile-nav">
											<!--nav content-->
										</div>
									</div>
									<div class="col-lg-10 col-md-9 col-12">
										<div class="menu-area">
											<!-- Main Menu -->
											<nav class="navbar navbar-expand-lg">
												<div class="navbar-collapse">	
													<div class="nav-inner">	
														<div class="menu-home-menu-container">
															<!-- Naviagiton -->
															<ul id="nav" class="nav main-menu menu navbar-nav">
																<li><a href="./">Home</a></li>
																<!-- <li><a href="services ">Our Services</a></li> -->
																<!-- <li><a href="pricing">Pricing</a></li> -->
																<li><a href="./?#service">Our services</a></li>
																<li><a href="careers">Careers</a></li>
																<li><a href="schedule-appointment">Schedule Appointment</a></li>

																<li class="icon-active"><a href="#">More</a>
																	<ul class="sub-menu">
																		<li><a href="contact ">Contact Us</a></li>
																		<li><a href="about">About Us</a></li>
																	</ul>
																</li>
																
																<li><a href="https://library.schoolsupportcentre.com/" target="_blank">E-Library</a></li>

																<?php if(isset($_SESSION["u_id"])): ?>
																	<li><a class='text-success font-weight-bold'>
																	<?php echo isset($_SESSION["username"])? $_SESSION["username"]: null; ?>
																		<i class="fa fa-caret-down" aria-hidden="true"></i>
																		</a>
																		<ul class="sub-menu">
																			<li><a href="./">Home</a></li>
																			<li><a href="profile/">Dashboard</a></li>
																			<li><a href="profile/subscription ">Subscription</a></li>
																			<li><a href="<?php $_SERVER['PHP_SELF']?>?log-out=true">Logout</a></li>
																		</ul>
																	</li>
																<?php else: ?>

																	<li><a href="login" class="font-weight-bold" style='color:#6FB71D;'>Member Login</a></li>
																
																<?php endif; ?>
															</ul>
															<!--/ End Naviagiton -->
														</div>
													</div>
												</div>
											</nav>
											<!--/ End Main Menu -->	
											<!-- Right Bar -->
											<div class="right-bar">
												<!-- Search Bar -->
												<ul class="right-nav">
													<li class="top-search"><a href="#0"><i class="fa fa-search"></i></a></li>
													<li class="bar"><a class="fa fa-bars"></a></li>
												</ul>
												<!--/ End Search Bar -->
												<!-- Search Form -->
												<div class="search-top">
													<form action="#" class="search-form" method="get">
														<input type="text" name="s" value="" placeholder="Search here"/>
														<button type="submit" id="searchsubmit"><i class="fa fa-search"></i></button>
													</form>
												</div>
												<!--/ End Search Form -->
											</div>	
											<!--/ End Right Bar -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Middle Header -->
			<!-- Sidebar Popup -->
			<div class="sidebar-popup">
				<div class="cross">
					<a class="btn"><i class="fa fa-close"></i></a>
				</div>
				<div class="single-content">
					<img src="img/trenova_img/trenova_logo.jpeg" width="150px" height="150px" class="img-fluid d-block mx-auto" alt="trenova_logo">
					<h4>About Trenova</h4>
					<p>
						TreNova SchoolSupportCenter and Trenova Academy is owned by TreNova Limited
					</p>
					<!-- Social Icons -->
					<ul class="social">
						<li><a href="https://www.facebook.com/trenovasupportcentre" target="_blank"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://twitter.com/trenova_academy" target="_blank"><i class="fa fa-twitter"></i></a></li>
						<li><a href="http://www.instagram.com/trenovaacademy" target="_blank"><i class="fa fa-instagram"></i></a></li>	
						<li><a href="https://linkedin.com/company/trenova-school-support-center"  target="_blank"><i class="fa fa-linkedin"></i></a></li>
						<!-- <li><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li> -->
					</ul>
				</div>
				<div class="single-content">
					<ul class="links">
						<li><a href="index">Home</a></li>
						<!-- <li><a href="pricing">Pricing</a></li> -->
						<li><a href="./?#service">Our Services</a></li>
						<li><a href="https://library.schoolsupportcentre.com/" target="_blank">E-Library</a></li>
						<!-- <li><a href="about">About Us</a></li>
						<li><a href="contact">Contact Us</a></li> -->
						<?php if(isset($_SESSION["u_id"])): ?>
							<li><a class='text-success font-weight-bold'>
							<?php echo isset($_SESSION["username"])? $_SESSION["username"]: null; ?>
								<i class="fa fa-caret-down" aria-hidden="true"></i>
								</a>
								<ul class="sub-menu">
									<li><a href="index">Home</a></li>
									<li><a href="profile/">Dashboard</a></li>
									<li><a href="profile/subscription">Subscription</a></li>
									<li><a href="<?php $_SERVER['PHP_SELF']?>?log-out=true">Logout</a></li>
								</ul>
							</li>
						<?php else: ?>
						<li>
							<a href="login" class="font-weight-bold" style='color:#6FB71D;'>
							Member Login
							</a>
						</li>
						<?php endif; ?>
					</ul>
				</div>	
			</div>
			<!--/ Sidebar Popup -->	
		</header>
		<!--/ End Header -->