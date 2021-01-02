<?php
	session_start();
?>


<?php

		$_SESSION['nme']="$myusername";
		$add=$_POST['image'];
		$name=$_SESSION['nme'];
		$days=$_POST['days'];
		$span=$_POST['span'];
		$cardno=$_POST['cardno'];
		$type=$_POST['card'];
if(($add!=NULL)&&($days!=NULL)&&($cardno!=NULL))
{

		mysql_connect("localhost","root","");

		mysql_select_db("job_portal");

		$query="insert into admin_msg values('$id','$name','$add','$days','$span','$cardno','$type')";
		
		$q=mysql_query($query);
		header("location:adv1.html");

		echo"rahul u r great";

}
else
{
		header("location:adv2.html");
}
?>
