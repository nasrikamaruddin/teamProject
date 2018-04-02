<?php
//invite team member. by tee
include 'db_connection.php';
include 'invite_mailer.php';

$conn = OpenCon();
session_start();

//$loginuser = $_SESSION['loginid']; test with local value
//$teamid = $_SESSION['teamid'];
$loginuser = 181677;
$teamid = 111111;
$joinlink = "localhost/teamproject/ydec/jointeam.php?joiningteam=$teamid" ;//link 



if(isset($_POST['submitinvite'])){
    if(isset($_POST['member1'])){
        $member1id= $_POST['member1'];
        $sqlgetmail = "select email from 1milliontraders where studentID = $member1id";
        $run_getmail= mysqli_query($conn,$sqlgetmail);
        $row_invite=mysqli_fetch_array($run_getmail);
            $mail1 = $row_invite['email'];
        sendmail($mail1,$joinlink);

        
    }
}
else echo" no invite submited" ;