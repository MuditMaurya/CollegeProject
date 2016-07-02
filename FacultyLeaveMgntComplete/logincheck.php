<?php

	session_start();
	


	$uid = $_POST["ul"];
	$pass = $_POST["pl"];
	include'connect.php';
	//mysql_connect("mpmaurya", "root", "toor")
	$query = "select * from Person where uid = '$uid' and pass='$pass'";
	$result = mysql_query($query);
	$no = mysql_num_rows($result);
	
	if($no==1)
	{	
	  
	  $_SESSION['uid'] = $uid;
	  if ($uid=='HOD')
	  {
	  	header("Location:hod.php");
	  }
	  elseif ($uid=='Bhale') 
	  {
	  header("Location:principal.php");
	  }
	  else
	  {
          header("Location:home.php");
	  }
	 
	}
	else 
	{
	  header("Location:login.php"); 
	}
		
	

	/*if($no==1)
	{
		echo "login successful";
	}
	else
	{
		echo "incorrect password or userid";
		//header("Location: index.html");
		echo $query;
	}*/
?>
