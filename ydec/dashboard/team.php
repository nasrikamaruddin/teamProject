<?php 
//temporary page to create team . by tee
include '../connection/db_connection.php';
$conn = OpenCon();
session_start();


$_SESSION['loginid']='181677';
// $_SESSION['teamid']=123456;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../admin/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../admin/adminlte/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../admin/adminlte/bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../../admin/adminlte/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../admin/adminlte/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../admin/adminlte/dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="../css/team.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php include'layout/header.php' ?>

<?php include'layout/sidebar.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

       <div class="row">
        <div class="container-fluid">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="container-fluid">
                  <div class="col-md-3"></div>
                  <div class="col-md-6">
                    <h3 style="text-align:center"><b>Team Information</b></h3>
                    <table class="table table-striped">
                      <tbody>
                        <tr>
                          <td style="width:30%">team name</td>
                          <td>:lolol</td>
                        </tr>
                        <tr>
                          <td style="width:30%">project name</td>
                          <td>:lolol</td>
                        </tr>
                      </tbody>
                    </table>
                    <div align="center">
                      <button class="btn btn-primary">Edit Team</button>
                      <button class="btn btn-danger">Delete Team</button>
                    </div>
                  </div>
                  <div class="col-md-3"></div>
                </div>
              </div>

              <div class="row">
                <div class="container-fluid">
                  <h3 style="text-align:center"><b>YOUR TEAM MEMBER</b></h3>
                  <div class="row">
                    <div class="col-md-3" align="center" style="padding:40px;">
                      <div class="card">
                        <img src="https://www.w3schools.com/w3images/team2.jpg" alt="John" style="width:100%">
                        <h1>John Doe</h1>
                        <p class="title">CEO & Founder, Example</p>
                        <p>Harvard University</p>
                        <br>
                      </div>
                    </div>
                    <div class="col-md-3" align="center" style="padding:40px;">
                      <div class="card">
                        <img src="https://www.w3schools.com/w3images/team2.jpg" alt="John" style="width:100%">
                        <h1>John Doe</h1>
                        <p class="title">CEO & Founder, Example</p>
                        <p>Harvard University</p>
                        <br>
                      </div>
                    </div>
                    <div class="col-md-3" align="center" style="padding:40px;">
                      <div class="card">
                        <img src="https://www.w3schools.com/w3images/team2.jpg" alt="John" style="width:100%">
                        <h1>John Doe</h1>
                        <p class="title">CEO & Founder, Example</p>
                        <p>Harvard University</p>
                        <br>
                      </div>
                    </div>
                    <div class="col-md-3" align="center" style="padding:40px;">
                      <div class="card">
                        <img src="https://www.w3schools.com/w3images/team2.jpg" alt="John" style="width:100%">
                        <h1>John Doe</h1>
                        <p class="title">CEO & Founder, Example</p>
                        <p>Harvard University</p>
                        <br>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3" align="center" style="padding:40px;">
                      <div class="card">
                        <img src="https://www.w3schools.com/w3images/team2.jpg" alt="John" style="width:100%">
                        <h1>John Doe</h1>
                        <p class="title">CEO & Founder, Example</p>
                        <p>Harvard University</p>
                        <br>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div align="center">
                      <button class="btn btn-primary">Manage Team member</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
            <!-- box-footer -->
          </div>
          <!-- /.box -->        
        </div>
      </div>
      <!-- /.row -->

      <div class="row" id="create_team" style=" display:<?php if(isset($_SESSION['teamid'])){echo "none";}else{echo "true";} ?>">
        <div class="container-fluid">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="container-fluid" align="center">
                  <h3>create your YDEC team here , <?php 
                  $loginuser = $_SESSION['loginid'];
                  $get_name= "select fullname from 1milliontraders where userid='$loginuser'";
    
                  $run_pro= mysqli_query($conn,$get_name);
                  if (!$run_pro) {
                    echo "Error: %s\n", mysqli_error($conn);
                    exit();
                    }
                  while($row_pro=mysqli_fetch_array($run_pro)){
                    $fname = $row_pro['fullname'];}
      
                    echo "$fname"; ?> , please select your team member and press save team to invite them.</h3>
                  <br>
                  <div class="col-md-3"></div>
                  <div class="col-md-6">
                    <form class="form-horizontal" action="index.php"  onsubmit="teamcreation()">
                      <div class="form-group">
                        <label class="control-label col-sm-3" for="email">Team Name:</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="team_name" placeholder="Enter team name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-3" for="pwd">project name:</label>
                        <div class="col-sm-9"> 
                          <input type="text" class="form-control" id="project_name" placeholder="Enter project name">
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="col-md-3"></div>
                  </div>
                  </div>
                    <hr>
                  <div class="row">
                    <div class="container-fluid">
                      <div class='col-md-3'>
                        <div class="form-group">
                          <label for="matriks1">matriks no:</label>
                          <input type="number" class="form-control" id="matriks1">
                          <br>
                          <button type="button" class="btn btn-block btn-info" onClick="getmemberdata(1)">check</button>
                        </div>
                        <div class="form-group">
                          <label for="name1">name:</label>
                          <input type="text" class="form-control" id="name1" disabled>
                        </div>
                        <div class="form-group">
                          <label for="faculty1">faculty:</label>
                          <input type="text" class="form-control" id="faculty1" disabled>
                        </div>
                      </div>
                      <div class='col-md-3'>
                        <div class="form-group">
                          <label for="matriks2">matriks no:</label>
                          <input type="number" class="form-control" id="matriks2">
                          <br>
                          <button type="button" class="btn btn-block btn-info" onClick="getmemberdata(2)">check</button>                        
                        </div>
                        <div class="form-group">
                          <label for="name2">name:</label>
                          <input type="text" class="form-control" id="name2" disabled>
                        </div>
                        <div class="form-group">
                          <label for="faculty2">faculty:</label>
                          <input type="text" class="form-control" id="faculty2" disabled>
                        </div>
                      </div>
                      <div class='col-md-3'>
                        <div class="form-group">
                          <label for="matriks3">matriks no:</label>
                          <input type="number" class="form-control" id="matriks3">
                          <br>
                          <button type="button" class="btn btn-block btn-info" onClick="getmemberdata(3)">check</button>
                        </div>      
                        <div class="form-group">
                          <label for="name3">name:</label>
                          <input type="text" class="form-control" id="name3" disabled>
                        </div>
                        <div class="form-group">
                          <label for="faculty3">faculty:</label>
                          <input type="text" class="form-control" id="faculty3" disabled>
                        </div>              
                      </div>
                      <div class='col-md-3'>
                        <div class="form-group">
                          <label for="matriks4">matriks no:</label>
                          <input type="number" class="form-control" id="matriks4">
                          <br>
                          <button type="button" class="btn btn-block btn-info" onClick="getmemberdata(4)">check</button>
                        </div>    
                        <div class="form-group">
                          <label for="name4">name:</label>
                          <input type="text" class="form-control" id="name4" disabled>
                        </div>
                        <div class="form-group">
                          <label for="faculty4">faculty:</label>
                          <input type="text" class="form-control" id="faculty4" disabled>
                        </div>                
                      </div>
                    </div>
                    <div class="container-fluid" align="center">
                      <br>
                      <button type="button" class="btn btn-primary" onclick="saveteam()">save team</button>
                    </div>
                  </div>
                  
                  </div>

                  </div>

                </div>
              </div>
            </div>
            <!-- /.box-body -->
            <!-- box-footer -->
          </div>
          <!-- /.box -->        
        </div>
      </div>

     

      


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include'layout/footer.php' ?>

<?php include'layout/aside.php' ?>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../../admin/adminlte/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../admin/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../admin/adminlte/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../admin/adminlte/dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="../../admin/adminlte/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="../../admin/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../../admin/adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="../../admin/adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="../../admin/adminlte/bower_components/chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../admin/adminlte/dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../admin/adminlte/dist/js/demo.js"></script>
<script src="../js/team.js"></script>
<script src='//code.jquery.com/jquery-1.10.2.js'></script>
<script src='//code.jquery.com/ui/1.11.4/jquery-ui.js'></script>
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
</body>
</html>
