<?php
	include'connect.php';
	session_start();
	
	if (!isset($_SESSION['uid'])) 
	{
	  header("Location: index.php");
	}
	else
	{
		$uid=$_SESSION['uid'];
	}
	$levgr=$_POST['legr'];
	echo "Hello  " . $_SESSION ['uid'] ."<br />";
	if ($levgr==0)
	{
		echo "None Selected <br />";
	}
	else
	{
		$grant = $_POST['legr'];
		foreach ($grant as $key) 
		{
		if ($uid=='HOD')
		{
	  	$update= " UPDATE InboxLeave SET flag='HOD Cleared Request'  WHERE id='$key'";
	  	$rs = mysql_query($update);
		}
		elseif ($uid=='Bhale') 
		{
	  	$update= " UPDATE InboxLeave SET flag='Principle Cleared Request' WHERE id='$key'";
	  	$rs = mysql_query($update);
		} 
		}
	}
	echo "Leaves Granted .";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form name="fl" method="POST" action="logout.php">
	<input type="submit" value="Logout"><br />
	</form><br />
	<a href="home.php">Home</a>
</body>
</html>