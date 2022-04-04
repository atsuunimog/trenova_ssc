		<!-- Header -->
		<header class="header">
			<!-- Topbar -->
			<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-12">
							<!-- Top Contact -->
							<div class="top-contact d-none d-sm-block">
								<div class="single-contact"><i class="fa fa-phone"></i>Phone: +(234) 809-0178-721</div> 
								<div class="single-contact"><i class="fa fa-envelope-open"></i>Email: info@trenovaacademy.com</div>	
								<div class="single-contact"><i class="fa fa-clock-o"></i>Opening: 08AM - 05PM</div> 
							</div>
							<!-- End Top Contact -->
						</div>	
						<div class="col-lg-4 col-12">
							<div class="topbar-right">
								<!-- Social Icons -->
								<ul class="social-icons">
										<li><a href="https://www.facebook.com/profile.php?id=100077118850204" target="_blank"><i class="fa fa-facebook"></i></a></li>
										<li><a href="https://twitter.com/trenova_academy" target="_blank"><i class="fa fa-twitter"></i></a></li>
										<li><a href="http://www.instagram.com/trenovaacademy" target="_blank"><i class="fa fa-instagram"></i></a></li>	
										<li><a href="https://linkedin.com/company/trenova-school-support-center"  target="_blank"><i class="fa fa-linkedin"></i></a></li>
								</ul>															
								<div class="button">
									<a href="<?php $_SERVER['PHP_SELF']?>?log-out=true" class="bizwheel-btn font-weight-bold">Log Out</a>
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
											<div class="img-logo position-relative">
												<div class='top-menu-img position-absolute d-none d-sm-block'>
												<a href="index.php">
													<img src="../img/trenova_img/trenova_tran_logo.png" class="img-fluid" alt="trenova_logo">
												</a>
												</div>
											</div>
										</div>								
										<div class="mobile-nav"></div>
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
																<!-- <li><a href="services.php">Our Services</a></li> -->
																
																<li><a href="../events.php">Events</a></li>
																<li><a href="../pricing.php">Pricing</a></li>
																<li><a href="../contact.php">Contact</a></li>

																<li><a href="https://library.schoolsupportcentre.com/" target="_blank">E-Library</a></li>

																<li><a class='text-success font-weight-bold'>
																<?php echo isset($_SESSION["username"])? $_SESSION["username"]: null; ?>
                                                                    <i class="fa fa-caret-down" aria-hidden="true"></i>
                                                                    </a>
                                                                    <ul class="sub-menu">
																		<li><a href="../index.php">Home</a></li>
																		<li><a href="./">Dashboard</a></li>
																		<li><a href="subscription.php">Subscription</a></li>
																		<li><a href="package-manager.php">Package Manager</a></li>
																		<!-- <li><a href="settings.php">Settings</a></li> -->
																		<li><a href="<?php $_SERVER['PHP_SELF']?>?log-out=true">Logout</a></li>
																	</ul>
                                                                </li>
<!-- 
																<li class="icon-active"><a href="#">Blog</a>
																	<ul class="sub-menu">
																		<li><a href="blog.html">Blog Grid</a></li>
																		<li><a href="blog-single.html">Blog Single</a></li>
																	</ul>
																</li>
																<li class="icon-active"><a href="#">Pages</a>
																	<ul class="sub-menu">
																		<li><a href="about.html">About Us</a></li>
																		<li><a href="404.html">404</a></li>
																	</ul>
																</li> -->

                                                                	<!-- <li><a href="portfolio.html">Our Portfolio</a></li>
																<li class="icon-active"><a href="#">Blog</a>
																	<ul class="sub-menu">
																		<li><a href="blog.html">Blog Grid</a></li>
																		<li><a href="blog-single.html">Blog Single</a></li>
																	</ul>
																</li>
																<li class="icon-active"><a href="#">Pages</a>
																	<ul class="sub-menu">
																		<li><a href="about.html">About Us</a></li>
																		<li><a href="404.html">404</a></li>
																	</ul>
																</li> -->
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
												<ul class="right-nav text-center">
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
		</header>
		<!--/ End Header -->