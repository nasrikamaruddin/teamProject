<?php 
include 'db_connection.php';

$conn = OpenCon();
session_start();

if (isset($_GET['joiningteam'])) {
    $joiningteam = $_GET['joiningteam'];
    
    if(isset($_SESSION['loginid'])){
        //execute update team to database 

        $_SESSION['teamid']=$teamid;
        header("Location: index.php");

    }

    else{
       header("Location: ../login.php"); //redirect to login first
    }

} 
else {
    echo "something wrong with the link";
}
?>
