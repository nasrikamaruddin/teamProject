<?php 
include '../connection/db_connection.php';

$conn = OpenCon();
session_start();

if (isset($_GET['joiningteam'])) {
    $joiningteam = $_GET['joiningteam'];
    
    if(isset($_SESSION['loginUser'])){
        $thisuser = $_SESSION['loginUser'];
        echo $thisuser;
        try{

            $sqljointeam = "UPDATE `ydecparticipant` SET `teamID` = $joiningteam WHERE userID = $thisuser";
        $run_jointeam= mysqli_query($conn,$sqljointeam);

        }
        catch(Exception $e){
            echo $e;
        }

        $_SESSION['teamid']=$joiningteam;
       // header("Location: index.php");

    }

    else{
       header("Location: ../login.php"); //redirect to login first
    }

} 
else {
    echo "something wrong with the link";
}
?>
