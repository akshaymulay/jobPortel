<?php
	session_start();
?>


<?php


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
$salary=$_POST['salexp'];
$ejob=$_POST['ejob'];
$myusername=$_POST['lname'];
$passwd=$_POST['passwd1'];
$passwd2=$_POST['passwd2'];
$time="1.47am";
$file=$_POST['file'];
$image=$_POST['image'];
$email=$_POST['eid'];

$c="welcome to Jobs2Day....best luck for your job....Hopes you'll enjoy our services!";
$d="Jobs2Day team welcomes you India's No.1 job search website... ";
$info=$_POST['info'];
if(($name==NULL)||($address==NULL)||($street==NULL)||($city==NULL)||($ph_no==NULL)||($myusername==NULL)||($file==NULL)||($email==NULL)||($passwd==NULL)||($passwd2==NULL)||($state==NULL||($kskill==NULL)))
{
	header("location:user_form.html");
	echo"you left some fields empty";
	echo"<br>click below & re-enter form";
	echo"<br><a href=user_form.html><h3>registration form</h3>";
}
else
{
	if($passwd==$passwd2)
	{


		
		$id=$_REQUEST["user_name"];


	mysql_connect("localhost","root","");

	mysql_select_db("job_portal");

	if($image!=NULL)
	{
	mysql_query("insert into user values('$id','$name','$address','$street','$city','$state','$country','$ph_no','$gender','$qualification','$kskill','$expt','$how_many','$hm','$salary','$ejob','$myusername','$passwd','$file','$email','$image','$info');");
	
		mysql_query("insert into user_msg values('$id','$myusername','$c','Admin','1','2','2011','$time');");

		mysql_query("insert into user_msg values('$id','$myusername','$d','Admin','1','2','2011','$time');");

	
	}
	else
	{
			$image="contact.jpg";	
		mysql_query("insert into user values('$id','$name','$address','$street','$city','$state','$country','$ph_no','$gender','$qualification','$kskill','$expt','$how_many','$hm','$salary','$ejob','$myusername','$passwd','$file','$email','$image','$info');");

	mysql_query("insert into user_msg values('$id','$myusername','$c','admin','1','2','2011','$time');");
	
	
		mysql_query("insert into user_msg values('$id','$myusername','$d','admin','1','2','2011','$time');");

	}



			session_register("myusername");
			header("location:intpr1.html");

	 }
	else
	{
		header("location:user_form.html");
		echo"password does not matched";
		echo"click below & re-enter form";
		echo"<br><a href=user_form.html><h3>registration form</h3>";

	}
}
?>

