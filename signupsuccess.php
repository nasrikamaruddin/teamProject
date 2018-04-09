<?php

include 'db_connection.php';

$conn = OpenCon();

//echo "Connected Successfully";

session_start();
if(isset($_SESSION['loginUser'])) {
 echo "Your session is running " . $_SESSION['loginUser'];
 echo $_SESSION['email'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>1 Million Traders - Universiti Putra Malaysia % PKT Logistic Group Sdn Bhd</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- bootstrap-css -->
<link href="src/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="src/css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="src/css/plan.css" type="text/css" media="all" />
<!--// css -->
<!-- gallery -->
<link type="text/css" rel="stylesheet" href="src/css/cm-overlay.css" />
<!-- //gallery -->
<!-- font-awesome icons -->
<link href="src/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link type="text/css" rel="stylesheet" href="src/css/fontJosefinSans.css" />
<link type="text/css" rel="stylesheet" href="src/css/fontRobotoCondensed.css" />
<!-- //font -->
<script src="src/js/jquery-1.11.1.min.js"></script>
<script src="src/js/bootstrap.js"></script>
<script src="src/js/planTabs.js"></script>
<script src="src/js/timer.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!-- animation -->
<link href="src/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="src/js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!-- //animation --> 

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
	<!-- banner -->
	<div class="">
		<div class="agileinfo-dot">
			<div class="header">
				<div class="container">
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="fixed" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<div class="agileits-logo">
								<h1><a href="index.php"><img src="src/images/logo1.png" alt="" /> 1 Million Traders </a></h1>
							</div>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
							<nav>
								<ul class="nav navbar-nav">
									<li><a href="index.php">About</a></li>
									<li><a href="index.php">Events</a></li>
									<li><a href="index.php">Membership Registration</a></li>
									<li><a href="index.php">News</a></li>
									<li><a href="login.php">Log In</a></li>
								</ul>
							</nav>
						</div>
						<!-- /.navbar-collapse -->
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->
		<div class="contact-form-center">
			<div class="w3l-heading">
				<h3>1 Million Traders Registration</h3>
				<div class="w3ls-border"> </div>
			</div></br>
			<div class="panel panel-info">
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12"> 
						<div class="alert alert-success-signup">
							<strong>Congratulations!</strong></br>
							<p>You've signed up as one of our 1 Million Traders Members and thank you for your payment.</br>
							Click Log In below to began a apart of 1 Million Traders.</p>
						</div>
						<div>
						<button type="button" onclick="location.href = 'login.php';" class="btn btn-success center-block" style="width:10em;">Log In</button>
						</div>
						</div>
					</div>
					</br>
				</div>
			</div>
		</div>

	<!-- //profile -->

	<!-- footer -->
	<footer style="position: fixed;left: 0;bottom: 0;width: 100%; text-align: center;">
		<div class="container">
			<p>© 2018 1MillionTraders . All Rights Reserved | Design by <a href="http://w3layouts.com/"> W3layouts</a> </p>
		</div>
	</footer>
	<!-- //footer -->
	<script src="src/js/SmoothScroll.min.js"></script>

	<script src="src/js/responsiveslides.min.js"></script>
	<script type="text/javascript" src="src/js/move-top.js"></script>
	<script type="text/javascript" src="src/js/easing.js"></script>

<div> 
<?php
// ************************TO HIDE DIV in HTML use <div style='display:none';>********************
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './src/PHPMailer/src/Exception.php';
require './src/PHPMailer/src/PHPMailer.php';
require './src/PHPMailer/src/SMTP.php';


$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'noreply1milliont@gmail.com';                 // SMTP username
    $mail->Password = 'password1MT';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->AddEmbeddedImage('MT Logo.png', '1mtlogo');
    $mail->setFrom('no-reply@1milliontraders.com', '1MillionTraders');
    $mail->addAddress(htmlspecialchars($_SESSION['email']), '');//htmlspecialchars($_POST['email']), '');     // Add a recipient
    $mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Welcome to 1MillionTraders';
    $mail->Body    = '<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <style type="text/css">
    html,
        body {
            margin: 0 !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
            font-family: Helvetica, Arial, sans-serif;
        }
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }
        div[style*="margin: 16px 0"] {
            margin:0 !important;
        }
        table,
        td {
            mso-table-lspace: 0pt 
!important;
            mso-table-rspace: 0pt !important;
        }
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }
        table table table {
            table-layout: auto; 
        }
        img {
            max-width: 100%;
            -ms-interpolation-mode:bicubic;
        }
        a{
            color: #d25b70;
        
    text-decoration: none;
        }
        .button a{
            color: #ffffff;
        }
        .yshortcuts a {
            border-bottom: none !important;
        }
        .mobile-link--footer a,
        a[x-apple-data-detectors] {
            color:inherit !important;
            text-decoration: underline !important;
        }
        .dekstop-left{
            text-align: left;
        }
        @media screen and (max-width: 679px) {
            .fluid,
            .fluid-centered {
    
            width: 100% !important;
                max-width: 100% !important;
                height: auto !important;
                margin-left: auto !important;
                margin-right: auto !important;
            }
            .fluid-centered {
                margin-left: auto !important;
                margin-right: auto !important;
            }
            .stack-column,
            .stack-column-center {
                display: block !important;
                width: 
100% !important;
                direction: ltr !important;
            }
            .center-on-narrow {
                text-align: center !important;
                display: block !important;
                margin-left: auto !important;
                margin-right: auto !important;
                float: none !important;
            }
            table.center-on-narrow {
                display: inline-block !important;
            }
            .m-intro{
                font-size: 30px 
!important;
                line-height: 34px !important;
            }
        }
        @media screen and (min-width: 1600px) {
            .weblink{display: none}  
        }
  </style>
