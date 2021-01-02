<?php
	session_start();
?>



<?php

		$_SESSION['nme']="$myusername";
		$flag=0;
		$abc=$_SESSION['nme'];
		$smt=$_POST['smt'];
		$hm=$_POST['hm'];
		$to=$_POST['user_name'];
		$msg=$_POST['comment'];
		$day=25;
		$month=1;
		$year=2012;

		$time=12.30;


if(($smt==NULL)||($msg==NULL)||($hm==NULL))
{
		//echo"you can not left fields empty";
		header("location:admin2.html");

		
}
else
{




		if(($smt=='user')&&($hm=='all'))
		{

			mysql_connect("localhost","root","");
	
			mysql_select_db("job_portal");

			$res="select user_name from user";
		
			$q=mysql_query($res);
			while($a=mysql_fetch_array($q))
			{
				$user=$a['user_name'];
				$usr="insert into user_msg values('$id','$user','$msg','admin','$day','$month','$year','$time')";
				mysql_query($usr);
			}
	
			header("location:admin1.html");
		}
		else if(($smt=='user')&&($hm=='selected')&&($to!=NULL))
		{
			mysql_connect("localhost","root","");
	
			mysql_select_db("job_portal");
			
			$qr="select user_name from user";
			$uvb=mysql_query($qr);

			while($r=mysql_fetch_array($uvb))
			{
				$u=$r['user_name'];
				if($u==$to)
				{
			
					$usr="insert into user_msg values('$id','$to','$msg','admin','$day','$month','$year','$time')";
					mysql_query($usr);
					header("location:admin1.html");
					$flag=2;
				}
			}
			if($flag==0)
			{
				header("location:admin3.html");
			}
		}
		else if(($smt=='company')&&($hm=='all'))
		{
			mysql_connect("localhost","root","");
	
			mysql_select_db("job_portal");

			$res="select comp_name from company";
		
			$q=mysql_query($res);
			while($a=mysql_fetch_array($q))
			{
				$company=$a['comp_name'];
				$usr="insert into comp_msg values('$id','$company','$msg','admin','$day','$month','$year','$time')";
				mysql_query($usr);
			}
	
			header("location:admin1.html");
		}
		else if(($smt=='company')&&($hm=='selected')&&($to!=NULL))
		{
			mysql_connect("localhost","root","");
	
			mysql_select_db("job_portal");
			$qr="select comp_name from company";
			$uvb=mysql_query($qr);
			while($r=mysql_fetch_array($uvb))
			{
				$u=$r['comp_name'];
				if($u==$to)
				{
					$usr="insert into comp_msg values('$id','$to','$msg','admin','$time')";
					mysql_query($usr);
					header("location:admin1.html");
					$flag=2;
				}
				
				
			}
			if($flag==0)
			{
				header("location:admin3.html");
			}

		}
		else if(($smt=='both')&&($hm=='all'))
		{
			
			
			mysql_connect("localhost","root","");
	
			mysql_select_db("job_portal");

			$res="select user_name from user";
		
			$q=mysql_query($res);
			
			while($a=mysql_fetch_array($q))
			{
				$user=$a['user_name'];
				$usr="insert into user_msg values('$id','$user','$msg','admin','$day','$month','$year','$time')";
				mysql_query($usr);
				header("location:admin1.html");

			}
			
			$re="select comp_name from company";
		
			$p=mysql_query($re);
			while($b=mysql_fetch_array($p))
			{
				$company=$b['comp_name'];
				$usr="insert into comp_msg values('$id','$company','$msg','admin','$time')";
				mysql_query($usr);
			}
			header("location:admin1.html");
		}
		else if(($smt=='both')&&($hm=='selected')&&($to!=NULL))
		{
			
			mysql_connect("localhost","root","");
	
			mysql_select_db("job_portal");

			$res="select user_name from user where user_name='$to'";
			
			$q=mysql_query($res) or die();
			$x=mysql_fetch_array($q);
			$vv=$x['user_name'];
			if($vv==$to)
			{
				$usr="insert into user_msg values('$id','$to','$msg','admin','$day','$month','$year','$time')";
				mysql_query($usr);
				header("location:admin1.html");
				$flag=2;
			}
			else
			{
				
				$res="select comp_name from company where comp_name='$to'";
			
				$q=mysql_query($res) or die();	
				$q=mysql_fetch_array($q);
				$uu=$q['comp_name'];
				if($uu==$to)
				{
					$usr="insert into comp_msg values('$id','$to','$msg','admin','$time')";
					mysql_query($usr);
					header("location:admin1.html");
					$flag=2;
				}
				else
				{
					echo"error is occured user is not exist";
					header("location:admin3.html");
				}


			}
		

		
		}
		else
		{
				echo"error is occured user is not exist";

				header("location:admin3.html");

		}
}
?>

			






	













