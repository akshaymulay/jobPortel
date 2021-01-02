<?php
	session_start();
?>



<?php

		$_SESSION['nme']="$myusername";
		$id=$_GET['id'];



		mysql_connect("localhost","root","");

		mysql_select_db("job_portal");

		$res="delete from admin_msg where id='$id'";
		
		$q=mysql_query($res);

		header("location:adinbox.php");



?>
