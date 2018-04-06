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
	<div class="banner jarallax">
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
									<li><a href="#about" class="scroll">About</a></li>
									<li><a href="#events" class="scroll">Events</a></li>
									<li><a href="#news" class="scroll">News</a></li>
									<li><a href="#team" class="scroll">Plan & Upgrade</a></li>
									<li><a class="scroll">
                                                                         
									<?php 
										if($_SESSION['loginUser']==true){ 
											echo $username;
										}
                                    ?> <span class="fa fa-caret-down"></span></a>
										<ul>
										<li><a href="profile.php">Profile</a></li>
										<li><a href="invitationCode.php" >Invitation Code</a></li>
										<li><a href="#" class="scroll">Setting</a></li>
										<li><a href="logout.php">Logout</a></li>
										</ul>
									</li>


                                                                  
								</ul>
							</nav>
						</div>
						<!-- /.navbar-collapse -->
					</nav>
				</div>
			</div>
			<div class="w3layouts-banner-info">
				<div class="container">
					<div class="w3ls-text">
						<h2> __ </h2>
					</div>
                                    <!--Direct user to registration page-->
                                    <div class="w3-arrow bounce animated"><h2 style="color: white">Register Now</h2>
						<a href="registrationCategory.php"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->
        	<!-- introduction -->
	<div class="introduction" id="indro">
		<div class="container">
			<div class="w3l-heading">
				<h3>NEXT EVENT WILL START IN: </h3>
				<div class="w3ls-border"> </div>
			</div>
			<div class="introduction-info">
                           <!--Countdown-->
                          <h2 id="demo"></h2>
                        <!--//Countdown-->
		</div>
	</div>
        </div>
	<!-- //introduction -->
	<!-- about -->
	<div class="about" id="about">
		<div class="container">
			<div class="w3l-heading about-heading">
				<h3>About Us</h3>
				<div class="w3ls-border about-border"> </div>
			</div>
			<div class="agileits-about-grids">
			<div class="introduction-info">
                            <p style="color: white">Welcome to <b>1MillionTraders.com</b>!

                                We pledge to <b>EDUCATE</b> and <b>NURTURE</b> millions of creative and innovative young entrepreneurs from higher education institutions in Malaysia by embracing new ventures and transformation of brick and mortar businesses through novel digital technologies and solutions.</p>
			</div>
			</div>
		</div>
	</div>
	<!-- //about -->
<!-- Events -->
	<div class="gallery" id="events">
		<div class="container">
			<div class="w3l-heading">
				<h3>Our Events</h3>
				<div class="w3ls-border"> </div>
			</div>
			<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#home-main" id="home-tab" role="tab" data-toggle="tab" aria-controls="home-main" aria-expanded="true">All</a></li>
						<li role="presentation"><a href="#learning" role="tab" id="learning-tab" data-toggle="tab" aria-controls="learning">YDEC</a></li>
						<li role="presentation"><a href="#playing" role="tab" id="playing-tab" data-toggle="tab" aria-controls="playing">Industrial Talk</a></li>

					</ul>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="home-main" aria-labelledby="home-tab">
							<div class="w3_tab_img">
								<div class="col-sm-3 w3_tab_img_left">
									<div class="demo">
										<a href="ydec.php">
                                                                                    <figure class="imghvr-shutter-in-out-diag-2"><img src="src/images/webposterydec.jpg" alt=" " class="img-responsive" />
										  </figure>
										</a>
									</div>
									<div class="agile-gallery-info">
										<h5>YDEC 2018</h5>
										<p>Young Digital Entrepreneurship Challenge (YDEC) 2018 registration will be open on 9th April 2018 (Monday) for all (Gold) or (Diamond) members for FREE.</p>
									</div>
								</div>
								<div class="col-sm-3 w3_tab_img_left">
									<div class="demo">
										<a href="talk1.php">
                                                                                    <figure class="imghvr-shutter-in-out-diag-2"><img src="src/images/it1.jpg" alt=" " class="img-responsive" />
										  </figure>
										</a>
									</div>
									<div class="agile-gallery-info">
										<h5>Series 1</h5>                                                                                                                                               <p>Industrial Talks Series 1
                                                                                   <br>Date: 20th April 2018 (Friday)
                                                                                   <br>Time: 9.00am – 11.00am
                                                                                   <br>Venue: DKEP1, Faculty of Economics and Management, UPM
                                                                                   <br>Fees: FREE</p>
									</div>
								</div>
							
								<div class="col-sm-3 w3_tab_img_left">
									<div class="demo">
										<a href="talk2.php">
										  <figure class="imghvr-shutter-in-out-diag-2"><img src="src/images/it2.jpg" alt=" " class="img-responsive" />
										</figure>
										</a>
									</div>
									<div class="agile-gallery-info">
										<h5>Series 2</h5>
										<p>Industrial Talks Series 2
                                                                                <br>Date: 27th April 2018 (Friday)
                                                                                <br>Time: 8.30am – 11.30am
                                                                                <br>Venue: DKEP1, Faculty of Economics and Management, UPM
                                                                                <br>Fees: FREE</p>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="learning" aria-labelledby="learning-tab">
							<div class="w3_tab_img">
								<div class="col-sm-3 w3_tab_img_left">
									<div class="demo">
										<a href="ydec.php">
                                                                                    <figure class="imghvr-shutter-in-out-diag-2"><img src="src/images/webposterydec.jpg" alt=" " class="img-responsive">
											</figure>
										</a>
									</div>
									<div class="agile-gallery-info">
										<h5>YDEC 2018</h5>
										<p>Young Digital Entrepreneurship Challenge (YDEC) 2018 registration will be open on 9th April 2018 (Monday) for all (Gold) or (Diamond) members for FREE.</p>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="playing" aria-labelledby="playing-tab">
							<div class="w3_tab_img">
								<div class="col-sm-3 w3_tab_img_left">
									<div class="demo">
										<a href="talk1.php">
											<figure class="imghvr-shutter-in-out-diag-2"><img src="src/images/it1.jpg" alt=" " class="img-responsive">
											</figure>
										</a>
									</div>
									<div class="agile-gallery-info">
										<h5>Series 1</h5>
										<p>Date: 20th April 2018 (Friday)
                                                                                   <br>Time: 9.00am – 11.00am
                                                                                   <br>Venue: DKEP1, Faculty of Economics and Management, UPM
                                                                                   <br>Fees: FREE</p>
									</div>
								</div>
								<div class="col-sm-3 w3_tab_img_left">
									<div class="demo">
										<a href="talk2.php">
											<figure class="imghvr-shutter-in-out-diag-2"><img src="src/images/it2.jpg" alt=" " class="img-responsive">
											</figure>
										</a>
									</div>
									<div class="agile-gallery-info">
										<h5>Series 2</h5>
										<p>Date: 27th April 2018 (Friday)
                                                                                <br>Time: 8.30am – 11.30am
                                                                                <br>Venue: DKEP1, Faculty of Economics and Management, UPM
                                                                                <br>Fees: FREE</p>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
			</div>
			<script src="src/js/jquery.tools.min.js"></script>
			<script src="src/js/jquery.mobile.custom.min.js"></script>
			<script src="src/js/jquery.cm-overlay.js"></script>
			<script>
				$(document).ready(function(){
					$('.cm-overlay').cmOverlay();
				});
			</script>
		</div>
	</div>
