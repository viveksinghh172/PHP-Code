<?php
include("config.php");
$name=$_REQUEST['t1'];
$email=$_REQUEST['t2'];
$mobile=$_REQUEST['t3'];
$msg=nl2br($_REQUEST['t4']);
if($_REQUEST['sub'])
{
	if(mysql_query("insert into contact values('$name','$email','$mobile','$msg',NOW())"))
	{
		$error="Your massage sent";
	}
	else
	{
		$error="Massage not sent. Please try again";
	}
}

?>
<style type="text/css">
.contct {
	font-family: Verdana;
	font-size: 12px;
	}
</style>
<script>
function vali()
{
	var name=/^[a-zA-Z0-9-_]{1,30}$/;
	var email=/^[a-zA-Z0-9-_\.]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/;
	var mobile=/^[0-9]{10,11}$/;
if(document.form1.t1.value.search(name)==-1)
{
	alert("Please enter correct name");
	document.form1.t1.focus();
	return false;
}
else if(document.form1.t2.value.search(email)==-1)
{
	alert("Please enter correct email id");
	document.form1.t2.focus();
	return false;
}
else if(document.form1.t3.value.search(mobile)==-1)
{
	alert("Please enter correct mobile number");
	document.form1.t3.focus();
	return false;
}
	else 
	{
		return true;
	}

}
</script>
<table width="610" height="350" align="center" border="2" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
  <tr>
    <td align="left" valign="top" bgcolor="#FFFFFF"><p align="center"><font style="font-family:Georgia, 'Times New Roman', Times, serif; color: #CC0000; font-size:20px; font-weight:bold">Contact us:</font> </p>
      <table width="100%" border="0" cellspacing="0" cellpadding="3">
        <tr>
          <td align="left"><font color="#0099CC">Site administrator :</font>  Pankaj Kumar Garg</td>
        </tr>
        <tr>
          <td align="left"><font color="#0099CC">Mobile no. :</font>  9928431090</td>
        </tr>
        <tr>
          <td align="left"><font color="#0099CC">Head office :</font>  RIET, Jaipur</td>
        </tr>
        <tr>
          <td align="left"><font color="#0099CC">Email us at :</font> <a href="mailto:pankajkumargrg@gmail.com">pankajkumargrg@gmail.com</a></td>
        </tr>
        <tr>
          <td align="center"><font color="#0099CC" face="Arial, Helvetica, sans-serif"><strong>Please fill the following form</strong></font></td>
        </tr>
        <tr>
          <td align="center"><div align="center"><b><?php echo "<font color='red'>$error</font>";?></b></div>          </td>
        </tr>
      </table>
      <form id="form1" name="form1" method="post" onsubmit="return vali()" >
      <table width="66%" border="1" align="center" cellpadding="3" cellspacing="0" bordercolor="#EFEFEF" style="margin-bottom:10px">
        <tr>
          <td><table width="96%" border="0" align="center" cellpadding="3" cellspacing="2">
            <tr>
              <td width="102" align="left" class="contct">Your name:</td>
              <td width="253" align="left" valign="top"><label>
                <input name="t1" type="text" id="t1" size="30" />
              </label></td>
            </tr>
            <tr>
              <td width="102" align="left" class="contct">Email address: </td>
              <td align="left" valign="top"><label>
                <input name="t2" type="text" size="30" id="t2" maxlength="60" />
              </label></td>
            </tr>
            <tr>
              <td width="102" align="left" class="contct">Mobile number: </td>
              <td align="left" valign="top"><label>
                <input name="t3" type="text" size="30" id="t3" />
              </label></td>
            </tr>
            <tr>
              <td width="102" align="left" class="contct">Message:</td>
              <td align="left" valign="top"><label>
                <textarea name="t4" cols="27" rows="3" id="t4"></textarea>
              </label></td>
            </tr>
            <tr>
              <td colspan="2" align="center">
                <label>
                  <input name="sub" type="submit" id="sub" value="Send" />
                  </label>
              </td>
              </tr>
          </table></td>
        </tr>
      </table> </form>
    </td>
    </tr>
</table>