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
 <br />
  	&nbsp;<br />
  	&nbsp;<br />
  	&nbsp;<br /> 	</td>
    <td width="50"></td>
    <td width="305" colspan="2" valign="top"><br />
	&nbsp;<br />
	&nbsp;<br />
	<table border="0" cellspacing="0" cellpadding="0" width="544">
        <tr>
          <td width="544" class="pageName">&nbsp;</td>
		</tr>

		<tr>
          <td class="bodyText">
		  
		 	   <?php
		  $_SESSION['nme']="$myusername";
		  $image=$_GET['image'];
			$name=$_GET['name'];
		  $abc=$_SESSION['nme'];
		  $days=$_GET['days'];
		  $span=$_GET['span'];
		  $card_no=$_GET['card_no'];
		  $card_type+$_GET['card_type'];
		 echo"<p align=center>";
		
		  echo"<img src=$image height=200 width=200 border=1>";

		//echo"<center><img src=$image height=400 width=500></center>";
		echo"<br>";
		echo"<table bordet=0><tr>";
		
		echo"<td> name of company</td><td>:</td>";
		echo"<td>".$name."</td></tr>";
		
		echo"<tr><td>advertisement span</td><td>:</td>";
		echo"<td>".$days."&nbsp;&nbsp;".$span."</td></tr>";		
		
		echo"<tr><td>payment by</td><td>:</td>";
		echo"<td>".$card_type."-card</td></tr>";
		
		echo"<tr><td>account no</td><td>:</td>";
		echo"<td>".$card_no."</td></tr>";		
		echo"</table>";
		
		echo"</p>";
		
		//echo nl2br(htmlentities($varid_id));
	  //echo"$varid_id";
 ?>
			
		  </td>
        </tr>
	

      </table>
	  </td>
    <td width="50"></td>
        <td width="190" valign="top"><br />
		&nbsp;<br /></td>
	<td width="100%">&nbsp;</td>
  </tr>
  </table>
  

</body>
</html>
