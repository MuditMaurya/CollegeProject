<?php
	include'connect.php';
	echo("<h1>Inbox Service</h1>");
	session_start();	
	if (!isset($_SESSION['uid'])) 
	{
	  header("Location: index.php");
	}
	echo "Hello  " . $_SESSION ['uid'] ."<br />";
	$date = date('Y-m-d H:i:s');
	echo "Now: $date";
	$iuname= $_SESSION['uid'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Leave Related</title>
</head>
<body>
<p>Menu</p>
<a href="home.php">Home</a>
<a href="inbox.php">Inbox</a>
<a href="Leave.php  ">Apply For Leave</a>
<a href="compose.php">Compose Your Mail Here</a>
<form name="fl" method="POST" action="logout.php">
<input type="submit" value="Logout">
</form>
<ul>

	<?php
	$strSQL = " SELECT * FROM InboxLeave WHERE uid='$iuname' AND mailt='Leave' AND sentfrom='$iuname' OR sentto='$iuname' ORDER BY cdate DESC";
	
	
	$rs = mysql_query($strSQL);
	
	
	while($row = mysql_fetch_array($rs)) {

	   
	  $strName = $row['cdate'] . " " .$row['sentto']. "<br />";

	   $strLink = "<a href = 'leavemail.php?id=" . $row["id"] . "'>" . $strName . "</a>";


	    
	   echo "<li>" . $strLink . "</li>";
	   echo "Status : ".$row['flag']."<br />";
	   echo "Validity : ";//.$row['timeflag']. "<br /><br />";


	  }
	
	mysql_close();
	?>
	</ul>
	</body>
</html>
