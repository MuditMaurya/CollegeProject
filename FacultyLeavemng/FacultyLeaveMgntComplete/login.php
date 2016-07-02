<?php 
session_start();
	if (isset($_SESSION['uid'])) 
	{
	  header("Location: home.php");
	}
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="login.css">
	<script language="javascript">
	function formValidate()
	{
		var  unm=document.form.t1;
		var upwd=document.form.p1;
		if(pass(upwd,8,10))
		{
		}
		if(name(unm))
		{
		}
		return false;
	}
	function name(unm)
	{
		var letter=/^[a-zA-Z]+$/;
		if(unm.value.match(letter))  
		{  
			return true;  
		} 
		else  
		{  
			alert('Username must have alphabets only');  
			unm.focus();  
			return false;  
		}  
	}
	function pass(upwd,min,max)
	{
		var pass_len=upwd.value.length;
		if(pass_len==0)
		{
			alert('Password should not be empty');	
		//		document.getElementById("i").innerHTML = "Password should not be empty";
			return false;
			upwd.focus();
		}
		else if(pass_len < min || pass_len > max)
		{
			alert('Password should be between '+min+' to '+max);
			
			upwd.focus();
			return false;
		}
		else
		{
			return true;
		}
	}	
	</script>
	</head>
	<body>
		<div>
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
		</div>
		<div id="heading">
			<h1>LEAVE MANAGEMENT</h1>
		</div>
		<div id="form">
			<form method="POST" action="logincheck.php" onsubmit="return formValidate()">

		   UserId:

			<input type="text" name="ul">

			<br><br>Password:

			<input type="password" name="pl">
			
		</div >
		<div id="form1"><br>
			<input type="submit" formaction="logincheck.php" value="Login"> 
			<input type="submit" formaction="signup.php" value="Signup">
			<input type="reset" value="Reset">
		</div>
</form>
</body>
</html>