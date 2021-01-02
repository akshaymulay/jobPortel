<?php
	session_start();
?>

<?php
	$op=$_POST['op'];
	$nw=$_POST['nwp'];
	$nw1=$_POST['nwp1'];





$_SESSION['nme']="$myusername";
if(($op==NULL)||($nw==NULL)||($nw1==NULL))
{
	header("location:chp3.html");
}

else  if($nw==$nw1)
{
	mysql_connect("localhost","root","");

	mysql_select_db("job_portal");




	//check username
	$u="select user_name from user where user_name='".$_SESSION['nme']."'";
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

			if(($result[user_name]==$_SESSION['nme'])&&($s[password]==$op))
			{
					mysql_connect("localhost","root","");

					mysql_select_db("job_portal");
				$qr="update user set password='$nw1' where user_name='".$_SESSION['nme']."'";

				mysql_query($qr);

				header("location:chp1.html");
			}
			else
			 {
								header("location:chp4.html");

			}
		}
		else
		 {
		 		header("location:chp4.html");
				
		}



}
else
{
	header("location:chp2.html");
}
?>
