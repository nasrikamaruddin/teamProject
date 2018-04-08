<?php 
include '../connection/db_connection.php';

$conn = OpenCon();
session_start();

if (isset($_GET['joiningteam'])) {
    $joiningteam = $_GET['joiningteam'];
    
    if(isset($_SESSION['loginUser'])){
        $thisuser = $_SESSION['loginUser'];
        
        $sqlcheck = "select teamID from ydecparticipant where userID = $thisuser";

        if(mysqli_num_rows(mysqli_query($conn,$sqlcheck))==0){
        try{
             $sqljointeam = "UPDATE `ydecparticipant` SET `teamID` = $joiningteam WHERE userID = $thisuser";
        $run_jointeam= mysqli_query($conn,$sqljointeam);

        }
        catch(Exception $e){
            echo $e;
        }

        $_SESSION['teamid']=$joiningteam;
        header("Location: ../dashboard/index.php");
        }
        else {
            echo $_SESSION['username'].", you already joined a team, <a href='../dashboard/index.php' > click here to proceed to Homepage </a>";
        }
    }

    else{
       $_SESSION['teamtojoin']=$joiningteam;
       header("Location: ../../login.php"); //redirect to login first
    }

} 
else if(isset($_SESSION['teamtojoin'])){
    try{
        $joiningteam = $_SESSION['teamtojoin'];
        $thisuser = $_SESSION['loginUser'];
        $sqljointeam = "UPDATE `ydecparticipant` SET `teamID` = $joiningteam WHERE userID = $thisuser";
    $run_jointeam= mysqli_query($conn,$sqljointeam);
    header("Location: ../dashboard/index.php");
    }
    catch(Exception $e){
        echo $e;
    }
}
?>
