<?php
// Initialize the session
session_start();
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: signin.php");
  exit;
}
?>
<!--DOCTYPE html-->
<html lang="en">
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
	
			<div i d="fh5co-wrapper">
		<div id="fh5co-page">
		<div id="fh5co-header">
			<header id="fh5co-header-section">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
						<h1 id="fh5co-logo"><img src="images/logo2.ico" height="30" width="35"/><a href="index.php">PalBo</a></h1>
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
						
								<li>
							   <p><a href="logout.php" class="btn btn-danger">Sign Out</a></p></li>
							</ul>
						</nav>
					</div>
				</div>
			</header>
			
		</div>
		</div> </div>
				<div id="fh5co-contact" class="fh5co-section animate-box">
			<div class="container">
				<div class="wrapper">
				<div class="page-header">
        
			<?php
        include_once("config.php");
        $username = htmlspecialchars($_SESSION['username']);
        $sql = "SELECT * FROM userinformation WHERE username='$username'";
        $result = $link->query($sql);
        if ($result->num_rows > 0) {
            
            if($row = $result->fetch_assoc()) {
				echo '<h1>Welcome to PalBo'.'</h1>'.'<img src="'.$row["image"].'" height="100" width="100" id="circle">    <b>'.$row["first"]." ".$row["last"].'</b>'; echo '</div>';
                echo '<table>';
				echo '<tr><td><h2>Your information</h2></td><td> </td></tr>';
                echo '<tr><td>ID:</td><td>'.$row["idinfo"].'</td></tr>';
                echo '<tr><td>First name:</td><td>'.$row["first"].'</td></tr>';
                echo '<tr><td>Last name:</td><td>'.$row["last"].'</td></tr>';
				echo '<tr><td>Gender:</td><td>'.$row["gender"].'</td></tr>';
				echo '<tr><td>Birth date:</td><td>'.$row["age"].'</td></tr>';
				echo '<tr><td>Hometown:</td><td>'.$row["hometown"].'</td></tr>';
                echo '<tr><td>Country:</td><td>'.$row["country"].'</td></tr>';
            }
            echo '</table>';
        }
        else {
           echo "0 results";
        } 
?>
					</div>
						</div>
<div id="fh5co-contact" class="fh5co-section animate-box">
			<div class="container">
				<form action="welcome.php" method="post" enctype="multipart/form-data" name="addroom">
					<div class="row">
						<div class="col-md-6"> <br> <br> <br> 
							<div class="form-group">
										<textarea name="postcontent" class="form-control" id="" cols="60" rows="12" placeholder="Post"></textarea>
									</div>
						</div>
						<div class="col-md-6">
							<div class="row"> <br> <br> <br> 
								<div class="col-md-6">
									<div class="form-group">
                              <input name="c1" type="checkbox" onclick="var input = document.getElementById('image'); if(this.checked){ input.disabled = false; input.focus();}else{input.disabled=true;}" />
                             <label for="file">Share Image</label>	 <input type="file" name="image" id="image" class="btn btn-primary btn-lg" disabled="disabled" placeholder="Choose Image">
						  <br>
									</div>
								</div>
							
								<div class="col-md-12">
									<div class="form-group">
										 <input name="c2" type="checkbox" onclick="var input = document.getElementById('video'); if(this.checked){ input.disabled = false; input.focus();}else{input.disabled=true;}" />
							  <label for="file">Share video</label> <input type="text" name="video" id="video" class="form-control" disabled="disabled" placeholder="Video Link"> 
							 
                              <br>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="submit" value="Post" name="submit" class="btn btn-primary btn-lg"><br> <br>	<br> 
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>				
	         
<?php
include('config.php');
if(isset($_POST['submit'])){ 
if (isset($_POST['c1'])){
if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"photos/" . $_FILES["image"]["name"]);
			
			$location="photos/" . $_FILES["image"]["name"];
			$postcontent=$_POST['postcontent'];
if($postcontent!=''){			
			$save=mysqli_query($link,"INSERT INTO postimage (postcontentimg, pictures, username)
values ('$postcontent', '$location','$username')");
echo "<br/><br/><span>Data Inserted successfully...!!";
echo '<script>window.location.href = "/PalestiniansBlog/welcome.php?username='.$username.'";</script>';
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}

	   				
} }
else if  (isset($_POST['c2']))  {

			$postcontent=$_POST['postcontent'];
			$video=$_POST['video'];
if($postcontent!=''){			
			$save=mysqli_query($link,"INSERT INTO postvideo (postcontentvideo, video, username)
values ('$postcontent', '$video','$username')");
echo "<br/><br/><span>Data Inserted successfully...!!";
echo '<script>window.location.href = "/PalestiniansBlog/welcome.php?username='.$username.'";</script>';
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
}	?>
				<?php
       
        include_once("config.php");
        $username = htmlspecialchars($_SESSION['username']);
        $sql = "SELECT * FROM userinformation WHERE username='$username'";
        $result = $link->query($sql);
        if ($result->num_rows > 0) {
            
            if($row = $result->fetch_assoc()) {
				$prenom=$row["first"];
                $nom=$row["last"];
				$pho=$row["image"];
            }
            
        }
        else {
           echo "0 results";
        } 

include('config.php');
echo "<div class='fh5co-listing'>";
			echo "<div class='container'>";
				echo "<div class='row'>";	
		
        include_once("config.php");
        //$username = htmlspecialchars($_SESSION['username']);
        $sql = "SELECT * FROM postimage where username='$username' ";
        $result = $link->query($sql);
        echo "<div class='grid-container'>"; // start a table tag in the HTML

while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
echo "<div class='col-md-4 col-sm-4 fh5co-item-wrap'> <p align='justify'>";
echo $row['postcontentimg']; echo '<br>';
$file = $row["pictures"];
echo '<img src="'.$file.'" height="300" width="340">'; echo '<br>';
echo "Posted By " .'<img src="'.$pho.'" height="20" width="20">  '. $prenom.$nom ; echo '<br>';
// echo "Posted By " . $row['username'] ; echo '<br>';
echo  "At ".$row['created_at'];
echo "</p></div>"; 
}
echo "</div>";



        $sql4 = "SELECT * FROM postvideo where username='$username' ";
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
echo "<iframe width=\"340\" height=\"300\" src=\"http://www.youtube.com/embed/$ytcode\" frameborder=\"0\" allowfullscreen></iframe><br>";
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




		<!-- END fh5co-contact 
		<div id="map" class="fh5co-map"></div>
		END map -->

		
		
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