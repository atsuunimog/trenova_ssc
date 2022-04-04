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
		<title>Request Package</title>
		
		<!-- Favicon -->
		<link rel="icon" type="image/favicon.png" href="favicon.ico">
		
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

<?php 
$package_name = "";
if(isset($_GET["package_name"])):
	 $package_name = $_GET["package_name"];
	 switch ($package_name) {
		case 'basic':
			 # code...
			 $package_name  = "Basic Package";
			 break;
		case 'essential':
			# code...
			$package_name  = "Essential Package";
			break;
		case 'standard':
			# code...
			$package_name  = "Standard Package";
			break;
				
		 default:
			 # code...
			 $package_name  = "redirect_url";
			 break;
	 }
endif;
?>
		
<!-- Events -->
<section class="about-us mb-3 pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="about-content section-title default text-left m-0">
                    <div class="section-top">
                        <h1 class='custom-black'><span>Best Offer</span><b>Request a Package</b></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>	
<!--/ Events -->

        <div class="custom-form px-3 py-3 mb-5 ">
<form class='container'>
<div class="row">
    <div class="col-6 mb-3">
        <label for="" class="form-label font-weight-bold text-uppercase">FullName</label>
        <input type="text" class="form-control py-3 border-0 px-3 lemon-bg" id="">
    </div>
    <div class="col-6 mb-3">
    <label for="" class="form-label font-weight-bold  text-uppercase">Email address</label>
    <input type="email" class="form-control py-3 lemon-bg px-3 border-0" id="">
    </div>
</div>

<div class="row">
    <div class="col-6 mb-3">
        <label for="" class="form-label font-weight-bold  text-uppercase">Phone Number</label>
        <input type="number" class="form-control py-3 px-3 lemon-bg border-0" id="">
    </div>
    <div class="col-6 mb-3">
    <label for="" class="form-label font-weight-bold  text-uppercase">WhatsApp Number</label>
    <input type="number" class="form-control py-3 px-3 lemon-bg border-0" id="">
    </div>
</div>

<div class="row">
    <div class="col-12 mb-3">
        <label for="" class="form-label font-weight-bold text-uppercase">School Name</label>
        <input type="text" class="form-control py-3 px-3 lemon-bg border-0" id="">
    </div>
</div>

<div class="row">
    <div class="col-12 mb-3">
        <label for="" class="form-label font-weight-bold  text-uppercase">School Address</label>
        <input type="text" class="form-control py-3 px-3 lemon-bg border-0" id="">
    </div>
</div>

<!-- <div class="alert alert-primary d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
  <div>
    Select a package to get started. <a href="pricing" target="_blank">See pricing list</a>
  </div>
</div> -->

<div class="row">
    <div class="col-12 mb-3">
        <label for="" class="form-label font-weight-bold  text-uppercase">Selected Package</label>
        <input type="text" value='<?php echo $package_name; ?>'  placeholder ="Select Package Name" class="form-control px-3 py-3 lemon-bg border-0" id="">
    </div>
</div>

<div class='text-center'>
    <button type="submit" class="btn btn-lg btn-dark px-4 py-3 w-100 my-3">Request Package</button>
</div>

</form>
</div>


		<?php include "includes/footer.php"; ?>
		
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