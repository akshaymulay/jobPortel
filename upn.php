<?php
		session_start();
?>


	
<?php


		$_SESSION['nme']="$myusername";

			

			$file=$_POST['file'];
	if($file!=NULL)
{		
	
			mysql_connect("localhost","root","");
			mysql_select_db("job_portal");
			
			$p="update user set resume='$file' where user_name='".$_SESSION['nme']."';";
			mysql_query($p);


			
			//echo"thanx for sending mail".$SESSION['nme'];
			header("location:uploadnew1.html");	
}
else
{
			header("location:uploadnew2.html");


			
}
?>
