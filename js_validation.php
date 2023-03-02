<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		label{
			margin-left: 60%;
			font-size: 20px;
		}
		button{
			font-size: 20px;
			width: 15%;
			height: 40px;
			margin-bottom: 5%;
			background-color: white;
			color: black;
		}
		button:hover{
			background-color: black;
			color: white;
		}
		.box{
			width: 60%;
			height: 25px;
		}
	</style>
	<script type="text/javascript">
		function validation()
		{
			var f_name=document.getElementById("f_name").value;
			var m_name=document.getElementById("m_name").value;
			var l_name=document.getElementById("l_name").value;
			var gen = document.getElementsByName("gen");
			var mob=document.getElementById("mob").value;
			var email=document.getElementById("email").value;
			var password=document.getElementById("password").value;
			var c_password=document.getElementById("c_password").value;

			var f_name_l=f_name.length;
			var m_name_l=m_name.length;
			var l_name_l=l_name.length;
			var mob_l=mob.length;
			var Email_pattern =/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
		var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;  
		var Mobile_mob_p = /^[1-9]{1}[0-9]{9}$/;

			if(f_name=="")
			{
				document.getElementById("e_f_name").innerHTML="Pls Enter a First Name";
				return false;
			}
			else if(f_name_l<=2)
			{
				document.getElementById("e_f_name").innerHTML="First name must be grater then 2 charters ";
				return false;

			}
			else
			{
				document.getElementById("e_f_name").innerHTML="";
				document.getElementById("m_name").focus();
			}

			if(m_name=="")
			{
				document.getElementById("e_m_name").innerHTML="Pls enter Middle Name .";
				return false;
			}
			else if(m_name_l<=2)
			{
				document.getElementById("e_m_name").innerHTML="Middle name must be grater then 2 charters ";
				return false;

			}
			else
			{
				document.getElementById("e_m_name").innerHTML="";
				document.getElementById("l_name").focus();
			}

			if(l_name=="")
			{
				document.getElementById("e_l_name").innerHTML="Pls enter last Name .";
				return false;
			}
			else if(l_name_l<=2)
			{
				document.getElementById("e_l_name").innerHTML="last name must be grater then 2 charters ";
				return false;

			}
			else
			{
				document.getElementById("e_l_name").innerHTML="";
				document.getElementById("gen").focus();
			}
			if(gen[0].checked==true)
			{
				
				document.getElementById("e_gen").innerHTML="";
				document.getElementById("age").focus();
				
			}
			else if(gen[1].checked==true)
			{
				document.getElementById("e_gen").innerHTML="";
				document.getElementById("age").focus();
			}
			else
			{
				document.getElementById("e_gen").innerHTML="Pls select gender ";
				return false;
			}

			if(document.getElementById("age").selectedIndex==0)
			{
				document.getElementById("e_age").innerHTML="Pls select age ";
				return false;
			}
			else
			{
				document.getElementById("e_age").innerHTML="";
				document.getElementById("mob").focus();
			}

			if(mob=="")
			{
				document.getElementById("e_mob").innerHTML="Pls enter mobile Number ";
				return false;

			}
			
			else if(!mob.match(Mobile_mob_p))
			{
					document.getElementById("e_mob").innerHTML="Pls Input Valid Mobile Number";
				return false;
			}
			else
			{
				document.getElementById("e_mob").innerHTML="";
					document.getElementById("email").focus();
			}
			if(email=="")
			{
				document.getElementById("e_email").innerHTML="Pls enter the email number .";
				return false;
			}
			else
			{
				document.getElementById("e_email").innerHTML="";
				document.getElementById("password").focus();
			}
			if(password=="")
			{
				document.getElementById("e_password").innerHTML="Pls enter the password .";
				return false;
			}
			else
			{
				document.getElementById("password").innerHTML="";
				document.getElementById("c_password").focus();
			}
			if(c_password=="")
			{
				document.getElementById("e_c_password").innerHTML="Pls enter the confirm password.";
				return false;
			}
			else if(!c_password.match(password))
			{
			document.getElementById("e_c_password").innerHTML="password is not match .";
				return false;	
			}
			else
			{
				alert("you are sign up")
			}
		}
	</script>
</head>
<body>
	<table align="center" width="70%" style="background:  linear-gradient(to bottom, gray , lightblue, black)">
		<form onsubmit="return validation()">
		<tr>
			<td colspan="3">
			<h3 align="center" style="color: black; font-size: 32px; font-weight: normal;">Sign up for your Account</h3>
		   </td>
	    </tr>
		<tr>
			<td><label>First Name:</label></td>
			<td><input type="text" name="" id="f_name" class="box"></td>
		</tr>
		<tr>
			<td colspan="2" height="20px" align="center"><div id="e_f_name"></div></td>
		</tr>
		<tr>
			<td><label>Middle Name:</label></td>
			<td><input type="text" name="" id="m_name" class="box"></td>
		</tr>
		<tr>
			<td colspan="2" height="20px" align="center"><div id="e_m_name"></div></td>
		</tr>
		<tr>
			<td><label>Last Name:</label></td>
			<td><input type="text" name="" id="l_name" class="box"></td>
		</tr>
		<tr>
			<td colspan="2" height="20px" align="center"><div id="e_l_name"></div></td>
		</tr>
		<tr>
			<td><label>Gender:</label></td>
			<td><input type="radio" name="gen" id="gen" value="Male">Male
				<input type="radio" name="gen" id="gen" value="female">Feamle
			</td>
		</tr>
		<tr>
			<td colspan="2" height="20px" align="center"><div id="e_gen"></div></td>
		</tr>
		<tr>
			<td><label>Age:</label></td>
			<td>
				<select id="age">
					<option>Pls select age</option>
					<?php
					$i=1;
					while ($i<=103) {
						?>
						<option><?php echo $i; ?></option>
						<?php
						$i++;
						
					}
					?>
				</select>
		    </td>
		</tr>
		<tr>
			<td colspan="2" height="20px" align="center"><div id="e_age"></div></td>
		</tr>
		<tr>
			<td><label>Mobile Number:</label></td>
			<td><input type="text" name="" id="mob" class="box"></td>
		</tr>
		<tr>
			<td colspan="2" height="20px" align="center"><div id="e_mob"></div></td>
		</tr>
		<tr>
			<td><label>Email_id:</label></td>
			<td><input type="text" name="" id="email" class="box"></td>
		</tr>
		<tr>
			<td colspan="2" height="20px" align="center"><div id="e_email"></div></td>
		</tr>
		<tr>
			<td><label>Password:</label></td>
			<td><input type="password" name="" id="password" class="box"></td>
		</tr>
		<tr>
			<td colspan="2" height="20px" align="center"><div id="e_password"></div></td>
		</tr>
		<tr>
			<td><label>Confirm-Password:</label></td>
			<td><input type="password" name="" id="c_password" class="box"></td>
		</tr>
		<tr>
			<td colspan="2" height="20px" align="center"><div id="e_c_password"></div></td>
		</tr>
		<tr>
			<td align="center" colspan="3">
				<button id="button">Sign up</button>
			</td>
		</tr>
		</form>
	</table>
</body>
</html>