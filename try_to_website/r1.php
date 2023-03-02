

<?php
error_reporting(0); 
?>
   
            <?php
            session_start();
			
			//include("conn.php");
			$exp_year=$_POST['exp_year'];
			 $exp_month=$_POST['expmonth'];
			 $salary_lakh=$_POST['current_sal'];
			  $salary_thos=$_POST['sal_thousand'];
			
			 
			extract($_POST);
			
			
		
          if(isset($_POST['submit']))
         {
			$totalsalary=''.$salary_lakh.''.$salary_thos;
		
			$totalexp=''.$exp_year.''.$exp_month;
			$p=date("l").', '.date("M").', '.date("Y");
			
			 $file = $Email."-".$_FILES['file']['name'];
			$file_loc = $_FILES['file']['tmp_name'];
			 $file_size = $_FILES['file']['size'];
			 $file_type = $_FILES['file']['type'];
			 $folder="resume/";
			 
			 // new file size in KB
			 $new_size = $file_size/1024;  
			 // new file size in KB
			 
			 // make file name in lower case
			 $new_file_name = strtolower($file);
			 // make file name in lower case
			// $new_file_name=$Email.$new_file_name;
			 
			 $final_file=str_replace(' ','-',$new_file_name);
																												/*echo "<pre>";
																												print_r($_POST);
																												die;*/
			move_uploaded_file($file_loc,$folder.$final_file);
			
				
	$result=mysqli_query($conn,"insert into candidate(FirstName,LastName,Email,Password,Current_city,Gender,Nationality,Preferred_city,Mobile,Phon_No,Experience_Year,CurrentSalary,Functional_area,Current_Industry,Role,Key_skills,Resume_headline,Graduation,Post_graduation,Dr_phd,Certification,Resume_doc,Copy_resume) values('$Firstname','$lastname','$Email','$password','$current_city','$gender','$country','$preferred_loc','$mobile_no','$phone_no','$totalexp','$totalsalary','$functionalarea','$currentindustry','$role','$keyskills','$headline','$graduation','$postgraduation','$Drphd','$certification','$final_file','$resume_text')");
	
	if($result)
	{
			echo"Data is inserted";
			
																										
        	$aa=mysqli_query($conn,"SELECT id FROM candidate ORDER BY id DESC LIMIT 1");
         	 $arr=mysqli_fetch_array($aa);
			  
			
  				$_SESSION['CC']=$arr['id'];
				
				 
               $a=$_SESSION['C']=$arr['Email'];
			  
			  
		  echo"<pre>";
		  print_r($_POST);
		  die;
		  
		  
			
		   	header('Location:Registeration2.php');
          
		   }
		else 
		{
      		echo"Data is not inserted";
      		echo "error".mysqli_error($conn);
        }
	
				
				}
      
			
			?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	background-color: #88c8e2;
	
	
}
-->
</style>
<link href="js/validation.js" rel="stylesheet" type="text/css" />
</head>
<link href="css/jobs.css" rel="stylesheet" type="text/css" />
<link href="css/rhm1.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/jobs.css" rel="stylesheet" type="text/css" />
<link href="jobs.css" rel="stylesheet" type="text/css" />
</head>
<body>
<script type="text/javascript">
/*

function validate()
{
	var f=document.getElementById('firstname').value;
	var l=document.getElementById('lastname').value;
	var e=document.getElementById('email').value;
	var p=document.getElementById('password').value;
	var cp=document.getElementById('cpassword').value;
	var gen=document.getElementById('gender').value;
	var nat=document.getElementById('nationality').value;
	var pre=document.getElementById('preferred_loc').value;
	var cn=document.getElementById('currentlocation').value;
	mobile_no=document.getElementById('mobile_no').value;
	
	var pattern =/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
	var pas = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}/;
	var mob = /^[1-9]{1}[0-9]{9}$/; 
		if(f=="")
		{
			//alert("hello world");
			document.getElementById('f_name').innerHTML="Please enter the firstname";
			return false;
		}
		else
		{
			document.getElementById("lastname").focus();
			document.getElementById('f_name').innerHTML="";
			
		}
		
			if(l=="")
		{
			//alert("hello world");
			document.getElementById('l_name').innerHTML="Please enter the lastname";
			return false;
		}
		else
		{
			document.getElementById('email').focus();
			document.getElementById('l_name').innerHTML="";
			
			
		}
		if(e=="")
		{
			//alert("hello world");
			document.getElementById('e_mail').innerHTML="Please enter the Email";
			return false;
		}
			else if(!e.match(pattern))
			{
				
			document.getElementById('e_mail').innerHTML="Please enter the corret Email";
			return false;
			}
		else
		{
			document.getElementById('password').focus();
			document.getElementById('e_mail').innerHTML="";
			
		}
		<!-- password start here-->
		if(p=="")
		{
			document.getElementById('pass').innerHTML="Please enter the password";
			return false;
		}
				else if(!p.match(pas))
				{
					document.getElementById('pass').innerHTML="Please enter the at least one number, one lowercase and one uppercase letter";
					
					return false;
					
				}
				else if(p!=cp)
				{
					document.getElementById('c_password').innerHTML="Password not match";
					return false;
					
				}
		else
		{
			document.getElementById('currentlocation').focus();
			document.getElementById('c_password').innerHTML="";
		
		}
		      
		
		if(document.getElementById('currentlocation').selectedIndex==0)
		{
		//alert("data is not selected");
		document.getElementById('current_loc').innerHTML="Data is not selected";	
		return false;
		}
		else
		{
			document.getElementById('nationality').focus();
			document.getElementById('current_loc').innerHTML="";
			
		}
		
		if(document.getElementById('nationality').selectedIndex==0)
		{
			document.getElementById('nati').innerHTML="Data is not selected";
			return false;
		}
		else
		{
			document.getElementById('preferred_loc').focus();
			document.getElementById('nati').innerHTML="";
		}
		 
		if(document.getElementById('preferred_loc').selectedIndex==0)
		{
			document.getElementById('preloc').innerHTML="Data is not selected";
			return false;
		}
		else
		{
			document.getElementById('mobile_no').focus();
			document.getElementById('preloc').innerHTML="";
		}
		
		if(mobile_no=="")
		{
			document.getElementById('mobile').innerHTML="Please insert the data";
			return false;
		}
				else if(!mobile_no.match(mob))
		
					{
						document.getElementById('mobile').innerHTML="Please enter the correct mobile no";
						return false;
					}
		else
		{
			document.getElementById('exp_year').focus();
			document.getElementById('mobile').innerHTML="";
		}
		if((document.getElementById('exp_year').selectedIndex==0)||(document.getElementById('expmon').selectedIndex==0))
		{
			document.getElementById('exp').innerHTML=" please select the experience";
			return false;
		}
		else
		{
			document.getElementById('current_sal').focus();
			document.getElementById('exp').innerHTML="";
			
		}
		
		if((document.getElementById('current_sal').selectedIndex==0)||(document.getElementById('sal_t').selectedIndex==0))
		{
			document.getElementById('sal').innerHTML="Please select the salary";
			return false;
		}
		else
		{
			document.getElementById('functionalarea').focus();
			document.getElementById('sal').innerHTML="";
		}
		
		if(document.getElementById('functionalarea').selectedIndex==0)
		
			{
				document.getElementById('functional').innerHTML="Please select the functional area";
				return false;
			}
			else
			{
				document.getElementById('currentindustry').focus();
			document.getElementById('functional').innerHTML="";
			}
			if(document.getElementById('currentindustry').selectedIndex==0)
			{
				//alert("hifi");
				document.getElementById('current').innerHTML="Please enter the current industry";
				return false;
			}
			else
			{
				document.getElementById('role').focus();
				document.getElementById('current').innerHTML="";
				
			}
			if(document.getElementById('role').selectedIndex==0)
			{
				document.getElementById('rol1').innerHTML="Plese select the role";
				return false;
			}
			else
			{
				document.getElementById('keyskills').focus();
				document.getElementById('rol1').innerHTML="";
			}
			
			
			if(document.getElementById('keyskills').value=="")
			{
				//
				document.getElementById('key').innerHTML="Please enter your key skills";
				return false;
			}
			else
			{
				document.getElementById('Headline').focus();
				document.getElementById('key').innerHTML="";
			}
				
			if(document.getElementById('Headline').value=="")
			{
				//alert("hiiiiiiiiiiiiiiiiii");
				document.getElementById('rheadline').innerHTML="Please enter your Resume headline";
				return false;
			}
			else
			{
				document.getElementById('graduation').focus();
				document.getElementById('rheadline').innerHTML="";
			}
			
			if(document.getElementById('graduation').selectedIndex==0)
			{
				document.getElementById('ug').innerHTML="Please select your graudation";
				return false;
			}
			else
			{
				document.getElementById('postgraduation').focus();
				document.getElementById('ug').innerHTML="";
			}
			
			
			if(document.getElementById('postgraduation').selectedIndex==0)
			{
				document.getElementById('pg').innerHTML="select your postgraudation";
				return false;
			}
			else
			{
				document.getElementById('Drphd').focus();
				document.getElementById('pg').innerHTML="";
				
			}
			
			

			if(document.getElementById('Drphd').selectedIndex==0)
			{
				document.getElementById('dr').innerHTML='select your DR/PHd';
				return false;
			}
			else
			{
				document.getElementById('certification').focus();
				document.getElementById('dr').innerHTML="";
			}
			
			if(document.getElementById('certification').value=="")
			{
				document.getElementById('cert').innerHTML='Enter the certification';
				return false;
			}
			else
			{
				document.getElementById('resume').focus();
				document.getElementById('cert').innerHTML="";
			}
			
			
			if(document.getElementById('resume').value=="")
			{
				document.getElementById('attach').innerHTML="please select the file";
				return false;
			}
			else
			{
				document.getElementById('resume_text').focus();
				document.getElementById('attach').innerHTML="";
				
			}
			
			if(document.getElementById('resume_text').value=="")
			{
				document.getElementById('text').innerHTML='please copy the resume here';
				return false;
			}
			else
			{
			     document.getElementById('agre').focus();
				document.getElementById('text').innerHTML="";
			}
			
			
			if(!this.form.terms.checked)
				{
					alert('You must agree to the terms first.');
					return false;
				}
				else
				{
					return true;
				}
			
			
		
}
*/

