<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="inbox.css">
	<title>Successully Sent</title>
</head>
<body><form action="logout.php">
	<input type="submit" value="Logout">
	</form>
	<br>
	<br><br>
	<br>
	<br>
	<br><br>
	<br>
	<br><br>
	<br>
	<br>
<div id="menu">
<p>
<table align="center">

	<tr><th>Menu</th>
	</tr>
	<tr>
		<th><a href="home.php">Home</a><br></th>
	</tr>
	<tr>
		<th>
			<a href="Leave.php  ">Apply For Leave</a><br>
		</th>
	</tr>
	<tr>
		<th>
			<a href="appliedleaves.php">Applied Leaves</a><br>
		</th>
	</tr>
	<tr>
		<th>
			<a href="compose.php">Compose Your Mail Here</a><br>
		</th>
	</tr>

</table>

<form name="fl" method="POST" action="logout.php">

</p>
</div>
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
