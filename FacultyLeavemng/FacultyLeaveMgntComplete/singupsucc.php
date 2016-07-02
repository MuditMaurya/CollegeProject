	<html>
	<head><title>SignUp</title>
	</head>
	<body bgcolor="grey">
	<br><br><br><br><br><br>
	<br><br><br><br><br><br>
	<br>
	<h1 align="center" >SignUp Successully Done</h1></div>
	<?php
	include'connect.php';
	session_start();
	
	if (isset($_SESSION['uid'])) 
	{
	  header("Location: home.php");
	}
	//$dat = $_POST["date"];
	$uid=$_POST["t1"];
	$pass=$_POST["t2"];
	$name=$_POST["t4"];
	$mno=$_POST["t5"];
	$email=$_POST["t6"];
	$dob=$_POST["startdate"];


	
	mysql_query("CREATE TABLE IF NOT EXISTS Person (
	  id INT(5) AUTO_INCREMENT NOT NULL,
	  uid VARCHAR(30),
	  pass VARCHAR(30),
	  name VARCHAR(30),
	  mno INT(11),
	  email VARCHAR(30),
	  dob VARCHAR(15), 
	  PRIMARY KEY(id))") Or die(mysql_error());

	mysql_query("INSERT INTO Person(uid,pass,name,mno,email,dob) VALUES ( '$uid' , '$pass' , '$name' , $mno , '$email' , '$dob')" ) 
	or die(mysql_error());
	?>
	<center>
	<a href="login.php">Login</a>
	</center>
	</body>
	</html>