</script>

<table width="990" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td valign="top"><table width="990" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="518" height="100"><img src="image/logo.png" width="157" height="56" /></td>
        <td width="450" valign="top"><table width="450" border="0" align="right" cellpadding="0" cellspacing="0">
          <tr>
            <td height="20" style=" float:right; margin-right:20px; margin-top:5px;"><div align="right" class="Content"><a href="#">Feedback </a> | <a href="#">Contact Us</a></div></td>
          </tr>
          <tr>
            <td><div align="right"></div></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="37" valign="top"><table width="990" border="0" cellspacing="0" cellpadding="0"style="background-image:url(image/blockbg.png); background-repeat:repeat-x;">
      <tr>
        <td width="686" height="37" background="image/rhm1_bg.gif"><div class="rhm1">
          <div class="rhm1-right"></div>
          <div class="rhm1-left"></div>
          <div class="rhm1-bg">
            <ul>
              <li class="current"><a href="#"><span>Home</span></a></li>
              <li><a href="#"><span>Search Job</span></a></li>
              <li><a href="#"><span>Post Resume</span></a></li>
              <li><a href="#"><span>Requirements</span></a></li>
              <li><a href="#"><span>New User</span></a></li>
              <li><a href="#"><span>More</span></a></li>
            </ul>
          </div>
        </div></td>
        <td width="12">&nbsp;</td>
        <td width="292" background="image/rhm1_bg.gif"><a href="#" class="freejobposting">Recruiter Area</a></div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td valign="top"><table width="990" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" style="background-image:url(image/blockbg.png); background-repeat:repeat-x;">
      <tr>
        <td height="70" valign="top" bgcolor="#BBE3FF" class="border"><br />
          <table width="80%" border="0" align="center" cellpadding="4" cellspacing="0">
            <tr>
              <td width="35%" class="head">Login to view recommended jobs for you</td>
              <td width="32%" class="head">&nbsp;</td>
              <td width="33%" class="head">&nbsp;</td>
            </tr>
            <tr>
              <td height="32"><input name="textfield3" type="text" id="textfield3" value="Use email ID as Username" size="30" /></td>
              <td><input name="textfield4" type="text" id="textfield4" value="Password" size="30" /></td>
              <td><input type="submit" name="button" id="button" value="login" />
                  <span class="head"><span class="link"><a href="#">Forgot Password</a> / <a href="#">Username? </a></span></span></td>
            </tr>
        </table>
          <br /></td>
      </tr>
      <tr>
        <td valign="top"><img src="image/blank.gif" width="5" height="3" /></td>
        </tr>
      <tr>
        <td width="685" valign="top" bgcolor="#FFFFFF" class="border"><br />
          <table width="80%" align="center" cellpadding="2" cellspacing="2" class="Content">
          <tbody>
            
            <tr>
              <td align="center" bgcolor="#007EBB" class="heading14White"><div style="width: 100%;  padding: 7px 0px 5px; font-family: tahoma; font-weight: bold; font-size: 15px; height: 20px; margin: 0px;">Submit your Resume in Jobsvario.com and get the double benifit to find the Right   Job</div></td>
            </tr>
            
         
            
            <tr>
              <td align="right">&nbsp;</td>
            </tr>
            <table>
            <form action=""  name="form" class="cmxform" method="post" enctype="multipart/form-data" onsubmit="return validate();">
            <tr>
              <td><strong>Create Your Account </strong></td>
            </tr>
            <tr>
              <td><table align="center" width="80%" border="1">
                  <tbody>
                    <tr valign="top">
                      <td>* First Name</td>
                      <td><input name="Firstname" id="firstname" size="30" maxlength="100" type="text" /></td>
                      <td>&nbsp;<font color="red" size="2" id="f_name"></font></td>
                    </tr>
                    <tr valign="top">
                      <td>* Last Name</td>
                      <td><input name="lastname" id="lastname" size="30" maxlength="100" type="text"  /></td>
                      <td>&nbsp;<font color="red" size="2" id="l_name"></font></td>
                    </tr>
                    <tr valign="top">
                      <td width="28%">* Email Address:</td>
                      <td width="35%"><input name="Email" id="email" size="30" maxlength="100" type="text"  />                      </td>
                      <td width="37%"><font color="red" size="2" id="e_mail"></font></td>
                    </tr>
                    <tr>
                      <td>* Password:</td>
                      <td colspan="2"><input name="password" maxlength="30" id="password" type="password" /><font id="pass" color="red" font="2"></font></td>
                      <td></td>
                     
                    </tr>
                    <tr>
                      <td>* Confirm Password:</td>
                      <td colspan="2"><input name="cpassword" id="cpassword" size="30" type="password" /><font id="c_password" color="red" size="2"></font></td>
                      </td>
                      
                    </tr>
                  </tbody>
              </table></td>
            </tr>
            <tr>
              <td><hr width="100%" />              </td>
            </tr>
            <tr>
              <td><strong>Contact Details </strong></td>
            </tr>
            <tr>
              <td><table align="center" width="80%" border="1">
                    <tbody>
                      <tr>
                        <td width="27%">* Current location:</td>
                        <td width="73%"><select name="current_city" id="currentlocation">
                          <option selected="selected" value="0">Select City</option>
                          <option value="New Delhi">New Delhi</option>
                          <option value="Haryana">Haryana</option>
                        </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font id="current_loc" color="red" size="2"></font></td>
                         
                      </tr>
                      <tr id="other4" style="display: none;">
                        <td></td>

                        <td><input name="otherlocation2" maxlength="40" size="30" type="text" /></td>
                      </tr>
                      <tr>
                        <td width="27%">* Gender:</td>
                        <td width="73%"><input name="gender"  id="gender"  value="Male" checked="checked" style="border: medium none;" type="radio" />
                          Male&nbsp;&nbsp;
                          <input value="Female" name="gender" id="gender" style="border: medium none;" type="radio" />
                          Female </td>
                          <font id="gender1" size="2" color="red"></font>
