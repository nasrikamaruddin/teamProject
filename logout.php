<?php
include 'db_connection.php';

$conn = OpenCon();

echo "Connected Successfully";

session_destroy();
header("Location: index.php");
?>