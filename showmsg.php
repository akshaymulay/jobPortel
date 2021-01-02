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
  <tr>
    <td colspan="7"></td>
  </tr>
  <tr>
    <td width="199" height="360" valign="top">
	<table width="221" height="352" border="0" cellpadding="0" cellspacing="0" id="navigation" background="rtv2.jpg">
	  <tr>
          <td width="246"><a href="user_info.php" class="navText">My profile</a> </td>
        </tr>
	  <tr>
        <td width="246"><a href="inbox.php" class="navText">Inbox</a></td>
      </tr>
      <tr>
        <td width="246"><a href="outbox.php" class="navText">Outbox</a></td>
      </tr>
      <tr>
        <td width="246"><a href="myresume.php" class="navText">My resume </a></td>
      </tr>
      <tr>
        <td width="246"><a href="apti1.html" class="navText">Apti preparation </a></td>
      </tr>
      <tr>
        <td width="246"><a href="intpr1.html" class="navText">Interview question </a></td>
      </tr>
      <tr >
        <td width="246"><a href="chp.html" class="navText">Change password</a></td>
      </tr>
      <tr>
        <td width="246"><a href="apti2new.php" class="navText">Search company</a></td>
      </tr>
	  
	  
	  
	  
    </table> 	 <br />
  	&nbsp;<br />
  	&nbsp;<br />
  	&nbsp;<br /> 	</td>
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
			$cn=$_GET['cnm'];
			$day=$_GET['day'];
			$month=$_GET['month'];
			$year=$_GET['year'];
		  $abc=$_SESSION['nme'];
		$a['item']=wordwrap($varid_id,70);
		if($cn=='admin')
		{
		echo nl2br(htmlentities($a['item']));
	  }
	  else
	  {
	  //echo"$varid_id";
	  	echo nl2br(htmlentities($a['item']));
		echo"<br><br><br><br><br><br><br><br><br><br><hr><br>";
		echo"You have to send your resume before date  :\"".$day."-".$month."-".$year."\"";
	  	echo"<br><a href=\"replymsg.php?prop_id=$a&cnm=$cn\"><span class=style1>Send resume to sender company</span></a>";
	  //$b=$a;
		}	
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
