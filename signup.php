<?php
include 'db_connection.php';

$conn = OpenCon();

echo "Connected Successfully";

session_start();
if(isset($_SESSION['loginUser'])) {
  echo "Your session is running " . $_SESSION['loginUser'];
  }


		
	$userID = $_SESSION['loginUser'];
	$code = $_SESSION['referralID'];
 	$userType = $_POST['userType'];
		
		$unique = uniqid('', true);
		$uniq = substr($unique, strlen($unique) - 4, strlen($unique));  



if (!empty($code)) {
   $result = mysqli_query($conn, "SELECT codeCount FROM 1milliontraders WHERE userID = '$code'");
     while($res = mysqli_fetch_array($result)) {
      
      $codeCount = $res['codeCount'];  

if ($userType == 'Silver') {
	
$sql = "UPDATE 1milliontraders SET userType = 'Silver' WHERE userID = '$userID' ;UPDATE 1milliontraders SET codeCount = codeCount+1 WHERE userID =  '$code'"; 
}   else if ($userType == 'Gold') {

$sql = "UPDATE 1milliontraders SET userType = 'Gold' , codeCount = '10' WHERE userID = '$userID';UPDATE 1milliontraders SET codeCount = codeCount+2 WHERE userID =  '$code'";	
 }   else if ($userType == 'Diamond') {

$sql = "UPDATE 1milliontraders SET userType = 'Diamond' , codeCount = '20' WHERE userID = '$userID';UPDATE 1milliontraders SET codeCount = codeCount+10 WHERE userID =  '$code'";
} 

}

} else if (empty($code)) {
	if ($userType == 'Silver') {
	
$sql = "UPDATE 1milliontraders SET userType = 'Silver' WHERE userID = '$userID'"; 
}   else if ($userType == 'Gold') {

$sql = "UPDATE 1milliontraders SET userType = 'Gold' , codeCount = '10' WHERE userID = '$userID'";	
 }   else if ($userType == 'Diamond') {

$sql = "UPDATE 1milliontraders SET userType = 'Diamond' , codeCount = '20' WHERE userID = '$userID'";
} 
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
	echo"<script> alert('This email has been used')</script>";
//	echo '<script>history.back();</script>';
	
}	

	

$conn->close();
?>