</head>

<body bgcolor="#e7e9e7" width="100%" style="margin: 0; background-color: #e7e9e7;">
  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse; background: linear-gradient(180deg,#fff,340px,#fff);" width="100%">
    <tbody>
      <tr>
        <td valign="top">
          <center style="width: 100%;">

            <div style="max-width: 680px;">
              <!--[if (gte mso 9)|(IE)]>
                        <table cellspacing="0" cellpadding="0" border="0" width="680" align="center">
                            <tr>
                                <td>
                        <![endif]-->
              <table align="center" border="0" cellpadding="0" cellspacing="0" style="max-width: 680px;background: linear-gradient(180deg,#fff,340px,#fff);" width="100%">
                <tbody>
                  <tr>
                    <td align="center" dir="rtl" height="100%" valign="middle" width="100%">
                      <!--[if mso]>
        
                        <table border="0" cellspacing="0" cellpadding="0" align="center" width="680">
                                <tr>
                                <td align="center" valign="top" width="680">
                                <![endif]-->
                      <table align="center" border="0" cellpadding="20px" cellspacing="0" style="max-width:680px;" width="100%">
                        <tbody>
                          <tr>
                            <td align="center" valign="top">
                             

                              <div class="stack-column center-on-narrow" style="display:inline-block;max-width: 320px;min-width: 320px;vertical-align:middle;text-align: center; float: left;">
                                <table border="0" cellpadding="0" cellspacing="0" style="
    text-align: center;
" width="100%">
                                  <tbody>
                                    <tr>
                                      <td class="center-on-narrow" dir="ltr" style="text-align: left;">
                                        <a data-targettype="webpage" href="https://1milliontraders.com" target="_blank"><img alt="" height="50" src="cid:1mtlogo"></a>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                              <!--[if mso]>
                                            </td>
        
                                    </tr>
                                            </table>
                                            <![endif]-->
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <!--[if mso]>
                                </td>
                                </tr>
                                </table>
                                <![endif]-->
                    </td>
                  </tr>
                </tbody>
              </table>
              <!--[if (gte mso 9)|(IE)]>
                                </td>
                            </tr>
                        </table>
                        <![endif]-->
            </div>
          </center>
        </td>
      </tr>
    </tbody>
  </table>


  <table width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#e7e9e7" style="border-collapse:collapse;  background: linear-gradient(180deg,#fff,#e7e9e7,340px,#e7e9e7);">
    <tbody>
      <tr>
        <td valign="top">
          <center style="width: 100%; border-style: none;" class="">
            <div style="max-width: 680px;">
              <!--[if (gte mso 9)|(IE)]>

            <table cellspacing="0" cellpadding="0" border="0" width="680" align="center">
            <tr>
            <td>
            <![endif]-->
              <table width="100%" cellspacing="0" cellpadding="0" border="0" style="border-collapse:collapse;">
                <tbody>
                  <tr>
                    <td valign="top">
                      <center style="width: 100%;">
                        <div style="max-width: 680px;">
                          <!--[if (gte mso 9)|(IE)]>

                        <table cellspacing="0" cellpadding="0" border="0" width="680" align="center">
                        <tr>
                        <td>
                        <![endif]-->

                          <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center" style="max-width: 680px;">
                            <tbody>

                              <!-- DO NOT EDIT ABOVE THIS LINE! -->


                              <!-- ---- TEXT-CONTENT : BEGIN ---- -->
                              <tr>
                                <td>
                                  <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                    <tbody>
                                      <tr>
                                        <td style="padding: 0; text-align: left; mso-height-rule: exactly;">


                                          <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                            <tbody>
                                              <tr>
                                                <td width="17" style="padding: 0; mso-height-rule: exactly;" class="">

                                                  <img src="http://images.info.zumtobelgroup.com/EloquaImages/clients/ZumtobelGroup/%7Bb16c706d-d81f-42ce-92c7-90bb5bcc9daf%7D_spacer_side.jpg" class="">
                                                </td>
                                                <td style="padding: 0px; text-align: left; font-size: 17px; line-height: 26px; color: rgb(85, 85, 85); border-style: none;" class="">
                                                  <img src="http://images.info.zumtobelgroup.com/EloquaImages/clients/ZumtobelGroup/%7B946fe83c-2d08-4ceb-b0e8-13d5612f8682%7D_spacer.png" width="30" heigt="40"><br><span style="color: rgb(0, 0, 0); font-size: 30px; line-height: 36px;">WELCOME</span><br>
                                                  <img
                                                    src="http://images.info.zumtobelgroup.com/EloquaImages/clients/ZumtobelGroup/%7B79870b83-1568-4a13-9a58-b8323793be2f%7D_hr.png" class=""><br><span class="m-intro" style="color: rgb(0, 0, 0); font-size: 44px; line-height: 50px;">Thank  You for Joining Us at<br> 1 Million Traders</span>
                                                    <br><br>Invite your friends to 1 Million Traders with this code to enjoy exclusive upgrades and offers!
                                                    <div class=""><br></div>
                                                    <div class="">For your records, here is a copy of the information you submitted to us:</div>
                                                    <div class=""><strong class="">Email Address: hello@SmilesDavis.yeah</strong></div>
                                                    <div class=""><br> </div>
                                                </td>

                                                <td width="17" style="padding: 0; mso-height-rule: exactly;" class="">
                                                  <img src="http://images.info.zumtobelgroup.com/EloquaImages/clients/ZumtobelGroup/%7Bb16c706d-d81f-42ce-92c7-90bb5bcc9daf%7D_spacer_side.jpg">
                                                </td>
                                              </tr>

                                            </tbody>
                                          </table>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>

                                </td>
                              </tr>

                              <!-- ---- TEXT-CONTENT : END ---- -->


                              <!-- ---- BUTTON BIG : BEGIN ---- -->
                              <tr>
                                <td>
                                  <table width="100%" cellspacing="0" cellpadding="0" border="0" class="button">
                                    <tbody>
                                      <tr>
                                        <td style="text-align: left; mso-height-rule: exactly;">
                                          <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                            <tbody>
                                              <tr>

                                                <td width="17" style="mso-height-rule: exactly;"><img src="http://images.info.zumtobelgroup.com/EloquaImages/clients/ZumtobelGroup/%7Bb16c706d-d81f-42ce-92c7-90bb5bcc9daf%7D_spacer_side.jpg"></td>
                                                <td>
                                                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                    <tbody>
                                                      <tr>
                                                        <td bgcolor="#d25hh0" style="color: #fff; padding: 14px 18px 14px 18px; background: linear-gradient(to right,   #ebd197 0%, #b48811 50%,    #ebd197 100%);" align="center" class=""><a href="http://1milliontraders.com" target="_blank" style="font-family: Helvetica, Arial, sans-serif; text-decoration: none;color: #fff; font-size: 18px; line-height:22px; display: inline-block;">

                              LET\'S GET STARTED!
                                  </a></td>
                                                      </tr>
                                                    </tbody>
                                                  </table>
                                                </td>
                                                <td width="17" style="mso-height-rule: exactly;"><img src="http://images.info.zumtobelgroup.com/EloquaImages/clients/ZumtobelGroup/%7Bb16c706d-d81f-42ce-92c7-90bb5bcc9daf%7D_spacer_side.jpg"></td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                              </tr>
                              <!-- ---- BUTTON BIG : END ---- -->


                              <!-- ---- DISCLAIMER : BEGIN ---- -->
                              <tr>
                                <td>
                                  <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                    <tbody>
                                      <tr>

                                        <td style="padding: 0; text-align: left; mso-height-rule: exactly;">

                                          <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                            <tbody>
                                              <tr>

                                                <td width="17" style="padding: 0; mso-height-rule: exactly;" class="">
                                                  <img src="http://images.info.zumtobelgroup.com/EloquaImages/clients/ZumtobelGroup/%7Bb16c706d-d81f-42ce-92c7-90bb5bcc9daf%7D_spacer_side.jpg" class="">
                                                </td>

                                                <td style="padding: 0px; text-align: left; font-size: 14px; line-height: 20px; color: #929595; border-style: none;" class=""><br><br><br><span style="font-size:10px; line-height: 12px;">
                                                                    1MillionTraders.com originally developed and owned by NLK Trading (SA04573737-V) for the purpose of any educational program execution organized by the Faculty of Computer Science and Information Technology, Universiti Putra Malaysia and supported by its industry partner, PKT Logistics Group Sdn Bhd.
                                                                    <br>
                                                                    Contact <br>
                                                                     Dr. Koh Tieng Wei <a style="color: #8E793E;" href="mailto:twkoh@upm.edu.my">twkoh@upm.edu.my</a><br>
                                                                    Address
                                                                    <br>
                                                                    C-1-30, Block C, Faculty of Computer Science & Information Technology, Universiti Putra Malaysia, 43400 UPM Serdang, Selangor, Malaysia.
                                                                    <br>
                                                                    
                                                                    D-9-3, Block D, Setiawalk, Persiaran Wawasan, Pusat Bandar Puchong, 47100 Puchong, Selangor, Malaysia.</span>
                                                </td>
                                                <td width="17" style="padding: 0; mso-height-rule: exactly;" class="">
                                                  <img src="http://images.info.zumtobelgroup.com/EloquaImages/clients/ZumtobelGroup/%7Bb16c706d-d81f-42ce-92c7-90bb5bcc9daf%7D_spacer_side.jpg">

                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>


                                </td>
                              </tr>
                              <!-- ---- DISCLAIMER : END ---- -->


                              <!-- DO NOT EDIT BELOW THIS LINE! -->
                            </tbody>
                          </table>
                          <!-- Email Body : END -->

                          <!--[if (gte mso 9)|(IE)]>

                        </td>
                        </tr>
                        </table>
                        <![endif]-->
                        </div>
                      </center>

                    </td>
                  </tr>
                </tbody>
              </table>
              <!--[if (gte mso 9)|(IE)]>
</td>
</tr>
</table>
<![endif]-->

            </div>
          </center>
        </td>
      </tr>
    </tbody>
  </table>
  <br>
  <br>
  <br> &nbsp;
  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse; background-color: #000" width="100%">

    <tbody>
      <tr>
        <td align="center" bgcolor="#000" height="100%" valign="middle" width="100%">
          <!--[if mso]>
                <table border="0" cellspacing="0" cellpadding="0" align="center" width="660">
                <tr>
                <td align="center" valign="middle" width="660">
                <![endif]-->
          <table align="center" border="0" cellpadding="0" cellspacing="0" style="max-width:660px;" width="100%">
            <tbody>
              <tr>

                <td align="center" style="font-size:0;" valign="middle">
                  <!--[if mso]>
                                    <table border="0" cellspacing="0" cellpadding="0" align="center" width="660">
                                    <tr>
                                    <td align="left" valign="middle" width="330">
                                    <![endif]-->
                  <div class="stack-column" style="display:inline-block; width:100%; min-width:200px; max-width:330px; vertical-align:middle;">

                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                      <tbody>
                        <tr>
                          <td>
                            <table border="0" cellpadding="0" cellspacing="0" style="font-size: 14px;text-align: center;" width="100%">
                              <tbody>
                                <tr>
                                  <td style="text-align:center;color:white;"><img alt="" height="21" src="http://images.info.zumtobelgroup.com/EloquaImages/clients/ZumtobelGroup/%7B946fe83c-2d08-4ceb-b0e8-13d5612f8682%7D_spacer.png" width="10"></td>
                                </tr>

                               
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                 
                </td>
              </tr>
              <tr>
                <td style="text-align:center;color:white;border-bottom: 1px solid #353738;">
                  <img alt="" height="21" src="http://images.info.zumtobelgroup.com/EloquaImages/clients/ZumtobelGroup/%7B946fe83c-2d08-4ceb-b0e8-13d5612f8682%7D_spacer.png" width="10"></td>
              </tr>
              <tr>
                <td style="text-align:center; color:white"><img alt="" height="23" src="http://images.info.zumtobelgroup.com/EloquaImages/clients/ZumtobelGroup/%7B946fe83c-2d08-4ceb-b0e8-13d5612f8682%7D_spacer.png" width="10"></td>
              </tr>
              <tr>

                <td style="text-align: center; color:#d0d0d0; font-size: 12px; line-height: 16px;">Please do not reply to this e-mail. Visit our  <a data-targettype="webpage" href="http://1milliontraders.com"
                    style="color: #8E793E; text-decoration: none;" target="_blank"><span style="color: #8E793E; text-decoration: none;">website</span></a> for more information.</td>
              </tr>
              <tr>
                <td style="text-align:center; color:white"><img alt="" height="25" src="http://images.info.zumtobelgroup.com/EloquaImages/clients/ZumtobelGroup/%7B946fe83c-2d08-4ceb-b0e8-13d5612f8682%7D_spacer.png" width="10"></td>
              </tr>
            </tbody>
          </table>

          <!--[if mso]>
                </td>
                </tr>
                </table>
                <![endif]-->
        </td>
      </tr>
    </tbody>
  </table>


</body>' ; //PASTE HTML BODY HERE!


    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}

?>

</div>
	
<!-- //here ends scrolling icon -->
</body>	
</html>