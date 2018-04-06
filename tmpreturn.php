<?php
$vkey ="ab6b6268b90de057c2cb9361b20ec7b3" ; //Replace xxxxxxxxxxxx with your MOLPay Secret_Key
/********************************
*Don't change below parameters
********************************/
$tranID = $_POST['tranID'];
$orderid = $_POST['orderid'];
$status = $_POST['status'];
$domain = $_POST['domain'];
$amount = $_POST['amount'];
$currency = $_POST['currency'];
$appcode = $_POST['appcode'];
$paydate = $_POST['paydate'];
$skey = $_POST['skey'];
/***********************************************************
* To verify the data integrity sending by MOLPay
************************************************************/
echo "tranID: ".$tranID;
echo "orderid: ".$orderid;
echo "status: ".$status;
echo "domain: ".$domain;
echo "amount: ".$amount;
echo "currency: ".$currency;
echo "appcode: ".$appcode;
echo "paydate: ".$paydate;
echo "skey: ".$skey;

$key0 = md5( $tranID.$orderid.$status.$domain.$amount.$currency );
$key1 = md5( $paydate.$domain.$key0.$appcode.$vkey );
echo "key:".$key0;
echo "key1: ".$key1;
if( $skey != $key1 ) $status= -1; // Invalid transaction.
// Merchant might issue a requery to MOLPay to double check payment status with MOLPay.
if ( $status == "00" ) {
echo "return ok";
} else {
	echo "return fail";
// failure action. Write your script here .....
// Merchant might send query to MOLPay using Merchant requery
// to double check payment status for that particular order.
}
// Merchant is recommended to implement IPN once received the payment status
// regardless the status to acknowledge MOLPay system
session_start();
echo "session: ".$_SESSION['loginUser'];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<p>some text</p>
</body>
</html>