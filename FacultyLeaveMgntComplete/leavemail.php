<?php
	echo"<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />";
	echo("<h1>Inbox Service</h1>");

	session_start();
	
	if (!isset($_SESSION['uid'])) 
	{
	  header("Location: index.php");
	}
	echo "Hello  " . $_SESSION ['uid'] ."<br />";
	include'connect.php';
	$iuname= $_SESSION['uid'];
	echo "<br /> <br />";
	$tid = $_GET['id'];
	$strSQL = "SELECT * FROM InboxLeave WHERE id = '$tid'" ;
	$rs = mysql_query($strSQL); 
	while($row = mysql_fetch_assoc($rs)) 
	{
		echo "<dt>Time Recieved:</dt><dd>" . $row["cdate"] . "</dd>" ;
		echo "<dt>Mail Type:</dt><dd>". $row["mailt"]. "</dd>";
		echo "<dt>Sent To:</dt><dd>" . $row["sentto"]. "</dd>" . "<dt>Sent From: </dt> <dd>" . $row["sentfrom"] . "</dd>";
		echo "<dt>Mail Content:</dt><dd>" . $row["disc"] . "</dd><br />";
		echo "Leave Date : Starting From : ".$row["lyear"]." / ".$row["lmonth"]." / ".$row["ldat"]."<br />  ";
		echo "Upto Next : ".$row["lnofday"] ." Days <br />";
		echo "Status : ".$row["flag"];
	}
	mysql_close();
	?>
<html>
<head>
<title>Mail</title>
<link rel="stylesheet" type="text/css" href="leavemail.css">
<script language="JavaScript">
	</script>
	</head>
	<body>
	
	<div id="heading">
	<p>Menu</p>
	</div>
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />


	<div id="form">
<a href="inbox.php">Inbox</a>
<a href="home.php">Home</a>
<a href="Leave.php  ">Apply For Leave</a>
<a href="appliedleaves.php">Applied Leaves</a>
<a href="compose.php">Compose Your Mail Here</a>
	</div>
	<div id="form1">
<form name="fl" method="POST" action="logout.php">
<input type="submit" value="Logout">
</form>
	</div>
	</body>
	</html>