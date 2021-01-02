<?php

	$user_name=$_GET['user'];
	
		mysql_connect("localhost","root","");	
		mysql_select_db("job_portal");
		
		$eh="delete from user where user_name='$user_name'";
		$n = mysql_query($eh) or die(mysql_error());

		header("location:viewuser.php");


?>
