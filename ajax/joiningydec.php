<?php
//create team . by tee
include '../ydec/connection/db_connection.php';

$conn = OpenCon();
session_start();
if(isset($_SESSION['loginUser'])){
    $loginuser = $_SESSION['loginUser'];} 
    
    else $loginuser = 181677;

if(isset($_POST['studentid'])){
    
   $checktype = "select * from 1milliontraders where userID = '$loginuser'";
   $run_check= mysqli_query($conn,$checktype);
   $row_check=mysqli_fetch_array($run_check);
       $type = $row_check['userType'];
       
    
       if($type=="gold"||$type=="diamond"){
        $participantid = getToken(5);
        $createnewteam = "INSERT INTO ydecparticipant (`participantID`, `userID`) VALUES ('$participantid', '$loginuser');";
            if (mysqli_query($conn,$createnewteam) === TRUE) {
            echo "successfully participate in ydec";
            }

    
    
        }

    else {
            echo "only Gold and Diamond user are eligible to participate YDEC 2018";
           
        }

}


function getToken($length)
{
    $token = "";
    
    $codeAlphabet= "0123456789";
    $max = strlen($codeAlphabet); // edited

    for ($i=0; $i < $length; $i++) {
        $token .= $codeAlphabet[crypto_rand_secure(0, $max-1)];
    }

    return $token;
}

function crypto_rand_secure($min, $max)
{
    $range = $max - $min;
    if ($range < 1) return $min; // not so random...
    $log = ceil(log($range, 2));
    $bytes = (int) ($log / 8) + 1; // length in bytes
    $bits = (int) $log + 1; // length in bits
    $filter = (int) (1 << $bits) - 1; // set all lower bits to 1
    do {
        $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
        $rnd = $rnd & $filter; // discard irrelevant bits
    } while ($rnd > $range);
    return $min + $rnd;
}
?>