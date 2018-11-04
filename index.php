
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
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
					
						<h1 id="fh5co-logo"><img src="images/logo2.ico" height="30" width="35"/> <a href="index.php">PalBo</a></h1>
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li class="active">
									<a href="index.php">Home</a>
								</li>
								<li>
									<a href="aboutpalestine.php" class="fh5co-sub-ddown">About Palestine</a>
								</li>
								<li><a href="contact.php">Contact Us</a></li>
								<li><a href="aboutUs.php">About Us</a></li>
								<li href="lognin.php" class="btn-cta"><a href="signin.php"><span>Sign in</span></a></li>
							    <li href="signup.php" class="btn-cta"><a href="signup.php"><span>Sign up</span></a></li>
							</ul>
						</nav>
					</div>
				</div>
			</header>
			
		</div>
		
		
		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/iii.jpg);">
				<div class="desc animate-box">
					<h2>فلسطين التي اعرف <br> Palestine that I know</h2>
				</div>
			</div>

		</div>


		<div class="fh5co-listing">
			<div class="container">
				<div class="row">
				
				<br><br> <br> <br><br> <br> 
					<br><br> <br> <br><br> <br> 
<div class="fh5co-listing">
			<div class="container">
				<div class="row">	
          				
		<?php
        include_once("config.php");
        $sql = "SELECT * FROM postimage ";
        $result = $link->query($sql);
  echo "<div class='grid-container'>"; // start a table tag in the HTML

while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
echo "<div class='col-md-4 col-sm-4 fh5co-item-wrap'><p align='justify'> ";
echo $row['postcontentimg']; echo '<br>';
$file = $row["pictures"];
echo '<img src="'.$file.'" height="300" width="340">'; echo '<br>';
$d1=$row['username'];
$sql1 = "SELECT * FROM userinformation WHERE username='$d1'";
        $result1 = $link->query($sql1);
        if ($result1->num_rows > 0) {
            
            if($row1 = $result1->fetch_assoc()) {
				$prenom=$row1["first"];
                $nom=$row1["last"];
				$pho=$row1["image"];
            }
            
        }
        else {
           echo "0 results";
        } 
echo "Posted By " .'<img src="'.$pho.'" height="20" width="20">  '. $prenom.$nom ; echo '<br>';
//echo "Posted By " . $row['username'] ; echo '<br>';
echo  "At ".$row['created_at']. "</p></div>"; 

}
echo "</div>";



$sql4 = "SELECT * FROM postvideo ";
        $result4 = $link->query($sql4);
        echo "<div class='grid-container'>"; // start a table tag in the HTML

while($row4 = mysqli_fetch_array($result4)){   //Creates a loop to loop through results
echo "<div class='col-md-4 col-sm-4 fh5co-item-wrap'><p align='justify'> ";
echo $row4['postcontentvideo']; echo '<br>';
$filev = $row4["video"];
$ytarray=explode("/",$filev);
$ytendstring=end($ytarray);
$ytendarray=explode("?v=", $ytendstring);
$ytendstring=end($ytendarray);
$ytendarray=explode("&", $ytendstring);
$ytcode=$ytendarray[0];
echo "<iframe width=\"355\" height=\"300\" src=\"http://www.youtube.com/embed/$ytcode\" frameborder=\"0\" allowfullscreen></iframe><br>";
echo "Posted By " .'<img src="'.$pho.'" height="20" width="20">  '. $prenom.$nom ; echo '<br>';
// echo "Posted By " . $row['username'] ; echo '<br>';
echo  "At ".$row4['created_at'];
echo "</p></div>"; 
}
echo "</div>";


mysqli_close($link);  
 echo "</div>";
			echo "</div>";
		echo "</div>";
?> 


				</div>
			</div>
		</div>		
		</div>
	<!-- END fh5co-page -->

	</div> </div>
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
							<p>Copyright 2018. All Rights Reserved. <br>Made by EFFE </p>
						</div>
					</div>
				</div>
			</div>
		</footer>

	
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

	<!-- Main JS -->
	<script src="js/main.js"></script>

	</body>
</html>

