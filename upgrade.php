<?php
include 'db_connection.php';

$conn = OpenCon();

echo "Connected Successfully";

session_start();
if(isset($_SESSION['loginUser'])) {
  echo "Your session is running " . $_SESSION['loginUser'];
  }




		$userType = $_POST['userTypeUp'];
		$userID = $_SESSION['loginUser'];
		


		$unique = uniqid('', true);
		$uniq = substr($unique, strlen($unique) - 4, strlen($unique));  


   


 if ($userType == 'Silver') {
      $sql = "UPDATE 1milliontraders set userType = 'Silver' WHERE userID = '$userID';";
} else if ($userType == 'Gold') {
	 $sql = "UPDATE 1milliontraders set userType = 'Gold', codeCount = 10 WHERE userID = '$userID';";
} else if ($userType == 'Diamond') {
		 $sql = "UPDATE 1milliontraders set userType = 'Diamond', codeCount = 20 WHERE userID = '$userID';";
}


 


if ($conn->multi_query($sql) === TRUE) {
    echo "New record created successfully ";
	session_start();
	$_SESSION['loginUser'] =$userID ;
	$_SESSION['referralID'] = $code;
	echo 'session create'.$_SESSION['loginUser'];
	header("Location: http://localhost/teamProject/checkout.php");
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
//	echo"<script> alert('This email has been used')</script>";
//	echo '<script>history.back();</script>';
	
}	


$conn->close();
?>