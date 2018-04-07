<?php

include 'db_connection.php';

$conn = OpenCon();

//echo "Connected Successfully";

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
				<h3>1 Million Traders Registration</h3>
				<div class="w3ls-border"> </div>
			</div></br>
			<div class="panel panel-info">
            <div class="panel-body">
			<form action="membershipPlan.php" method="POST" onsubmit="return validation()" enctype="multipart/form-data">
				
				<div class="row">
					<div class="col-md-12"> 
					  <table class="table table-user-information">
						<tbody>
						
						<tr>
							<td>User ID</td>
							<td>:</td>
							<td><input type="text" id="createcode" name="createcode" class="form-control" readonly value= "<?php echo createRandomPassword();?>"><small class="text-danger">User ID for Log In session. Take note your User ID!</small></td>
						</tr>

						<tr>
							<td style="width:12em;">Name</td>
							<td style="width:2em;">:</td>
							<td  style="width:40em;"><input type="text" name="fullname" id="fullname" value="" class="form-control" placeholder="Name" required></td>
						</tr>
						<tr>
							<td>Contact Number</td>
							<td>:</td>
							<td><input type="text" name="contact" id="contact" value="" class="form-control" placeholder="Contact Number"  onkeyup="validatephone(this);" required><small class="text-danger">eg - 0123456789</small></td>
						<tr>
							<td>Email</td>
							<td>:</td>
							<td><input type="email" name="email" id="email" value="" class="form-control" placeholder="Email" required></td>
						</tr>
						<tr>
							<td>Address</td>
							<td>:</td>
							<td><textarea style="height: 8em; resize: none;" name="address" id="address" class="form-control" placeholder="Address" required></textarea></td>
						</tr>
						<tr>
							<td>Student ID</td>
							<td>:</td>
							<td><input type="text" name="studentID" id="studentID" value="" class="form-control" placeholder="Student ID" required></td>
						</tr>
						<tr>
							<td>University</td>
							<td>:</td>
							<td><input type="text" name="university" id="university" value="UPM" class="form-control" readonly required></td>
						</tr>
						<tr>
							<td>Faculty</td>
							<td>:</td>
							<td><input type="text" name="faculty" id="faculty" value="" class="form-control" placeholder="Faculty Name" required></td>
						</tr>
						<tr>
							<td>Programme</td>
							<td>:</td>
							<td><input type="text" name="programme" id="programme" value="" class="form-control" placeholder="Programme" required></td>
						</tr>
						<tr>
							<td>Classification</td>
							<td>:</td>
								<td><select name="classification" class="form-control" id="classification" required>
								<option selected="selected" value="">Please select ...</option>
								<option value="Freshman">Freshman</option>
								<option value="Sophomore">Sophomore</option>
								<option value="Junior">Junior</option>
								<option value="Senior">Senior</option>
							</select>
							</td>
						</tr>
						<tr>
							<td>Student ID Image</td>
							<td>:</td>
							<td><input type="file" name="studentIDImg" id="studentIDImg" value="" class="form-control" required></td>
						</tr>
						</tbody>
					  </table>
					</div>
				</div>
				</br>
				<div class="row">
					<div class="col-md-12">   
					  <table class="table table-user-information">
						<tbody>
						<tr>
							<td style="width:12em;" >Username </td>
							<td style="width:2em;">:</td>
							<td style="width:40em;"> <input type="text" name="username" id="username" value="" class="form-control" 
							oninput="checkdup()" placeholder="Username" required>
							<small ><p id="duplabel"></p></small>
						</td>
						</tr>
						<tr>
							<td>Password</td>
							<td>:</td>
							<td><input type="password" name="password" id="password" value="" class="form-control" placeholder="Password" required><small class="text-danger">Password must more than 8 character</small>
					<br></td>
						</tr>
						<tr>
							<td>Confirmation Password</td>
							<td>:</td>
							<td><input type="password" name="cpassword" id="cpassword" value="" class="form-control" placeholder="Confirmation Password" required></td>
						</tr>
						<tr>
							<td>Referral Code</td>
							<td>:</td>
							<td><input type="text" name="referralID" id="referralID" value="" class="form-control" placeholder="Referral Code (Optional)"></td>
						</tr>


						</tbody>
					  </table>
					  
					</div>
				</div>
				<div class="row pull-right">
					<div class="col-md-12">   
						<button type="submit" name="submitStudentUPM"  id="submitStudentUPM" class="btn btn-primary" style="width:10em;">Submit</button>					  
					</div>
				</div>
			</form>
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
<script type="text/javascript">
	
		function validation(){
			var name = $("#name").val();
			var contact = $("#contact").val();
			var email = $("#email").val();
			var address = $("#address").val();
			
			var studentID = $("#studentID").val();
			var university = $("#university").val();
			var faculty = $("#faculty").val();
			var programme = $("#programme").val();
			var classification = $("#classification").val();
			
			var username = $("#username").val();
			var password = $("#password").val();
			var cpassword = $("#cpassword").val();
			var clabel = document.getElementById("duplabel").textContent;
			var label = "Username is available";
			
			var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			
				if (name == '' || contact == '' || email == '' || address == '' || studentID == '' || university == '' || faculty == '' || programme == '' || classification == '' || username == '' || password == '' || cpassword == '') {
				alert("Please fill all fields...!!!!!!");
				return false;
				
				} else if (!mailformat.test(email)){
				alert("please enter email format...!!!!!!");
				return false;

				} else if (!(clabel==label)) {
				alert("Username has been used");
				return false;
				} else if ((password.length) < 8) {
				alert("Password should atleast 8 character in length...!!!!!!");
				return false;
				} else if (!(password==cpassword)) {
				alert("Your passwords don't match. Try again?");
				return false;
				}
	
		}
	</script>

<script>
function checkdup() {
    var username = $("#username").val();
	$.ajax({
        type: 'POST',
        url: "ajax/checkdup.php",
        data: { username: username},

        error: function(data) {

            alert(" Can't do because: " + data);
        },
        success: function(data) {
			if(data == "false"){
			document.getElementById("duplabel").style.color = "green";
			document.getElementById("duplabel").innerHTML = "Username is available";}
			else if(data == "true"){
			document.getElementById("duplabel").style.color = "red";
			document.getElementById("duplabel").innerHTML = "Username is not available";}
			
        }
	});
	
}
</script>
<script>
function validatephone(phone) 
{
    var maintainplus = '';
    var numval = phone.value
    if ( numval.charAt(0)=='+' )
    {
        var maintainplus = '';
    }
    curphonevar = numval.replace(/[\\A-Za-z!"£$%^&\,*+_={};:'@#~,.Š\/<>?|`¬\]\[]/g,'');
    phone.value = maintainplus + curphonevar;
    var maintainplus = '';
    phone.focus;
}
</script>
<?php
function createRandomPassword() {
    $chars = "0123456789";
    srand((double)microtime()*1000000);
    $i = 0;
    $pass = '' ;
    while ($i <= 5) {
        $num = rand() % 6;
        $tmp = substr($chars, $num, 1);
        $pass = $pass . $tmp;
        $i++;
    }
    return $pass;
}
?>

<!-- //here ends scrolling icon -->
</body>	
</html>
