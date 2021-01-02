<?php
				
	session_start();
?>

<html>

<head>

<title>Home Page</title>

<link rel="stylesheet" href="mm_travel2.css" type="text/css" />
<style type="text/css">
<!--
.style1 {color: #800040}
-->
</style>
</head>
<body  background="rtv2.jpg">
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td align="center" colspan="6"><img src="r.jpg" width="326" height="122"></td>
  </tr>
  <tr>
    <td colspan="6" id="dateformat" height="25"><p align="right"><a href="logout.php"><span class="style1">LOGOUT</span></a></p></td>
  </tr>
  <tr>
    <td valign="top"><table width="221" height="252" border="0" cellpadding="0" cellspacing="0" id="navigation" background="rtv2.jpg">
      <tr>
        <td width="221" ><a href="user_info.php" class="navText">My profile</a> </td>
      </tr>
      <tr>
        <td width="221"><a href="inbox.php" class="navText">Inbox</a> </td>
      </tr>
      <tr>
        <td width="221"><a href="outbox.php" class="navText">Outbox</a></td>
      </tr>
      <tr>
        <td width="221"><a href="myresume.php" class="navText">My resume </a></td>
      </tr>
      <tr>
        <td width="221" height="52"><a href="apti1.html" class="navText">Apti preparation </a></td>
      </tr>
      <tr>
        <td width="221"><a href="intpr1.html" class="navText">Interview questions </a></td>
      </tr>
      <tr>
        <td width="221"><a href="chp.html" class="navText">Change password</a></td>
      </tr>
      <tr>
        <td width="221" height="52"><a href="apti2new.php" class="navText">Search company </a></td>
      </tr>
    </table>
       <br />
      &nbsp;<br />
      &nbsp;<br />
      &nbsp;<br />
    </td>
    <td width="66"></td>
    <td colspan="2" valign="top"><br />
      &nbsp;<br />
      &nbsp;<br />
      <table border="0" cellspacing="0" cellpadding="0" width="544">
        <form action="apti2new.php" method="post">
          <tr>
            <td><strong><font color="#999999" size="+2">company profile</font></strong></td>
          </tr>
          <tr>
            <td width="544"><br>
                <br>
                <br>
                <?php
		$_SESSION['nme']="$myusername";
		$name=$_GET['cn'];
		$street=$_GET['str'];
		$city=$_GET['city'];
		$country=$_GET['cntry'];
		$phno=$_GET['phno'];
		$comp_type=$_GET['ctp'];
		$industry=$_GET['ind'];
		$state=$_GET['state'];
		$info=$_GET['info'];
		$vac=$_GET['vac'];
		echo"<table border=0 width=800>";
			echo"<tr><td>company name</td>";
			echo"<td>:</td>";
			echo"<td>".$name."</td>";
			echo"</tr>";

			echo"<tr height=23></tr>";

			
			echo"<tr><td>address</td>";
			echo"<td>:</td>";
			echo"<td>".$street.",".$city.",".$state.",".$country;
		    echo"</td></tr>";
	
				echo"<tr height=23></tr>";

			
			echo"<tr><td>contact number</td>";
			echo"<td>:</td>";
			echo"<td>".$phno."</td>";
			echo"</tr>";
			
			echo"<tr height=23></tr>";

			
			echo"<tr><td>company type</td>";
			echo"<td>:</td>";
			echo"<td>".$comp_type."</td>";
			echo"</tr>";

			echo"<tr height=23></tr>";

			
			echo"<tr><td>industry</td>";
			echo"<td>:</td>";
			echo"<td>".$industry."</td>";
			echo"</tr>";
	
	
			echo"<tr height=23></tr>";

						
			echo"<tr row span=5><td>about company</td>";
			echo"<td>:</td>";
			echo"<td>".$info."</td>";
			echo"</tr>";

			
			
	    echo"</table>";
		if($vac=='no')
		{
			echo"<span class=style1>";
			echo"vacancies are not available currently</span>";
		}
		else
		{
			echo"<font color=#7F1F55><h2>";
			echo"vacancies are available you can apply for it.</h2></font>";
			echo"<br><b>to send your<font color=green> RESUME </font>to the company click below</b>";
			echo"<br><center><a href=\"sn.php?cn=$cn\"><img src=submit.gif></a></center>";
		}	
		
?>
              &nbsp;</td>
          </tr>
          <tr>
            <td class="bodyText">&nbsp;</td>
          </tr>
        </form>
      </table>
      <br>
      <br>
      <br>
      <table>
        <tr>
          <td></td>
        </tr>
      </table></td>
    <td width="63">&nbsp;</td>
    <td width="51" valign="top"><br />
      &nbsp;<br /></td>
    //
    <td width="34">&nbsp;</td>
  </tr>
  <tr>
    <td width="189" height="19">&nbsp;</td>
    <td width="66">&nbsp;</td>
    <td></td>
  </tr>
</table>
</body>
</html>
