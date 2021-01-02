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
	header("location:chpcmpl.html");
}

else if($nw==$nw1)
{
	

	mysql_connect("localhost","root","");

	mysql_select_db("job_portal");

	$u="select comp_name from company where comp_name='".$_SESSION['nme']."'";

	$v = mysql_query($u) or die(mysql_error());
	$result=mysql_fetch_array($v);



	//check password
	$p="select password from company where comp_name='".$result[comp_name]."'";
	$q=mysql_query($p);
	$s=mysql_fetch_array($q);

	
	$count=mysql_num_rows($q);

	// If result matched $myusername and $mypassword, table row must be 1 row


		if($count==1)
		{

			if(($result[comp_name]==$_SESSION['nme'])&&($s[password]==$op))
			{
					mysql_connect("localhost","root","");

					mysql_select_db("job_portal");
					
				$qr="update company set password='$nw1' where comp_name='".$_SESSION['nme']."'";

				mysql_query($qr);


				//echo"successfully change password";
				//<script>alert("successfully changed password");</script>
				header("location:chpcmps.html");
			}
			else
			 {
			 	header("location:chpcmpw.html");
				echo "Wrong  Password";
				//echo"<a href="chpcmp.html">BACK</a>";
			}
		}
		else
		 {
		 		header("location:chpcmpw.html");
				//echo "Wrong Password";
				//echo"<a href="chp1.html">BACK</a>";
		}



}

else
{
	header("location:chpcmpn.html");
}






?>
