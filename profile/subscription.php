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
		<title>Subscription</title>
		
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
                                   <li class='d-block border-bottom pb-2'><a href='subscription.php' class='font-weight-bold'>Subscription</a></li>
								   <li class='d-block border-bottom pb-2'><a href='package-manager.php'>Package Manger</a></li>
                                </ul>
                           </div>
                           <!--content placeholder-->
                        </div>

                        <div class="col-12 col-sm-9">
                           <!--content placeholder-->
                           <div class="px-3 py-3">
                                <h3>Subscription</h3>
                                <p class='mb-3'>Here is list of package/product that you have subscribed.</p>

								<?php if(!userHasActiveSubscription()):?>
                                <!--subscription notification-->
                                <div class="alert alert-danger" role="alert">
                                    <strong>Important: </strong> You have no active subscription. Select a 
                                    <a href="pricing" class='font-weight-bold text-primary'>membership plan</a> to get started
                                </div>
                                <!--subscription notification-->
								<?php endif; ?>

                                <!--subscription table-->
                                <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Request_Date</th>
                                        <th scope="col">Package_Name</th>
                                        <th scope="col">Active_Date</th>
										<th scope="col">Expiry_Date</th>
										<th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php showSubscription(); ?>
                                    </tbody>
                                    </table>
                                </div>
                                <!--subscription table-->

                     
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