<?php
// autocomplete inputfield from database , by tee 
 // database configuration
 $dbHost = 'localhost';
 $dbUsername = 'root';
 $dbPassword = '';
 $dbName = '1mt';
 
 //connect with the database
 $conn = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

$searchTerm = $_GET['term'];

$query = $conn->query("SELECT * FROM 1milliontraders WHERE studentID LIKE '%".$searchTerm."%' ORDER BY studentID ASC");
while ($row = $query->fetch_assoc()) {
    $data[] = $row['studentID'];
}

//return json data
echo json_encode($data);

?>