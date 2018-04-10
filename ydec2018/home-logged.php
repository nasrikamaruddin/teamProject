<?php

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
	<title>YDEC 2018</title>
	<meta charset="UTF-8">
	<meta name="description" content="YDEC 2018">
	<meta name="keywords" content="your dream cme true is our goal">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
        <link href="img/logo2.png" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
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
				<li class="active"><a href="home.php">About</a></li>
                                <li><a href="committe.php">Committee</a></li>
				<li><a href="rules.php">Rules & Regulation</a></li>
				<li><a href="blog-post.php">Sponsorship</a></li>
				<li><a href="team2.php">Team</a></li>
				<li><a href="ydeclogin.php">Login</a></li>
			</ul>
		</nav>
	</header>
	<!-- Header section end -->


	<!-- Intro Section -->
	<div class="hero-section">
		<!-- slider -->
			<div class="item  hero-item" data-bg="img/03.jpg"></div>
	</div>
	<!-- Intro Section -->


	<!-- About section -->
	<div class="about-section">
		<div class="overlay"></div>
                <!-- card section -->
		<div class="card-section">
			<div class="container">
				<div class="row">
					<!-- single card -->
					<div class="col-md-4 col-sm-6">
						<div class="lab-card">
							<div class="icon">
								<i class="flaticon-023-flask"></i>
							</div>
							<h2>WHO CAN PARTICIPATE ?</h2>
                                                        <p>Students from <b>Universiti Putra Malaysia</b> only which registered as <b>GOLD</b> or <b>DIAMOND</b> member of 1MillionTraders.com</p>
						</div>
					</div>
					<!-- single card -->
					<div class="col-md-4 col-sm-6">
						<div class="lab-card">
							<div class="icon">
								<i class="flaticon-037-idea"></i>
							</div>
							<h2>TEAM FORMATION</h2>
                                                        <p>Consists of <b>NOT MORE</b> than 5 members PREFERABLY to include a member each from from Faculty of Economics & Management AND Faculty of Computer Science & Information Technology.</p>
						</div>
					</div>
					<!-- single card -->
					<div class="col-md-4 col-sm-12">
						<div class="lab-card">
							<div class="icon">
                                                            <i class="flaticon-011-compass"></i>
							</div>
							<h2>SUBMISSION TEMPLATE</h2>
                                                        <p><a href=""> > Business Proposal </a></p>
                                                        <p><a href=""> > Pitching Video </a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- card section end-->
                
		<!-- About contant -->
		<div class="about-contant">
			<div class="container">
				<div class="section-title">
					<h2>About <span> YDEC 2018</span> !</h2>
				</div>
				<div class="row">
					<div class="col-md-6">
                                            <p><b style="font-size: 24px">Young Digital Entrepreneurship Challenge (YDEC) 2018</b>   program aims to educate group of creative and innovative young entrepreneurs from Univerisiti Putra Malaysia by embracing new ventures and <b style="font-size: 20px">transformation of “Brick and Mortar”</b> (traditional street-side) businesses on products or services through novel digital technologies and solutions.</p>
					</div>
					<div class="col-md-6">
                                            <p>This program currently is only open for <b style="font-size: 20px">all UPM students (undergraduate & postgraduate)</b> and <b>at least a GOLD</b> member of 1MillionTraders.com.<br><br>
                                                <b style="font-size: 16px">Applications for YDEC 2018 will be open from 9th April to 13 May, 2018.</b></p>
					</div>
				</div>
				<div class="text-center mt60">
					<a href="subreport.php" class="site-btn">Submit Now</a>
				</div>
				<!-- popup video -->
				<div class="intro-video">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
                                                    <img src="img/video.jpg" alt="">
							<a href="https://www.youtube.com/watch?v=Flulfd9GsPs" class="video-popup">
								<i class="fa fa-play"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- About section end -->


	<!-- Testimonial section -->
	<div class="testimonial-section pb100">
		<div class="test-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-4">
					<div class="section-title left">
						<h2>Get to Know The Mentors</h2>
					</div>
					<div class="owl-carousel" id="testimonial-slide">
						<!-- single testimonial -->
						<div class="testimonial">
							<span>‘​‌‘​‌</span>
							<p>To be announced soon</p>
							<div class="client-info">
								<div class="avatar">
									<img src="img/avatar/01.jpg" alt="">
								</div>
								<div class="client-name">
									<h2>Mentor 1</h2>
									<p>Mentor</p>
								</div>
							</div>
						</div>
						<!-- single testimonial -->
						<div class="testimonial">
							<span>‘​‌‘​‌</span>
							<p>To be announced soon</p>
							<div class="client-info">
								<div class="avatar">
									<img src="img/avatar/02.jpg" alt="">
								</div>
								<div class="client-name">
									<h2>Mentor 2</h2>
									<p>Mentor</p>
								</div>
							</div>
						</div>
						<!-- single testimonial -->
						<div class="testimonial">
							<span>‘​‌‘​‌</span>
							<p>To be announced soon</p>
							<div class="client-info">
								<div class="avatar">
									<img src="img/avatar/01.jpg" alt="">
								</div>
								<div class="client-name">
									<h2>Mentor 3</h2>
									<p>Mentor</p>
								</div>
							</div>
						</div>
					
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Testimonial section end-->

	<!-- Services section -->
	<div class="services-section spad">
		<div class="container">
                        <!--Prizes-->
                    	<div class="section-title dark">
                            <h2><span>PRIZES</span></h2>
                            <div class="row">
				<!-- awards -->
                                <div class="col-md-4 col-sm-5">
					<div class="service">
						<div class="service-text">
							<h2>AMBASSADOR CATEGORY</h2>
							<p>> Most Committed Faculty Ambassador</p>
						</div>
					</div>
				</div>
                                <div class="col-md-4 col-sm-5">
					<div class="service">
						<div class="service-text">
							<h2>LECTURER CATEGORY</h2>
							<p>> Most Committed MGM3180 Lecturer</p>
						</div>
					</div>
				</div>  
                                <div class="col-md-4 col-sm-5">
					<div class="service">
						<div class="service-text">
							<h2>SPECIAL CATEGORY</h2>
							<p>> Top YDEC 2018 Program Introducer</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<div class="service-text">
							<h2>TEAM CATEGORY</h2>
							<p>> 1st Young Digital Entrepreneurship Team
