

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
   <td width="200" valign="top" colspan="7">
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
        <tr>
          <td width="146"><a href="acinfo.html" class="navText">Accounts</a></td>
        </tr>
	 </table>
</td>
    <td width="137" border=1>&nbsp;</td>
    <td colspan="2" valign="top"><br><br><br>
		<br><h2><a href="viewuser.php" class=navText><u>view registered users</u></a></h2>
		
		<br><hr>
		<br>
		<font face="Times New Roman, Times, serif" size="+2" color="#999999">REGISTERED COMPANIES ARE</font>
			</center>
	
	<br><br>
	<?php
	
	//$_SESSION['nme']="$myusername";

	mysql_connect("localhost","root","");
	mysql_select_db("job_portal");
		$i=0;
		$eh="select comp_name from company";
		$n = mysql_query($eh) or die(mysql_error());
		echo"<table>";
		echo"<tr><th>no.</th><th>company name</th><th>&nbsp;</th><th align=left>delete company</th><th>&nbsp;<th>details</th></tr>";
		
		while($im=mysql_fetch_array($n))
		{
			$i++;
			$company=$im['comp_name'];
			echo"<tr><td>".$i."</td><td><b><font color=green>".$company."</font></b></td><td>&nbsp;</td><td><a href=deletecomp.php?company=$company class=navText>delete</a></td><td>&nbsp;</td><td><a href=viewcdetails.php?company=$company class=navText>view</a></td></tr>";
		}
		
		echo"</table>";
	
	
	
	?>
		
	
	
	
	
	</td>


<center>
</center>

</center>




</table>
</body>
</html>
