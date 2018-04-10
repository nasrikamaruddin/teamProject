<?php
//create team . by tee
include '../connection/db_connection.php';

$conn = OpenCon();
session_start();
if(isset($_SESSION['loginUser'])){
    $loginuser = $_SESSION['loginUser'];} 
    
    else $loginuser = 181666;

if(isset($_POST['teamname'])){
    
    $teamname = $_POST["teamname"];
    $title = $_POST["project"];
    $status = "active";
    
    $teamid =getunique(); 
    
    $runcheck = "SELECT * FROM `ydecparticipant` WHERE `userID` LIKE '$loginuser';";
    if(mysqli_num_rows(mysqli_query($conn,$runcheck))==0){
        echo " You are not YDEC participant ";}
    else {
    $createnewteam = "INSERT INTO ydecteam (`teamID`, `teamName`, `projecttitle`,`status`) VALUES ('$teamid', '$teamname','$title','$status');";
    
    if (mysqli_query($conn,$createnewteam) === TRUE) {
        $updateuserteam = "UPDATE `ydecparticipant` SET `teamID` = $teamid WHERE `userID` like '$loginuser'";
        $run_updateuserteam= mysqli_query($conn,$updateuserteam);
        if (!$run_updateuserteam) {
            echo "Error ,". mysqli_error($conn);
            }

        else{
            
        $_SESSION['teamid']=$teamid;
        echo "team creation sucess";
            }
    }

    else {
            echo "Error: " . $createnewteam . "<br>" . $conn->error;
           
        }

}
}
else "echo no parameter found" ;

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

function getunique(){
    $token= getToken(7);
    global $conn;
    if(mysqli_num_rows(mysqli_query($conn,"select teamid from ydecteam where teamid=380348"))==0){
        return $token;
    }
    else {
        $token= getunique();
        return $token;

    }
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