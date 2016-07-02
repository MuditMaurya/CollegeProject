<?php
include'connect.php';
header("Refresh:2");
$date = date('Y-m-d');
echo "$date";
$cydate = date('Y');//todays Year
$cmdate = date('m');//todays month
$cddate = date('d');//todays day
$strSQL="SELECT * FROM InboxLeave "; 
$rs = mysql_query($strSQL);
while ( $row = mysql_fetch_assoc($rs) ) 
{
	if ($row['year']<$cydate) 
	{	
		$update="UPDATE InboxLeave SET timeflag='Expired'";
		mysql_query($update);
	}
	elseif ($row['lyear']>=$cydate && $row['lmonth']<$cmdate ) 
	{		
		$update="UPDATE InboxLeave SET timeflag='Expired'";
		mysql_query($update);
	}
	elseif ($row['lyear']>=$cydate && $row['lmonth']>=$cmdate)
	{
		$update="UPDATE InboxLeave SET timeflag='Active'";
		mysql_query($update);
	}
	elseif ($row['lyear']>=$cydate && $row['lmonth']>=$cmdate && $row['ldat']+$row['lnofday']<=$cddate)
	{
		$update="UPDATE InboxLeave SET timeflag='Expired'";
		mysql_query($update);	
	}
	elseif ($row['lyear']>=$cydate && $row['lmonth']>=$cmdate && $row['ldat']+$row['lnofday']>$cddate)
	{
		$update="UPDATE InboxLeave SET timeflag='Active'";
		mysql_query($update);	
	}
}
?>