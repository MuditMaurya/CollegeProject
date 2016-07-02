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
<title>Leave</title>
</head>
<body >
	<div class="center">
		<h2>Apply For Your Leave Here</h2>
		<h5><em>Please Take A Look At The Number Of Leaves Your Have Already Taken And Number Of Leaves Available</em></h5>
		<p>Number Of Leaves Taken</p>
		<input type="hidden" id="levtno" placeholder="Leave Taken" />
		<p>Number Of Leaves Available</p>
		<input type="hidden" id="levano" placeholder="Leave Available"  />			
		<form name="fr" method="POST" action="Leavesucc.php">
			<p>Mention The Type Of Leave</p>
			<select name="leavetype" onclick="dropdown()">
				<option value="Medical">Medical</option>
				<option value="Duty">Duty</option>
				<option value="Casual">Casual</option>
			</select>
			<p>Send To</p>
			<input type="text" required name="sentto">
			<p>Mention The Starting Leave Date</p>
			<select name="year" onchange="getbut()">
			<?php
				for ($i=2015; $i<=2020 ; $i++) 
				{ 
					echo "<option> $i  </option>";
				}
			?>
			</select>
			<select name="month" onchange="getbut()">
			<option value="1">January</option>
			<option value="2">Fabuary</option>
			<option value="3">March</option>
			<option value="4">April</option>
			<option value="5">May</option>
			<option value="6">June</option>
			<option value="7">July</option>
			<option value="8">August</option>
			<option value="9">September</option>
			<option value="10">October</option>
			<option value="11">November</option>
			<option value="12">December</option>
			</select>
			<select name="date" onchange="getbut()">
			<?php
				for ($i=1; $i<=31 ; $i++) 
				{ 
					echo "<option> $i  </option>";
				}
			?>
			</select>
				<p>Number Of Days From Starting Date</p>
			<select name="nofday" onchange="getbut()">
			<?php
				for ($i=1; $i<=31 ; $i++) 
				{ 
					echo "<option> $i  </option>";
				}
			?>
			</select>
			<h3>Please Mention Your Message/Reason Here For Leave*</h3>
			<textarea name="disc" rows="20" cols="95" placeholder="Discription Here" required ></textarea>
			<input type="submit" value="Apply" name="apply"/>
			<input type="hidden" value="Leave" name="mailtype"/>
		</form>
		<footer>* Mandatory</footer>
	</div>
	<form name="fl" method="POST" action="logout.php">
	<input type="submit" value="Logout">
	<a href="home.php">Home</a>
	<a href="inbox.php">Inbox</a>
	<a href="appliedleaves.php">Leave Related</a>
	<a href="compose.php">Compose Your Mail Here</a>
	</body>
</html>