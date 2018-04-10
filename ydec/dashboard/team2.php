<?php
include '../connection/db_connection.php';

$conn = OpenCon();
session_start();
if(isset($_SESSION['loginUser'])){
    $loginuser = $_SESSION['loginUser'];
	$username = $_SESSION['username'];
}
else {
header("Location: home.php");
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
        <link href="../img/logo2.png" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="../css//bootstrap.min.css"/>
	<link rel="stylesheet" href="../css//font-awesome.min.css"/>
	<link rel="stylesheet" href="../css//flaticon.css"/>
	<link rel="stylesheet" href="../css//magnific-popup.css"/>
	<link rel="stylesheet" href="../css//owl.carousel.css"/>
	<link rel="stylesheet" href="../css//style.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>YDEC 2018| Committee</title>
	<meta charset="UTF-8">
	<meta name="description" content="Labs - Design Studio">
	<meta name="keywords" content="lab, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
        <link href="../img/logo2.png" rel="shortcut icon"/>
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="../css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../css/font-awesome.min.css"/>
	<link rel="stylesheet" href="../css/flaticon.css"/>
	<link rel="stylesheet" href="../css/owl.carousel.css"/>
	<link rel="stylesheet" href="../css/style.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	
	<!-- Header section -->
	<header class="header-section">
		<div class="logo">
			<img src="../img/logo1.png" alt=""><!-- Logo -->
		</div>
		<!-- Navigation -->
		<div class="responsive"><i class="fa fa-bars"></i></div>
		<nav>
			<ul class="menu-list">
                                <li><a href="home.php">About</a></li>
                                <li class="active"><a href="committe.php">Committee</a></li>
                                <li><a href="rules.php">Rules & Regulation</a></li>
				<li><a href="blog-post.php">Sponsorship</a></li>
				<li><a href="elements.php"><?php if(isset($_SESSION['loginUser'])){echo $_SESSION['username'];} else{echo "login";} ?></a></li>
			</ul>
		</nav>
	</header>
	<!-- Header section end -->


	<!-- Page header -->
	<div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right">
			<div class="page-info">
				<h2>Team creation and members invite</h2>
				
			</div>
		</div>
	</div>
	<!-- Page header end-->

	<!-- content container-->
	<div class="container">
<!-- Main content -->
<section class="content">
      <div class="row" id="create_team">
        <div class="container-fluid">
        <div class="box">
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="container-fluid" align="center">
                <h3>create your YDEC team here , <?php 

$get_name= "select fullname from 1milliontraders where userid='$loginuser'";
	
	$run_pro= mysqli_query($conn,$get_name);
	if (!$run_pro) {
    echo "Error: %s\n", mysqli_error($conn);
    exit();
}
	$row_pro=mysqli_fetch_array($run_pro);
		$fname = $row_pro['fullname'];
	
						echo $fname; ?> , please select your team member and press save team to invite them.</h3>
                <br>
                <div class="col-md-3"></div>
                <div class="col-md-6">
                  <form class="form-horizontal" action="index.php"  onsubmit="teamcreation()">
                    <div class="form-group">
                      <label class="control-label col-sm-3" for="email">Team Name:</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="team_name" placeholder="Enter team name">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-3" for="pwd">project name:</label>
                      <div class="col-sm-9"> 
                        <input type="text" class="form-control" id="project_name" placeholder="Enter project name">
                      </div>
                    </div>
                  </form>
                </div>
                <div class="col-md-3"></div>
                </div>
                </div>
                  <hr>
                <div class="row">
                  <div class="container-fluid">
                    <div class='col-md-3'>
                      <div class="form-group">
                        <label for="matriks1">matriks no:</label>
                        <input type="number" class="form-control" id="matriks1">
                        <br>
                        <button type="button" class="btn btn-block btn-info" onClick="getmemberdata(1)">check</button>
                      </div>
                      <div class="form-group">
                        <label for="name1">name:</label>
                        <input type="text" class="form-control" id="name1" disabled>
                      </div>
                      <div class="form-group">
                        <label for="faculty1">faculty:</label>
                        <input type="text" class="form-control" id="faculty1" disabled>
                      </div>
                    </div>
                    <div class='col-md-3'>
                      <div class="form-group">
                        <label for="matriks2">matriks no:</label>
                        <input type="number" class="form-control" id="matriks2">
                        <br>
                        <button type="button" class="btn btn-block btn-info" onClick="getmemberdata(2)">check</button>                        
                      </div>
                      <div class="form-group">
                        <label for="name2">name:</label>
                        <input type="text" class="form-control" id="name2" disabled>
                      </div>
                      <div class="form-group">
                        <label for="faculty2">faculty:</label>
                        <input type="text" class="form-control" id="faculty2" disabled>
                      </div>
                    </div>
                    <div class='col-md-3'>
                      <div class="form-group">
                        <label for="matriks3">matriks no:</label>
                        <input type="number" class="form-control" id="matriks3">
                        <br>
                        <button type="button" class="btn btn-block btn-info" onClick="getmemberdata(3)">check</button>
                      </div>      
                      <div class="form-group">
                        <label for="name3">name:</label>
                        <input type="text" class="form-control" id="name3" disabled>
                      </div>
                      <div class="form-group">
                        <label for="faculty3">faculty:</label>
                        <input type="text" class="form-control" id="faculty3" disabled>
                      </div>              
                    </div>
                    <div class='col-md-3'>
                      <div class="form-group">
                        <label for="matriks4">matriks no:</label>
                        <input type="number" class="form-control" id="matriks4">
                        <br>
                        <button type="button" class="btn btn-block btn-info" onClick="getmemberdata(4)">check</button>
                      </div>    
                      <div class="form-group">
                        <label for="name4">name:</label>
                        <input type="text" class="form-control" id="name4" disabled>
                      </div>
                      <div class="form-group">
                        <label for="faculty4">faculty:</label>
                        <input type="text" class="form-control" id="faculty4" disabled>
                      </div>                
                    </div>
                  </div>
                  <div class="container-fluid" align="center">
                    <br>
                    <button type="button" class="btn btn-primary" onclick="saveteam()">save team</button>
                  </div>
                </div>
                
                </div>

                </div>

              </div>
            </div>
          </div>
          <!-- /.box-body -->
          <!-- box-footer -->
        </div>
        <!-- /.box -->        
        </div>
      </div>
      <!-- /.row -->
    </section>
</div>

	<!-- Footer section -->
	<footer class="footer-section">
		<h2>YDEC 2018 All rights reserved. Designed by <a href="https://colorlib.com" target="_blank">Colorlib</a></h2>
	</footer>
	<!-- Footer section end -->




	<!--====== Javascripts & Jquery ======-->
	<script src="../js//jquery-2.1.4.min.js"></script>
	<script src="../js//bootstrap.min.js"></script>
	<script src="../js//magnific-popup.min.js"></script>
	<script src="../js//owl.carousel.min.js"></script>
	<script src="../js//circle-progress.min.js"></script>
	<script src="../js//main.js"></script>
  <script src="../js/team.js"></script>
<script src='//code.jquery.com/jquery-1.10.2.js'></script>
<script src='//code.jquery.com/ui/1.11.4/jquery-ui.js'></script>
<script>
$(function() {
    $( '#matriks1' ).autocomplete({
        source: 'searchuser.php'
    });
});
</script>

<script>
$(function() {
    $( '#matriks2' ).autocomplete({
        source: 'searchuser.php'
    });
});
</script>

<script>
$(function() {
    $( '#matriks3' ).autocomplete({
        source: 'searchuser.php'
    });
});
</script>

<script>
$(function() {
    $( '#matriks4' ).autocomplete({
        source: 'searchuser.php'
    });
});
</script>
</body>
</html>
