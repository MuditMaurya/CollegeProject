

<html>
<head>
	<link rel="stylesheet" type="text/css" href="sign.css">
	

<script language="javascript">
	function formValidate()
	{
		var  unm=document.form.t1;
		var upwd=document.form.t2;
		var rpwd=document.form.t3;		
		var  nm=document.form.t4;
		var uno=document.form.t5;
		var umail=document.form.t6;
		if(rpass(rpwd,8,10))
		{
		}
		if(pass(upwd,8,10))
		{
		}
		 if(nme(nm))
		{
		}
	
		if(name(unm))
		{
		}
		if(mail(umail))
		{
		}
		if(num(uno))
		{
		}
		return false;
	}
	function num(uno)
	{
		var mob=/^[7-9]{1}[0-9]{9}$/;
		//var mob=/^((0091)|(\+91)|0?)[789]{1}\d{9}$/;
		if(uno.value.match(mob))
		{
			return true;
		}
		else
		{
			alert('Enter valid mobile number.');
                        uno.focus();
                        return false;

		}
	}
	function mail(umail)
	{
		var letter=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		if(umail.value.match(letter))
		{
			return true;
		}
		else
		{
			alert('Email ID is inavlid.Please try again.');
			umail.focus();
			return false;
		}
		
	}
	function nme(nm)
	{
		var letter=/^[a-zA-Z]+$/;
	if(nm.value.match(letter))  
		{  
			return true;  
		} 
		else  
		{  
			alert('Name must have alphabets only');  
			nm.focus();  
			return false;  
		}  
	}
	function name(unm)
	{
		var letter=/^[a-zA-Z0-9]+$/;
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
	function rpass(rpwd,min,max)
	{
		var rpass_len=rpwd.value.length;
		if(rpass_len==0)
		{
			alert('Password should not be empty');
			return false;
			rpwd.focus();
		}
		else if(rpass_len<min || rpass_len>max)
		{
			alert('Password should be between '+min+' to '+max);
			rpwd.focus();
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
	<br><br><br><br><br><br>
	<br><br><br><br><br><br>
	<br>
	<div id="heading">
	
	
	<h1 align="center" >SignUp</h1></div>
	
	</div>
	<div id="form1" >
	<form name="f1" method="POST" action="singupsucc.php " onsubmit="return formValidate()">
	
	
	<table align="center" >
		<tr>
			<th>Username:<br><br>
			</th>
			<th><input type="text" name="t1"><br><br></th>
		</tr>
		<tr>
			<th>
				Password:<br><br>
			</th>
			<th>
				<input type="password" name="t2"><br><br>
			</th>
		</tr>
		<tr>
			<th>
				Retype Password:<br><br>
			</th>
			<th>
				<input type="password" name="t3"><br><br>
			</th>
		</tr>
		<tr>
			<th>
				Name:<br><br>
			</th>
			<th>
				<input type="text" name="t4"><br><br>
			</th>
		</tr>
		<tr>
			<th>
				Mobile No:<br><br>
			</th>
			<th>
				<input type="tel" name="t5" id="tel"><br><br>
			</th>
		</tr>

		<tr>
			<th>
				Email Id:<br><br>
			</th>
			<th>
				<input type="email" name="t6"><br><br>
			</th>
		</tr>
		<tr>
			<th>Date of birth:<br><br>
			</th>
			<th>
				<input id="startdate" name="startdate" min="1950-01-01" max="1990-12-31" type="date"><br><br>
			</th>
		</tr>
	</table>
	<input type="submit" value="Submit">
	<input type="reset" value="Reset">
		
	</form>
</div>	
	</body>
	</html>
