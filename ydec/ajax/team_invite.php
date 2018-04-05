<?php
//invite team member. by tee
include '../connection/db_connection.php';
include '../mailer/invite_mailer.php';

$conn = OpenCon();
session_start();
if(isset($_SESSION['loginUser'])){
    $loginuser = $_SESSION['loginUser'];} 
    
    else $loginuser = 181666;
$teamid = $_SESSION['teamid'];

if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];} 
    
    else $username = "temp username";

$joinlink = "localhost/teamproject/ydec/ajax/jointeam.php?joiningteam=$teamid" ;//link 




    if(isset($_POST['matriksi'])){
        $memberid= $_POST['matriksi'];
        $sqlgetmail = "select * from 1milliontraders where studentID = $memberid";
        $run_getmail= mysqli_query($conn,$sqlgetmail);
        $row_invite=mysqli_fetch_array($run_getmail);
            $mail1 = $row_invite['email'];
            $receivername = $row_invite['fullname'];
        sendmail($mail1,$joinlink,$username,$receivername);
        
        
    }

else echo" no invite submited" ;