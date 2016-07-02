<?php

	session_start();
	
	if (!isset($_SESSION['uid'])) 
	{
	  header("Location: index.php");
	}
	echo "Hello". $_SESSION['uid'];
	$disc = $_POST["disc"];
	$sentto = $_POST["sentto"];
    $uname = $_SESSION['uid'];
    $date = date('Y-m-d H:i:s');
    //$time = time();


	include'connect.php';
	//mysql_connect("mpmaurya", "root", "toor")
	mysql_query("CREATE TABLE IF NOT EXISTS InboxGeneral (
	  id INT(5) AUTO_INCREMENT NOT NULL,
	  cdate VARCHAR(30),
	  disc VARCHAR(30), 
	  uid VARCHAR(20),
	  sentto VARCHAR(30),
	  sentfrom VARCHAR(30),
	  PRIMARY KEY(id))") Or die(mysql_error());

	mysql_query("INSERT INTO InboxGeneral (cdate,disc,uid,sentto,sentfrom)
	 VALUES ( '$date' , '$disc' , '$uname' , '$sentto' , '$uname' )" ) 
	or die(mysql_error());
?>


<!DOCTYPE html>
<html>
<head>
	<title>Successully Sent</title>
</head>
<body>
<p>Your Mail Has Been Success Fully Sent.</p>
<a href="home.php">Home</a>
<form name="fl" method="POST" action="logout.php">
<input type="submit" value="Logout">
<a href="inbox.php">Inbox</a>
<a href="appliedleaves.php">Leave Related</a>
</body>
</html>