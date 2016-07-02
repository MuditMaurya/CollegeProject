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
	$sentto=$_POST['sentto'];
	echo "Hello  " . $_SESSION ['uid'] ."<br />";
	$date = date('Y-m-d H:i:s');
	echo "Now: $date";
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
		elseif ($uid=='bhale') 
		{
	  	$update= " UPDATE InboxLeave SET flag='Principle Cleared Request' WHERE id='$key'";
	  	$rs = mysql_query($update);
	  	/*$notify= " INSERT INTO InboxGeneral VALUES('$date','Leave Granted','$uid','$sentto','$uid')" ;
	  	$ny = mysql_query($notify);*/
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