<!-- //Events -->
	<!-- Membership Plan -->
<div class="team jarallax" id="team" name="team">
		<div class="team-dot">
                    
			<div class="container">
				<div class="w3l-heading about-heading">
					<h3>Membership Plan</h3>
					<div class="w3ls-border"> </div>
				</div>
                                <!--create tabs for multiple categories-->
                                <div class="tab">
                                <button class="tablinks" onclick="openCity(event, 'upm')">UPM Student</button>
                                <button class="tablinks" onclick="openCity(event, 'nonupm')">Non UPM Student</button>
                                <button class="tablinks" onclick="openCity(event, 'public')">Public</button>
                                <button class="tablinks" onclick="openCity(event, 'senior')">Senior Citizen</button>

                                </div>
                                <!--UPM Student Plan-->
                                <div id="upm" class="tabcontent">
                                     <div class="row">
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
		</div>
        </div><!--//upm student-->
        <!--Non upm-->                    
        <div id="nonupm" class="tabcontent">
               <div class="row">
              <div class="contact-form">
		<div class="contact-form-center">
			<div class="w3l-heading">
				<h3>Membership Plan for Non UPM Student</h3>
				<div class="w3ls-border"> </div>
			</div></br>
			
			<div class="panel panel-info">
				<div class="panel-body">
					<!--row -->
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
								  <p class="price"><i style="font-size: 30px;">RM</i>10<sub><small class="renew-price">for Lifetime</small></sub></p>                      </div>
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
								  <p class="price"><i style="font-size: 30px;">RM</i>30<sub><small class="renew-price">for Lifetime</small></sub></p>
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
								  <p class="price"><i style="font-size: 30px;">RM</i>50<sub><small class="renew-price">for Lifetime</small></sub></p>
							  </div>
							  <div class="block-footer">
								  <form action="signup.php" method="POST">
								<button type="submit" class="subscribe-now" name="userType" id="userType" value="Diamond">Subscribe Now</a>
							</form>
							  </div>
						  </div>
					  </div>
				  </div>
					<!-- // row -->
				</div>
			</div>
		</div>
		</div>
		</div>
	</div><!--non upm-->
           <!--public-->
                                <div id="public" class="tabcontent">
                                                            <div class="row">
              					  					  <!--Silver-->                  
					  	<div class="contact-form">
		<div class="contact-form-center">
			<div class="w3l-heading">
				<h3>Membership Plan for Public</h3>
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
								  <p class="price"><i style="font-size: 30px;">RM</i>30<sub><small class="renew-price">for Lifetime</small></sub></p>                      </div>
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
								  <p class="price"><i style="font-size: 30px;">RM</i>50<sub><small class="renew-price">for Lifetime</small></sub></p>
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
								  <p class="price"><i style="font-size: 30px;">RM</i>100<sub><small class="renew-price">for Lifetime</small></sub></p>
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
                       </div>
                </div>
