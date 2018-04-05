<?php
include 'db_connection.php';

$conn = OpenCon();

echo "Connected Successfully";


if( isset($_POST["submitSenior"]) ){

		$userID = $_POST["createcode"];
		$fullname = $_POST["fullname"];
		$contact = $_POST["contact"];
		$email = $_POST["email"];
		$address = $_POST['address'];
	
		$username = $_POST["username"];	    
  		$password = md5($_POST['password']);
   		$code = $_POST['referralID'];
   		
		
		
		$unique = uniqid('', true);
		$uniq = substr($unique, strlen($unique) - 4, strlen($unique));
		
		
	if (!empty($code)) {
 
$sql = "INSERT INTO 1milliontraders (userID, fullname, contact, email, address, username, password) VALUES ('$userID', '$fullname', '$contact',  '$email', '$address', '$username', '$password'); INSERT INTO referral (userID, code) VALUES ('$userID', '$code');";


} else if ($code == ""){ 
$sql = "INSERT INTO 1milliontraders (userID, fullname, contact, email, address,username, password) VALUES ('$userID', '$fullname', '$contact',  '$email', '$address','$username', '$password');";
}

		
if ($conn->multi_query($sql) === TRUE) {
    echo "New record created successfully ";
	session_start();
	$_SESSION['loginUser'] =$userID;
	$_SESSION['referralID'] = $code;
	echo 'session create'.$_SESSION['loginUser'];
	header("Location: http://localhost/teamProject/membershipPlanSenior.php");
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;

	echo '<script>history.back();</script>';
	
}	

}


$conn->close();
?>