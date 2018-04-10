<?php
include '../connection/db_connection.php';
$conn = OpenCon();

if(isset($_POST["matrikf"])){
    $matrik= $_POST["matrikf"];
    $sqlgetfac = "select faculty from 1milliontraders where studentID = $matrik";
    $run_getfac= mysqli_query($conn,$sqlgetfac);
    $row_fac=mysqli_fetch_array($run_getfac);
        $fac = $row_fac['faculty'];
    

    echo $fac;
}
?>