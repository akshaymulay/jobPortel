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
  	<td height="25" width="80%" colspan="4" valign="top" ><p align="right">
  	  <a href="logout.php"><span class="style1">LOGOUT</span></a></p></td>
<td>&nbsp;</td>
  </tr>
 <tr>
    <td colspan="7"></td>
  </tr>

  
     <tr>
    <td width="193" valign="top">
<table width="175" height="205" border="0" cellpadding="0" cellspacing="0" id="navigation" background="rtv2.jpg">
        <tr>
          <td width="204">&nbsp;<br />
		 &nbsp;<br /></td>
        </tr>
		        <tr >
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
        <tr >
          <td width="204"><a href="chpcmp.html" class="navText">Change password</a></td>
        </tr>
         <tr>
          <td width="204"><a href="adv.html" class="navText">Make My Advertisment <img src="w.gif" height="30" width="30"><span class="smallText"><font color="#FF0000">(Under construction)</font></span></a></td>
        </tr>
    </table>

  	 	</td>
    <td width="66"></td>
    <td colspan="2" valign="top"><br />
	
	<table border="0" cellspacing="0" cellpadding="0" width="544">
     <form action="apti2new.php" method="post">
	 <tr>
	<td><strong><font color="#16754F" size="+2">Company profile</font></strong></td>
	 </tr>
		
		<tr>
          <td width="544">
		  
<?php

		$_SESSION['nme']="$myusername";


		mysql_connect("localhost","root","");
		mysql_select_db("job_portal");
		
		$eh="select image from company where comp_name='".$_SESSION['nme']."'";
		$n = mysql_query($eh) or die(mysql_error());
		
		$im=mysql_fetch_array($n);
		$i=$im['image'];
		echo"<p align=left><a href=newimg.html>";
		echo"<img src=$i height=250 width=200 border=1>";
		echo"</a></p>";
	
	
		

		$bd="select * from company where comp_name='".$_SESSION['nme']."'";
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
			echo"<td colspan=20><a href=vac.php?vac=$vac>".$vac."</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Kindly change your vacancies status as per your requirement)</td>";
			echo"</tr>";
			
			
			
			$inf=wordwrap($info,70);
	
	
	
			echo"<tr height=23></tr>";

						
			echo"<tr rowspan=8><td>About company</td>";
			echo"<td>:</td>";
			echo"<td colspan=20>".$inf."</td>";
			echo"</tr>";
			
			
			
		
			
				    echo"</table>";

			}
					echo"<br><br><br><center><a href=renewc.html>";
		echo"<span class=style1>Click here to renew your profile</span>";
		echo"</a></center>";
		

			
?>
	
		  
		  
		  
		  
		  
		  
		  &nbsp;</td>
		</tr>

		</form>
      </table>
	

</body>
</html>
