<html>
<head>
<link rel="stylesheet" href="a.css" type="text/css" media="all" />
<script src="jquery.min.js"></script>
<script src="jquery.easing.min.js"></script>
</head>
<body>
<!-- multistep form -->
<form id="msform" action="verifyLogin.php" method="post"> 
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Login</h2>
    <h3 class="fs-subtitle">Login into system</h3>
	<input type="email" name="loginEmail" placeholder="Email" required>
    <input type="password" name="loginPassword" placeholder="Password" required>
	<hr>
    <input type="submit" name="login" class="action-button-login" value="LOGIN" />
  </fieldset>
</form>


</body>
</html>