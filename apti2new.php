
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
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <!--DWLayoutTable-->
<tr> <td align="center" colspan="6"><img src="r.jpg" width="326" height="122"></td>
</tr>
<tr>
  	<td colspan="6" id="dateformat" height="25"><p align="right"><a href="logout.php"><span class="style1">LOGOUT</span></a></p>	</td>
  </tr>
 

 <tr>
    <td height="3832" valign="top">
	<table width="221" height="252" border="0" cellpadding="0" cellspacing="0" id="navigation" background="rtv2.jpg">
       
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
  	&nbsp;<br /> 	</td>
    <td width="66"></td>
    <td colspan="2" valign="top"><br />
	&nbsp;<br />
	&nbsp;<br />
	<table border="0" cellspacing="0" cellpadding="0" width="544">
     <form action="apti2new.php" method="post">
	 <tr>
	 <td class="style1"> <strong>Click on below company names to get information of respected company</font></strong></td>		
	 </tr>

		
		<tr>
          <td width="544" class="pageName">
	<?php
					
	session_start();
?>
	  
		 
<?php
		$_SESSION['nme']="$myusername";

	mysql_connect("localhost","root","");
	mysql_select_db("job_portal");

		$bd="select * from company";
		$a = mysql_query($bd) or die(mysql_error());
	
		$i=0;
		echo"<table border=0>";
		echo"<tr><td><font color=#F8000F>Company names</font></td></tr>";
		while($re=mysql_fetch_array($a))
		{
			$i++;
			$n=$re['name'];
			$str=$re['street'];
			$city=$re['city'];
			
			$country=$re['country'];
			$phone=$re['ph_no'];
			$ct=$re['comp_type'];
			$industry=$re['industry'];
			$state=$re['state'];
			$info=$re['terms'];
			$vac=$re['vacancies'];
			echo"<tr><td>".$i.". ";
			echo"<a href=\"comp_info.php?cn=$n&str=$str&city=$city&cntry=$country&phno=$phone&ctp=$ct&ind=$industry&state=$state&info=$info&vac=$vac\" class=navText>".$re['comp_name']."</a><br>";
			echo"</td></tr>";
		}
		echo"</table>";
?>
	
		  
		  
		  
		  
		  
		  
		  &nbsp;</td>
		</tr>

		<tr>
          <td class="bodyText">&nbsp;</td>
		</tr></form>
      </table>
	 <br><br>
	 <br>
	 <table>
	 <tr><td>


	
	  </td></tr></table>
    </td>
    <td width="63">&nbsp;</td>
        <td width="51" valign="top"><br />
	&nbsp;<br /></td>
	<td width="34">&nbsp;</td>
  </tr>
  <tr>
    <td width="189">&nbsp;</td>
    <td width="66">&nbsp;</td>
	<td width="542">&nbsp;</td>
  </tr>
</table>


</body>
</html>
