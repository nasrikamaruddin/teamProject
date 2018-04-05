<?php
//temporary page to invite team member. by tee
include '../connection/db_connection.php';

$conn = OpenCon();
session_start();

if(isset($_SESSION['loginUser'])){
    $loginuser = $_SESSION['loginUser'];} 
    
    else $loginuser = 181666;
$teamid = $_SESSION['teamid'];




?>
<html>
<link rel='stylesheet' href='//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css'>
<script src='//code.jquery.com/jquery-1.10.2.js'></script>
<script src='//code.jquery.com/ui/1.11.4/jquery-ui.js'></script>
<body>
<?php 

$sqlinvitation = "select * from ydecinvitation where teamid = '$teamid'";

    $result = mysqli_query($conn,$sqlinvitation);
    $i=4;
if (mysqli_num_rows($result) < $i) {
echo " 
no invitation yet ,Please invite your team
<form action='team_invite.php' method='post'>

<input type='text'  size='30' id='matriks1' name='matriks1'placeholder='Please Enter participant matrics number'>

<input type='text'  size='30' id='matriks2' name='matriks2' placeholder='Please Enter participant matrics number'>

<input type='text'  size='30' id='matriks3' name='matriks3' placeholder='Please Enter participant matrics number'>

<input type='text'  size='30' id='matriks4' name='matriks4' placeholder='Please Enter participant matrics number'>


<input type='submit' name='submitinvite' value='sendinvite' id='testbutton'>
</form>";
    }
else{
    echo"<table border ='1'>";
    $get_invitation= " select * from ydecinvitation i inner join ydecparticipant y on i.teamID=y.teamID inner join 1milliontraders  
    on 1milliontraders.userID= y.userID where i.teamid = $teamid";
    $run_invite= mysqli_query($conn,$get_invitation);
    while($row_invite=mysqli_fetch_array($run_invite)){
        $name = $row_invite['fullname'];
        $matric = $row_invite['studentID'];
		echo" <tr> <th> $name </th> <th> $matric </th> </tr>";
                                                        }
echo" </table>";
    }
?>
</body>
<script>
$(function() {
    $( '#matriks1' ).autocomplete({
        source: 'searchuser.php'
    });
});
</script>

<script>
$(function() {
    $( '#matriks2' ).autocomplete({
        source: 'searchuser.php'
    });
});
</script>

<script>
$(function() {
    $( '#matriks3' ).autocomplete({
        source: 'searchuser.php'
    });
});
</script>

<script>
$(function() {
    $( '#matriks4' ).autocomplete({
        source: 'searchuser.php'
    });
});
</script>
</html>