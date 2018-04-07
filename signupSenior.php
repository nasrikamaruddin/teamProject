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
		
		session_start();
		$_SESSION['loginUser'] =$userID;
		$_SESSION['fullname'] = $fullname;
		$_SESSION['contact'] = $contact;
		$_SESSION['email'] = $email;
		$_SESSION['address'] = $address;	
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		$_SESSION['referralID'] = $code;
		


header("Location: http://localhost/teamProject/membershipPlanSenior.php");


}


$conn->close();
?>
	