<?php
	session_start();
?>



<?php

		$_SESSION['nme']="$myusername";
		$varid_id=$_GET['prop_id'];
		$id=$_GET['cid'];
		$abc=$_SESSION['nme'];
		$a=$varid_id;



		mysql_connect("localhost","root","");

		mysql_select_db("job_portal");

		$res="delete from user_out where c_id='$id' and msg='$varid_id' and user_name='".$_SESSION['nme']."'";
		
		$q=mysql_query($res);

		header("location:outbox.php");



?>
