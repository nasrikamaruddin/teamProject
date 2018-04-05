<?php
//temporary page to invite team member. by tee
include 'ydec/connection/db_connection.php';

$conn = OpenCon();
session_start();

if(isset($_SESSION['loginid'])){
$loginuser = $_SESSION['loginid'];} 

else $loginuser = 181677;
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
									<li><a href="#about" class="scroll">About</a></li>
									<li><a href="#events" class="scroll">Events</a></li>
									<li><a href="#news" class="scroll">News</a></li>
									<li><a href="#team" class="scroll">Plan & Upgrade</a></li>
									<li><a class="scroll">
                                                                         
									<?php 
										if(isset($loginuser))
										{ 
											echo $_SESSION["username"];
										}
                                    ?> </a>
										<ul>
										<li><a href="profile.php">Profile</a></li>
										<li><a href="invitationCode.php" >Invitation Code</a></li>
										<li><a href="#" class="scroll">Setting</a></li>
										<li><a href="#" class="scroll">Logout</a></li>
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
				<h3>YDEC 2018</h3>
				<div class="w3ls-border"> </div>
			</div>
			
			<div class="col-md-4">
				<div class="contact-form-grid">
					<img src="src/images/webposterydec.jpg" alt=" "  class="img-responsive">
				</div>
				<div class="clearfix"> </div>
			</div>
			
		
			<div class="col-md-8">
				<div class="contact-form-grid">
					<div class="fields-grid">
						<div class="introduction-ydecRec contact-valCode">
							<!--<p><img src="src/images/inCode.png" alt="illustrator invitation code" width="200" height="120"></p></br> -->
							<p><b>Young Digital Entrepreneurship Challenge (YDEC) 2018 </b> registration will be open on 9th April 2018 (Monday) for all (Gold) or (Diamond) members for FREE.<p>
							</br>
							<div class="col-md-12 col-xs-12 ">
							<div class="box">
								
								<!-- /.box-header -->
								<div class="box-body table-responsive no-padding">
								  <table class="table table-hover">
									<tr>
									  <th>Username</th>
									  <th>Student ID</th>
									  <th>Package</th>
									  <th>YDEC 2018</th>
									</tr>
									<tr>
<?php 
	if(isset($loginuser)){
	$get_info= " select * from 1milliontraders where userID = $loginuser";
    $run_info= mysqli_query($conn,$get_info);
    $row_info=mysqli_fetch_array($run_info);
        $name = $row_info['fullname'];
		$matric = $row_info['studentID'];
		$membertype = $row_info['userType'];
		echo" 								
									  <td id='1mtname'>$name</td>
									  <td id='1mtstudentid'>$matric</td>
									  <td id='1mtmembertype'>$membertype</td> ";
		$get_info2= " select * from ydecparticipant where userID = $loginuser";
		$run_info2= mysqli_query($conn,$get_info2);
		
		if(mysqli_num_rows($run_info2)==0){
			
			echo"<td><button id='joinbtn' class='btn btn-primary' onclick='joinydec()'>JOIN YDEC
									  </button></td>
									  ";
		}
		else
		 echo"<td>JOINED</td>";
	}
?>
									  
									</tr>
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
			<div class="clearfix"> </div>
		</div>
			
	</div>
	<!-- //news -->
	
	
	<!-- footer -->
	<footer>
		<div class="container">
			<p>© 2018 1MillionTraders . All Rights Reserved | Design by <a href="http://w3layouts.com/"> W3layouts</a> </p>
		</div>
	</footer>
	<!-- //footer -->
	
</body>	
<script type="text/javascript">
	function joinydec(){                                                                                                                                                                                                                                                                                                                              
		
		var studentid = $("#1mtstudentid").val();	
		
    $.ajax({
        type: 'POST',
        url: "ajax/joiningydec.php",
		data: { studentid: studentid },
		error: function(data) {
		alert(" Can't do because: " + data);
		},
        success: function(data) {
			alert(data);
			$("#joinbtn").text("JOINED");
			$('#joinbtn').prop('disabled', true);           
        },
        dataType: "text",
        async: false
    });


		
	}

</script>
</html>
