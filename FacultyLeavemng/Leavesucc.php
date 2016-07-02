<?php

	session_start();
	
	if (!isset($_SESSION['uid'])) 
	{
	  header("Location: index.php");
	}
	echo "Hello". $_SESSION['uid'];
	$dat = $_POST["date"];
	$year = $_POST["year"];
	$disc = $_POST["disc"];
	$month = $_POST["month"];
	$sentto = $_POST["sentto"];
	$leavetype = $_POST["leavetype"];
	$nofday = $_POST["nofday"];
    $uname = $_SESSION['uid'];
    $mailt = $_POST['mailtype'];
    $date = date('Y-m-d H:i:s');
    include 'connect.php';
	mysql_query("CREATE TABLE IF NOT EXISTS InboxLeave (
	  id INT(5) AUTO_INCREMENT NOT NULL,
	  cdate VARCHAR(30),
	  ldat INT(2),
	  lyear INT(5),
	  disc VARCHAR(30), 
	  lmonth INT(3),
	  uid VARCHAR(20),
	  sentto VARCHAR(30),
	  sentfrom VARCHAR(30),
	  leavetype VARCHAR(15),
	  lnofday INT (3),
	  mailt VARCHAR(10),
	  flag VARCHAR(30), 
	  PRIMARY KEY(id))") Or die(mysql_error());

	mysql_query("INSERT INTO InboxLeave (cdate,ldat,lyear,disc,lmonth,uid,sentto,sentfrom,lnofday,leavetype,mailt,flag)
	 VALUES ( '$date' , '$dat' , '$year' , '$disc' , $month , '$uname' , '$sentto' , '$uname' , '$nofday' ,'$leavetype' , '$mailt','Not Attended By Authorities' )" ) 
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