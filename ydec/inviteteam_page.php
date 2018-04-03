<?php
//temporary page to invite team member. by tee
include 'db_connection.php';

$conn = OpenCon();
session_start();


$loginuser = $_SESSION['loginid']; 
$teamid = $_SESSION['teamid'];




?>
<html>
<link rel='stylesheet' href='//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css'>
<script src='//code.jquery.com/jquery-1.10.2.js'></script>
<script src='//code.jquery.com/ui/1.11.4/jquery-ui.js'></script>
<body>
<?php 

$sqlinvitation = "select * from invitation where teamid = '$teamid'";

    $result = mysqli_query($conn,$sqlinvitation);
    $i=4;
if (mysqli_num_rows($result) < $i) {
echo " 
no invitation yet ,Please invite your team
<form action='team_invite.php' method='post'>

<input type='text'  size='30' id='member1' name='member1'placeholder='Please Enter participant matrics number'>

<input type='text'  size='30' id='member2' name='member2' placeholder='Please Enter participant matrics number'>

<input type='text'  size='30' id='member3' name='member3' placeholder='Please Enter participant matrics number'>

<input type='text'  size='30' id='member4' name='member4' placeholder='Please Enter participant matrics number'>


<input type='submit' name='submitinvite' value='sendinvite' id='testbutton'>
</form>";
    }
else{
    echo"<table border ='1'>";
    $get_invitation= " select * from invitation i inner join ydecparticipant y on i.teamID=y.teamID inner join 1milliontraders  
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
    $( '#member1' ).autocomplete({
        source: 'searchuser.php'
    });
});
</script>

<script>
$(function() {
    $( '#member2' ).autocomplete({
        source: 'searchuser.php'
    });
});
</script>

<script>
$(function() {
    $( '#member3' ).autocomplete({
        source: 'searchuser.php'
    });
});
</script>

<script>
$(function() {
    $( '#member4' ).autocomplete({
        source: 'searchuser.php'
    });
});
</script>
</html>