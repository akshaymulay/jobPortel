

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
    <td colspan="2" valign="top"><br>
				<br><h2><a href="viewuser.php" class=navText><u>view registered Users</u></a></h2>
		<br><hr>
		<br>
		<font face="Times New Roman, Times, serif" size="+2" color="#999999">DETAILS OF COMPANY ARE</font>
			</center>
	
	<br><br>
	





<?php
	
	//$_SESSION['nme']="$myusername";
	$company=$_GET['company'];
	mysql_connect("localhost","root","");
	mysql_select_db("job_portal");

				$eh="select image from company where comp_name='$company'";
		$n = mysql_query($eh) or die(mysql_error());
		
		$im=mysql_fetch_array($n);
		$i=$im['image'];
		//echo"<p align=left><a href=newimg.html>";
		echo"<img src=$i height=200 width=200 border=1>";
		echo"</a></p>";
	




		$bd="select * from company where comp_name='$company'";
		$a = mysql_query($bd) or die(mysql_error());
		
		echo"<table border=0 width=800>";

		while($re=mysql_fetch_array($a))
		{





		
		$name=$re['name'];
		$street=$re['street'];
		$city=$re['city'];
		$country=$re['country'];
		$phno=$re['ph_no'];
		$comp_type=$re['comp_type'];
		$industry=$re['industry'];
		$state=$re['state'];
		$info=$re['terms'];
		$email=$re['email'];
		$vac=$re['vacancies'];
		echo"<table border=0 width=800>";
			echo"<tr><td>Company Name</td>";
			echo"<td>:</td>";
			echo"<td colspan=20>".$name."</td>";
			echo"</tr>";

			echo"<tr height=23></tr>";

			
			echo"<tr><td>Address</td>";
			echo"<td>:</td>";
			echo"<td colspan=20>".$street.",".$city.",".$state.",".$country.".";
		    echo"</td></tr>";
	
				echo"<tr height=23></tr>";

			
			echo"<tr><td>Contact Number</td>";
			echo"<td>:</td>";
			echo"<td colspan=20>".$phno."</td>";
			echo"</tr>";
			
			echo"<tr height=23></tr>";


			echo"<tr><td>Email</td>";
			echo"<td>:</td>";
			echo"<td colspan=20>".$email."</td>";
			echo"</tr>";

			
			echo"<tr height=23></tr>";
			
			echo"<tr><td>Company type</td>";
			echo"<td>:</td>";
			echo"<td colspan=20>".$comp_type."</td>";
			echo"</tr>";

			echo"<tr height=23></tr>";

			
			echo"<tr><td>Industry</td>";
			echo"<td>:</td>";
			echo"<td colspan=20>".$industry."</td>";
			echo"</tr>";
	
	
			echo"<tr height=23></tr>";

						
			echo"<tr><td>Vacancies available</td>";
			echo"<td>:</td>";
			echo"<td colspan=20>".$vac."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";
			echo"</tr>";
			
			
			
			$inf=wordwrap($info,70);
	
	
	
			echo"<tr height=23></tr>";

						
			echo"<tr rowspan=8><td>About company</td>";
			echo"<td>:</td>";
			echo"<td colspan=20>".$inf."</td>";
			echo"</tr>";
			
			
			
		
			
				    echo"</table>";

			}
	
	
	?>
		
	
	





	
	
	</td>


<center>
</center>

</center>




</table>
</body>
</html>
