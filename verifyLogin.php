<?php 

	include 'db_connection.php';
	$conn = OpenCon();
	
	// Store Session Data
	
	if(isset($_POST['login'])) {
		
		if(count($_POST) > 0) {

			
			$result = mysqli_query($conn,"SELECT username, password FROM 1milliontraders WHERE username='" . $_POST["loginUsername"] . "' and password = '". md5($_POST["loginPassword"]) ."'");

			$count  = mysqli_num_rows($result);
			if($count == 0) {
				echo "<script>alert('Invalid login username or password');</script>";
				echo "<script>history.back();</script>";
			}
			
			else {
			session_start();
			
			$_SESSION['loginUser']= $_POST["loginUsername"]; 
			header("Location: index-logged.php");

		}		
		if(isset($_SESSION['teamtojoin'])){
		header("Location: ydec/ajax/jointeam.php");
		}
			
		}
	}
?>