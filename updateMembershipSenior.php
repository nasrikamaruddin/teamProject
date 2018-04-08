<?php
include 'db_connection.php';

$conn = OpenCon();

echo "Connected Successfully";

session_start();
if(isset($_SESSION['loginUser'])) {
  echo "Your session is running " . $_SESSION['loginUser'];
  }

  $userType = $_SESSION['userType'];
 $code = $_SESSION['referralID'];
$pay = $_POST['chk1'];


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
  if ($userType == 'Silver') {
 header("Location: https://localhost/teamProject/signupsuccess.php");
} else if ($userType == 'Gold') {
  if ($pay == 'fpx') {
  header("Location: https://www.onlinepayment.com.my/MOLPay/pay/1milliontraders/fpx.php?amount=30.00&orderid=1MT-30-FPX&cur=MYR&vcode=efdc508fdaf5476d55c9f8151f49bd5e&bill_desc=1+Million+Traders");
} else if ($pay == 'rakyat') {
 header("Location: https://www.onlinepayment.com.my/MOLPay/pay/1milliontraders/BKRM.php?amount=30.00&orderid=1MT-30-BR&cur=MYR&vcode=03b39e94b6a978764d49376a2d1bd4f1&bill_desc=1+Million+Traders");
} else if ($pay == 'maybank') {
header("Location: https://www.onlinepayment.com.my/MOLPay/pay/1milliontraders/MB2u.php?amount=30.00&orderid=1MT-30-BI&cur=MYR&vcode=74128f1aac8a90371ff4d2e3d7040d15&bill_desc=1+Million+Traders");
} else if ($pay == 'cimb') {
header("Location: https://www.onlinepayment.com.my/MOLPay/pay/1milliontraders/CIMBCLICKS.php?amount=30.00&orderid=1MT-30-CIMBC&cur=MYR&vcode=bc3e60e0753062c50b87beefb502a188&bill_desc=1+Million+Traders");
} else if ($pay == 'ism') {
header("Location: https://www.onlinepayment.com.my/MOLPay/pay/1milliontraders/BIMB.php?amount=30.00&orderid=1MT-30-BI&cur=MYR&vcode=74128f1aac8a90371ff4d2e3d7040d15&bill_desc=1+Million+Traders");
}
} else if ($userType == 'Diamond') {
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
}
}



if ($conn->multi_query($sql) === TRUE) {
    echo "New record created successfully ";
   if ($userType == 'Silver') {
  header("Location: https://localhost/teamProject/signupsuccess.php");
} else if ($userType == 'Gold') {
  if ($pay == 'fpx') {
  header("Location: https://www.onlinepayment.com.my/MOLPay/pay/1milliontraders/fpx.php?amount=30.00&orderid=1MT-30-FPX&cur=MYR&vcode=efdc508fdaf5476d55c9f8151f49bd5e&bill_desc=1+Million+Traders");
} else if ($pay == 'rakyat') {
 header("Location: https://www.onlinepayment.com.my/MOLPay/pay/1milliontraders/BKRM.php?amount=30.00&orderid=1MT-30-BR&cur=MYR&vcode=03b39e94b6a978764d49376a2d1bd4f1&bill_desc=1+Million+Traders");
} else if ($pay == 'maybank') {
header("Location: https://www.onlinepayment.com.my/MOLPay/pay/1milliontraders/MB2u.php?amount=30.00&orderid=1MT-30-BI&cur=MYR&vcode=74128f1aac8a90371ff4d2e3d7040d15&bill_desc=1+Million+Traders");
} else if ($pay == 'cimb') {
header("Location: https://www.onlinepayment.com.my/MOLPay/pay/1milliontraders/CIMBCLICKS.php?amount=30.00&orderid=1MT-30-CIMBC&cur=MYR&vcode=bc3e60e0753062c50b87beefb502a188&bill_desc=1+Million+Traders");
} else if ($pay == 'ism') {
header("Location: https://www.onlinepayment.com.my/MOLPay/pay/1milliontraders/BIMB.php?amount=30.00&orderid=1MT-30-BI&cur=MYR&vcode=74128f1aac8a90371ff4d2e3d7040d15&bill_desc=1+Million+Traders");
}
} else if ($userType == 'Diamond') {
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
}
  
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
 
 // echo '<script>history.back();</script>';
  
} 

  ?>
  
  

