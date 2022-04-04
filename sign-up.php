<?php 
session_start();
include "server/routes.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta Tag -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name='copyright' content='pavilan'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Title Tag  -->
		<meta name="author" content="Trenova School Support Centre">
 		<meta name="keyword" content="School Development Plan, School Owners Forum, Edu-Business Strategist, Association of Proprietors, School Administrators, NAPPS, Education Business Strategist, Educational Marketer, Consulting, School Growth, School Owners,  Management Consulting">
		<meta name="description" content="TreNova support school growth, creates and sells businesses; provides training and business grant; publish learning support contents for private schools">

		<!-- Title Tag  -->
		<title>Sign Up</title>

		<!-- Favicon -->
		<link rel="icon" type="image/favicon.png" href="favicon.ico">
		
		<!-- Web Font -->
		<!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
		 -->

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet"> 


		<!-- Bizwheel Plugins CSS -->
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- <link rel="stylesheet" href="css/cubeportfolio.min.css"> -->
		<link rel="stylesheet" href="css/font-awesome.css">
		<!-- <link rel="stylesheet" href="css/jquery.fancybox.min.css"> -->
		<!-- <link rel="stylesheet" href="css/magnific-popup.min.css"> -->
		<!-- <link rel="stylesheet" href="css/owl-carousel.min.css"> -->
		<link rel="stylesheet" href="css/slicknav.min.css">

		<!-- Bizwheel Stylesheet -->  
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/custom.css">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="css/responsive.css">
		
		<!-- Bizwheel Colors -->
		<!--<link rel="stylesheet" href="css/skins/skin-1.css">-->
		<!--<link rel="stylesheet" href="css/skins/skin-2.css">-->
		<!--<link rel="stylesheet" href="css/skins/skin-3.css">-->
		<!--<link rel="stylesheet" href="css/skins/skin-4.css">-->
		
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-JYJ7QSNGGX"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-JYJ7QSNGGX');
		</script>

		<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1294566334383300');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1294566334383300&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
	</head>
	<body id="bg">
	
		<!-- Boxed Layout -->
		<div id="page" class="site boxed-layout"> 
		
		<!-- Preloader -->
		<div class="preeloader">
			<div class="preloader-spinner"></div>
		</div>
		<!--/ End Preloader -->
	
		<?php include "includes/header.php" ?>
		
		<!-- Breadcrumb -->
		<!-- <div class="breadcrumbs overlay" style="background-image:url('img/pixel/wallpaper.png')">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<div class="bread-menu">
								<ul>
									<li><a href="index.html">Become a member</a></li>
								</ul>
							</div>
							<div class="bread-title"><h2>Sign Up</h2></div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<!--/ End Breadcrumb -->
		
		<!-- Contact Us -->
		<section class="contact-us section-space">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
					<!-- Contact Form -->
						<div class='custom-form-container mx-auto'>

						<!--trenova logo-->
						<!-- <div  class='mx-auto border' style='width:200px; height:200px;'>
							<img src="img/trenova_img/trenova_tran_logo.png" alt="logo-image" class="img-fluid">
						</div> -->
						<!--trenova logo-->
					

						<div class="contact-form-area m-top-30 text-center">
						<h4 class='mt-0 pt-0 mb-3'>Sign Up</h4>
						<span class='d-block text-center'>Already registered? <a href='login'>login</a></span>
							<form class="form" method="post" action="sign-up">


									<div class="row">
									<div class="col-lg-12 col-md-12 col-12">
										<div class="form-group">
											<!-- <div class="icon"><i class="fa fa-user"></i></div> -->

										<!--error notification-->
										<?php if($form_error !== ''): ?>
												<div class="alert alert-danger border-0 small-font" role="alert">
										<?php echo $form_error; ?>
												</div>
										<?php   elseif($form_success !== ''): ?>
												<div class="alert alert-success border-0 small-font" role="alert">
													<?php echo $form_success; ?>
												</div>
										<?php  else:  ?>
										<?php endif;  ?>
										<!--error notification-->

											<input type="text" name="username" 
											placeholder="Create Username"
											value ="<?php echo isset($_POST["username"])? $_POST["username"] : ''; ?>";
										>
										</div>
									</div>
									<div class="col-lg-12 col-md-12 col-12">
										<div class="form-group">
											<!-- <div class="icon"><i class="fa fa-envelope"></i></div> -->
											<input type="email" name="email" placeholder="Email"
											value ="<?php echo isset($_POST["email"])? $_POST["email"] : ''; ?>";
											>
										</div>
									</div>
									<div class="col-lg-12 col-md-12 col-12">
										<div class="form-group">
											<!-- <div class="icon"><i class="fa fa-unlock-alt"></i></div> -->
											<input type="password" name="password" placeholder="Password">
										</div>
									</div>
									<input type="hidden" name="sign-up">
									<div class="col-12">
										<div class="form-group button">
											<span class='d-block my-3'>By signing up, you agree to the <a href='' class='font-weight-bold'>Terms of Service</a> and 
											<a href='' class='font-weight-bold'> Privacy Policy.</span>
											<button type="submit" class="bizwheel-btn theme-2">Sign Up</button>
										</div>
									</div>
								</div>
							</form>
						</div>
						</div>
						<!--/ End contact Form -->
					</div>
				</div>
			</div>
		</section>	
		<!--/ End Contact Us -->
		
		<?php include "includes/footer.php" ?>
		
	<!-- Jquery JS -->
	<script src="js/jquery.min.js"></script>
		<script src="js/jquery-migrate-3.0.0.js"></script>
		<!-- Popper JS -->
		<script src="js/popper.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Modernizr JS -->
		<!-- <script src="js/modernizr.min.js"></script> -->
		<!-- ScrollUp JS -->
		<script src="js/scrollup.js"></script>
		<!-- FacnyBox JS -->
		<!-- <script src="js/jquery-fancybox.min.js"></script> -->
		<!-- Cube Portfolio JS -->
		<!-- <script src="js/cubeportfolio.min.js"></script> -->
		<!-- Slick Nav JS -->
		<script src="js/slicknav.min.js"></script>
		<!-- Slick Nav JS -->
		<!-- <script src="js/slicknav.min.js"></script> -->
		<!-- Slick Slider JS -->
		<!-- <script src="js/owl-carousel.min.js"></script> -->
		<!-- Easing JS -->
		<script src="js/easing.js"></script>
		<!-- Magnipic Popup JS -->
		<!-- <script src="js/magnific-popup.min.js"></script> -->
		<!-- Active JS -->
		<script src="js/active.js"></script>
	</body>
</html>