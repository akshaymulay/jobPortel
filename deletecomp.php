<?php

	$comp_name=$_GET['company'];
	
		mysql_connect("localhost","root","");	
		mysql_select_db("job_portal");
		
		$eh="delete from company where comp_name='$comp_name'";
		$n = mysql_query($eh) or die(mysql_error());

		header("location:viewcomp.php");


?>
