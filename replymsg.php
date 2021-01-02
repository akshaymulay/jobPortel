<?php
	session_start();
?>	
<html>
<body>	
		  
  <?php
  	
	
	//$msg=$varid_id;
	$msg=$_GET['prop_id'];
	$cn=$_GET['cnm'];
	$_SESSION['nme']="$myusername";
	$abc=$_SESSION['nme'];
	$time="12.13am";
	$un=0;
	
	
		mysql_connect("localhost","root","");
		mysql_select_db("job_portal");
		
		

		$resume="select resume from user where user_name='".$_SESSION['nme']."'";
		
		$q=mysql_query($resume);
		$s=mysql_fetch_array($q);
		$res=$s['resume'];
		
		/*$query="select comp_name from user_msg where user_name='$abc' and msg='$msg'";
		$m=mysql_query($query);
		$cn=mysql_fetch_array($m);*/

		//echo"hiiiiiiiiii".$cn."<br>";
		
		mysql_query("insert into comp_msg values('$un','$cn','$res','$abc','$time');");
		
		mysql_query("insert into user_out values('$un','$cn','$res','$abc','$time');");
//echo"your resume is send successfully to".$cn;
		//echo"hiiiiiii".$msg;
		header("location:inbox1.php");
		
?>
</body></html>
