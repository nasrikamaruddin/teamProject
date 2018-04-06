<?php
include 'db_connection.php';

$conn = OpenCon();

echo "Connected Successfully";

session_start();
if(isset($_SESSION['loginUser'])) {
  echo "Your session is running " . $_SESSION['loginUser'];
  }
 $code = $_SESSION['referralID'];


if (!empty($code)) {
  $count = mysqli_query($conn, "SELECT codeCount FROM 1milliontraders WHERE userID = '$code'");

   while($res = mysqli_fetch_array($count)) {
      
      $codeCount = $res['codeCount'];
      if ($codeCount < 10) {
       
         $sql = "UPDATE 1milliontraders SET userType = 'Silver' WHERE userID = '$code'";
      } else if ($codeCount < 20) {
      
        $sql = "UPDATE 1milliontraders SET userType = 'Gold' WHERE userID = '$code'";
      } else if ($codeCount >= 20) {
      
        $sql = "UPDATE 1milliontraders SET userType = 'Diamond' WHERE userID = '$code'";
      }

}

} else if (empty($code)) {
  header("Location: http://localhost/milliont/teamProject/signupsuccess.php");
}

if ($conn->multi_query($sql) === TRUE) {
    echo "New record created successfully ";
  
 


  header("Location: http://localhost/milliont/teamProject/signupsuccess.php");
  
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  echo"<script> alert('This email has been used')</script>";
  echo '<script>history.back();</script>';
  
}

  ?>
  
  