font                      </tr>
                      <tr>
                        <td>* Nationality:</td>
                        <td><select onchange="getstate(this.value)" name="country" id="nationality">
                            <option selected="selected" value="">Select Country</option>
                            <option value="India">India</option>
                            <option value="USA">USA</option>
                            <option value="UK">UK</option>
                            <option value="Australia">Australia</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                          </select> &nbsp;&nbsp;&nbsp;&nbsp;  <font id="nati" size="2" color="red"></font> </td>
                          <td><font id="nati" size="2" color="red"></font></td>
                      </tr>
                      <tr>
                        <td>
                          Preferred job location:</td>
                        <td><div id="txthint1">
                          <select name="preferred_loc" id="preferred_loc" size="5" multiple="multiple">
                            <option selected="selected" value="1">Select City</option>
                            <option value="New Delhi">New Delhi</option>
                          <option value="Haryana">Haryana</option>
                          </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font id="preloc" size="2" color="red"></font>
                        </div></td>
                        
                      </tr>
                      <tr>
                        <td>* Mobile Number:</td>
                        <td><input name="mobile_no"  id="mobile_no"maxlength="10" onkeypress="return Validategzip(this,event)" onchange="javascript:while(''+this.value.charAt(0)==' ')this.value=this.value.substring(1,this.value.length);" size="30" type="text" />&nbsp;&nbsp;&nbsp;&nbsp;<font id="mobile" size="2" color="red"></font>
                            <br />
                           </td>
                      </tr>
                      <tr>
                        <td> Phon Number</td>
                        <td><input name="phone_no" type="text" /></td>
                      </tr>
                      
                    </tbody>
                  </table></td>
            </tr>
            <tr>
              <td><hr width="100%" />              </td>
            </tr>
            <tr>
              <td><strong>Professional Details </strong></td>
            </tr>
            <tr>
              <td><table align="center" width="80%" border="1">
                  <tbody>
                    <tr>
                      <td width="27%">* Total Experience:</td>
                      <td width="73%"><div style="float: left; width: 75px;">
                        <select name="exp_year" id="exp_year" onchange="ShowHideFresher(this.value)">
                          <option selected="selected" value="-1">Year</option>
                          <option value="Fresher">Fresher</option>
                          <option value="0">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                          <option value="13">13</option>
                          <option value="14">14</option>
                          <option value="15">15</option>
                          <option value="16">16</option>
                          <option value="17">17</option>
                          <option value="18">18</option>
                          <option value="19">19</option>
                          <option value="20">20</option>
                          <option value="21">21</option>
                          <option value="22">22</option>
                          <option value="23">23</option>
                          <option value="24">24</option>
                          <option value="25">25</option>
                          <option value="26">26</option>
                          <option value="27">27</option>
                          <option value="28">28</option>
                          <option value="29">29</option>
                          <option value="30">30</option>
                        </select>
                      </div>
                          <div id="txthint" style="float: left;">
                            <select name="expmonth" id="expmonth">
                              <option selected="selected" value="">Month</option>
                              <option value="0">0</option>
                              <option value="01">1</option>
                              <option value="02">2</option>
                              <option value="03">3</option>
                              <option value="04">4</option>
                              <option value="05">5</option>
                              <option value="06">6</option>
                              <option value="07">7</option>
                              <option value="08">8</option>
                              <option value="09">9</option>
                              <option value="10">10</option>
                              <option value="11">11</option>
                              <option value="12">12</option>
                            </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <font id="exp" size="2" color="red"></font>
                        </div></td>
                    </tr>
                    <tr id="hidesal">
                      <td width="27%">* Current Annual Salary:</td>
                      <td width="73%"><select name="current_sal" id="current_sal">
                          <option selected="selected" value="">Lacs</option>
                          <option value="0">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                          <option value="13">13</option>
                          <option value="14">14</option>
                          <option value="15">15</option>
                          <option value="16">16</option>
                          <option value="17">17</option>
                          <option value="18">18</option>
                          <option value="19">19</option>
                          <option value="20">20</option>
                          <option value="21">21</option>
                          <option value="22">22</option>
                          <option value="23">23</option>
                          <option value="24">24</option>
                          <option value="25">25</option>
                          <option value="26">26</option>
                          <option value="27">27</option>
                          <option value="28">28</option>
                          <option value="29">29</option>
                          <option value="30">30</option>
                          <option value="31">31</option>
                          <option value="32">32</option>
                          <option value="33">33</option>
                          <option value="34">34</option>
                          <option value="35">35</option>
                          <option value="36">36</option>
                          <option value="37">37</option>
                          <option value="38">38</option>
                          <option value="39">39</option>
                          <option value="40">40</option>
                          <option value="41">41</option>
                          <option value="42">42</option>
                          <option value="43">43</option>
                          <option value="44">44</option>
                          <option value="45">45</option>
                          <option value="46">46</option>
                          <option value="47">47</option>
                          <option value="48">48</option>
                          <option value="49">49</option>
                          <option value="50">50</option>
                        </select>
                          <select name="sal_thousand" id="sal_t">
                            <option selected="selected" value="">Thousands</option>
                            <option value="0">0</option>
                            <option value="05">5</option>
                            <option value="10">10</option>
                            <option value="15">15</option>
                            <option value="20">20</option>
                            <option value="25">25</option>
                            <option value="30">30</option>
                            <option value="35">35</option>
                            <option value="40">40</option>
                            <option value="45">45</option>
                            <option value="50">50</option>
                            <option value="55">55</option>
                            <option value="60">60</option>
                            <option value="65">65</option>
                            <option value="70">70</option>
                            <option value="75">75</option>
                            <option value="80">80</option>
                            <option value="85">85</option>
                            <option value="90">90</option>
                            <option value="95">95</option>
                          </select>    &nbsp;&nbsp;&nbsp;&nbsp;<font id="sal" size="2" color="red"></font>                  </td>
                    </tr>
                    <tr>
                      <td>* Functional Area:</td>
                      <td><select name="functionalarea" id="functionalarea">
                          <option value="" selected="selected">Select Functional Area</option>
                          <option value="Accounts / Finance / Tax / CS / Audit">Accounts / Finance / Tax / CS / Audit</option>
                          <option value="Agent">Agent</option>
                          <option value="Architecture / Interior Design">Architecture / Interior Design</option>
                          <option value="Banking / Insurance">Banking / Insurance</option>
                          <option value="Content / Journalism">Content / Journalism</option>
                          <option value="Corporate Planning / Consulting">Corporate Planning / Consulting</option>
                          <option value="Detective">Detective</option>
                          <option value="Engineering Design / R&amp;D">Engineering Design / R&amp;D</option>
                          <option value="Export / Import / Merchandising">Export / Import / Merchandising</option>
                          <option value="Fashion / Garments / Merchandising">Fashion / Garments / Merchandising</option>
                          <option value="Guards / Security Services">Guards / Security Services</option>
                          <option value="Hotels / Restaurants">Hotels / Restaurants</option>
                          <option value="HR / Administration / IR">HR / Administration / IR</option>
                          <option value="IT Software - Client Server">IT Software - Client Server</option>
                          <option value="IT Software - Mainframe">IT Software - Mainframe</option>
                          <option value="IT Software - Middleware">IT Software - Middleware</option>
                          <option value="IT Software - Mobile">IT Software - Mobile</option>
                          <option value="IT Software - Other">IT Software - Other</option>
                          <option value="IT Software - System Programming">IT Software - System Programming</option>
                          <option value="IT Software - Telecom Software">IT Software - Telecom Software</option>
                          <option value="IT Software- Application Programming / Maintenance">IT Software- Application Programming / Maintenance</option>
                          <option value="IT Software- DBA / Datawarehousing">IT Software- DBA / Datawarehousing</option>
                          <option value="IT Software- E-Commerce / Internet Technologies">IT Software- E-Commerce / Internet Technologies</option>
                          <option value="IT Software- Embedded /EDA /VLSI /ASIC /Chip Des">IT Software- Embedded /EDA /VLSI /ASIC /Chip Des.</option>
                          <option value="IT Software- ERP / CRM">IT Software- ERP / CRM</option>
                          <option value="IT Software- Network Administration / Security">IT Software- Network Administration / Security</option>
                          <option value="IT Software- QA &amp; Testing">IT Software- QA &amp; Testing</option>
                          <option value="IT Software- Systems / EDP / MIS">IT Software- Systems / EDP / MIS</option>
                          <option value="IT- Hardware / Telecom / Technical Staff / Support">IT- Hardware / Telecom / Technical Staff / Support</option>
                          <option value="ITES / BPO / KPO / Customer Service / Operations">ITES / BPO / KPO / Customer Service / Operations</option>
                          <option value="Legal">Legal</option>
                          <option value="Marketing / Advertising / MR / PR">Marketing / Advertising / MR / PR</option>
                          <option value="Packaging">Packaging</option>
                          <option value="Pharma / Biotech / Healthcare / Medical / R&amp;D">Pharma / Biotech / Healthcare / Medical / R&amp;D</option>
                          <option value="Production / Maintenance / Quality">Production / Maintenance / Quality</option>
                          <option value="Purchase / Logistics / Supply Chain">Purchase / Logistics / Supply Chain</option>
                          <option value="Sales / BD">Sales / BD</option>
                          <option value="Secretary / Front Office / Data Entry">Secretary / Front Office / Data Entry</option>
                          <option value="Self Employed / Consultants">Self Employed / Consultants</option>
                          <option value="Site Engineering / Project Management">Site Engineering / Project Management</option>
                          <option value="Teaching / Education">Teaching / Education</option>
                          <option value="Ticketing / Travel / Airlines">Ticketing / Travel / Airlines</option>
                          <option value="Top Management">Top Management</option>
                          <option value="TV / Films / Production">TV / Films / Production</option>
                          <option value="Web / Graphic Design / Visualiser">Web / Graphic Design / Visualiser</option>
                          <option value="Other">Other</option>
                        </select>       &nbsp;&nbsp;&nbsp;&nbsp;<font id="functional" size="2" color="red"></font>                </td>
                    </tr>
                    <tr>
                      <td>* Current Industry:</td>
                      <td><select name="currentindustry" id="currentindustry" style="width:340px;">
                          <option value="" selected="selected">Select Current Industry</option>
                          <option value="Accounting/Finance">Accounting/Finance</option>
                          <option value="Advertising/PR/MR/Events">Advertising/PR/MR/Events</option>
                          <option value="Agriculture/Dairy">Agriculture/Dairy</option>
                          <option value="Architecture/Interior Designing">Architecture/Interior Designing</option>
                          <option value="Auto/Auto Ancillary">Auto/Auto Ancillary</option>
                          <option value="Banking/Financial Services/Broking">Banking/Financial Services/Broking</option>
                          <option value="BPO/ITES">BPO/ITES</option>
                          <option value="Chemicals/PetroChemical/Plastic/Rubber">Chemicals/PetroChemical/Plastic/Rubber</option>
                          <option value="Construction/Engineering/Cement/Metals">Construction/Engineering/Cement/Metals</option>
                          <option value="Consumer Durables">Consumer Durables</option>
                          <option value="Courier/Transportation/Freight">Courier/Transportation/Freight</option>
                          <option value="Defence/Government">Defence/Government</option>
                          <option value="Detective">Detective</option>
                          <option value="Education/Teaching/Training">Education/Teaching/Training</option>
                          <option value="Export/Import">Export/Import</option>
                          <option value="Fertilizers/Pesticides">Fertilizers/Pesticides</option>
                          <option value="FMCG/Foods/Beverage">FMCG/Foods/Beverage</option>
                          <option value="Fresher/Trainee">Fresher/Trainee</option>
                          <option value="Gems &amp; Jewellery">Gems &amp; Jewellery</option>
                          <option value="Hotels/Restaurants/Airlines/Travel">Hotels/Restaurants/Airlines/Travel</option>
                          <option value="Industrial Products/Heavy Machinery">Industrial Products/Heavy Machinery</option>
                          <option value="Insurance">Insurance</option>
                          <option value="IT-Software/Software Services">IT-Software/Software Services</option>
                          <option value="IT-Hardware &amp; Networking">IT-Hardware &amp; Networking</option>
                          <option value="Telcom/ISP">Telcom/ISP</option>
                          <option value="Legal">Legal</option>
                          <option value="Media/Dotcom/Entertainment">Media/Dotcom/Entertainment</option>
                          <option value="Medical/Healthcare/Hospital">Medical/Healthcare/Hospital</option>
                          <option value="NGO/Social Services">NGO/Social Services</option>
                          <option value="Office Equipment/Automation">Office Equipment/Automation</option>
                          <option value="Oil and Gas/Power/Infrastructure/Energy">Oil and Gas/Power/Infrastructure/Energy</option>
                          <option value="Paper">Paper</option>
                          <option value="Pharma/Biotech/Clinical Research">Pharma/Biotech/Clinical Research</option>
                          <option value="Printing/Packaging">Printing/Packaging</option>
                          <option value="Real Estate/Property">Real Estate/Property</option>
                          <option value="Recruitment">Recruitment</option>
                          <option value="Retail">Retail</option>
                          <option value="Security/Law Enforcement">Security/Law Enforcement</option>
                          <option value="Semiconductors/Electronics">Semiconductors/Electronics</option>
                          <option value="Shipping/Marine">Shipping/Marine</option>
                          <option value="Textiles/Garments/Accessories">Textiles/Garments/Accessories</option>
                          <option value="Tyres">Tyres</option>
                          <option value="Other">Other</option>
                        </select>       &nbsp;&nbsp;&nbsp;&nbsp;<font id="current" size="2" color="red"></font>                  </td>
                    </tr>
                    <tr>
                      <td>* Role:</td>
                      <td><select style="width: 355px;" name="role" id="role">
                          <option selected="selected" value="">Select Role</option>
                          <optgroup value="-1" style="background: none repeat scroll 0% 0% rgb(208, 224, 241); color: rgb(0, 0, 0);" label="-----Programming &amp; Design-----" id="optg_2"></optgroup>
                          <option value="Software Developer">Software Developer</option>
                          <option value="Team Lead/Tech Lead">Team Lead/Tech Lead</option>
                          <option value="System Analyst">System Analyst</option>
                          <option value="Tech Architect">Tech Architect</option>
                          <option value="Database Architect/Designer">Database Architect/Designer</option>
                          <option value="Detective">Detective</option>
                          <option value="Project Lead">Project Lead</option>
                          <option value="Testing Engnr">Testing Engnr</option>
                          <option value="Product Mgr">Product Mgr</option>
                          <option value="Graphic/Web Designer">Graphic/Web Designer</option>
                          <option value="Release Mgr">Release Mgr</option>
                          <optgroup value="-1" style="background: none repeat scroll 0% 0% rgb(208, 224, 241); color: rgb(0, 0, 0);" label="-----Admin/Maintenance/Security/Datawarehousing-----" id="optg_13"></optgroup>
                          <option value="DBA">DBA</option>
                          <option value="Network Admin">Network Admin</option>
                          <option value="System Admin">System Admin</option>
                          <option value="System Security">System Security</option>
                          <option value="Tech Support Engnr">Tech Support Engnr</option>
                          <option value="Maintenance Engnr">Maintenance Engnr</option>
                          <option value="Webmaster">Webmaster</option>
                          <option value="IT/Networking-Mgr">IT/Networking-Mgr</option>
                          <option value="Information Systems(MIS)-Mgr">Information Systems(MIS)-Mgr</option>
                          <optgroup value="-1" style="background: none repeat scroll 0% 0% rgb(208, 224, 241); color: rgb(0, 0, 0);" label="-----System Design/Implementation/ERP/CRM-----" id="optg_23"></optgroup>
                          <option value="System Integration Techician">System Integration Techician</option>
                          <option value="Business Analyst">Business Analyst</option>
                          <option value="Datawarehousing Technician">Datawarehousing Technician</option>
                          <option value="Outside Technical Consultant">Outside Technical Consultant</option>
                          <option value="Functional Outside Consultant">Functional Outside Consultant</option>
                          <option value="EDP Analyst">EDP Analyst</option>
                          <optgroup value="-1" style="background: none repeat scroll 0% 0% rgb(208, 224, 241); color: rgb(0, 0, 0);" label="-----QA/Testing/Documentation-----" id="optg_30"></optgroup>
                          <option value="Technical Writer">Technical Writer</option>
                          <option value="Instructional Designer">Instructional Designer</option>
                          <option value="Technical Documentor">Technical Documentor</option>
                          <option value="QA/QC Exec.">QA/QC Exec.</option>
                          <option value="QA/QC Mgr">QA/QC Mgr</option>
                          <optgroup value="-1" style="background: none repeat scroll 0% 0% rgb(208, 224, 241); color: rgb(0, 0, 0);" label="-----Project Management-----" id="optg_36"></optgroup>
                          <option value="Project Mgr-IT/Software">Project Mgr-IT/Software</option>
                          <optgroup value="-1" style="background: none repeat scroll 0% 0% rgb(208, 224, 241); color: rgb(0, 0, 0);" label="-----Senior Management-----" id="optg_38"></optgroup>
                          <option value="Program Mgr">Program Mgr</option>
                          <option value="Head/VP/GM-Quality">Head/VP/GM-Quality</option>
                          <option value="Head/VP/GM-Technology(IT)/CTO">Head/VP/GM-Technology(IT)/CTO</option>
                          <option value="CIO">CIO</option>
                          <optgroup value="-1" style="background: none repeat scroll 0% 0% rgb(208, 224, 241); color: rgb(0, 0, 0);" label="-----Other-----" id="optg_43"></optgroup>
                          <option value="Trainer/Faculty">Trainer/Faculty</option>
                          <option value="Trainee">Trainee</option>
                          <option value="Fresher">Fresher</option>
                          <option value="Outside Consultant">Outside Consultant</option>
                          <option value="IT/Technical Content Developer">IT/Technical Content Developer</option>
                        </select>  &nbsp;&nbsp;&nbsp;&nbsp;<font id="rol1" size="2" color="red"></font> 
                      </td>
                    </tr>
                    <tr>
                      <td>* Key Skills:</td>
                      <td><textarea name="keyskills" id="keyskills" rows="2" cols="40" onchange="trim();"></textarea> &nbsp;&nbsp;&nbsp;&nbsp;<font id="key" size="2" color="red"></font></td>
                    </tr>
                    <tr>
                      <td>* Resume Headline:</td>
                      <td><input name="headline"  id="Headline" maxlength="225" onchange="trim1();" size="53" type="text" /> &nbsp;&nbsp;&nbsp;&nbsp;<font id="rheadline" size="2" color="red"></font></td>
                    </tr>
                  </tbody>
              </table></td>
            </tr>
            <tr>
              <td><hr width="100%" />              </td>
            </tr>
            <tr>
              <td><strong>Education Details </strong></td>
            </tr>
            <tr>
              <td colspan=""><table align="center" width="80%" border="1">
                  <tbody>
                    <tr id="hideeducation1" style="display: block;">
                      <td width="100%"><table align="center" width="100%">
                          <tbody>
                            <tr>
                              <td>* Basic/Graduation:</td>
                              <td><select name="graduation"  id="graduation" onchange="hideEducation(this);">
                                  <option selected="selected" value="">Select Graduation</option>
                                  <option value="Not Pursuing Graduation">Not Pursuing Graduation</option>
                                  <option value="B.A">B.A</option>
                                  <option value="B.Arch">B.Arch</option>
                                  <option value="BCA">BCA</option>
                                  <option value="B.B.A">B.B.A</option>
                                  <option value="B.Com">B.Com</option>
                                  <option value="B.Ed">B.Ed</option>
                                  <option value="BDS">BDS</option>
                                  <option value="BHM">BHM</option>
                                  <option value="B.Pharma">B.Pharma</option>
                                  <option value="B.Sc">B.Sc</option>
                                  <option value="B.Tech/B.E">B.Tech/B.E.</option>
                                  <option value="LLB">LLB</option>
                                  <option value="MBBS">MBBS</option>
                                  <option value="Diploma">Diploma</option>
                                  <option value="BVSC">BVSC</option>
                                  <option value="null">Other</option>
                                </select>    <font id="ug" size="2" color="red"></font>                          </td>
                            </tr>
                            <tr id="other5" style="display: none;">
                              <td></td>
                              <td><input name="othergradution" maxlength="30" type="text" />                              </td>
                            </tr>
                            
                            <tr>
                              <td width="45%">Post Graduation:</td>
                              <td width="55%"><select name="postgraduation" id="postgraduation" onchange="showHidePostgraduation(this);">
                                  <option selected="selected" value="">Select Post Graduation</option>
                                  <option value="CA">CA</option>
                                  <option value="CS">CS</option>
                                  <option value="ICWA">ICWA</option>
                                  <option value="Integrated PG">Integrated PG</option>
                                  <option value="LLM">LLM</option>
                                  <option value="M.A">M.A</option>
                                  <option value="M.Arch">M.Arch</option>
                                  <option value="M.Com">M.Com</option>
                                  <option value="M.Ed">M.Ed</option>
                                  <option value="M.Pharma">M.Pharma</option>
                                  <option value="M.Sc">M.Sc</option>
                                  <option value="M.Tech">M.Tech</option>
                                  <option value="MBA/PGDM">MBA/PGDM</option>
                                  <option value="MCA">MCA</option>
                                  <option value="MS">MS</option>
                                  <option value="PG Diploma">PG Diploma</option>
                                  <option value="MVSC">MVSC</option>
                                  <option value="MCM">MCM</option>
                                  <option value="null">Other</option>
                                </select>            <font id="pg" size="2" color="red"></font>                  </td>
                            </tr>
                            <tr id="other2" style="display: none;">
                              <td></td>
                              <td><input name="otherpostgraduation" maxlength="30" type="text" />                              </td>
                            </tr>
                            <tr>
                              <td>Doctorate/Phd:</td>
                              <td><select name="Drphd"  id="Drphd" onchange="showHideDrPhd(this);">
                                  <option selected="selected" value="">Select Ph.D/Doctorate</option>
                                  <option value="Ph.D/Doctorate">Ph.D/Doctorate</option>
                                  <option value="MPHIL">MPHIL</option>
                                  <option value="null">Other</option>
                                </select>              <font id="dr" size="2" color="red"></font>                </td>
                            </tr>
                            <tr style="display: none;">
                              <td></td>
                              <td><input name="otherdrorphd" maxlength="30" type="text" /></td>
                            </tr>
                            <tr>
                              <td>Certification Course</td>
                              <td><input name="certification" id="certification" maxlength="100" size="30" type="text" /><font id="cert" size="2" color="red"></font> 
                                 </td>
                            </tr>
                          </tbody>
                      </table></td>
                    </tr>
                  </tbody>
              </table></td>
            </tr>
            <tr>
              <td><hr width="100%" />              </td>
            </tr>
            <tr>
              <td><strong>Upload Resume </strong></td>
            </tr>
            <tr>
              <td valign="top"><table align="center" width="80%">
                  <tbody>
                    <tr>
                      <td width="28%">Attach Resume :</td>
                      <td width="72%"><input name="file" id="resume" size="40" type="file" /><font id="attach" size="2" color="red"></font> 
                          <br />
                        Upload MS Word file(.doc and .docx) only. Max size limit 300 Kb </td>
                    </tr>
                    <tr>
                      <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr>
                      <td colspan="2" valign="top"><textarea name="resume_text" id="resume_text" rows="8" cols="80">Copy and Paste your Resume</textarea><font id="text" size="2" color="red"></font> 
                        &nbsp;</td>
                    </tr>
                  </tbody>
              </table></td>
            </tr>
            
            <tr>
              <td width="34%" valign="top"><input name="terms" id="checkbox" value="accept" style="border: medium none;" type="checkbox" />
                I have read and understood and agree to the <span class="linkhover"><a href="http://jobsansaar.com/terms_condition.php" target="_blank">Terms and Conditions</a></span>.<font id="agree1" size="2" color="red"></font> </td>
            </tr>
            <tr>
            <!--  <td align="center" height="38"><input  type="submit" name="submit" value="Create Account &amp; Continue" onclick="return validation(this);" class="sub_but_big1"  />              </td> -->
                <td align="center" height="38"><input  type="submit" name="submit" value="Create Account &amp; Continue" onclick="return validation(this);" class="sub_but_big1"  />              </td>
            </tr>
          </tbody>
        </table>        </td>
        </tr>
    </table></td>
  </tr>
  <!--footer starts from here-->
  <tr>
    <td valign="top" bgcolor="#ebf7ff"><table width="712" border="0" align="center" cellpadding="8" cellspacing="0">
      <tr>
        <td class="head">For Job Seekers</td>
        <td class="head">Jobs By Category</td>
        <td class="head">Jobs By Location</td>
        <td class="head">About Our Site</td>
      </tr>
      <tr>
        <td valign="top" class="link">› Home<br />
          › Search Jobs<br />
          › View All Jobs <br />
          › Resume at Jobsvario.com<br />
          › Jobs On Mobile <br />
          › Get Jobs in Email<br />
          › Know About Companies<br />
          › Career Center<br />
          › Help</td>
        <td valign="top" class="link"> › Sales Jobs in India<br />
          › IT Jobs in India <br />
          › Software Jobs in India <br />
          › Finance Jobs in India <br />
          ›
          Engineering Jobs <br />
          › Companies <br />
          › Placement Consultants</td>
        <td valign="top" class="link"> › Jobs in NCR<br />
          › Jobs in Chandigarh <br />
          › Chennai Jobs<br />
          › Delhi Jobs <br />
          › Jobs in Gurgaon <br />
          › Jobs in Hyderabad <br />
          ›
          Jobs in Noida <br />
          › Jobs in Mumbai <br />
          › Jobs in Pune <br />
          › Jobs in India <br />
          › International Jobs</td>
        <td valign="top" class="link">› Contact Us<br />
          › About Jobsvario.com<br />
          › Privacy Commitment <br />
          › Be Safe <br />
          › Terms of Use<br />
          › Report a Bug/Abuse <br />
          › Complaint<br />
          › Add Job Search Box <br />
          › Sitemap<br />
          › Fraud/Security</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center" bgcolor="#333333" class="link"><img src="image/blank.gif" width="1" height="1" /></td>
      </tr>
      <tr>
        <td width="996" height="84" align="center" bgcolor="#f3f3f3" class="link">For Employers: Home | Buy Resume Database Access | Buy Job Postings | Employer Login <br />
          © 2009 Jobs Vario - All Rights Reserved</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td valign="top"></td>
  </tr>
</table>
</form>
</table>
</body>
</html>
