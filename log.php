<?php
session_start();
?>

<?php

$myusername=$_POST['myusername'];
$passwd=$_POST['mypassword'];
$mem=$_POST['member'];
if(($myusername==NULL)||($passwd==NULL))
{
	header("location:login1.html");
}
//user login
else if($mem==1)
{
	mysql_connect("localhost","root","");
	mysql_select_db("job_portal");



	//check username
	$u="select user_name from user where user_name='".$myusername."'";
	$v = mysql_query($u) or die(mysql_error());
	$result=mysql_fetch_array($v);




	//check password
	$p="select password from user where user_name='".$result[user_name]."'";
	$q=mysql_query($p);
	$s=mysql_fetch_array($q);

	

	$count=mysql_num_rows($q);
	// If result matched $myusername and $mypassword, table row must be 1 row


		if($count==1)
		{
			
			if(($result[user_name]==$myusername)&&($s[password]==$passwd))
			{
				// Register $myusername, $mypassword and redirect to file "login_success.php"
				



				
				session_register("myusername");
				//$_SESSION['nme']='myusername';

				
				session_register("password");
				header("location:user_info.php");
			}
			else
			 {
				echo "Wrong Username or Password";
				header("location:login2.html");
			}
		}
		else
		 {
				echo "Wrong Username or Password";
				header("location:login2.html");
		 }
}

//company login
else if($mem==2)
{
 	mysql_connect("localhost","root","");

	mysql_select_db("job_portal");



	//check username
	$ad="select comp_name from company where comp_name='".$myusername."'";
	$v = mysql_query($ad) or die(mysql_error());
	$result=mysql_fetch_array($v);


	//check password
	$bd="select password from company where company.comp_name='".$result[comp_name]."'";
	$a = mysql_query($bd) or die(mysql_error());
	$re=mysql_fetch_array($a);


	$count=mysql_num_rows($a);        // If result matched $myusername and $mypassword, table row must be 1 row


		if($count==1)
		{
			
			if(($result[comp_name]==$myusername)&&($re[password]==$passwd))
			{
				// Register $myusername, $mypassword and redirect to file "login_success.php"
				
				session_register("myusername");
	
				header("location:comp_prof.php");
			}
			else
			 {
				echo "Wrong Username or Password";
				header("location:login2.html");
			}
		}
		else
		 {
				echo "Wrong Username or Password";
				header("location:login2.html");
		 }




}
else if(($myusername=='rahuladmin')&&($passwd=='rahoul'))
{
					session_register("myusername");
					header("location:admin.html");
}
else
{
					header("location:login2.html");
}
?>
