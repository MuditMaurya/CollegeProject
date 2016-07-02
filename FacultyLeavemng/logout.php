<?php

	session_start();
	// If the user is not logged in send him/her to the login form
	if (!isset($_SESSION['uid'])) 
	{
	  header("Location: index.php");
	}
?>


<html>
<head><title>logout</title></head>
<body>
<?php
session_destroy();
echo"Successfully Logged Out";
header("Location:index.php")
?>

</body>
</html>
