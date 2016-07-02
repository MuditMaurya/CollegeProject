<?php

	session_start();
	// If the user is not logged in send him/her to the login form
	if (!isset($_SESSION['uid'])) 
	{
	  header("Location: index.html");
	}
?>


<html>
<head><link rel="stylesheet" type="text/css" href="logout.css">
</head>
<body>
	<br><br><br><br><br><br>
	<br><br><br><br><br><br>
	<br><br><br>
	<div id="heading">
	<h1 align="left" > You have been successfully logout</h1></div>
	<div id="form">
	<button type="submit" formaction="index.php" value="login">Login </button>
</div>
<?php
session_destroy();
echo"Successfully Logged Out";
header("Location:index.html")
?>

</body>
</html>
