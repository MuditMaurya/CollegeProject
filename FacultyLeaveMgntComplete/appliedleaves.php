<!DOCTYPE html>
<html>
<?php

	include'connect.php';
	echo("<h1>Inbox Service</h1>");
	session_start();	
	if (!isset($_SESSION['uid'])) 
	{
	  header("Location: index.php");
	}
?>
<?php

	echo "Hello  " . $_SESSION ['uid'] ."<br />";
	$date = date('Y-m-d H:i:s');
	echo "Now: $date";
	$iuname= $_SESSION['uid'];
?>





<head>
	<link rel="stylesheet" type="text/css" href="appliedleaves.css">
	<title>Leave Related</title>
</head>
<body bgcolor="grey">
<form action="logout.php">
	<input  type="submit" value="Logout"  >
</form>
	
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
			<a href="inbox.php">Inbox</a><br>
		</th>
	</tr>
	<tr>
		<th>
			<a href="Leave.php  ">Apply For Leave</a><br>
		</th>
	</tr>
	<tr>
		<th>
			<a href="compose.php">Compose Your Mail Here</a><br>
		</th>
	</tr>

</table>


</p>

<form name="fl" method="POST" action="logout.php"><br>
	</div>

</form>

<ul>
	<?php
	$strSQL = " SELECT * FROM InboxLeave WHERE uid='$iuname' AND sentfrom='$iuname' OR sentto='$iuname' ORDER BY cdate DESC";
	
	
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
