<?php
	session_start();
?>

<?php

$_SESSION['nme']="$myusername";


$name=$_POST['name']; 
$address=$_POST['address'];
$street=$_POST['street'];
$city=$_POST['city'];
$state=$_POST['state'];
$country=$_POST['country'];
$ph_no=$_POST['phone'];
$gender=$_POST['ml'];
$qualification=$_POST['qf'];
$kskill=$_POST['kskeel'];
$expt=$_POST['exp'];
$how_many=$_POST['exp1'];
$hm=$_POST['hm'];

$file=$_POST['file'];
$email=$_POST['eid'];
$info=$_POST['info'];





if(($name==NULL)||($address==NULL)||($street==NULL)||($city==NULL)||($ph_no==NULL)||($file==NULL)||($email==NULL)||($info==NULL))
{
	echo"you left some fields empty";
	echo"<br>click below & re-enter information";
	echo"<br><a href=renew1.html><h3>registration form</h3>";
}
else
{		

	mysql_connect("localhost","root","");

	mysql_select_db("job_portal");	
	$t="update user set name='$name',address='$address',street='$street',city='$city',state='$state',country='$country',phone_no='$ph_no',gender='$gender',qualification='$qualification',kskills='$kskill',experience='$expt',how_many='$how_many',exp_span='$hm',resume='$file',email='$email',info='$info' where user_name='".$_SESSION['nme']."'";
		mysql_query($t);

			//session_register("myusername");
			header("location:user_info.php");

}
?>
