<?php
	session_start();
?>



<?php

		$_SESSION['nme']="$myusername";
		$varid_id=$_GET['prop_id'];
		$id=$_GET['id'];
		$abc=$_SESSION['nme'];
		$a=$varid_id;



		mysql_connect("localhost","root","");

		mysql_select_db("job_portal");

		$res="delete from comp_out where u_id='$id' and comp_name='".$_SESSION['nme']."'";
		
		$q=mysql_query($res);

		header("location:ooutbox.php");



?>