<div id="senior" class="tabcontent">
                                                            <div class="row">
	<div class="contact-form">
		<div class="contact-form-center">
			<div class="w3l-heading">
				<h3>Membership Plan for Senior</h3>
				<div class="w3ls-border"> </div>
			</div></br>
			
			<div class="panel panel-info">
				<div class="panel-body">
					<div class="row" style="margin:2px">
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
								  <p class="price"><i style="font-size: 30px;">RM</i>30<sub><small class="renew-price">for Lifetime</small></sub></p>
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
								  <p class="price"><i style="font-size: 30px;">RM</i>50<sub><small class="renew-price">for Lifetime</small></sub></p>
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
                       </div>
                </div>
</div>
</div>	
</div>	
</div>	
	<!-- //Membership Plan -->
	<!-- news -->
	<div class="news" id="news">
		<div class="container">
			<div class="w3l-heading">
				<h3>Our news</h3>
				<div class="w3ls-border"> </div>
			</div>
			<div class="wthree-news-grids">
				<!-- date -->
				<div id="design" class="date">
					<div id="cycler">   
					
						<div class="wthree-news-grid">
							<div class="wthree-news-left">
								<h4>9<span>April 2018</span></h4>
							</div>
							<div class="date-text">
								<a href="ydec.php" data-toggle="modal" data-target="#myModal"> YDEC 2018 <span class="blinking"><img src="src/images/new.png" alt="" /></span></a>
								<p>The event is now opened for registration. Valid for Silver and Diamond membership only</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="wthree-news-grid">
							<div class="wthree-news-left">
								<h4>20 <span>April 2018</span></h4>
							</div>
							<div class="date-text">
								<a href="talk1.php" data-toggle="modal" data-target="#myModal"> Industrial Talk Series 1</a>
								<p>Coming soon!</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="wthree-news-grid">
							<div class="wthree-news-left">
								<h4>27 <span>April 2018</span></h4>
							</div>
							<div class="date-text">
								<a href="talk2.php" data-toggle="modal" data-target="#myModal"> Industrial Talk Series 2</a>
								<p>Coming soon!</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>						
					<script>
						function blinker() {
							$('.blinking').fadeOut(500);
							$('.blinking').fadeIn(500);
						}
						setInterval(blinker, 1000);
					</script>
					<script>
						function cycle($item, $cycler){
							setTimeout(cycle, 2000, $item.next(), $cycler);
												
							$item.slideUp(1000,function(){
								$item.appendTo($cycler).show();        
							});
						}
						cycle($('#cycler div:first'),  $('#cycler'));
					</script>
				</div>
				<!-- //date -->
			</div>
		</div>
	</div>
	<!-- //news -->
	<!-- contact -->
	<div class="contact" id="mail">
		<div class="container">
			<div class="w3l-heading about-heading">
				<h3>Organizers</h3>
				<div class="w3ls-border about-border"> </div>
			</div>
			<div class="introduction-info contact-info">
				<p><b>1MillionTraders.com</b> originally developed and owned by <b>NLK Trading (SA04573737-V)</b> for the purpose of any educational program execution organized by the Faculty of Computer Science and Information Technology, Universiti Putra Malaysia and supported by its industry partner, <b>PKT Logistics Group Sdn Bhd</b><p>
			</div>
		</div>
	</div>
	<div class="contact-form">
		<div class="col-md-10 contact-form-left">
			<h5>Find Us</h5>
			<div class="address-grids">
				<div class="address-grid">
					<div class="address-icon">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
					</div>	
					<div class="address-info">
                                            <p><b>C-1-30, Block C, Faculty of Computer Science & Information Technology, <br>Universiti Putra Malaysia, 43400 UPM Serdang, Selangor, Malaysia.<br><br>D-9-3, Block D, Setiawalk, Persiaran Wawasan, Pusat Bandar Puchong, 47100 Puchong, Selangor, Malaysia.
						</b></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="address-grid">
					<div class="address-icon">
						<i class="fa fa-phone" aria-hidden="true"></i>
					</div>	
					<div class="address-info">
						<p><b>+603 – 89471799 (Office)<br>
						+6013 – 3884778 (Mobile)<b></p>
 					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="address-grid">
					<div class="address-icon">
						<i class="fa fa-envelope" aria-hidden="true"></i>
					</div>	
					<div class="address-info">
						<p><b><a href="mailto:twkoh@upm.edu.my">Dr. Koh Tieng Wei <br> twkoh@upm.edu.my</a></b></p>
					</div>
					<div class="clearfix"> </div>
                                </div><br>
                            	<div class="address-grid">
					<div class="address-icon">
						<i class="fa fa-calendar" aria-hidden="true"></i>
					</div>	
					<div class="address-info">
                                            <p><b>Monday-Friday: 9:00AM–5:00PM <br>
                                               Saturday, Sunday & Public Holiday: Off</b></p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		
		<div class="clearfix"> </div>
	</div>
	<!-- //contact -->
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