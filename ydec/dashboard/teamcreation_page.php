<?php 
//temporary page to create team . by tee
include 'db_connection.php';
$conn = OpenCon();
session_start();
$_SESSION['loginid']='181677';
?>

<html>

<header>
Hi , <?php 
$loginuser = $_SESSION['loginid'];
$get_name= "select fullname from 1milliontraders where userid='$loginuser'";
	
	$run_pro= mysqli_query($conn,$get_name);
	if (!$run_pro) {
    echo "Error: %s\n", mysqli_error($conn);
    exit();
}
	while($row_pro=mysqli_fetch_array($run_pro)){
		$fname = $row_pro['fullname'];}
		
						echo "$fname"; ?>

</header>

<body>
<form action='createteam.php' method='post' >
<div>
enter ur teamname
<input type = 'text' name='teamname'></div>
<div>
enter ur project title
<input type = 'text' name='project'></div>
<button type='submit' value='create team' name='submit'>    create team </button>
</form>          