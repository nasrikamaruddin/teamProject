<?php
//create team . by tee
include '../connection/db_connection.php';

$conn = OpenCon();
session_start();
//$loginuser = $_SESSION['loginid'];
$loginuser=181666;

if(isset($_POST['teamname'])){
    
    $teamname = $_POST["teamname"];
    $title = $_POST["project"];
    $on = "on";
    
    $teamid = getToken(7); 
    
    $createnewteam = "INSERT INTO ydecteam (`teamID`, `teamName`, `projecttitle`,`status`) VALUES ('$teamid', '$teamname','$title','$on');";
    
    if (mysqli_query($conn,$createnewteam) === TRUE) {
        $updateuserteam = "UPDATE `ydecparticipant` SET `teamID` = $teamid WHERE `userID` = $loginuser";
        $run_updateuserteam= mysqli_query($conn,$updateuserteam);
        if (!$run_updateuserteam) {
            echo "Error: no you are not ydec participant", mysqli_error($conn);
            }

        else{
            
        $_SESSION['teamid']=$teamid;
        
            }
    }

    else {
            echo "Error: " . $createnewteam . "<br>" . $conn->error;
           
        }
echo "team creation sucess";
}
else echo "failed to get parameter";

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