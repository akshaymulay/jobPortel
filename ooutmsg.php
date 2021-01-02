<?php
	session_start();
?>
<html>
<head>
<title>Home Page</title>
<style type="text/css">
<!--
.style1 {color: #800040}
.style14 {font-size: 10px}
.style16 {color: #800040; font-weight: bold; }
.style17 {
	color: #800040;
	font-size: 16px;
	font-weight: bold;
}
-->
</style>
</head>
<link rel="stylesheet" href="mm_travel2.css">
<body  background="rtv2.jpg">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr> <td width="229" height="122">&nbsp;</td>
    <td width="18">&nbsp;</td>
    <td colspan="3" align="center" valign="top"><img src="r.jpg" width="326" height="122"></td>
<td width="232">&nbsp;</td>
  </tr>



  <tr>
    <td colspan="7"></td>
  </tr>

  <tr>
  	<td height="25" colspan="7" valign="top" ><p align="right">
  	  <a href="logout.php"><span class="style1">LOGOUT</span></a></p></td>
  </tr>
 <tr>
    <td colspan="7"></td>
  </tr>

  
     <tr>
    <td width="193" valign="top">
<table width="175" height="205" border="0" cellpadding="0" cellspacing="0" id="navigation" background="rtv2.jpg">
        <tr>
          <td width="204">&nbsp;<br />
		 &nbsp;<br /></td>
        </tr>
		        <tr>
          <td width="204"><a href="comp_prof.php" class="navText">Profile</a></td>
        </tr>

        <tr>
          <td width="204"><a href="iinbox.php" class="navText">Inbox</a></td>
        </tr>
        <tr>
          <td width="204"><a href="ooutbox.php" class="navText">Outbox</a></td>
        </tr>
        <tr>
          <td width="204"><a href="sndr.html" class="navText">Send request </a></td>
        </tr>
        <tr>
          <td width="204"><a href="chpcmp.html" class="navText">Change password</a></td>
        </tr>
         <tr>
          <td width="204"><a href="adv.html" class="navText">Make My Advertisment <img src="w.gif" height="30" width="30"><span class="smallText"><font color="#FF0000">(Under construction)</font></span></a></td>
        </tr>
    </table>
		</td>
    <td width="50"></td>
    <td width="305" colspan="2" valign="top"><br />
	&nbsp;<br />
	&nbsp;<br />
	<table border="0" cellspacing="0" cellpadding="0" width="544">
        <tr>
          <td width="544" class="pageName">&nbsp;</td>
		</tr>

		<tr>
          <td class="bodyText">
		  
		   <?php
		  $_SESSION['nme']="$myusername";
		  $varid_id=$_GET['prop_id'];
		  
		// $a=$_POST['id'];
		  echo"$varid_id";
		  		  
		    ?>
			
		  </td>
        </tr>
	
      </table>
	  </td>
    <td width="50"></td>
        <td width="190" valign="top"><br />
		&nbsp;<br /></td>
	<td width="100%">&nbsp;</td>
  </tr>
  </table>


</body>
</html>
