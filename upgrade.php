<?php
include 'db_connection.php';

$conn = OpenCon();

echo "Connected Successfully";

session_start();
if(isset($_SESSION['loginUser'])) {
  echo "Your session is running " . $_SESSION['loginUser'];
  }
$pay = $_POST['chk1'];



		$userTypeUp = $_SESSION['userTypeUp'];
		$userID = $_SESSION['loginUser'];


		$unique = uniqid('', true);
		$uniq = substr($unique, strlen($unique) - 4, strlen($unique));  



 if ($userTypeUp == 'Gold') {
      $sql = "UPDATE 1milliontraders set userType = 'Gold', codeCount = codeCount+10 WHERE userID = '$userID';";
} else if ($userTypeUp == 'Diamond') {
	 $sql = "UPDATE 1milliontraders set userType = 'Diamond', codeCount = codeCount+20 WHERE userID = '$userID';";
   echo "diamond";
}


 


if ($conn->multi_query($sql) === TRUE) {
    	
	if ($userTypeUp == 'Gold') {
    if ($pay == 'fpx') {
  header("Location: https://www.onlinepayment.com.my/MOLPay/pay/1milliontraders/BKRM.php?amount=50.00&orderid=1MT-50-FPX&cur=MYR&vcode=f697b83c2d59753d8a9c3006c8e51888&bill_desc=1+Million+Traders");
} else if ($pay == 'rakyat') {
 header("Location: https://www.onlinepayment.com.my/MOLPay/pay/1milliontraders/BKRM.php?amount=50.00&orderid=1MT-50-BR&cur=MYR&vcode=bb2ef6fc28a8b225204d5334529de45a&bill_desc=1+Million+Trader");
} else if ($pay == 'maybank') {
header("Location: https://www.onlinepayment.com.my/MOLPay/pay/1milliontraders/MB2u.php?amount=50.00&orderid=1MT-50-M2U&cur=MYR&vcode=98ce9f0000868abc2c32d164f5a9defe&bill_desc=1+Million+Traders");
} else if ($pay == 'cimb') {
header("Location: https://www.onlinepayment.com.my/MOLPay/pay/1milliontraders/CIMBCLICKS.php?amount=50.00&orderid=1MT-50-CIMBC&cur=MYR&vcode=d0ba03881f70cb8ae2ccb57e063fc06a&bill_desc=1+Million+Traders");
} else if ($pay == 'ism') {
header("Location: https://www.onlinepayment.com.my/MOLPay/pay/1milliontraders/BIMB.php?amount=50.00&orderid=1MT-50-BI&cur=MYR&vcode=059b27dcff633a44c175f849bde6ab6e&bill_desc=1+Million+Traders");
}
} else if ($userTypeUp == 'Diamond') {
    if ($pay == 'fpx') {
  header("Location: https://www.onlinepayment.com.my/MOLPay/pay/1milliontraders/fpx.php?amount=100.00&orderid=1MT-100-FPX&cur=MYR&vcode=08ca9c29df4ad6f12aded14c7891746c&bill_desc=1+Million+Traders");
} else if ($pay == 'rakyat') {
 header("Location: https://www.onlinepayment.com.my/MOLPay/pay/1milliontraders/BKRM.php?amount=100.00&orderid=1MT-100-BR&cur=MYR&vcode=99abffd760d70bb3b6e93d4ddab7b49d&bill_desc=1+Million+Traders");
} else if ($pay == 'maybank') {
header("Location: https://www.onlinepayment.com.my/MOLPay/pay/1milliontraders/MB2u.php?amount=100.00&orderid=1MT-100-M2U&cur=MYR&vcode=a4240c786d263ff3cb99173965ea3337&bill_desc=1+Million+Traders");
} else if ($pay == 'cimb') {
header("Location: https://www.onlinepayment.com.my/MOLPay/pay/1milliontraders/CIMBCLICKS.php?amount=100.00&orderid=1MT-100-CIMBC&cur=MYR&vcode=e6aff1127cc493e7e9aa4e34d15a016c&bill_desc=1+Million+Traders");
} else if ($pay == 'ism') {
header("Location: https://www.onlinepayment.com.my/MOLPay/pay/1milliontraders/BIMB.php?amount=100.00&orderid=1MT-100-BI&cur=MYR&vcode=20a14a3e0e47e48d967675471cd9626b&bill_desc=1+Million+Traders");
}
}

	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
//	echo"<script> alert('This email has been used')</script>";
//	echo '<script>history.back();</script>';
	
}	

$conn->close();
?>