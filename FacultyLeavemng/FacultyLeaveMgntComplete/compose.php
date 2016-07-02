<?php 
session_start();
	
	if (!isset($_SESSION['uid'])) 
	{
	  header("Location: index.php");
	}
	echo "Hello".$_SESSION['uid'];
?>
<!doctype html>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<html>
<head>
<link rel="stylesheet" type="text/css" href="compose.css">
<script language="JavaScript">
</script>
<title>Compose</title>
</head>
<body >
	<div id="wrapper">
	<div class="center">
		<h2>Your Mail</h2>
		<form name="fr" method="POST" action="mailsucc.php">
			<h3>Send To</h3>
			<input type="text" required name="sentto">
			<h3>Type Your Content Here......</h3>
			<textarea name="disc" rows="20" cols="95" placeholder="--Mail Body--" required ></textarea>
			
			<input type="submit" value="Send" name="apply" color="red"/>
			<input type="hidden" value="General" name="mailtype"/>
			
		</form>
		<footer>
			<br>
			<br>
		
	</div>
</div>
<div id="wrapper2">
	<div id="foot">
		<ul>
			<span>***Mandatory***</span> 
			 <br><br>
	<a href="home.php"  style="color: #CC0000"><i>Home</i></a>
	<a href="Leave.php " style="color: #CC0000"  ><i >ApplyForLeave</i></a>
	<a href="inbox.php" style="color: #CC0000"><i>Inbox</i></a>
	<a href="appliedleaves.php" style="color: #CC0000"><i>AppliedLeaves</i></a>
	</ul>
	<form name="fl" method="POST" action="logout.php">
	<input type="submit" value="Logout">
	</div>
</footer>
	
</div>
</body>
</html>