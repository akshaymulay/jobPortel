<?php				
	$_SESSION['nme']=$_REQUEST["myusername"];

?>


<html>
<head>
<title>Home Page</title></head>
<link rel="stylesheet" href="mm_travel2.css">
<body bgcolor="#C0DFFD">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#3366CC">
    <td colspan="3" rowspan="2"><p><img src="password.jpg" alt="Header image" width="382" height="127" border="0" /></p>    </td>
    <td height="63" colspan="3" id="logo" valign="bottom" align="center" nowrap="nowrap">job portal</td>
    <td width="27">&nbsp;</td>
  </tr>

  <tr bgcolor="#3366CC">
    <td height="68" colspan="3" id="tagline" valign="top" align="center">jobs on demand</td>
    <td width="27">&nbsp;</td>
  </tr>

  <tr>
    <td colspan="7" bgcolor="#003366"></td>
  </tr>

  <tr bgcolor="#CCFF99">
  	<td colspan="7" id="dateformat" height="25"><p align="right">
	<a href="logout.php">LOGOUT</a></p></td>
  </tr>
 <tr>
    <td colspan="7" bgcolor="#003366"></td>
  </tr>

 <tr>
    <td width="193" valign="top" bgcolor="#E6F3FF">
	<table width="193" height="205" border="0" cellpadding="0" cellspacing="0" id="navigation" background="rtv2.jpg">
        <tr>
          <td width="294">&nbsp;<br />
		 &nbsp;<br /></td>
        </tr>
		 

        <tr>
          <td width="294"><a href="adinbox.php" class="navText">INBOX</a></td>
        </tr>
              <tr>
          <td width="294"><a href="admin.html" class="navText">SEND MESSEGE </a></td>
        </tr>
        <tr>
          <td width="294"><a href="acinfo.php" class="navText">ACCOUNTS</a></td>
        </tr>
        
      </table></td>
    <td width="137">&nbsp;</td>
    <td colspan="2" valign="top"><br><br><br>
	<center> <h2><a href="viewuser.php">view registered user</a></h2>
		<br><h2><a href="viewcomp.php">view registered companies</a></h2>
		
		
			</center>
	
	</td>


<center>
</center>

</center>




</table>
</body>
</html>
