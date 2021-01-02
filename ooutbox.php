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
    <td width="350" valign="top">
<table width="175" height="205" border="0" cellpadding="0" cellspacing="0" id="navigation" background="rtv2.jpg">
        
		        <tr>
          <td width="204"><a href="comp_prof.php" class="navText">Profile</a></td>
        </tr>

        <tr>
          <td width="204"><a href="iinbox.php" class="navText">Inbox</a></td>
        </tr>
        <tr>
          <td width="204"><a href="ooutbox.php" class="navText">Outbox</a></td>
        </tr>
        <tr >
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
    <td width="245" colspan=7> <table width=100% height="300" border=0 cellpadding=0 cellspacing=0  id="navigation">
      <tr bgcolor="#E6F3FF">
        
        <td valign=top colspan=7> <table width=100% height="200" border=0 cellpadding=2 cellspacing=0 bgcolor=#e8eef7 class=th  id="navigation">

		
		<table width=800 cellpadding=2 cellspacing=0 border=0
bgcolor="#C3D9FF">

<tr bgcolor="#E6F3FF"><td><h1>OUTBOX</h1></td></tr>

<tr>
<td>

<a href="?&">Refresh</a>
</td>
</tr>

		</table>	
		
	
		
		
		
          <form action="ooutmsg.php" method="post">
            <?php
		
	$_SESSION['nme']="$myusername";
	mysql_connect("localhost","root","");
	mysql_select_db("job_portal");

	$time="12.13am";


	$u="select * from comp_out where comp_name='".$_SESSION['nme']."' order by u_id desc";

	$v = mysql_query($u) or die(mysql_error());
	while($result=mysql_fetch_array($v))
	{
		
				echo"<tr bgcolor=#ffffff><td>";
                echo"<input type=checkbox name=a value=1></td>";
				echo"<td><font size=1><font color=#006633> from:: ".$_SESSION['nme']."</font></td>";
		$id=$result['u_id'];				
		$r=$result['msg'];

		echo "<td><a href=\"ooutmsg.php?prop_id=".$r."\" class=navText><b>To".$result['user_name']."</b></a></td>";
		echo "<td height=36 valign=top><a href=\"deleteco.php?prop_id=$r&id=$id\" class=navText><b>delete</b></a></td>";
		//echo"<td>".$time."</td>";
		echo"</tr>";

	}  
	
	
?>
          </form>
</table>
</body>

</html>

