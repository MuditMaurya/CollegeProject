
<!DOCTYPE html>
<html>
<head>
	<title>Successully Sent</title>
</head>
<body>
<p>Menu</p>
<a href="home.php">Home</a>
<a href="Leave.php  ">Apply For Leave</a>
<a href="appliedleaves.php">Leave Related</a>
<a href="compose.php">Compose Your Mail Here</a>
<form name="fl" method="POST" action="logout.php">
<input type="submit" value="Logout">
</form>
<ul>

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
	$strSQL = "select * FROM InboxGeneral WHERE uid = '$iuname' AND sentfrom = '$iuname' OR sentto = '$iuname' ORDER BY cdate DESC";
	$rs = mysql_query($strSQL);
	while($row = mysql_fetch_array($rs)) 
	{
	 	 $strName = $row['cdate'] . " " .$row['sentto'] . " " . $row['sentfrom'];
		 $strLink = "<a href = 'mail.php?id=".$row["id"]."'>" . $strName . "</a>";
			echo "<li>" . $strLink . "</li>";
	}
	mysql_close();
	?>
	</ul>
	</body>
</html>
