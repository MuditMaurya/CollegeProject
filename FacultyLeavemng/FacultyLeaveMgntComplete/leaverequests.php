	

<html>
	<head>
	<title>Mail</title>
	</head>
	<body bgcolor="grey">
	<center>
	<?php
	
	echo("<h1>Inbox Service</h1>");

	session_start();
	
	if (!isset($_SESSION['uid'])) 
	{
	  header("Location: index.php");
	}
	else
	{
		$uid=$_SESSION['uid'];
	}
	echo "Hello  " . $_SESSION ['uid'] ."<br />";
	include'connect.php';
	$iuname= $_SESSION['uid'];
	echo "<br /> <br />";
	  if ($uid=='HOD')
	  {
	  	$strSQL = "SELECT * FROM InboxLeave WHERE flag='Not Attended By Authorities'  ORDER BY cdate DESC " ;
	  }
	  elseif ($uid=='Bhale') 
	  {
	  	$strSQL = "SELECT * FROM InboxLeave WHERE flag='HOD Cleared Request' ORDER BY cdate DESC " ;
	  } 
	  $rs = mysql_query($strSQL);
	echo "<form action='grantsucc.php' method='POST'>";
	while($row = mysql_fetch_assoc($rs)) 
	{
		echo "<dt>Time Recieved:</dt><dd>" . $row["cdate"] . "</dd>" ;
		echo "<dt>Mail Type:</dt><dd>". $row["mailt"]. "</dd>";
		echo "<dt>Sent To:</dt><dd>" . $row["sentto"]. "</dd>" . "<dt>Sent From: </dt> <dd>" . $row["sentfrom"] . "</dd>";
		echo "<dt>Mail Content:</dt><dd>" . $row["disc"] . "</dd><br />";
		//echo "<input type='checkbox' name='Leave[]' value='".$row['mailt']."'>".$row['cdate'];
		echo "<input type='checkbox' name='legr[]' value='".$row['id']."'>";
		echo "<br />..................................................................<br />";
	}
	mysql_close();
	?>
	<input type="submit" name="submit" value="Grant">
</form>
	<p>Menu</p>
<a href="inbox.php">Inbox</a>
<a href="home.php">Home</a>
<a href="Leave.php  ">Apply For Leave</a>
<a href="appliedleaves.php">Leave Related</a>
<a href="compose.php">Compose Your Mail Here</a>
<form name="fl" method="POST" action="logout.php">
<input type="submit" value="Logout">
</form>
</center>
	</body>

	</html>