<?php
include '../ydec/connection/db_connection.php';
$conn = OpenCon();

if(isset($_POST["username"])){
    $uname= $_POST["username"];
    $sqlgetname = "select username from 1milliontraders where username='$uname';";
    $run_getname= mysqli_query($conn,$sqlgetname);
    if(mysqli_num_rows($run_getname)==0){
        echo"false";
    }
    else if(mysqli_num_rows($run_getname)==1){
        echo"true";
    }
    
}

?>