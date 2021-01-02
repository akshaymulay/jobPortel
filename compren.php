<?php
	session_start();
?>


<?php

$_SESSION['nme']="$myusername";


$name=$_POST['name']; 
$street=$_POST['street'];
$city=$_POST['city'];
$state=$_POST['state'];
$country=$_POST['country'];
$ph_no=$_POST['phno'];
$comp_type=$_POST['type'];
$industry=$_POST['industry'];
$email=$_POST['eid'];
$terms=$_POST['str'];





if(($name==NULL)||($street==NULL)||($city==NULL)||($ph_no==NULL)||($email==NULL)||($terms==NULL))
{
	echo"you left some fields empty";
	echo"<br>click below & re-enter information";
	echo"<br><a href=renewc.html><h3>profile renew</h3>";
}
else
{		

	mysql_connect("localhost","root","");

	mysql_select_db("job_portal");	
	$t="update company set name='$name',street='$street',city='$city',state='$state',country='$country',ph_no='$ph_no',comp_type='$comp_type',industry='$industry',email='$email',terms='$terms' where comp_name='".$_SESSION['nme']."'";
		mysql_query($t);

			//session_register("myusername");
			header("location:comp_prof.php");

}
?>
