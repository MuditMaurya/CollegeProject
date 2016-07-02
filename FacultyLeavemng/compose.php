<?php 
session_start();
	
	if (!isset($_SESSION['uid'])) 
	{
	  header("Location: index.php");
	}
	echo "Hello".$_SESSION['uid'];
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="Leave.css">
<script language="JavaScript">
</script>
<title>Compose</title>
</head>
<body >
	<div class="center">
		<h2>Compose Your Mail</h2>
		<h5><em>Mail Compose</em></h5>		
		<form name="fr" method="POST" action="mailsucc.php">
			<p>Send To</p>
			<input type="text" required name="sentto">
			<h3>Type Your Content Here</h3>
			<textarea name="disc" rows="20" cols="95" placeholder="--Mail Body--" required ></textarea>
			<input type="submit" value="Send" name="apply"/>
			<input type="hidden" value="General" name="mailtype"/>
		</form>
		<footer>* Mandatory</footer>
	</div>
	<a href="home.php">Home</a>
	<a href="Leave.php  "><i>Apply For Leave</i></a>
	<a href="inbox.php">Inbox</a>
	<a href="appliedleaves.php">Leave Related</a>
	<form name="fl" method="POST" action="logout.php">
	<input type="submit" value="Logout">
</body>
</html>