<?php
include 'db_connection.php';

$conn = OpenCon();

echo "Connected Successfully";


if( isset($_POST["submitStudentUPM"]) ){

		$userID = $_POST["createcode"];
		$fullname = $_POST["fullname"];
		$contact = $_POST["contact"];
		$email = $_POST["email"];
		$address = $_POST['address'];
		$studentid = $_POST['studentID'];
		$university = $_POST["university"];
		$faculty = $_POST["faculty"];
		$programme = $_POST["programme"];
		$classification = $_POST["classification"];
		$username = $_POST["username"];	    
  		$password = md5($_POST['password']);
   		$code = $_POST['referralID'];
   		$imageName = mysqli_real_escape_string($conn, $_FILES["studentIDImg"]["name"]);
		$imageData = mysqli_real_escape_string($conn, file_get_contents($_FILES["studentIDImg"]["tmp_name"]));
		$imageType = mysqli_real_escape_string($conn, $_FILES["studentIDImg"]["type"]);
		
		
		$unique = uniqid('', true);
		$uniq = substr($unique, strlen($unique) - 4, strlen($unique));
		
		
	session_start();
		$_SESSION['loginUser'] =$userID;
		$_SESSION['fullname'] = $fullname;
		$_SESSION['contact'] = $contact;
		$_SESSION['email'] = $email;
		$_SESSION['address'] = $address;
		$_SESSION['studentid'] = $studentid;
		$_SESSION['university'] = $university;
		$_SESSION['faculty'] = $faculty;
		$_SESSION['programme'] = $programme;
		$_SESSION['classification'] = $classification;
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		$_SESSION['referralID'] = $code;
		$_SESSION['imageName'] = $imageName;
		$_SESSION['imageData'] = $imageData;
		$_SESSION['imageType'] = $imageType;



}


