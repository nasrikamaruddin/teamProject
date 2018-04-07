<?php

include 'db_connection.php';

$conn = OpenCon();

//echo "Connected Successfully";


$vkey ="ab6b6268b90de057c2cb9361b20ec7b3" ; //Replace xxxxxxxxxxxx with your MOLPay Secret_Key
/********************************
*Don't change below parameters
********************************/
$tranID = $_POST['tranID'];
$orderid = $_POST['orderid'];
$status = $_POST['status'];
$domain = $_POST['domain'];
$amount = $_POST['amount'];
$currency = $_POST['currency'];
$appcode = $_POST['appcode'];
$paydate = $_POST['paydate'];
$skey = $_POST['skey'];
/***********************************************************
* To verify the data integrity sending by MOLPay
************************************************************/
echo "tranID: ".$tranID;
echo "orderid: ".$orderid;
echo "status: ".$status;
echo "domain: ".$domain;
echo "amount: ".$amount;
echo "currency: ".$currency;
echo "appcode: ".$appcode;
echo "paydate: ".$paydate;
echo "skey: ".$skey;

$key0 = md5( $tranID.$orderid.$status.$domain.$amount.$currency );
$key1 = md5( $paydate.$domain.$key0.$appcode.$vkey );
echo "key:".$key0;
echo "key1: ".$key1;
if( $skey != $key1 ) $status= -1; // Invalid transaction.
// Merchant might issue a requery to MOLPay to double check payment status with MOLPay.
if ( $status == "00" ) {
echo "return ok";
} else {
	echo "return fail";
// failure action. Write your script here .....
// Merchant might send query to MOLPay using Merchant requery
// to double check payment status for that particular order.
}
// Merchant is recommended to implement IPN once received the payment status
// regardless the status to acknowledge MOLPay system

session_start();
if(isset($_SESSION['loginUser'])) {
//  echo "Your session is running " . $_SESSION['loginUser'];
}
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
		<div class="contact-form-center">
			<div class="w3l-heading">
				<h3>1 Million Traders Registration</h3>
				<div class="w3ls-border"> </div>
			</div></br>
			<div class="panel panel-info">
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12"> 
						<div class="alert alert-success-signup">
							<strong>Congratulations!</strong></br>
							<p>You've signed up as one of our 1 Million Traders Members and thank you for your payment.</br>
							Click Log In below to began a apart of 1 Million Traders.</p>
						</div>
						<div>
						<button type="button" onclick="location.href = 'login.php';" class="btn btn-success center-block" style="width:10em;">Log In</button>
						</div>
						</div>
					</div>
					</br>
				</div>
			</div>
		</div>

	<!-- //profile -->

	<!-- footer -->
	<footer style="position: fixed;left: 0;bottom: 0;width: 100%; text-align: center;">
		<div class="container">
			<p>© 2018 1MillionTraders . All Rights Reserved | Design by <a href="http://w3layouts.com/"> W3layouts</a> </p>
		</div>
	</footer>
	<!-- //footer -->
	<script src="src/js/SmoothScroll.min.js"></script>

	<script src="src/js/responsiveslides.min.js"></script>
	<script type="text/javascript" src="src/js/move-top.js"></script>
	<script type="text/javascript" src="src/js/easing.js"></script>

	
<!-- //here ends scrolling icon -->
</body>	
</html>
