<?php
	session_start();
?>



<?php

		$_SESSION['nme']="$myusername";
		$varid_id=$_GET['prop_id'];
		$id=$_GET['uid'];
		$abc=$_SESSION['nme'];
		$a=$varid_id;



		mysql_connect("localhost","root","");

		mysql_select_db("job_portal");

		$res="delete from user_msg where u_id='$id' and user_name='".$_SESSION['nme']."'";
		
		$q=mysql_query($res);

		header("location:inbox.php");



?>
