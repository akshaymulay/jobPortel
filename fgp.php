 <?php
  $eml=$_POST['eml'];
  $nwp=$_POST['nwp'];
  $nwp1=$_POST['nwp1'];
  $uname=$_POST['myusername'];
  if($nwp==$nwp1)
  {
		if(!empty($_POST['eml']) && !empty($_POST['nwp']) && !empty($_POST['nwp1']) && !empty($_POST['myusername']))
		{
		
				mysql_connect("localhost","root","");
				mysql_select_db("job_portal");
				$q="select email from user where user_name='$uname'";
				$t=mysql_query($q);
				$emaill=mysql_fetch_array($t);
				
				if($emaill['email']==$eml)
				{
					$qu="update user set password='$nwp' where user_name='$uname'";
					mysql_query($qu);
					//"hi    ".$uname."<br>"; 
					//echo"your password is change successfully<br>";
					//echo"your new password is--->".$nwp;
	header("location:fgp4.html");

					//echo"<br>now click below & goto the login page";
					//"<br><a href=login.html>login page </a>";
				}
				else
				{
						header("location:fgp1.html");
echo"e-mail does not matched";
				
				}
		
		}
		else
		{
			echo"<br>you left some field empty";
			header("location:fgp2.html");

		}
  }
  else
  {  
	echo"password does not matched";
	header("location:fgp3.html");

  }
  ?>
