<?php
include '../connection/db_connection.php';
$conn = OpenCon();

if(isset($_POST["matrikn"])){
    $matrik= $_POST["matrikn"];
    $sqlgetname = "select fullname from 1milliontraders where studentID = $matrik";
    $run_getname= mysqli_query($conn,$sqlgetname);
    $row_name=mysqli_fetch_array($run_getname);
        $name = $row_name['fullname'];
    

    echo $name;
}

?>