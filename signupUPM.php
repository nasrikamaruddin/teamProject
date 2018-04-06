<?php
include 'db_connection.php';

$conn = OpenCon();

echo "Connected Successfully";


if( isset($_POST["submitStudentUPM"]) ){

		$userID = $_POST["createcode"];
		$fullname = $_POST["fullname"];
		$contact = $_POST["contact"];
		$email = $_POST["email"];
		$address = $_POST['address'];
		$studentid = $_POST['studentID'];
		$university = $_POST["university"];
		$faculty = $_POST["faculty"];
		$programme = $_POST["programme"];
		$classification = $_POST["classification"];
		$username = $_POST["username"];	    
  		$password = md5($_POST['password']);
   		$code = $_POST['referralID'];
   		$imageName = mysqli_real_escape_string($conn, $_FILES["studentIDImg"]["name"]);
		$imageData = mysqli_real_escape_string($conn, file_get_contents($_FILES["studentIDImg"]["tmp_name"]));
		$imageType = mysqli_real_escape_string($conn, $_FILES["studentIDImg"]["type"]);
		
		
		$unique = uniqid('', true);
		$uniq = substr($unique, strlen($unique) - 4, strlen($unique));
		
		
	session_start();
		$_SESSION['loginUser'] =$userID;
		$_SESSION['fullname'] = $fullname;
		$_SESSION['contact'] = $contact;
		$_SESSION['email'] = $email;
		$_SESSION['address'] = $address;
		$_SESSION['studentid'] = $studentid;
		$_SESSION['university'] = $university;
		$_SESSION['faculty'] = $faculty;
		$_SESSION['programme'] = $programme;
		$_SESSION['classification'] = $classification;
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		$_SESSION['referralID'] = $code;
		$_SESSION['imageName'] = $imageName;
		$_SESSION['imageData'] = $imageData;
		$_SESSION['imageType'] = $imageType;


header("Location: http://localhost/teamProject/membershipPlan.php");


}


$conn->close();
?>