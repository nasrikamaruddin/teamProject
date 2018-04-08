
<?php
if (isset($_POST['submit'])){
 $teamID=$_SESSION['username'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname=milliont_main;
$conn =new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$url=$_POST['link'];
$mysql="INSERT INTO YDECPitchingVideo(videoID,link,teamID) VALUES ( '','$url','$teamID')";

   if ($conn->query($mysql) === TRUE) {
    header("Location: home.php?uploadsuccess"); 
} else {
    echo "Error: " . $mysql . "<br>" . $conn->error;

    }

$conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>YDEC 2018| Submission</title>
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
    <link rel="stylesheet" href="css/sub.css"/>
    


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
                                <li><a href="rules.php">Rules & Regulation</a></li>
				<li><a href="blog-post.php">Sponsorship</a></li>
                <li class="active"><a href="sub1.php">Submission</a></li>
				<li><a><?php if(isset($_SESSION['loginUser'])){echo $_SESSION['username'];} else{echo "login";} ?></a></li>
			</ul>
		</nav>
	</header>
	<!-- Header section end -->


	<!-- Page header -->
	<div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right">
			<div class="page-info">
				<h2>Submission</h2>
				<div class="page-links">
                                    <a href="home.php">Home</a>
					<span>Submisssion</span>
				</div>
			</div>
		</div>
	</div>
	<!-- Page header end-->


<!-- submission -->
	<div class="news" id="news">
		<div class="container">
			<div class="w3l-heading"> 

				<h3>Submit Your Document</h3>
				<div class="log">
                                    <table class="log">
                         
						<tbody>
						<tr>
							<td style='width:12em;'>Team Name</td>
							<td style='width:2em;'>:</td>
							<td class="log1" style='width:40em;'>sdfsdf</td>
						</tr>
						<tr>
							<td>Member</td>
							<td>:</td>
							<td class="log1">sdfsdfs</td>
						</tr>
						<tr>
							<td>Document</td>
							<td>:</td>
							<td class="log1">Pitching Video</td>
						</tr>
						
						
						</tbody>
						
						
						
					  </table>
			</div>
		
			<div class="agile-form">
                                    <form action="subvideo.php" method ="post">
					<ul1 class="field-list">
						
						
                                               <li> 
							<div class="form-group "><label>Video</label>
                                                            <input type="text" name="link" class="form-control"required>
                                                            <small class="text-danger"> *youtube url</small></div>
                                                    
						</li>
                                                
                                                
						
					</ul1>
					<div class="submit_btn">
						<input type="submit" name="submit" value="Submit">
					</div>
				</form>	
                            
                            </div>
			</div>
		</div>

	<!-- //submission-->

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
