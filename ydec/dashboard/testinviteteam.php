<?php
// testing file to  invite team member page , by tee
include 'db_connection.php';

$conn = OpenCon();
session_start();


$loginuser = $_SESSION['loginUser'];

?>
<html>
<body>

<?php
$get_partis= "select name , email from 1milliontraders inner join ydecparticipant on 1milliontraders.userid = ydecparticipant.userid ;";
	
	$run_pro= mysqli_query($conn,$get_partis);
    if (!$run_pro) {
                    echo "Error: %s\n", mysqli_error($conn);
                    exit();
                    }
    else {
    echo " <h1> this is all participant</h1> <table border='1'>";
	while($row_pro=mysqli_fetch_array($run_pro)){
        $name = $row_pro['name'];
        $email = $row_pro['email'];
        $carryemail = '"'.$email.'"';
		echo "<tr>
            <th>$name</th>
            <th>$email</th>
            <th> <input onclick='invite($carryemail)' type='button' value='sendinvite' id='invitebutton'></input></th>
        </tr>";
        }
    }
    echo"</table>";


	?>

<input onclick='invite("gege")' type='button' value='sendinvite' id='testbutton'>
<p id="logic" >nothing 2</p>
</body>
<script>
function invite(sendemail) {

document.getElementById("testbutton").value='sent';
document.getElementById("testbutton").disabled = true;
document.getElementById("logic").innerHTML= sendemail;
}
</script>
</html>