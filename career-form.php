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
		<title>Reading Ambassador</title>
		<!-- Favicon -->
		<link rel="icon" type="image/favicon.png" href="favicon.ico">
		<!-- Web Font -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
        <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
		<link rel="stylesheet" href="css/font-awesome.css">
		<link rel="stylesheet" href="css/slicknav.min.css">
		<link rel="stylesheet" href="css/reset.min.css">
		<link rel="stylesheet" href="css/custom.css">
		<link rel="stylesheet" href="style.min.css">
		<link rel="stylesheet" href="css/responsive.css">
        <style>
         p{font-size:1.3em !important;}
         @media only screen and (max-width: 600px){
            .lib-video{width:100%; height:300px;}
            .header-flex{width:100%;}
            .custom-form-container{width:100%;}
            .youtube-frame{width:100%; height:300px !important;}
        }
        </style>
	</head>
	<body id="bg">
<!-- Boxed Layout -->
<div id="page" class="site boxed-layout"> 
<!-- Preloader-->

<!-- <div class="preeloader">
    <div class="preloader-spinner"></div>
</div> -->
<!--/ End Preloader -->
<?php include "includes/header.php" ?>

<!----------------------------------start expression of interest form----------------------------------->
<div class="custom-form px-3 py-5 my-3 ">
<div class="container text-center mb-4">
    <h3 style='color:#6fb71d;'>Role Application: <span class='text-danger'><?php echo isset($_GET["role"])? $_GET["role"] : "" ?><a id="target-form"></a></span></h3>
</div>

<form class='container' id="career-form" method="post" enctype="multipart/form-data">

<p class="mb-4 fw-bold mb-3">
<span class='text-danger'>*</span>
Please complete every information in this form
</p>

<div class="row">
    <div class="col-sm-4 col-12 mb-3">
        <label for="" class="form-label fw-bold text-uppercase"><span class='text-danger font-weight-bold'>*</span>YOUR FIRST NAME</label>
        <input type="text" name="firstname" class="form-control py-3 border-0 px-3  lemon-bg" id="">
    </div>
    <div class="col-sm-4 col-12 mb-3">
        <label for="" class="form-label fw-bold text-uppercase"><span class='text-danger font-weight-bold'>*</span>SURNAME</label>
        <input type="text" name="surname"  class="form-control py-3 px-3 lemon-bg border-0" id="">
    </div>
    <div class="col-sm-4 col-12 mb-3">
        <label for="" class="form-label fw-bold text-uppercase"><span class='text-danger font-weight-bold'>*</span>OTHER NAMES</label>
        <input type="text" name="other_names"  class="form-control px-3 py-3 lemon-bg border-0" id="">
    </div>
</div>

<div class="row">
    <div class="col-12 mb-3">
        <label for="" class="form-label fw-bold text-uppercase"><span class='text-danger font-weight-bold'>*</span>E-MAIL</label>
        <input type="email" name="email" class="form-control py-3 px-3 lemon-bg border-0" id="">
    </div>
</div>

<div class="row">
    <div class="col-12 mb-3">
        <label for="" class="form-label fw-bold text-uppercase"><span class='text-danger font-weight-bold'>*</span>ADDRESS</label>
        <input type="text" name="address" class="form-control py-3 px-3 lemon-bg border-0" id="">
    </div>
</div>

<div class="row">
    <div class="col-6 mb-3">
        <label for="" class="form-label text-uppercase  fw-bold"><span class='text-danger font-weight-bold'>*</span>Phone No</label>
        <input type="number" name="phone_no" placeholder="080 XXX XXX" class="form-control py-3 px-3 lemon-bg border-0" id="">
    </div>
    <div class="col-6 mb-3">
    <label for="" class="form-label fw-bold text-uppercase fw-bold">WhatsApp</label>
    <input type="number" name="whatsapp_no" placeholder="080 XXX XXX" class="form-control py-3 px-3 lemon-bg border-0" id="">
    </div>
</div>

<div class="row">
    <div class="col-12 mb-3">
        <label for="" class="form-label fw-bold text-uppercase fw-bold">
        <span class='text-danger font-weight-bold'>*</span>
         COVER LETTER 
        </label>
        <textarea name="cover_letter" class='form-control lemon-bg border-0' rows="5"></textarea>
    </div>
</div>

<input type="hidden" name="career_application">

<input type="hidden" name="career_role" value="<?php echo isset($_GET['role'])? $_GET['role'] : ""; ?>">

<div class="mb-3">
  <label for="formFile" class="form-label text-uppercase fw-bold">
    <span class='text-danger font-weight-bold'>*</span>
      UPLOAD CV - USE PDF OR DOCX FORMAT</label>
  <input class="form-control rounded-0" type="file" name="fileToUpload" id="formFile">
</div>

<p id="inner-alert"></p>

<div class='text-center'>
    <button type="submit" class="btn btn-lg btn-dark px-4 my-3" onclick="RequestPackage()">Submit Application</button>
</div>

</form>
</div>

<?php include "includes/footer.php"; ?>

<script>
function RequestPackage(){
    event.preventDefault();
    var xhttp = new XMLHttpRequest;
    var myform = document.getElementById("career-form");
    var form = new FormData(myform);
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("inner-alert").innerHTML = this.responseText;
        }else{
            document.getElementById("inner-alert").innerHTML = "<span class='alert alert-info fw-bold mt-3 d-block'>Processing...</span>";
        }
    }
    xhttp.open("post","server/xhttp_career.php", true);
    // xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(form);
}
</script>
	<!-- Jquery JS -->
    <script src="js/jquery.min.js"></script>
		<script src="js/jquery-migrate-3.0.0.js"></script>
		<!-- Popper JS -->
		<script src="js/popper.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Modernizr JS -->
		<script src="js/scrollup.js"></script>
		<script src="js/slicknav.min.js"></script>
		<!-- Slick Nav JS -->
		<script src="js/easing.js"></script>
		<!-- Magnipic Popup JS -->
		<script src="js/active.js"></script>
	</body>
</html>
		