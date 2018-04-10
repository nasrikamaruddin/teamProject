<?php

if (isset($_POST['submit'])){
  $servername = "localhost";
$username = "root";
$password = "";
$dbname=milliont_main;
$conn =new mysqli($servername,$username,$password,$dbname);
    $teamID=$_SESSION['username'];
    $file =$_FILES['file'];
    $fileName=$_FILES['file']['name'];
    $fileTmpName=$_FILES['file']['tmp_name'];
    $fileSize=$_FILES['file']['size'];
    $fileError=$_FILES['file']['error'];
    $fileType=$_FILES['file']['type'];
    $mysql="INSERT INTO ydecproposal(documentName,teamID) VALUES ( '$file','$teamID')";
    $fileExt=explode('.',$fileName);
    $fileActualExt=strtolower(end($fileExt)) ;
    $allowed=array('pdf');
   
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    if (in_array($fileActualExt,$allowed)){
    if($fileError===0)
        
            {
 if ($conn->query($mysql) === TRUE) {
    $fileDestination='upload/'.$fileName;
            move_uploaded_file($fileTmpName,$fileDestination);
            header("Location: subvideo.php?uploadsuccess");  
            
 } else {
    echo "Error: " . $mysql . "<br>" . $conn->error;

    }
    
            
            }
                else
                {
            
                echo "There was an error uploading your file";
           }
        
    }       
      else{
       echo "You cannot upload this type of file";

    }  

}
