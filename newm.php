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
			
			$p="update user set image='$image' where user_name='".$_SESSION['nme']."';";
			mysql_query($p);


			
			//echo"thanx for sending mail".$SESSION['nme'];
			header("location:user_info.php");	
}
else
{
			header("location:newimage1.html");


			
}
?>
