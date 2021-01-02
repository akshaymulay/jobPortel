<?php			
	session_start();
?>


<?php

		
		$_SESSION['nme']="$myusername";
		$i=$_GET['vac'];

		mysql_connect("localhost","root","");
		mysql_select_db("job_portal");
		

		
		if($i=='yes')
		{
	
			$eh="update company set vacancies='no' where comp_name='".$_SESSION['nme']."'";
			$n = mysql_query($eh) or die(mysql_error());
			header("location:comp_prof.php");


		}
		else
		{
			
			$eh="update company set vacancies='yes' where comp_name='".$_SESSION['nme']."'";
			$n = mysql_query($eh) or die(mysql_error());
			header("location:comp_prof.php");

		}
?>			
