<?php
		session_start();
?>


	
<?php


		$_SESSION['nme']="$myusername";

			

			$image=$_POST['image'];
	if($image!=NULL)
{		
	
			mysql_connect("localhost","root","");
			mysql_select_db("job_portal");
			
			$p="update company set image='$image' where comp_name='".$_SESSION['nme']."';";
			mysql_query($p);


			
			//echo"thanx for sending mail".$SESSION['nme'];
			header("location:comp_prof.php");	
}
else
{
			header("location:newimg.html");


			
}
?>
