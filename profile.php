<?php
include 'db_connection.php';

$conn = OpenCon();

//echo "Connected Successfully";

session_start();

if(isset($_SESSION['loginUser'])) {
  //echo "Your session is running " . $_SESSION['loginUser'];
  }
$userID = $_SESSION['loginUser'];
$query22 = mysqli_query($conn,"select * from 1milliontraders where userID='$userID'");						
$row22 = mysqli_fetch_array($query22);
$username = $row22['username'];

$username = $_SESSION['username'];

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
											<li class="active"><a href="profile.php">Profile</a></li>
											<li><a href="invitationCode.php" >Invitation Code</a></li>
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
        	
	
	
	<!-- profile -->
	<div class="contact-form">
		<div class="contact-form-center">
			<div class="panel panel-info">
            <div class="panel-body">
				<div class="w3l-heading">
					<h3>Member Profile</h3>
					<div class="w3ls-border-custom"> </div>
				</div></br>
				<div class="row">
					<div class="col-md-12"> 
					  <table class="table table-user-information">

<?php
$userID = $_SESSION['loginUser'];
$get_info= "select * from 1milliontraders where username='$username'";
	
	$run_info= mysqli_query($conn,$get_info);
	
	$row_info=mysqli_fetch_array($run_info);
		$info_userID = $row_info['userID'];
		$info_userType = $row_info['userType'];
		$info_codeCount = $row_info['codeCount'];
		$info_username = $row_info['username'];
		$info_fullname = $row_info['fullname'];
		$info_contact = $row_info['contact'];
		$info_email = $row_info['email'];
		$info_address = $row_info['address'];
		$info_studentID = $row_info['studentID'];
		$info_university = $row_info['university'];
		$info_faculty = $row_info['faculty'];
		$info_programme = $row_info['programme'];
		$info_classification = $row_info['classification'];
		
		echo "
		
                    <tbody>

                    <tr>
							<td style='width:12em;'>User ID</td>
							<td style='width:2em;'>:</td>
							<td style='width:40em;'>$info_userID</td>

						</tr>
						<tr>
							<td>Membership</td>
							<td>:</td>
							<td>$info_userType</td>
						</tr>
						<tr>
							<td>Point</td>
							<td>:</td>
							<td>$info_codeCount</td>
						</tr>
						<tr>
							<td>Username</td>
							<td>:</td>
							<td>$info_username</td>
						</tr>
						<tr>
							<td>Name</td>
							<td>:</td>
							<td>$info_fullname</td>
						</tr>
						<tr>
							<td>Phone Number</td>
							<td>:</td>
							<td>$info_contact</td>
						</tr>
						<tr>
							<td>Email</td>
							<td>:</td>
							<td>$info_email</td>
						</tr>
						<tr>
							<td>Address</td>
							<td>:</td>
							<td>$info_address</td>
						</tr>
					</tbody>
						";?>

					  </table>
					  <form action="upgradeMember.php" method="POST">
					  <input type="submit" id="upgrade" name="upgrade" style="float:right;" value="Upgrade Membership" class="btn btn-primary">
					</form>
					</div>
				</div>
				
				
            </div>
                 
        </div>


		<div class="panel panel-info">
            <div class="panel-body">
				<div class="w3l-heading">
					<h3>Student Profile</h3>
					<div class="w3ls-border-custom"> </div>
				</div></br>
				
				<div class="row">
					<div class="col-md-12"> 
					  <table class="table table-user-information">
					<?php
					echo "
						<tbody>
						<tr>
							<td style='width:12em;'>Student ID</td>
							<td style='width:2em;'>:</td>
							<td style='width:40em;'>$info_studentID</td>
						</tr>
						<tr>
							<td>University</td>
							<td>:</td>
							<td>$info_university</td>
						</tr>
						<tr>
							<td>Faculty</td>
							<td>:</td>
							<td>$info_faculty</td>
						</tr>
						<tr>
							<td>Programme</td>
							<td>:</td>
							<td>$info_programme</td>
						</tr>
						<tr>
							<td>Classification</td>
							<td>:</td>
							<td>$info_classification</td>
							
						</tr>
						</tbody>
						
						";
						?>
						
					  </table>
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
