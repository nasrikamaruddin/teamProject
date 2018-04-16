<?php
//create team . by tee


include 'connection/db_connection.php';

$conn = OpenCon();
session_start();
if(isset($_SESSION['loginUser'])){
	$loginuser = $_SESSION['loginUser'];
	$username = $_SESSION['username'];
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>YDEC 2018| Committee</title>
	<meta charset="UTF-8">
	<meta name="description" content="Labs - Design Studio">
	<meta name="keywords" content="lab, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
        <link href="img/logo2.png" rel="shortcut icon"/>
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	
	<!-- Header section -->
	<header class="header-section">
		<div class="logo">
			<img src="img/logo1.png" alt=""><!-- Logo -->
		</div>
		<!-- Navigation -->
		<div class="responsive"><i class="fa fa-bars"></i></div>
		<nav>
			<ul class="menu-list">
                <li><a href="home.php">About</a></li>
                <li class="active"><a href="committe.php">Committee</a></li>
                <li><a href="rules.php">Rules & Regulation</a></li>
				<li><a href="blog-post.php">Sponsorship</a></li>
				<li class="dropdown">
					<a class="dropdown-toggle"  href="ydeclogin.php" data-toggle="dropdown" >
					<?php if(isset($_SESSION['loginUser'])){echo $_SESSION['username'];
					echo '
					<span class="caret"></span></a>
					<ul class="dropdown-menu" > 
					  <li><a href="team2.php">Create Team</a></li>
					  <li><a href="subreport.php">Submission</a></li>
					  <li><a href="../index-logged.php">1 Million Traders</a></li>
					  <li><a href="#">Log Out</a></li>
					</ul> ';
					} else{echo '</a><a  href="ydeclogin.php">login</a>';} ?>
				</li>
			</ul>
		</nav>
	</header>
	<!-- Header section end -->


	<!-- Page header -->
	<div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right">
			<div class="page-info">
				<h2>Program Committee</h2>
				<div class="page-links">
                                    <a href="home.php">Home</a>
					<span>Committee</span>
				</div>
			</div>
		</div>
	</div>
	<!-- Page header end-->


	<!-- services section -->
	<div class="services-section spad">
		<div class="container">
			<div class="section-title dark">
				<h2>GET TO KNOW <span>OUR AMAZING</span> TEAM!</h2>
			</div>
			<div class="row">
			<img src="img/cp.png" style="width:600px;height:800px;margin-left: 290px;" alt="Committee" align="center">
			</div>
		</div>
	</div>
	<!-- services section end -->

<!-- Footer section -->
	<footer class="footer-section">
		<h2>YDEC 2018 All rights reserved. Designed by <a href="https://colorlib.com" target="_blank">Colorlib</a></h2>
	</footer>
	<!-- Footer section end -->




	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