$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>1 Million Traders - Universiti Putra Malaysia % PKT Logistic Group Sdn Bhd</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- bootstrap-css -->
<link href="src/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="src/css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="src/css/plan.css" type="text/css" media="all" />
<!--// css -->
<!-- gallery -->
<link type="text/css" rel="stylesheet" href="src/css/cm-overlay.css" />
<!-- //gallery -->
<!-- font-awesome icons -->
<link href="src/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link type="text/css" rel="stylesheet" href="src/css/fontJosefinSans.css" />
<link type="text/css" rel="stylesheet" href="src/css/fontRobotoCondensed.css" />
<!-- //font -->
<script src="src/js/jquery-1.11.1.min.js"></script>
<script src="src/js/bootstrap.js"></script>
<script src="src/js/planTabs.js"></script>
<script src="src/js/timer.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!-- animation -->
<link href="src/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="src/js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!-- //animation --> 

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
	<!-- banner -->
	<div class="">
		<div class="agileinfo-dot">
			<div class="header">
				<div class="container">
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="fixed" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<div class="agileits-logo">
								<h1><a href="index.php"><img src="src/images/logo1.png" alt="" /> 1 Million Traders </a></h1>
							</div>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
							<nav>
								<ul class="nav navbar-nav">
									<li><a href="index.php">About</a></li>
									<li><a href="index.php">Events</a></li>
									<li><a href="index.php">Membership Registration</a></li>
									<li><a href="index.php">News</a></li>
									<li><a href="login.php">Log In</a></li>
								</ul>
							</nav>
						</div>
						<!-- /.navbar-collapse -->
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->
        	
	
	
	<!-- profile -->
	<div class="contact-form">
		<div class="contact-form-center">
			<div class="w3l-heading">
				<h3>Membership Plan for Student</h3>
				<div class="w3ls-border"> </div>
			</div></br>
			
			<div class="panel panel-info">
            <div class="panel-body">

				<div class="row" style="margin:2px;">
				  <!--Silver-->                  
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="blocks">
							<div class="block-header">
							  <h4>SILVER</h4>
							</div>
							<div class="block-container">
								<p><span class="glyphicon glyphicon-ok" data-unicode="e013" style="color:#45BA76;"> </span>No payment fee</p>
								<p><span class="glyphicon glyphicon-ok" data-unicode="e013" style="color:#45BA76;"> </span>50% off - 1MillionTraders training or workshop event</p>
								<p><span class="glyphicon glyphicon-ok" data-unicode="e013" style="color:#45BA76;"> </span>50% off - University or national competition</p>
								<p><span class="glyphicon glyphicon-remove" data-unicode="e013" style="color:red;"> </span>NOT ELIGIBLE to join YDEC 2018</p>
								<p><span class="glyphicon glyphicon-remove" data-unicode="e013" style="color:red;"> </span>VERY Limited Access to all Online Resource</p>
								<p class="price"><i style="font-size: 30px;"></i>FREE</p>
							</div>
							<div class="block-footer">
								<form action="signup.php" method="POST">
								<button type="submit" class="subscribe-now" name="userType" id="userType" value="Silver">Subscribe Now</a>
							</form>
							</div>
						</div>
					</div>
				  <!--Gold-->                  
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="blocks active-block">
							<div class="block-header">
								<h4>GOLD</h4>
							</div>
							<div class="block-container">
								<p><span class="glyphicon glyphicon-ok" data-unicode="e013" style="color:#45BA76;"> </span>Once in a lifetime membership fee</p>
								<p><span class="glyphicon glyphicon-ok" data-unicode="e013" style="color:#45BA76;"> </span>80% off - 1MillionTraders training or workshop event</p>
								<p><span class="glyphicon glyphicon-ok" data-unicode="e013" style="color:#45BA76;"> </span>80% off - University or national competition</p>
								<p><span class="glyphicon glyphicon-ok" data-unicode="e013" style="color:#45BA76;"> </span>ELIGIBLE to join YDEC 2018</p>
								<p><span class="glyphicon glyphicon-remove" data-unicode="e013" style="color:red;"> </span>LIMITED Access to all Online Resource</p>
								<p class="price"><i style="font-size: 30px;">RM</i>10<sub><small class="renew-price">for Lifetime</small></sub></p>
							</div>
							<div class="block-footer">
								<form action="signup.php" method="POST">
								<button type="submit" class="subscribe-now" name="userType" id="userType" value="Gold">Subscribe Now</a>
							</form>
							</div>
						</div>
					</div>
				  <!--Diamond-->
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="blocks">
							<div class="block-header">
								<h4>DIAMOND</h4>
							</div>
							<div class="block-container">
								<p><span class="glyphicon glyphicon-ok" data-unicode="e013" style="color:#45BA76;"> </span>Once in a lifetime membership fee</p>
								<p><span class="glyphicon glyphicon-ok" data-unicode="e013" style="color:#45BA76;"> </span>FREE - 1MillionTraders training or workshop event</p>
								<p><span class="glyphicon glyphicon-ok" data-unicode="e013" style="color:#45BA76;"> </span>FREE - University or national competition</p>
								<p><span class="glyphicon glyphicon-ok" data-unicode="e013" style="color:#45BA76;"> </span>FREE access to all online resources</p>
								<p><span class="glyphicon glyphicon-ok" data-unicode="e013" style="color:#45BA76;"> </span>ELIGIBLE to join YDEC 2018</p>
								<p class="price"><i style="font-size: 30px;">RM</i>30<sub><small class="renew-price">for Lifetime</small></sub></p>
							</div>
							<div class="block-footer">
								<form action="signup.php" method="POST">
								<button type="submit" class="subscribe-now" name="userType" id="userType" value="Diamond">Subscribe Now</a>
							</form>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
		</div>
		</div>
	<!-- //profile -->

	<!-- footer -->
	<footer>
		<div class="container">
			<p>© 2018 1MillionTraders . All Rights Reserved | Design by <a href="http://w3layouts.com/"> W3layouts</a> </p>
		</div>
	</footer>
	<!-- //footer -->
	<script src="src/js/jarallax.js"></script>
	<script src="src/js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<script src="src/js/responsiveslides.min.js"></script>
	<script type="text/javascript" src="src/js/move-top.js"></script>
	<script type="text/javascript" src="src/js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	
<!-- //here ends scrolling icon -->
</body>	
</html>
