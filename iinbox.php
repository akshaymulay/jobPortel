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
  	<td height="25" colspan="6" valign="top" ><p align="right">
  	  <a href="logout.php"><span class="style1">LOGOUT</span></a></p></td>
  </tr>
 <tr>
    <td colspan="7"></td>
  </tr>

  
     <tr>
    <td width="193" valign="top">
<table width="175" height="205"  cellpadding="0" cellspacing="0" id="navigation" background="rtv2.jpg">
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
    <td width="100" colspan=6> <table width=100% height="300" border=0 cellpadding=0 cellspacing=0  id="navigation"> 
      <tr bgcolor="#E6F3FF">
        
        <td valign=top colspan=6> <table width=250% height="200" border=0 cellpadding=2 cellspacing=0 bgcolor=#e8eef7 class=th  id="navigation">

		
		<table width=100% cellpadding=2 cellspacing=0 border=0
bgcolor="#C3D9FF">

<tr bgcolor="#E6F3FF"><td><h1>INBOX</h1></td><td></td></tr>

<tr>
<td>

<a href="?&">Refresh</a>
</td>
<td align=right>
</td></tr>

		</table>	
		
		
	
		
		
          <form action="showresume.php" method="post">
<?php
		
	$_SESSION['nme']="$myusername";
	mysql_connect("localhost","root","");
	mysql_select_db("job_portal");

	$time="12.13am";
	$u="select * from comp_msg where comp_name='".$_SESSION['nme']."' order by c_id desc";

	$v = mysql_query($u) or die(mysql_error());
	while($result=mysql_fetch_array($v))
	{
				echo"<tr bgcolor=#ffffff><td>";
                echo"<input type=checkbox name=a value=1></td>";
				echo"<td><font size=1><font color=#006633> hi dear ".$_SESSION['nme']."</font></td>";
		$r=$result['msg'];
		$u=$result['user_name'];				
		$id=$result['c_id'];
		echo "<td><a href=\"showresume.php?prop_id=$r&um=$u\" CLASS=navText><b>you have a message from ".$u."</b></a></td>";
		echo "<td><a href=\"deletec.php?prop_id=$r&cid=$id\" class=navText><b>delete</b></a></td>";

		//echo"<td>".$time."</td>";
		echo"</tr>";

	}  
	
	
?>
          </form>
</table></td>
</body>

</html>


