<?php
	session_start();
?>

<html>

<head>

<title>Home Page</title>

<link rel="stylesheet" href="mm_travel2.css" type="text/css" />
</head>
<body bgcolor="#C0DFFD">



<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#3366CC">
    <td width="382" colspan="3" rowspan="2"><img src="password.jpg" alt="Header image" width="382" height="127" border="0" /></td>
    <td width="378" height="63" colspan="3" id="logo" valign="bottom" align="center" nowrap="nowrap">job portal </td>
    <td width="100%">&nbsp;</td>
  </tr>

  <tr bgcolor="#3366CC">
    <td height="64" colspan="3" id="tagline" valign="top" align="center">jobs on demand </td>
	<td width="100%">&nbsp;</td>
  </tr>

  <tr>
    <td colspan="7" bgcolor="#003366"></td>
  </tr>

  <tr bgcolor="#CCFF99">
 
 <tr bgcolor="#CCFF99">
  	<td colspan="7" id="dateformat" height="25"><p align="right"><a href="logout.php">LOGOUT</a></p>	</td>
  </tr>
 
  </tr>
 <tr>
    <td colspan="7" bgcolor="#003366"></td>
  </tr>

 <tr>
    <td width="165" valign="top" bgcolor="#E6F3FF">
	<table width="193" height="205" border="0" cellpadding="0" cellspacing="0" id="navigation">
        <tr>
          <td width="294">&nbsp;<br />
		 &nbsp;<br /></td>
        </tr>
		  <tr>
          <td width="294"><a href="comp_prof.php" class="navText">PROFILE</a></td>
        </tr>
        <tr>
          <td width="294"><a href="iinbox.php" class="navText">INBOX</a></td>
        </tr>
        <tr>
          <td width="294"><a href="ooutbox.php" class="navText">OUTBOX</a></td>
        </tr>
        <tr>
          <td width="294"><a href="sndr.html" class="navText">SEND REQUEST </a></td>
        </tr>
        <tr>
          <td width="294"><a href="chpcmp.html" class="navText">CHANGE PASSWORD</a></td>
     </tr>
	  </table>
 	 <br />
  	&nbsp;<br />
  	&nbsp;<br />
  	&nbsp;<br /> 	</td>
    <td width="50"></td>
    <td width="305" colspan="2" valign="top"><br />
	&nbsp;<br />
	&nbsp;<br />	  
	<table border="0" cellspacing="0" cellpadding="0" width="544">
        <tr>
          <td width="544">   <h3><center>
          </center></h3></a>    </td>
		</tr>

		<tr>
          <td class="bodyText">
		  
		  <center>write your messege below</center>
 <?php
 
 echo"<form action=sndm.php method=post>";
 $un=$_GET['u'];
 $msg=$_GET['prop_id'];


      
		
		
		echo"<input type=hidden value=$un name=/>";
		echo"<input type=hidden value=$msg name=$un/>";

		
		echo"</form>";
 ?>
	</center>	  
		
		  
		  </td>
        </tr>
		<tr><td><h3>
</td></tr>
	
      </table>
	  	  </td>
    <td width="50"></td>
        <td width="190" valign="top"><br />
		&nbsp;<br /></td>
	<td width="100%"></td>
  </tr>
  </table>


</body>
</html>
