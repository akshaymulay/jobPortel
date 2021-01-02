<?php
session_start();
?>

<html>
<head>
<title>Home Page</title>
<style type="text/css">
<!--
.style1 {color: #800040}
-->
</style>
</head>
<link rel="stylesheet" href="mm_travel2.css">
<body  background="rtv2.jpg">

 <form action="edmsg.php" method="post">

<table width="99%" border="0" cellspacing="0" cellpadding="0">
  <tr> <td align="center" colspan="9"><img src="r.jpg" width="326" height="122"></td>
</tr>
  <tr>
    <td colspan="7" id="dateformat" height="24"><p align="right"><a href="logout.php"><span class="style1">LOGOUT</span></a></p></td>
  </tr>
  <tr bgcolor="#007FFF">
    <td colspan="7" bgcolor="#003366"></td>
  </tr>
 <tr>
    <td width="251" valign="top">
	<table width="221" height="349" border="0" cellpadding="0" cellspacing="0" id="navigation" background="rtv2.jpg">
        
		<tr>
          <td width="183"><a href="user_info.php" class="navText">My profile</a> </td>
        </tr>

        <tr>
          <td width="183"><a href="inbox.php" class="navText">Inbox</a> </td>
        </tr>
        <tr>
          <td width="183"><a href="outbox.php" class="navText">Outbox</a></td>
        </tr>
        <tr>
          <td width="183"><a href="myresume.php" class="navText">My resume </a></td>
        </tr>
        <tr>
          <td width="183" height="52"><a href="apti1.html" class="navText">Apti preparation </a></td>
        </tr>
        <tr>
          <td width="183"><a href="intpr1.html" class="navText">Interview questions </a></td>
        </tr>
		 <tr>
          <td width="183"><a href="chp.html" class="navText">Change password</a></td>
        </tr>
		
		
		<tr>
          <td width="183"><a href="apti2new.php" class="navText">Search company</a></td>
        </tr>
	    </table>
 	 	</td>
    <td width="130"></td>
    <td colspan="2" valign="top"><br />
	
<?php	
$_SESSION['nme']="$myusername";

		mysql_connect("localhost","root","");

		mysql_select_db("job_portal");

		$res="select resume from user where user_name='".$_SESSION['nme']."'";
		
		$q=mysql_query($res);
		$s=mysql_fetch_array($q);

			
				$part=pathinfo("$s[resume]");
				$dr=$part['dirname'];
				$fl=$part['basename'];
			
		
			$sd=$s['resume'];
			echo"<b><iframe src=$sd height=1000 width=800> </iframe></b>";
	
			$content=$sd;
	
			
		/*	
			$word = new COM("word.application") or die ("Could not initialise MS Word object.");
		$word->Documents->Open(realpath("$sd"));
// Extract content.
		$content = (string) $word->ActiveDocument->Content;
				header("Content-Transfer-Encoding: binary");

		echo $content;
			$word->ActiveDocument->Close(false);
		$word->Quit();
		$word = null;
		unset($word);
			
			
		//echo $content; */
			
			
			
			
			
			
			
			
			
			
			
			
		/*	
			
		$file=fopen("$sd","r");
	while(!feof($file))
		{
			//$file = fopen('$sd', 'w+');
		//	fwrite($file, $text);
			$line=fgets($file);
			echo"$line";
			echo"<br>";
		}
		fclose($file);
		
*/
?>

		
	
	
	
	
	
	</td>
    <td width="30">
	</td>
    <td width="114" valign="top"></td>
	<td width="4"></td>
  </tr>
  
  
  <tr><td></td>
  <td width="30" colspan=2>
	</td>
    <td width="114" valign="top">
	
	
  </tr>
<tr><td>  
  	
	</td>
    <td width="30">
	</td>
    <td width="114" valign="top"><p align="center"><a href="uploadnew.html"><font color="#FF0000"><strong><span class="style1">Upload my new resume</strong></span></font></a>
</p>
	</td>
	<td width="4"></td>
  </tr>

  
  
</table>


</form>
</body>
</html>
