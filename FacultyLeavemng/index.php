<?php
session_start();
	// If the user is not logged in send him/her to the login form
	if (isset ($_SESSION['uid'])) 
		{
			header("Location:home.php");	# code...
		}
?>
<html>
<head><title>Faculty Section</title>
<link rel="stylesheet" type="text/css" href="ESDL.css">
</head>
<body bgcolor=#252543>
<h1><em>Faculty Section</em></h1>
<center>
	<form name="fl" method="POST" action="login.php">
	<i>Faculty UserID:</i>
	<input type="text" name="ul">
	<br>
	Password   :
	<input type="password" name="pl">
	<br>
	<input type="submit" value="login">
	<input type="reset">
	</form>
</body>
</html>

