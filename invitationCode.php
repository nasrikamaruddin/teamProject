<?php
include 'db_connection.php';

$conn = OpenCon();

//echo "Connected Successfully";

session_start();
if(isset($_SESSION['loginUser'])) {
 // echo "Your session is running " . $_SESSION['loginUser'];
  }
$userIDD = $_SESSION['loginUser'];
$query22 = mysqli_query($conn,"select * from 1milliontraders where userID='$userIDD'");						
$row22 = mysqli_fetch_array($query22);
$username = $row22['username'];
$userID = $row22['userID'];
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
								<h1><a href="index-logged.php"><img src="src/images/logo1.png" alt="" /> 1 Million Traders </a></h1>
							</div>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
							<nav>
								<ul class="nav navbar-nav">
									<li><a href="index-logged.php">About</a></li>
									<li><a href="index-logged.php">Events</a></li>
									<li><a href="index-logged.php">News</a></li>
									<li><a href="index-logged.php">Plan & Upgrade</a></li>
									<li class="dropdown">
										<a class="dropdown-toggle" data-toggle="dropdown" >
										<?php										
											if($_SESSION['loginUser']==true){ 
												echo $username;
											} 
										?>
										<span class="caret"></span></a>
										<ul class="dropdown-menu" > 
											<li><a href="profile.php">Profile</a></li>
											<li class="active"><a href="invitationCode.php" >Invitation Code</a></li>
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
		</div>
	</div>
	<!-- //banner -->
        	
	
	
	<!-- news -->
	<div class="news" id="news">
		<div class="container">
			<div class="w3l-heading">
				<h3>Invitation Code</h3>
				<div class="w3ls-border"> </div>
			</div>
			<div class="introduction-info contact-valCode">
				<!--<p><img src="src/images/inCode.png" alt="illustrator invitation code" width="200" height="120"></p></br> -->
				<p><b>Invitation Code </b> created specialise for member. Share your Invite Code and find out how to Upgrade Package.<p>
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li class="active"><a style="font-weight: bold"><?php 
										if($_SESSION['loginUser']==true){ 
											echo $userID;
										}
                                    ?></a></li>
						
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- //news -->
	<!-- about -->
	<div class="about" id="about">
		<div class="container">
			<div class="w3l-heading">
				<h3 style="color:white;">List of downline</h3>
				<div class="w3ls-border"> </div>
			</div>
			<div class="agileits-about-grids">
				<div class="introduction-info">
					<div class="row">
						<div class="col-md-12 col-xs-12 ">
						  <div class="box">
							
							<!-- /.box-header -->
							<div class="box-body table-responsive no-padding">
							  <table class="table table-hover" style="text-align: center">
							  	  <tr>
    
    <th style="text-align: center">Downline&nbsp;User ID</th>
  
   
   
  </tr>
								<?php
$userID = $_SESSION['loginUser'];
$get_info= "select referral.userID from referral inner join 1milliontraders on referral.code = 1millionTraders.userID WHERE referral.code = '$userID'";
	
	$run_info= mysqli_query($conn,$get_info);
	
//	$row_info=mysqli_fetch_array($run_info);
	//	$info_userID = $row_info['userID'];
	//	$info_code = $row_info['code'];
	//	$info_fullname = $row_info['fullname'];
		
		
	
		
                    while($row_info = mysqli_fetch_array($run_info)) {
      echo "<tr height='50px'>";
      
      echo "<td>".$row_info['userID']."</td>";
      
   
  
      echo "</tr>";
    }
						;?>
							  </table>
							</div>
							<!-- /.box-body -->
						  </div>
						  <!-- /.box -->
						</div>
					  </div>
				</div>
			</div>
		</div>
	</div>
	<!-- //about -->
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
