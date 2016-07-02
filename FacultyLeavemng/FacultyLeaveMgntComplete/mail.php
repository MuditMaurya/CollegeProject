<html>
	<head>

		<link rel="stylesheet" type="text/css" href="mail.css">

	</head>

	<body>

	<div id="heading">

	</div>
	<?php

	echo("<h1><center>Inbox Mail Service</center></h1>");

	?>


<form name="fl" method="POST" action="logout.php">
<center>
<a href="inbox.php"><b id="boxed">Inbox</b></a>
<a href="home.php" ><b id="boxed">Home</b></a>
<a href="Leave.php"><b id="boxed">Apply For Leave</b></a>
<a href="appliedleaves.php"><b id="boxed">Applied Leaves</b></a>
<a href="compose.php"><b id="boxed">Compose Your Mail Here</b></a>
<input type="submit" value="Logout"  id="logout">
</center>

</form>


<?php

	session_start();

	

	if (!isset($_SESSION['uid'])) 

	{

	  header("Location: index.php");

	}

	echo "Hello  " . $_SESSION ['uid'] ."<br />";

	mysql_connect("localhost","root","toor")or die(mysql_error());

	mysql_select_db("Test")or die(mysql_error());// use <database "Test">

	//$iuname= $_SESSION['uid'];

	$tid = $_GET['id'];

	$strSQL = "SELECT * FROM InboxGeneral WHERE id = '$tid'" ;//tablename = Inbox -id column

	$rs = mysql_query($strSQL)or die(mysql_error()); 
	echo "<center><table id='big_boxed'>";
	while($row = mysql_fetch_assoc($rs)) 

	{

		echo "<tr><td>Time Recieved:</td><td>" . $row["cdate"] . "</td></tr>" ;

		//echo "<tr><td>Mail Type:</td><td>". $row["mailt"]. "</td></tr>";

		echo "<tr><td>Sent To:</td><td>" . $row["sentto"]. "</td>" . "<td>Sent From: </td> <td>" . $row["sentfrom"] . "</td></tr>";

		echo "<tr><td>Mail Content:</td><td id='msg_content'>" . $row["disc"] . "</td></tr>";

	}
	echo "</table></center>";
	mysql_close();

	?>



	</body>

<div id="footer">

	</div>

	</html>
