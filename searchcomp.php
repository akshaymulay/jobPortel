 <?php				
	session_start();
?>
<html>
<head>

<link rel="stylesheet" href="mm_travel2.css" type="text/css" />

<body bgcolor="#C0DFFD">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#3366CC">
    <td colspan="3" rowspan="2"><img src="password.jpg" alt="Header image" width="382" height="127" border="0" /></td>
    <td height="63" colspan="3" id="logo" valign="bottom" align="center" nowrap="nowrap">job portal </td>
    <td width="34">&nbsp;</td>
  </tr>

  <tr bgcolor="#3366CC">
    <td height="64" colspan="3" id="tagline" valign="top" align="center">jobs on demand </td>
	<td width="34">&nbsp;</td>
  </tr>

  <tr>
    <td colspan="7" bgcolor="#003366"></td>
  </tr>

  <tr bgcolor="#CCFF99">
  	<td colspan="7" id="dateformat" height="25">&nbsp;&nbsp;<p align="right"><a href="logout.php">LOGOUT</a></p>	</td>
  </tr>
 <tr>
    <td colspan="7" bgcolor="#003366"></td>
  </tr>

 <tr>
    <td width="189" height="1572" valign="top" bgcolor="#E6F3FF">
	<table width="189" height="242" border="0" cellpadding="0" cellspacing="0" id="navigation" background="rtv2.jpg">
        <tr>
          <td width="183">&nbsp;<br />
		 &nbsp;<br /></td>
        </tr>
		<tr>
          <td width="183"><a href="user_info.php" class="navText">My profile</a> </td>
        </tr>
        <tr>
          <td width="183"><a href="inbox.php" class="navText">inbox</a> </td>
        </tr>
        <tr>
          <td width="183"><a href="outbox.php" class="navText">outbox</a></td>
        </tr>
        <tr>
          <td width="183"><a href="myresume.php" class="navText">my resume </a></td>
        </tr>
        <tr>
          <td width="183" height="52"><a href="apti1.html" class="navText">apti preparation </a></td>
        </tr>
        <tr>
          <td width="183"><a href="intpr1.html" class="navText">interview questions </a></td>
        </tr>
		 <tr>
          <td width="183"><a href="chp.html" class="navText">change password</a></td>
        </tr>
		    <tr>
          <td width="183" height="52"><a href="apti2new.html" class="navText">search company </a></td>
        </tr>
      </table>
 	 <br />
  	&nbsp;<br />
  	&nbsp;<br />
  	&nbsp;<br /> 	</td>
    <td width="66"></td>
    <td colspan="2" valign="top"><br />
	&nbsp;<br />
	&nbsp;<br />
	<table border="0" cellspacing="0" cellpadding="0" width="544">
     <form action="apti2new.php" method="post">
	    <tr>
          <td width="544" class="pageName">&nbsp;</td>
		</tr>

		<tr>
          <td class="bodyText"><p><span class="style1">select city</span>
            <select name="select1">
              <option value="other">other</option>
              <option value="pune">pune</option>
              <option value="mumbai">mumbai</option>
              <option value="nasik">nasik</option>
              <option value="delhi">delhi</option>
              <option value="bengalore">bengalore</option>
              <option value="jaipur">jaipur</option>
              <option value="ranchi">ranchi</option>
              <option value="nagpur">nagpur</option>
            </select>
          </p>
            <p><span class="style1">industry</span>
              <select name="select2">
                <option value="biotechnology">biotechnology</option><option value="chemical">chemical</option><option value="IT">IT</option>
<option value="Sales">Sales</option><option value="Customer Service">Customer Service</option><option value="Marketing">Marketing</option><option value="Finance">Finance</option><option value="Engg/Production">Engg/Production</option><option value="HR">HR</option><option value="Advertising">Advertising</option><option value="Purchasing">Purchasing/Supply...</option><option value="Legal">Legal</option><option value="Export/Import">Export/Import</option><option value="Others">Others</option>
              </select>
</p>
            <p>&nbsp;</p>
            <p>
              
              
              
              
              
              
              
              <input type="submit" name="submit" value="search company" />
			  <input type="hidden" name="submitted" value="TRUE" />
              &nbsp;</p></td>
        </tr></form>
      </table>
	 <br><br>
	 <br>
	 <table>
	 <tr><td>


	
	  </td></tr></table>
    </td>
    <td width="63">&nbsp;</td>
        <td width="51" valign="top"><br />
	&nbsp;<br /></td>
	<td width="34">&nbsp;</td>
  </tr>
  <tr>
    <td width="189">&nbsp;</td>
    <td width="66">&nbsp;</td>
	<td width="542">&nbsp;</td>
  </tr>
</table>
<?php
if(isset($_POST['submitted']))
{
	$cit=$_POST['select1'];
	$industry=$_POST['select2'];
	
	
	
	mysql_connect("localhost","root","");
	mysql_select_db("job_portal");

	$u="select comp_name from company where city='$city' and industry=$industry;
	
	$v = mysql_query($u) or die(mysql_error());
	while($result=mysql_fetch_array($v))
    {
		 $c=$result['comp_name'].
		echo"company is".$c;
	}
}
?>
	
	
</body>
</html>
