<?php

	session_start();
	if (!isset($_SESSION['uid'])) 
	{
	header("Location: index.php");
	}
	elseif (isset($_SESSION['uid']))
	{
		$uid=$_SESSION['uid'] ;
	}
	if ($uid=='HOD')
	{
	header("Location:hod.php");
	}
	elseif ($uid=='bhale') 
	{
	header("Location:principal.php");
	}
?>
<html>
<head><title>Session Test Home page</title>
</head>
<body>
<p>Hello <?php echo $_SESSION['uid']; ?></p>
<form name="fl" method="POST" action="logout.php">
<input type="submit" value="Logout">
</form>
<!-- <a href="inbox.php"></a> -->
<a href="inbox.php">Inbox</a>
<a href="Leave.php  ">Apply For Leave</a>
<a href="appliedleaves.php">Leave Related</a>
<a href="compose.php">Compose Your Mail Here</a>
</ul>
<body>
</html>
