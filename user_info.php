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
    <td valign="top"><table width="200" height="252" border="0" cellpadding="0" cellspacing="0" id="navigation" background="rtv2.jpg">
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
      <tr >
        <td width="221" height="52"><a href="apti2new.php" class="navText">Search company </a></td>
      </tr>
    </table>

    </td>

    <td colspan="2" valign="top">
      
      <table border="0" cellspacing="0" cellpadding="0" width="500">
        <form action="apti2new.php" method="post">
          <tr>
            <td><strong><font color="#16754F" size="+2">User profile</font></strong></td>
          </tr>

		
		<tr>
          <td width="565">
		  
		 
<?php
		$_SESSION['nme']="$myusername";

	mysql_connect("localhost","root","");
	mysql_select_db("job_portal");
		
		$eh="select image from user where user_name='".$_SESSION['nme']."'";
		$n = mysql_query($eh) or die(mysql_error());
		
		$im=mysql_fetch_array($n);
		$i=$im['image'];
		
		echo"<p align=left><a href=newimage.html>";
		echo"<img src=$i height=280 width=200 border=1>";
		echo"</a></p>";
	
	
		

		$bd="select * from user where user_name='".$_SESSION['nme']."'";
		$a = mysql_query($bd) or die(mysql_error());
		
		echo"<table  width=745>";

		while($re=mysql_fetch_array($a))
		{
			$n=$re['name'];
			$str=$re['street'];
			$address=$re['address'];
			$city=$re['city'];
			$state=$re['state'];
			$country=$re['country'];
			$phone=$re['phone_no'];
			
			$gender=$re['gender'];
			$qualification=$re['qualification'];
			$kskill=$re['kskills'];
			$experience=$re['experience'];
			$how_many=$re['how_many'];
			$exp_span=$re['exp_span'];
			$email=$re['email'];
			$image=$re['image'];
			$info=$re['info'];
			
			echo"<tr><td>Name</td>";
			echo"<td>:</td>";
			echo"<td>".$n."</td></tr>";
			
			echo"<tr><td>Detailed address</td>";
			echo"<td>:</td>";
			echo"<td>".$str.",".$address.",".$city.",".$state.",".$country;
			echo"</td></tr>";
			
			echo"<tr><td>Gender</td>";
			echo"<td>:</td>";
			echo"<td>".$gender."</td></tr>";

			
			echo"<tr><td>Phone number</td>";
			echo"<td>:</td>";
			echo"<td>".$phone."</td></tr>";
			
			echo"<tr><td>Email</td>";
			echo"<td>:</td>";
			echo"<td>".$email."</td></tr>";
			
			echo"<tr><td>Qualification</td>";
			echo"<td>:</td>";
			echo"<td>".$qualification."</td></tr>";
			
			echo"<tr><td>Key skills</td>";
			echo"<td>:</td>";
			echo"<td>".$kskill."</td></tr>";
			
			if($experience=='yes')
			{
				echo"<tr><td>Experience</td>";
				echo"<td>:</td>";
				echo"<td>".$how_many."&nbsp;".$exp_span."</td></tr>";

			}
			else
			{
				echo"<tr><td>Experience</td>";
				echo"<td>:</td>";
				echo"<td> Fresher </td></tr>";
			}
			
			echo"<tr><td>About myself</td>";
			echo"<td>:</td>";
			echo"<td>".$info."</td></tr>";	
		
		echo"</table>";
	}
		echo"<br><br><a href=renew.html>";
		echo"<span class=style1>Click here to renew your profile</span>";
		echo"</a>";
		
?>
	
		  
		  
		  
		  
		  
		  
		  &nbsp;</td>
		</tr>

		</form>
      </table>
	 <br><br>
	 <br>
	 <table>
	 <tr><td>


	
	  </td></tr></table>
    </td>
    <td width="4">&nbsp;</td>
        <td width="4" valign="top"><br />
	&nbsp;<br /></td>
	<td width="4">&nbsp;</td>
  </tr>
  <tr>
    <td width="221">&nbsp;</td>
    <td width="5">&nbsp;</td>
	<td width="528">&nbsp;</td>
	<td width="4">&nbsp;</td>
  </tr>
</table>


</body>
</html>