<br>> 2nd Young Digital Entrepreneurship Team
<br>> 3rd Young Digital Entrepreneurship Team</p>
						</div>
					</div>
				</div>
                                <div class="col-md-4 col-sm-6">
					<div class="service">
						<div class="service-text">
							<h2>INDIVIDUAL CATEGORY</h2>
							<p>> Top CEO of the Team
<br>> Top CFO of the Team
<br>> Top CMO of the Team
<br>> Top CSR Strategy of the Team</p>
						</div>
					</div>
				</div> 
                                <div class="col-md-4 col-sm-6">
					<div class="service">
						<div class="service-text">
							<h2>MENTOR CATEGORY</h2>
							<p>> Most Excellent Industry Mentor
<br>> Most Excellent Academic Mentor</p>
						</div>
					</div>
				</div>                                
			</div>
			</div>
                        <!--timeline-->
                    	<div class="section-title dark">
                            <h2>SAVE THE <span>DATE</span></h2>
                                
			</div>
                    <div class="row">
				<!-- single service -->
				<div class="col-md-4 col-sm-6 zoom">
                                    <img src="img/tl1.png">
                                </div>
                    		<div class="col-md-4 col-sm-6 zoom">
                                    <img src="img/tl2.png">
                                </div>
                                <div class="col-md-4 col-sm-6 zoom">
                                    <img src="img/tl3.png">
                                </div>
                        
                    </div>
		</div>
	</div>
	<!-- services section end -->


	<!-- Team Section -->
	<div class="team-section2 spad">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
                            <h2> THE ORGANISER <span>& SUPPORTERS</span></h2>
			</div>
			<div class="row" >
				<!-- organiser -->
				<div class="col-md-3 col-sm-6" >
					<div class="member">
						<h2>Main Organiser</h2>
                                                <img src="img/logo/pkt.png" alt="">
                                                <img src="img/logo/upm.png" alt="">						
					</div>
				</div>
				<!-- supporters -->
				<div class="col-md-4 col-sm-6">
					<div class="member">
                                                <h2>Supporters</h2>
                                                <img src="img/logo/more_cool.jpg" alt="">
                                                <img src="img/logo/atkc.png" alt="">
                                                <img src="img/logo/ticket2u.png" alt="">
                                                <img src="img/logo/youbeli.png" alt="">
					</div>
				</div>
                                <div class="col-md-4 col-sm-6">
					<div class="member">
                                                <h2>Supporters</h2>
                                                <img src="img/logo/12Rent.png" alt="">
                                                <img src="img/logo/nowornever.jpg" alt="">
                                                
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Team Section end-->


	<!-- Promotion section -->
	<div class="promotion-section">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<h2>Are you ready to stand out?</h2>
					<p>Join us now to test your limit and become the next Young Digital Enterpreneur Champion!</p>
				</div>
				<div class="col-md-3">
					<div class="promo-btn-area">
						<a href="" class="site-btn btn-2">SUBMIT NOW</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Promotion section end-->


	<!-- Contact section -->
	<div class="contact-section spad fix">
		<div class="container">
			<div class="row">
				<!-- contact info -->
				<div class="col-md-5 col-md-offset-1 contact-info col-push">
					<div class="section-title left">
						<h2>Contact us</h2>
					</div>

					<h3 class="mt60">Address</h3>
                                        <p>> Dr. Koh Tieng Wei (Program Director)</p>
					<p class="con-item">> 1-30, Block C, Faculty of Computer Science and Information Technology, Universiti Putra Malaysia</p>
                                        <p class="con-item">> 03-89471799 (Office)</p>
					<p class="con-item">> 013-3884778 (Mobile)</p>
				</div>
				<!-- contact form -->
				<div class="col-md-6 col-pull">
                                <div class="section-title left">
                                    <h2><span> YDEC FACULTY AMBASSADOR </span></h2>
                                </div>
                                    <img src="img/Faculty Ambassador 2.png">
				</div>
			</div>
		</div>
	</div>
	<!-- Contact section end-->


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
