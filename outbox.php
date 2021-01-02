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
  <tr>
    <td width="800" height="360" valign="top">
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
      <tr>
        <td width="246"><a href="chp.html" class="navText">Change password</a></td>
      </tr>
      <tr>
        <td width="246"><a href="apti2new.php" class="navText">Search company</a></td>
      </tr>
	  
	  
	  
	  
    </table></td>
    <td width="245" colspan=3> <table width=100% height="332" border=0 cellpadding=0 cellspacing=0  id="navigation">
      <tr bgcolor="#E6F3FF">
        
        <td valign=top colspan=4> <table width=100% height="200" border=0 cellpadding=2 cellspacing=0 bgcolor=#e8eef7 class=th  id="navigation">

		
		<table width=800 cellpadding=2 cellspacing=0 border=0
bgcolor="#C3D9FF">

<tr bgcolor="#E6F3FF"><td><h1>OUTBOX</h1></td><td></td></tr>

<tr>
<td align="center">

<a href="?&">Refresh</a>
</td>
<td>
</td></tr>

		</table>		
		
		
		
		
          <form action="outmsg.php" method="post">
            <?php
		
	$_SESSION['nme']="$myusername";
	mysql_connect("localhost","root","");
	mysql_select_db("job_portal");

	$time="12.13am";


	$u="select * from user_out where user_name='".$_SESSION['nme']."' order by c_id desc";

	$v = mysql_query($u) or die(mysql_error());
	while($result=mysql_fetch_array($v))
	{
		
				echo"<tr bgcolor=#FFFFFF><td>";
                echo"<input type=checkbox name=a value=1></td>";
				echo"<td><font size=1><font color=#006633> from:: ".$_SESSION['nme']."</font></td>";
		$s=$result['c_id'];				
		$r=$result['msg'];

		echo "<td><a href=\"outmsg.php?prop_id=".$r."\"><b>To".$result['comp_name']."</b></a></td>";
		echo "<td height=36 valign=top bgcolor=#E6F3FF><a href=\"deleteuo.php?prop_id=$r&cid=$s\" class=navText><b>delete</b></a></td>";
		//echo "<td height=36 valign=top bgcolor=#E6F3FF><a href=\"deleteuo.php?prop_id=$r\" class=navText><b>Delete</b></a></td>";
		
		//echo"<td>".$time."</td>";
		echo"</tr>";

	}  
	
	
?>
          </table></td></tr></table></td></tr></table></form>

</body>

</html>

