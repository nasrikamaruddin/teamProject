<?php 

	include 'db_connection.php';
	$conn = OpenCon();
	
	// Store Session Data
	
	if(isset($_POST['login'])) {
		
		if(count($_POST) > 0) {

			
			$result = mysqli_query($conn,"SELECT email, password FROM 1milliontraders WHERE email='" . $_POST["loginEmail"] . "' and password = '". md5($_POST["loginPassword"]) ."'");

			$count  = mysqli_num_rows($result);
			if($count == 0) {
				echo "<script>alert('Invalid login email or password');</script>";
				echo "<script>history.back();</script>";
			}
			
			else {
			session_start();
		$_SESSION['loginUser']= $_POST["loginEmail"]; 
	
		header("Location: http://localhost/teamProject/index.php");
				}
			}
		}
	
?>