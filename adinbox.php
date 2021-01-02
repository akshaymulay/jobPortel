<?php
	session_start();
?>


<html>
<head>
<title>Home Page</title>
<style type="text/css">
<!--
.style4 {color: #800040}
.style6 {color: #800040; font-size: 18px; }
-->
</style>
</head>
<link rel="stylesheet" href="mm_travel2.css">
<body  background="rtv2.jpg">
<table width="102%" border="0" cellspacing="0" cellpadding="0">
  <tr>
   <td colspan="4" align="center" valign="top"><img src="r.jpg" width="326" height="122"></td>
  </tr>

  <tr>
  	<td colspan="7" height="25"><p align="right">
	<a href="logout.php"><span class="style4">LOGOUT</span></a></p></td>
  </tr>
</table>
 <table>
 <tr>
   <td width="800" valign="top" colspan="7">
	<table width="172" height="200" border="0" cellpadding="0" cellspacing="0" id="navigation" background="rtv2.jpg">
        <tr>
          <td width="146">&nbsp;<br />
            <br /></td>
        </tr>
		  

        <tr>
          <td width="146"><a href="adinbox.php" class="navText">Inbox</a></td>
        </tr>
        
        <tr>
          <td width="146"><a href="admin.html" class="navText">Send message </a></td>
        </tr>
        <tr >
          <td width="146"><a href="acinfo.html" class="navText">Accounts</a></td>
        </tr>
	 </table>

		</td>
	    <td width="245" colspan=4> <table width=100% height="332" border=0 cellpadding=0 cellspacing=0  id="navigation">
      <tr bgcolor="#E6F3FF">
        
        <td valign=top colspan=7> <table width=100% height="200" border=0 cellpadding=2 cellspacing=0 bgcolor=#e8eef7 class=th  id="navigation">

		
		<table width=800 cellpadding=2 cellspacing=0 border=0
bgcolor="#C3D9FF" >

<tr bgcolor="#E6F3FF"><td><h1>INBOX</h1></td><td></td></tr>

<tr>
<td>

<a href="?&">Refresh</a>
</td>
<td align=right>
</td></tr>

		</table>		

		
		
            <?php
		
	$_SESSION['nme']="$myusername";
	mysql_connect("localhost","root","");
	mysql_select_db("job_portal");

	$time="12.13am";
	$u="select * from admin_msg order by id desc";

	$v = mysql_query($u) or die(mysql_error());
	while($result=mysql_fetch_array($v))
	{
				echo"<tr bgcolor=#ffffff><td>";
                echo"<input type=checkbox name=a value=1></td>";
				echo"<td><font size=1><font color=#006633> hi dear ".$_SESSION['nme']."</font></td>";
		$id=$result['id'];
		$image=$result['image'];
		$name=$result['name'];
		$days=$result['days'];
		$span=$result['span'];
		$card_no=$result['card_no'];
		$card_type=$result['card_type'];

		echo "<td height=36><a href=\"showim.php?image=$image&name=$name&days=$days&span=$span&card_no=$card_no&card_type=$card_type\" class=navText><b>advertisement request from ".$name."</b></a></td>";
		echo "<td height=36><a href=\"deladm.php?id=$id\" class=navText><b>delete</b></a></td>";
		echo"</tr>";

	}  
	
?>
</table></td></tr></table>
</body>

</html>


