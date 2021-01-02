
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
		<br><h2><a href="viewcomp.php" class=navText><u>view registered companies</u></a></h2>
		
		<br><hr>
		<br>
		<font face="Times New Roman, Times, serif" size="+2" color="#999999">DETAILS OF USER ARE</font>
			</center>
			
			<br><br>
	<?php
	
	//$_SESSION['nme']="$myusername";

	$user=$_GET['usr'];
	mysql_connect("localhost","root","");
	mysql_select_db("job_portal");
			$eh="select image from user where user_name='$user'";
		$n = mysql_query($eh) or die(mysql_error());
		
		$im=mysql_fetch_array($n);
		$i=$im['image'];
		
		//echo"<p align=left><a href=newimage.html>";
		echo"<img src=$i height=300 width=200 border=1>";
		echo"</a></p>";
	
	
		

		$bd="select * from user where user_name='$user'";
		$a = mysql_query($bd) or die(mysql_error());
		
		echo"<table border=0 width=800>";

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
			
			echo"<tr><td>name</td>";
			echo"<td>:</td>";
			echo"<td>".$n."</td></tr>";
			
			echo"<tr><td>detailed address</td>";
			echo"<td>:</td>";
			echo"<td>".$str.",".$address.",".$city.",".$state.",".$country;
			echo"</td></tr>";
			
			echo"<tr><td>gender</td>";
			echo"<td>:</td>";
			echo"<td>".$gender."</td></tr>";

			
			echo"<tr><td>phone number</td>";
			echo"<td>:</td>";
			echo"<td>".$phone."</td></tr>";
			
			echo"<tr><td>email</td>";
			echo"<td>:</td>";
			echo"<td>".$email."</td></tr>";
			
			echo"<tr><td>qualification</td>";
			echo"<td>:</td>";
			echo"<td>".$qualification."</td></tr>";
			
			echo"<tr><td>key skills</td>";
			echo"<td>:</td>";
			echo"<td>".$kskill."</td></tr>";
			
			if($experience=='yes')
			{
				echo"<tr><td>experience</td>";
				echo"<td>:</td>";
				echo"<td>".$how_many."&nbsp;".$exp_span."</td></tr>";

			}
			else
			{
				echo"<tr><td>experience</td>";
				echo"<td>:</td>";
				echo"<td> fresher </td></tr>";
			}
			
			echo"<tr><td>about myself</td>";
			echo"<td>:</td>";
			echo"<td>".$info."</td></tr>";	
		
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
