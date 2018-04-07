<?php
include 'db_connection.php';

$conn = OpenCon();

echo "Connected Successfully";

session_start();
if(isset($_SESSION['loginUser'])) {
  echo "Your session is running " . $_SESSION['loginUser'];
  }

		$userType = $_POST['userType'];
		$userID = $_SESSION['loginUser'];
		$fullname = $_SESSION['fullname'];
		$contact = $_SESSION['contact'];
		$email = $_SESSION['email'];
		$address = $_SESSION['address'];
		$studentid = $_SESSION['studentid'];
		$university = $_SESSION['university'];
		$faculty = $_SESSION['faculty'];
		$programme = $_SESSION['programme'];
		$classification = $_SESSION['classification'];
		$username = $_SESSION['username'];
		$password = $_SESSION['password'];
		$code = $_SESSION['referralID'];
		$imageName = $_SESSION['imageName'];
		$imageData = $_SESSION['imageData'];
		$imageType = $_SESSION['imageType'];

		$unique = uniqid('', true);
		$uniq = substr($unique, strlen($unique) - 4, strlen($unique));  

if (!empty($code)) {

   $result = mysqli_query($conn, "SELECT codeCount FROM 1milliontraders WHERE userID = '$code'");
     while($res = mysqli_fetch_array($result)) {
		echo "my code is  $code ";
      $codeCount = $res['codeCount'];  
	  echo "my codecount is  $codeCount ";

 if ($userType == 'Silver') {
echo " silver with code";
$sql = "INSERT INTO 1milliontraders (userID, fullname, contact, email, address, studentID, university, faculty, programme, classification, username, password, studentIDImg, userType) VALUES ('$userID', '$fullname', '$contact',  '$email', '$address', '$studentid', '$university', '$faculty', '$programme', '$classification', '$username', '$password', '$imageData', '$userType'); INSERT INTO referral (userID, code) VALUES ('$userID', '$code'); UPDATE 1milliontraders SET codeCount = codeCount+1 WHERE userID =  '$code';";
} else if ($userType == 'Gold') {
	echo " g with code";
	$sql = "INSERT INTO 1milliontraders (userID, fullname, contact, email, address, studentID, university, faculty, programme, classification, username, password, studentIDImg, userType, codeCount) VALUES ('$userID', '$fullname', '$contact',  '$email', '$address', '$studentid', '$university', '$faculty', '$programme', '$classification', '$username', '$password', '$imageData', '$userType', '10'); INSERT INTO referral (userID, code) VALUES ('$userID', '$code'); UPDATE 1milliontraders SET codeCount = codeCount+2 WHERE userID =  '$code';";
} else if ($userType == 'Diamond') {
	echo " d with code";
		$sql = "INSERT INTO 1milliontraders (userID, fullname, contact, email, address, studentID, university, faculty, programme, classification, username, password, studentIDImg, userType, codeCount) VALUES ('$userID', '$fullname', '$contact',  '$email', '$address', '$studentid', '$university', '$faculty', '$programme', '$classification', '$username', '$password', '$imageData', '$userType', '20'); INSERT INTO referral (userID, code) VALUES ('$userID', '$code'); UPDATE 1milliontraders SET codeCount = codeCount+10 WHERE userID =  '$code';";
}

} 
} else if ($code == ""||$code == null){ 
	 if ($userType == 'Silver') {
		echo " silver without code";
$sql = "INSERT INTO 1milliontraders (userID, fullname, contact, email, address, studentID, university, faculty, programme, classification, username, password, studentIDImg, userType) VALUES ('$userID', '$fullname', '$contact',  '$email', '$address', '$studentid', '$university', '$faculty', '$programme', '$classification', '$username', '$password', '$imageData', '$userType');";
} else if ($userType == 'Gold') {
	echo " g without code";
	$sql = "INSERT INTO 1milliontraders (userID, fullname, contact, email, address, studentID, university, faculty, programme, classification, username, password, studentIDImg, userType, codeCount) VALUES ('$userID', '$fullname', '$contact',  '$email', '$address', '$studentid', '$university', '$faculty', '$programme', '$classification', '$username', '$password', '$imageData', '$userType', '10');";
} else if ($userType == 'Diamond') {
	echo " d without code";
		$sql = "INSERT INTO 1milliontraders (userID, fullname, contact, email, address, studentID, university, faculty, programme, classification, username, password, studentIDImg, userType) VALUES ('$userID', '$fullname', '$contact',  '$email', '$address', '$studentid', '$university', '$faculty', '$programme', '$classification', '$username', '$password', '$imageData', '$userType', '20');";
}
}

else echo " no shit ";

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