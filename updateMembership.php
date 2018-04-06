<?php
include 'db_connection.php';

$conn = OpenCon();

echo "Connected Successfully";

session_start();
if(isset($_SESSION['loginUser'])) {
  echo "Your session is running " . $_SESSION['loginUser'];
  }
 $code = $_SESSION['referralID'];
$pay = $_POST['chk1'];
if (isset($_POST['payment'])) {

if (!empty($code)) {
  $count = mysqli_query($conn, "SELECT codeCount FROM 1milliontraders WHERE userID = '$code'");

   while($res = mysqli_fetch_array($count)) {
      
      $codeCount = $res['codeCount'];
      if ($codeCount < 10) {
       
         $sql = "UPDATE 1milliontraders SET userType = 'Silver' WHERE userID = '$code'";
      } else if ($codeCount < 20) {
      
        $sql = "UPDATE 1milliontraders SET userType = 'Gold' WHERE userID = '$code'";
      } else if ($codeCount >= 20) {
      
        $sql = "UPDATE 1milliontraders SET userType = 'Diamond' WHERE userID = '$code'";
      }

}
 
}   else if (empty($code)) {
  if ($pay == 'visa') {
  header("Location: https://sandbox.molpay.com/MOLPay/pay/SB_upm/index.php?amount=10.00&orderid=IDEA2018-CC&cur=MYR&vcode=301185785c0b6c7282b9c4a544e20d0c&bill_desc=IDEA+2018");
} else if ($pay == 'master') {
 header("Location: https://sandbox.molpay.com/MOLPay/pay/SB_upm/index.php?amount=10.00&orderid=IDEA2018-CC&cur=MYR&vcode=301185785c0b6c7282b9c4a544e20d0c&bill_desc=IDEA+2018");
} else if ($pay == 'maybank') {
header("Location: https://sandbox.molpay.com/MOLPay/pay/SB_upm/MB2u.php?amount=10.00&orderid=IDEA2018-M2U&cur=MYR&vcode=b3539fc84e54731280e7b6998538e455&bill_desc=IDEA+2018");
} else if ($pay == 'cimb') {
header("Location: https://sandbox.molpay.com/MOLPay/pay/SB_upm/cimb.php?amount=10.00&orderid=IDEA2018-CIMB&cur=MYR&vcode=1e7fe1e54e010306c279e7b5b3d7012b&bill_desc=IDEA+2018");
} else if ($pay == 'ism') {
header("Location: https://sandbox.molpay.com/MOLPay/pay/SB_upm/BIMB.php?amount=10.00&orderid=IDEA2018-BankIslam&cur=MYR&vcode=a794822e5c34a1ea1672d744db86d1ca&bill_desc=IDEA+2018");
} 
}



if ($conn->multi_query($sql) === TRUE) {
    echo "New record created successfully ";
  if ($pay == 'visa') {
  header("Location: https://sandbox.molpay.com/MOLPay/pay/SB_upm/index.php?amount=10.00&orderid=IDEA2018-CC&cur=MYR&vcode=301185785c0b6c7282b9c4a544e20d0c&bill_desc=IDEA+2018");
} else if ($pay == 'master') {
 header("Location: https://sandbox.molpay.com/MOLPay/pay/SB_upm/index.php?amount=10.00&orderid=IDEA2018-CC&cur=MYR&vcode=301185785c0b6c7282b9c4a544e20d0c&bill_desc=IDEA+2018");
} else if ($pay == 'maybank') {
header("Location: https://sandbox.molpay.com/MOLPay/pay/SB_upm/MB2u.php?amount=10.00&orderid=IDEA2018-M2U&cur=MYR&vcode=b3539fc84e54731280e7b6998538e455&bill_desc=IDEA+2018");
} else if ($pay == 'cimb') {
header("Location: https://sandbox.molpay.com/MOLPay/pay/SB_upm/cimb.php?amount=10.00&orderid=IDEA2018-CIMB&cur=MYR&vcode=1e7fe1e54e010306c279e7b5b3d7012b&bill_desc=IDEA+2018");
} else if ($pay == 'ism') {
header("Location: https://sandbox.molpay.com/MOLPay/pay/SB_upm/BIMB.php?amount=10.00&orderid=IDEA2018-BankIslam&cur=MYR&vcode=a794822e5c34a1ea1672d744db86d1ca&bill_desc=IDEA+2018");
}
 
  
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
 
  echo '<script>history.back();</script>';
  
} 
}
  ?>
  
  

