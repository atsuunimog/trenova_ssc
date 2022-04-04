<?php session_start(); ?>
<?php include "server/routes.php"; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta Tag -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name='copyright' content='pavilan'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<meta name="author" content="Trenova School Support Centre">
 		<meta name="keyword" content="School Development Plan, School Owners Forum, Edu-Business Strategist, Association of Proprietors, School Administrators, NAPPS, Education Business Strategist, Educational Marketer, Consulting, School Growth, School Owners,  Management Consulting">
		<meta name="description" content="TreNova support school growth, creates and sells businesses; provides training and business grant; publish learning support contents for private schools">

		<!-- Title Tag  -->
		<title>Contact Us</title>
		
		<!-- Favicon -->
		<link rel="icon" type="image/favicon.png" href="favicon.ico">
		
		<!-- Web Font -->
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
									<li><a href="index.html">Home</a></li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</div>
							<div class="bread-title"><h2>Our Address</h2></div>
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
					<div class="col-lg-7 col-md-7 col-12">
						<!-- Contact Form -->
						<div class="contact-form-area m-top-30">
							<form class="form" method="post" action="contact">

								<!--error notification-->
								<?php if($form_error !== ''): ?>
											<div class="alert alert-danger border-0 small-font" role="alert">
											<?php echo $form_error ?>
											</div>
											<?php   elseif($form_success !== ''): ?>
											<div class="alert alert-success border-0 small-font" role="alert">
											<?php echo $form_success ?>
											</div>
											<?php  else:  ?>
								<?php endif;  ?>
								<!--error notification-->

								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<!-- <div class="icon"><i class="fa fa-user"></i></div> -->
											<input type="text" name="first_name" placeholder="First Name" 
											value="<?php echo isset($_POST["first_name"])? $_POST["first_name"] : ''; ?>">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<!-- <div class="icon"><i class="fa fa-user"></i></div> -->
											<input type="text" name="last_name" placeholder="Last Name"
											value="<?php echo isset($_POST["last_name"])? $_POST["last_name"] : ''; ?>">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<!-- <div class="icon"><i class="fa fa-envelope"></i></div> -->
											<input type="email" name="email" placeholder="Email"
											value="<?php echo isset($_POST["email"])? $_POST["email"] : ''; ?>">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<!-- <div class="icon"><i class="fa fa-tag"></i></div> -->
											<input type="text" name="subject" placeholder="Type Subjects" 
											value="<?php echo isset($_POST["subject"])? $_POST["subject"] : ''; ?>">
										</div>
									</div>
									<div class="col-12">
										<div class="form-group textarea">
											<!-- <div class="icon"><i class="fa fa-pencil"></i></div> -->
											<textarea type="textarea" name="message" rows="5"><?php echo isset($_POST["message"])? $_POST["message"] : 'Enter your message...'; ?>
											</textarea>
										</div>
									</div>
									<input type="hidden" name="contact-us">
									<div class="col-12">
										<div class="form-group button">
											<button type="submit" class="bizwheel-btn theme-2">Send Now</button>
										</div>
									</div>
								</div>
							</form>
						</div>
						<!--/ End contact Form -->
					</div>
					<div class="col-lg-5 col-md-5 col-12">

					<div class="section-title mb-0  p-0 default text-left">
						<div class="section-top">
							<h1 class='font-weight-bold  mb-1 custom-black' style='font-size:1.5em;'><b><span>We're Online</span></b>
							Contact Us</h1>
						</div>
					</div>

						<div class="contact-box-main ">
							<div class="contact-title">
								<p>Address: 7B Ogunsiji Close, Allen, Ikeja, Lagos. We are also available online. <a href='https://tawk.to/schoolsupportcentre' target="_blank" class='text-primary'>No Whatsapp? Start Chat</a></p>
							</div>
							<!-- Single Contact -->
							<div class="single-contact-box">
								<div class="c-icon"><i class="fa fa-clock-o"></i></div>
								<div class="c-text">
									<p class='font-weight-bold custom-black'>Opening Hour</h4>
									<p>Monday - Friday<br>08AM - 06PM</p>
								</div>
							</div>
							<!--/ End Single Contact -->
							<!-- Single Contact -->
							<div class="single-contact-box">
								<div class="c-icon"><i class="fa fa-phone"></i></div>
								<div class="c-text">
								<p class='font-weight-bold custom-black'>Call Us</h4>
									<p>Tel.: +234 817 936 1381</p>
								</div>
							</div>
							<!--/ End Single Contact -->
								<!-- Single Contact -->
								<div class="single-contact-box">
								<div class="c-icon"><i class="fa fa-whatsapp"></i></div>
								<div class="c-text">
								<p class='font-weight-bold custom-black'>Whatsapp</h4>
									<p>Tel.: +234 817 936 1381</p>
								</div>
							</div>
							<!--/ End Single Contact -->
							<!-- Single Contact -->
							<div class="single-contact-box d-flex">
								<div class="c-icon"><i class="fa fa-envelope-o"></i></div>
								<div class="c-text">
									<p class='font-weight-bold custom-black'>Email Us</h4>
									<p>info@schoolsupportcentre.com</p>
								</div>
							</div>
							<!--/ End Single Contact -->
						</div>
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

