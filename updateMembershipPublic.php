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
  if ($userType == 'Silver') {
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
} else if ($userType == 'Gold') {
  if ($pay == 'fpx') {
  header("Location: https://www.onlinepayment.com.my/MOLPay/pay/1milliontraders/fpx.php?amount=200.00&orderid=1MT-200-FPX&cur=MYR&vcode=02b6fc040a2eb4ee072fc1b4cd1b7dcc&bill_desc=1+Million+Traders");
} else if ($pay == 'rakyat') {
 header("Location: https://www.onlinepayment.com.my/MOLPay/pay/1milliontraders/BKRM.php?amount=200.00&orderid=1MT-200-BR&cur=MYR&vcode=2e3576e603e6612807a94f826f634153&bill_desc=1+Million+Traders");
} else if ($pay == 'maybank') {
header("Location: https://www.onlinepayment.com.my/MOLPay/pay/1milliontraders/MB2u.php?amount=200.00&orderid=1MT-200-M2U&cur=MYR&vcode=cc06af985b0e439405825fcf43ffc6ff&bill_desc=1+Million+Traders");
} else if ($pay == 'cimb') {
header("Location: https://www.onlinepayment.com.my/MOLPay/pay/1milliontraders/CIMBCLICKS.php?amount=200.00&orderid=1MT-200-CIMB&cur=MYR&vcode=6402711c15a88d14c14f4a75bae90560&bill_desc=1+Million+Traders");
} else if ($pay == 'ism') {
header("Location: https://www.onlinepayment.com.my/MOLPay/pay/1milliontraders/BIMB.php?amount=200.00&orderid=1MT-200-BI&cur=MYR&vcode=d1334e1f9e7b05b9df00a7a443cda57f&bill_desc=1+Million+Traders");
}
} else if ($userType == 'Diamond') {
    if ($pay == 'fpx') {
  header("Location: https://www.onlinepayment.com.my/MOLPay/pay/1milliontraders/fpx.php?amount=300.00&orderid=1MT-300-FPX&cur=MYR&vcode=f5dc2b46578933282681e4b650463dff&bill_desc=1+Million+Traders");
} else if ($pay == 'rakyat') {
 header("Location: https://www.onlinepayment.com.my/MOLPay/pay/1milliontraders/BKRM.php?amount=300.00&orderid=1MT-300-BR&cur=MYR&vcode=bf451269612b8f6770b483094e8db5aa&bill_desc=1+Million+Traders");
} else if ($pay == 'maybank') {
header("Location: https://www.onlinepayment.com.my/MOLPay/pay/1milliontraders/MB2u.php?amount=300.00&orderid=1MT-300-M2U&cur=MYR&vcode=6cc200b84e5c4fd2007b8f2410735541&bill_desc=1+Million+Traders");
} else if ($pay == 'cimb') {
header("Location: https://www.onlinepayment.com.my/MOLPay/pay/1milliontraders/CIMBCLICKS.php?amount=300.00&orderid=1MT-300-CIMB&cur=MYR&vcode=a526832f28516dec10911ec4e70e8167&bill_desc=1+Million+Traders");
} else if ($pay == 'ism') {
header("Location: https://www.onlinepayment.com.my/MOLPay/pay/1milliontraders/BIMB.php?amount=300.00&orderid=1MT-300-BI&cur=MYR&vcode=6544011abb3a88117683f2604bec058a&bill_desc=1+Million+Traders");
}
}
}



if ($conn->multi_query($sql) === TRUE) {
    echo "New record created successfully ";
   if ($userType == 'Silver') {
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
} else if ($userType == 'Gold') {
  if ($pay == 'fpx') {
  header("Location: https://www.onlinepayment.com.my/MOLPay/pay/1milliontraders/fpx.php?amount=200.00&orderid=1MT-200-FPX&cur=MYR&vcode=02b6fc040a2eb4ee072fc1b4cd1b7dcc&bill_desc=1+Million+Traders");
} else if ($pay == 'rakyat') {
 header("Location: https://www.onlinepayment.com.my/MOLPay/pay/1milliontraders/BKRM.php?amount=200.00&orderid=1MT-200-BR&cur=MYR&vcode=2e3576e603e6612807a94f826f634153&bill_desc=1+Million+Traders");
} else if ($pay == 'maybank') {
header("Location: https://www.onlinepayment.com.my/MOLPay/pay/1milliontraders/MB2u.php?amount=200.00&orderid=1MT-200-M2U&cur=MYR&vcode=cc06af985b0e439405825fcf43ffc6ff&bill_desc=1+Million+Traders");
} else if ($pay == 'cimb') {
header("Location: https://www.onlinepayment.com.my/MOLPay/pay/1milliontraders/CIMBCLICKS.php?amount=200.00&orderid=1MT-200-CIMB&cur=MYR&vcode=6402711c15a88d14c14f4a75bae90560&bill_desc=1+Million+Traders");
} else if ($pay == 'ism') {
header("Location: https://www.onlinepayment.com.my/MOLPay/pay/1milliontraders/BIMB.php?amount=200.00&orderid=1MT-200-BI&cur=MYR&vcode=d1334e1f9e7b05b9df00a7a443cda57f&bill_desc=1+Million+Traders");
}
} else if ($userType == 'Diamond') {
    if ($pay == 'fpx') {
  header("Location: https://www.onlinepayment.com.my/MOLPay/pay/1milliontraders/fpx.php?amount=300.00&orderid=1MT-300-FPX&cur=MYR&vcode=f5dc2b46578933282681e4b650463dff&bill_desc=1+Million+Traders");
} else if ($pay == 'rakyat') {
 header("Location: https://www.onlinepayment.com.my/MOLPay/pay/1milliontraders/BKRM.php?amount=300.00&orderid=1MT-300-BR&cur=MYR&vcode=bf451269612b8f6770b483094e8db5aa&bill_desc=1+Million+Traders");
} else if ($pay == 'maybank') {
header("Location: https://www.onlinepayment.com.my/MOLPay/pay/1milliontraders/MB2u.php?amount=300.00&orderid=1MT-300-M2U&cur=MYR&vcode=6cc200b84e5c4fd2007b8f2410735541&bill_desc=1+Million+Traders");
} else if ($pay == 'cimb') {
header("Location: https://www.onlinepayment.com.my/MOLPay/pay/1milliontraders/CIMBCLICKS.php?amount=300.00&orderid=1MT-300-CIMB&cur=MYR&vcode=a526832f28516dec10911ec4e70e8167&bill_desc=1+Million+Traders");
} else if ($pay == 'ism') {
header("Location: https://www.onlinepayment.com.my/MOLPay/pay/1milliontraders/BIMB.php?amount=300.00&orderid=1MT-300-BI&cur=MYR&vcode=6544011abb3a88117683f2604bec058a&bill_desc=1+Million+Traders");
}
}
  
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
 
 // echo '<script>history.back();</script>';
  
} 
}
  ?>
  
  

