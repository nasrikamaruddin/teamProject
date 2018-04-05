<?php
// autocomplete inputfield from database , by tee 
 // database configuration
 $dbHost = 'localhost';
 $dbUsername = 'root';
 $dbPassword = '';
 $dbName = 'milliont_main';
 
 //connect with the database
 $conn = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

$searchTerm = $_GET['term'];

$query = $conn->query("SELECT * FROM 1milliontraders inner join ydecparticipant  y on 1milliontraders.userID=y.userID  WHERE studentID LIKE '%".$searchTerm."%' ORDER BY studentID ASC");
while ($row = $query->fetch_assoc()) {
    $data[] = $row['studentID'];
}

//return json data
echo json_encode($data);

?>