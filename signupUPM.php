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
		
		
	if (!empty($code)) {
 
$sql = "INSERT INTO 1milliontraders (userID, fullname, contact, email, address, studentID, university, faculty, programme, classification, username, password, studentIDImg) VALUES ('$userID', '$fullname', '$contact',  '$email', '$address', '$studentid', '$university', '$faculty', '$programme', '$classification', '$username', '$password', '$imageData'); INSERT INTO referral (userID, code) VALUES ('$userID', '$code');";


} else if ($code == ""){ 
$sql = "INSERT INTO 1milliontraders (userID, fullname, contact, email, address, studentID, university, faculty, programme, classification, username, password, studentIDImg) VALUES ('$userID', '$fullname', '$contact',  '$email', '$address', '$studentid', '$university', '$faculty', '$programme', '$classification', '$username', '$password', '$imageData');";
}

		
if ($conn->multi_query($sql) === TRUE) {
    echo "New record created successfully ";
	session_start();
	$_SESSION['loginUser'] =$userID;
	$_SESSION['referralID'] = $code;
	echo 'session create'.$_SESSION['loginUser'];
	header("Location: http://localhost/teamProject/membershipPlan.php");
	
} else {

    echo "Error: " . $sql . "<br>" . $conn->error;


	echo"alert('Error:'  . $sql . '<br>' . $conn->error')";

	echo '<script>history.back();</script>';
	
}	

}


$conn->close();
?>