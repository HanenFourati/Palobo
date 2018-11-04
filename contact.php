
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	 <link rel="shortcut icon" type="image/x-icon" href="images/logo.ico"> 
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Palestinians Blog</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Palestine" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="Hanen Fourati" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div id="fh5co-header">
			<header id="fh5co-header-section">
				<div class="container">
					<div class="nav-header" >
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
						<h1 id="fh5co-logo"><img src="images/logo2.ico" height="30" width="35"/><a href="index.php">PalBo</a></h1>
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li>
									<a href="index.php">Home</a>
								</li>
								<li>
									<a href="aboutpalestine.php" class="fh5co-sub-ddown">About Palestine</a>
								</li>
								<li class="active"><a href="contact.php">Contact Us</a></li>
								<li><a href="aboutUs.php">About Us</a></li>
								<li href="lognin.php" class="btn-cta"><a href="signin.php"><span>Sign in</span></a></li>
							    <li href="signup.php" class="btn-cta"><a href="signup.php"><span>Sign up</span></a></li>
							</ul>
						</nav>
					</div>
				</div>
			</header>
			
		</div>
		
		<div id="fh5co-contact" class="fh5co-section animate-box">
			<div class="container">
				<form action="contact.php" method="post">
					<div class="row">
						<div class="col-md-6"> <br> <br> <br> 
							<h3 class="section-title">Our Address</h3>
							<p>You can find us here:</p>
							<ul class="contact-info">
								<li><i class="icon-location-pin"></i>11 Main Street, Metloui, Tunisia TN 2130</li>
								<li><i class="icon-phone2"></i>+ 216 51 0759 0477</li>
								<li><i class="icon-mail"></i><a href="#">palbo.cu@hotmail.com</a></li>
								<li><i class="icon-globe2"></i><a href="#">www.palbo.com</a></li>
							</ul>
						</div>
						<div class="col-md-6">
							<div class="row"> <br> <br> <br> 
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Name" name="name" >
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Email" name="email">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea class="form-control" id="" cols="30" rows="7" placeholder="Message" name="msg"></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="submit" value="Send Message" class="btn btn-primary btn-lg">
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- END fh5co-contact 
		<div id="map" class="fh5co-map"></div>
		END map -->

<?php

//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "palbo.cu@hotmail.com";
  $email = $_REQUEST['email'];
  $name = $_REQUEST['name'];
  $msg = $_REQUEST['msg'];
    //echo $admin_email;
	//echo  $email;
	//echo $name;
	//echo $msg;
  //send email
  
  mail($admin_email, "INFORMATION AND QUESTION", $msg,"From: ".$name.$email);
  
  //Email response

  echo "Thank you for contacting us!";
  }
  
  //if "email" variable is not filled out, display the form
 
?>
		
		
				
<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter2"></i></a>
								<a href="#"><i class="icon-facebook2"></i></a>
								<a href="#"><i class="icon-instagram"></i></a>
								<a href="#"><i class="icon-youtube"></i></a>
							</p>
							<p>Copyright 2018. All Rights Reserved. <br>Made by EFFE  </p>
						</div>
					</div>
				</div>
			</div>
		</footer>

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>

	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>

	<!-- Main JS -->
	<script src="js/main.js"></script>

	</body>
</html>

