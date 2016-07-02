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
<link rel="stylesheet" type="text/css" href="leave.css">
<script language="JavaScript">
	/*
	function dropdown() 
	{
    var drop = document.getElementById("leavekind");
    var current_value = drop.options[drop.selectedIndex].value;

    if (current_value == "Medical") {
        document.getElementById("drop").style.display = "block";
    }
    else {
        document.getElementById("drop").style.display = "none";
    }
}*/
</script>
</head>
<body >

	
	<div id="heading1">
	<br><br><br><br><br><br><br><br /><br /><br />
		<h1>Apply For Your Leave Here</h1>
	</div>
</form>

	<div id="heading2">
	</div>			
		<form name="fr" method="POST" action="Leavesucc.php">
	<div id="heading3">
	
			Mention the type Of leave
			<select name="leavetype" onclick="dropdown()">
				<option value="Medical">Medical</option>
				<option value="Duty">Duty</option>
				<option value="Casual">Casual</option>
			</select>
	</div>
	<div id="heading4">
	
			<h3>Send To</h3>
			<input type="text" required name="sentto">
	</div>
	<div id="heading5">
			<br>Mention the starting leave date
			<select name="year" onchange="getbut()">
			<?php
				for ($i=2015; $i<=2020 ; $i++) 
				{ 
					echo "<option> $i  </option>";
				}
			?>
			</select>
			<select name="month" onchange="getbut()">
			<option>January</option>
			<option>Fabuary</option>
			<option>March</option>
			<option>April</option>
			<option>May</option>
			<option>June</option>
			<option>July</option>
			<option>August</option>
			<option>September</option>
			<option>October</option>
			<option>November</option>
			<option>December</option>
			</select>
			<select name="date" onchange="getbut()">
	</div>
			<?php
				for ($i=1; $i<=31 ; $i++) 
				{ 
					echo "<option> $i  </option>";
				}
			?>
			</select>

				<br><br>Number Of days from starting date
			<select name="nofday" onchange="getbut()">
			<?php
				for ($i=1; $i<=31 ; $i++) 
				{ 
					echo "<option> $i  </option>";
				}
			?>
			</select>
	<div id="heading6">
			<br>Please mention your message/reason here for the leave* (*Mandatory)
			<br><textarea name="disc" rows="3" cols="75" placeholder="Discription is required here"></textarea>
	
			<input type="submit" value="Apply" name="apply"/>
			<input type="hidden" value="Leave" name="mailtype"/>
	</div>
		</form>
	
	<div id="heading8">
	<form name="fl" method="POST" action="logout.php">
	<input type="submit" value="Logout">
	</div>
	<div id="heading9">
	<a href="home.php">Home</a>
	<a href="inbox.php">Inbox</a>
	<a href="appliedleaves.php">Applied leaves</a>
	<a href="compose.php">Compose your mail here</a>
	</div>
	</body>
</html>