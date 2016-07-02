	

<html>
	<head>
	<title>Mail</title>
	</head>
	<body>
	<?php
	
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
	<p>Menu</p>
<a href="inbox.php">Inbox</a>
<a href="home.php">Home</a>
<a href="Leave.php  ">Apply For Leave</a>
<a href="appliedleaves.php">Leave Related</a>
<a href="compose.php">Compose Your Mail Here</a>
<form name="fl" method="POST" action="logout.php">
<input type="submit" value="Logout">
</form>

	</body>

	</html>