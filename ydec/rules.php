<!DOCTYPE html>
<html lang="en">
<head>
	<title>YDEC 2018| Rules & Regulation</title>
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
                                <li><a href="committe.php">Committee</a></li>
                                <li class="active"><a href="rules.php">Rules & Regulation</a></li>
				<li><a href="blog-post.php">Sponsorship</a></li>
<<<<<<< HEAD
				<li><a href="elements.php"><?php if(isset($_SESSION['loginUser'])){echo $_SESSION['username'];} else{echo "login";} ?></a></li>
=======
				<li><a href="elements.php"><?php if(isset($_SESSION['username'])){echo $_SESSION['username'];} else {echo "Log In";} ?></a></li>
>>>>>>> b7f1d79e34133a3a579d6dae7c58e67d469220a6
			</ul>
		</nav>
	</header>
	<!-- Header section end -->


	<!-- Page header -->
	<div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right">
			<div class="page-info">
				<h2>Rules & Regulations</h2>
				<div class="page-links">
					<a href="home.php">Home</a>
					<span>Rules & Regulations</span>
				</div>
			</div>
		</div>
	</div>
	<!-- Page header end -->


	<!-- Google map -->
        <div class="container" align="center">
            <img src="img/r1.jpg">
            <img src="img/r2.jpg">
            <img src="img/r3.jpg">            
        </div>



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
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo"></script>
	<script src="js/map.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
