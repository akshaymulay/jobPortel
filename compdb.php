<?php
		session_start();
?>
<?php



$name=$_POST['name'];
$street=$_POST['street'];
$city=$_POST['city'];
$state=$_POST['state'];
$country=$_POST['country'];
$ph_no=$_POST['phno'];
$email=$_POST['eid'];
$type=$_POST['type'];
$industry=$_POST['industry'];
$regno=$_POST['regno'];
$myusername=$_POST['lname'];
$passwd=$_POST['password1'];
$passwd2=$_POST['password2'];
$terms=$_POST['str'];
$image=$_POST['image'];
$a='no';
$time="12.20";
$d="welcome to Jobs2Day....best luck for your search....Hopes you'll enjoy our services!";

if(($name==NULL)||($street==NULL)||($city==NULL)||($state==NULL)||($ph_no==NULL)||($myusername==NULL)||($passwd==NULL)||($passwd2==NULL)||($regno==NULL)||($terms==NULL))
{


		header("location:company_form.html");
		echo"password does not matched";
		echo"click below & re-enter form";
		echo"<br><a href=company_form.html><h3>registration form</h3>";
}
else
{

	if(($passwd==$passwd2)&&($passwd!=NULL)&&(lname!=NULL))
	{
		session_register("myusername");

	$id=$_REQUEST['comp_name'];
	mysql_connect("localhost","root","");

	mysql_select_db("job_portal");
if($image!=NULL)
{
	mysql_query("insert into company values('$id','$name','$street','$city','$state','$country','$ph_no','$email','$type','$industry','$regno','$myusername','$passwd','$terms','$image','$a');");
	mysql_query("insert into comp_msg values('$id','$myusername','$d','admin','$time');");		

		header("location:comp_prof.php");

}	
else
{
	$image="njlk.jpg";
		mysql_query("insert into company values('$id','$name','$street','$city','$state','$country','$ph_no','$email','$type','$industry','$regno','$myusername','$passwd','$terms','$image','$a');");
		
		mysql_query("insert into comp_msg values('$id','$myusername','$d','admin','$time');");		
		header("location:comp_prof.php");
		
}
	}
	else
	{
		header("location:company_form.html");
		echo"password does not matched";
		echo"click below & re-enter form";
		echo"<br><a href=company_form.html><h3>registration form</h3>";
	}
}

?>
</head>
</html>
