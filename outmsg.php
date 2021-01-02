<?php
	session_start();
?>

<html>
<head>
<title>Home Page</title>
<style type="text/css">
<!--
.style1 {color: #800040}
-->
</style>
</head>
<link rel="stylesheet" href="mm_travel2.css">
<body  background="rtv2.jpg">

 <form action="edmsg.php" method="post">

<table width="99%" border="0" cellspacing="0" cellpadding="0">
  <tr> <td align="center" colspan="9"><img src="r.jpg" width="326" height="122"></td>
</tr>
  <tr>
    <td colspan="7" id="dateformat" height="24"><p align="right"><a href="logout.php"><span class="style1">LOGOUT</span></a></p></td>
  </tr>
  <tr bgcolor="#007FFF">
    <td colspan="7" bgcolor="#003366"></td>
  </tr>
  <tr >
    <td width="700" height="360" valign="top">
	<table width="209" height="352" border="0" cellpadding="0" cellspacing="0" id="navigation" background="rtv2.jpg">
	  <tr>
          <td width="234"><a href="user_info.php" class="navText">My profile</a> </td>
      </tr>
	  <tr>
        <td width="234"><a href="inbox.php" class="navText">inbox</a></td>
      </tr>
      <tr>
        <td width="234"><a href="outbox.php" class="navText">outbox</a></td>
      </tr>
      <tr>
        <td width="234"><a href="myresume.php" class="navText">my resume </a></td>
      </tr>
      <tr>
        <td width="234"><a href="apti1.html" class="navText">apti preparation </a></td>
      </tr>
      <tr>
        <td width="234"><a href="intpr1.html" class="navText">interview question </a></td>
      </tr>
      <tr>
        <td width="234"><a href="chp.html" class="navText">change password</a></td>
      </tr>
      <tr>
        <td width="234"><a href="apti2new.php" class="navText">search company</a></td>
      </tr>
	  
	  
	  
	  
    </table>
  	</td>
    <td width="50"></td>
    <td width="305" colspan="2" valign="top">
	
	<table border="0" cellspacing="0" cellpadding="0" width="544">
        

		<tr>
          <td class="bodyText">
		  
		     <?php
		  $_SESSION['nme']="$myusername";
		  $varid_id=$_GET['prop_id'];
		  
					echo"<b><iframe src=$varid_id height=1000 width=800> </iframe></b>";

		  		  
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
