<?php
include '../ydec/connection/db_connection.php';
$conn = OpenCon();

if(isset($_POST["refID"])){
    $refid= $_POST["refID"];
    $sqlgetref = "select userID from 1milliontraders where userID='$refid';";
    $run_getref= mysqli_query($conn,$sqlgetref);
    if(mysqli_num_rows($run_getref)==0){
        echo"false";
    }
    else if(mysqli_num_rows($run_getref)==1){
        echo"true";
    }
    
}

?>