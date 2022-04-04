<?php session_start(); ?>
<?php include "routes.php"; ?>
<!DOCTYPE html>
<html lang="zxx">
	<head>
		<!-- Meta Tag -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name='copyright' content='pavilan'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Title Tag  -->
		<title>Package Manager</title>
		
		<!-- Favicon -->
		<link rel="icon" type="image/favicon.png" href="../favicon.ico">
		
		<!-- Web Font -->
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!--web icons-->
        <link type="text/css" rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		
		<!-- Bizwheel Plugins CSS -->
		<link rel="stylesheet" href="../css/animate.min.css">
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/cubeportfolio.min.css">
		<link rel="stylesheet" href="../css/font-awesome.css">
		<link rel="stylesheet" href="../css/jquery.fancybox.min.css">
		<link rel="stylesheet" href="../css/magnific-popup.min.css">
		<link rel="stylesheet" href="../css/owl-carousel.min.css">
		<link rel="stylesheet" href="../css/slicknav.min.css">

		<!-- Bizwheel Stylesheet -->  
		<link rel="stylesheet" href="../css/reset.css">
		<link rel="stylesheet" href="../css/custom.css">
		<link rel="stylesheet" href="../style.css">
		<link rel="stylesheet" href="../css/responsive.css">
		
		<!-- Bizwheel Colors -->
		<!--<link rel="stylesheet" href="css/skins/skin-1.css">-->
		<!--<link rel="stylesheet" href="css/skins/skin-2.css">-->
		<!--<link rel="stylesheet" href="css/skins/skin-3.css">-->
		<!--<link rel="stylesheet" href="css/skins/skin-4.css">-->
		
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		
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
		
		<!-- Contact Us -->
		<section class="contact-us section-space">

			<div class="container">
				<div class="row">
				       <div class="col-12 col-sm-3">
                           <!--content placeholder-->
                           <div class="custom-profile-menu custom-placeholder px-3 py-3 rounded">
                                <ul>
                                   <li class='d-block border-bottom pb-2'><a href='index.php'>Profile</a></li>
                                   <li class='d-block border-bottom pb-2'><a href='subscription.php'>Subscription</a></li>
                                   <li class='d-block border-bottom pb-2'><a href='package-manager.php' class='font-weight-bold'>Package Manger</a></li>
                                </ul>
                           </div>
                           <!--content placeholder-->
                        </div>

                        <div class="col-12 col-sm-6">
                        <div class="px-3 py-3">
                                <h3>Package Manager</h3>
                                <p class='mb-3'>You have full control to manage your own account setting</p>

								<?php if(!userHasActiveSubscription()):?>
									<!--subscription notification-->
									<div class="alert alert-danger" role="alert">
									<strong>Important: </strong> You have no active subscription. Select a 
									<a href="pricing" class='font-weight-bold text-primary'>membership plan</a> to get started
									</div>
									<!--subscription notification-->
								<?php endif; ?>

                                <!-- Contact Form -->
                                <div class="contact-form-area m-top-30">
                                    <form class="form" method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
								
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
                                            <div class="col-lg-12 col-md-12 col-12">
                                                <div class="form-group">
                                                    <!-- <div class="icon"><i class="fa fa-map"></i></div> -->
                                                    <?php include "includes/packages.php"; ?>
                                                </div>
                                            </div>

											<input type="hidden" name="submit-package">
                                            
                                            <div class="col-12">
                                                <div class="form-group button">
                                                    <button type="submit" class="bizwheel-btn theme-2">Update Package</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!--/ End contact Form -->
                                </div>
                                <!--content placeholder-->
                        </div>

                        <div class="col-12 col-sm-3">
                           <!--content placeholder-->
                           <div class="custom-placeholder px-3 py-3 rounded">
                               Get information about <a href='../pricing.php' class='text-primary'>membership pricing</a>
                           </div>
                           <!--content placeholder-->
                        </div>
				</div>
			</div>
		</section>	
		<!--/ End Contact Us -->
		
		<?php include "includes/footer.php" ?>
		
		<!-- Jquery JS -->
		<script src="../js/jquery.min.js"></script>
		<script src="../js/jquery-migrate-3.0.0.js"></script>
		<!-- Popper JS -->
		<script src="../js/popper.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="../js/bootstrap.min.js"></script>
		<!-- Modernizr JS -->
		<script src="../js/modernizr.min.js"></script>
		<!-- ScrollUp JS -->
		<script src="../js/scrollup.js"></script>
		<!-- FacnyBox JS -->
		<script src="../js/jquery-fancybox.min.js"></script>
		<!-- Cube Portfolio JS -->
		<script src="../js/cubeportfolio.min.js"></script>
		<!-- Slick Nav JS -->
		<script src="../js/slicknav.min.js"></script>
		<!-- Slick Nav JS -->
		<script src="../js/slicknav.min.js"></script>
		<!-- Slick Slider JS -->
		<script src="../js/owl-carousel.min.js"></script>
		<!-- Easing JS -->
		<script src="../js/easing.js"></script>
		<!-- Magnipic Popup JS -->
		<script src="../js/magnific-popup.min.js"></script>
		<!-- Active JS -->
		<script src="../js/active.js"></script>
	</body>
</html>