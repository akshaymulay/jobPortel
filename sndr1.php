<?php
session_start();
?>

<html>
<link rel="stylesheet" href="mm_travel2.css">
<body bgcolor="#C0DFFD">


<?php
$_SESSION['nme']="$myusername";
$cname=$_SESSION['nme'];
$time="1.47am";
$comment=$_POST['comment'];
$qf=$_POST['qf'];
$gender=$_POST['gender'];
$how_many=$_POST['how_many'];
$_SESSION['nme']="$myusername";
$un=$_SESSION['nme'];
//$un=$_REQUEST['myusername'];
$day=$_POST['day'];
$month=$_POST['month'];
$year=$_POST['year'];




	if( (!empty($_POST['comment']))||(!empty($how_many)))
	{
			
			mysql_connect("localhost","root","");
			mysql_select_db("job_portal");
			
			
			$p="update company set vacancies='yes' where comp_name='".$_SESSION['nme']."'";
			$q=mysql_query($p);
	
	
	
	
	
	
		
		if(($gender=='any')&&($how_many=='0'))
		{
		
					
			mysql_connect("localhost","root","");
			mysql_select_db("job_portal");
			
			
			$p="select user_name from user where qualification='$qf';";
	$q=mysql_query($p);
			while($id=mysql_fetch_array($q))
			{
				$usr=$id['user_name'];
							//echo"hiii".$usr;	
				
				mysql_query("insert into user_msg values('$un','$usr','$comment','$cname','$day','$month','$year','$time');");
				mysql_query("insert into comp_out values('$un','$usr','$comment','$cname','$day','$month','$year','$time');");
								
			}
			header("location:sndr2.html");

		
		
		}
		else if(($gender=='male')&&($how_many=='0'))
		{
		
					
			mysql_connect("localhost","root","");
			mysql_select_db("job_portal");
			
			
			$p="select user_name from user where qualification='$qf' and gender='$gender'";
			$q=mysql_query($p);
			while($id=mysql_fetch_array($q))
			{
				$usr=$id['user_name'];
							//echo"hiii".$usr;	
				mysql_query("insert into comp_out values('$un','$usr','$comment','$cname','$day','$month','$year','$time');");
				mysql_query("insert into user_msg values('$un','$usr','$comment','$cname','$day','$month','$year','$time');");
			}
			header("location:sndr2.html");

		
		
		}
		else if(($gender=='female')&&($how_many=='0'))
		{
		
					
			mysql_connect("localhost","root","");
			mysql_select_db("job_portal");
			
			
			$p="select user_name from user where qualification='$qf' and gender='$gender'";
	$q=mysql_query($p);
			while($id=mysql_fetch_array($q))
			{
				$usr=$id['user_name'];
							//echo"hiii".$usr;	
				mysql_query("insert into comp_out values('$un','$usr','$comment','$cname','$day','$month','$year','$time');");
				mysql_query("insert into user_msg values('$un','$usr','$comment','$cname','$day','$month','$year','$time');");
			}
			header("location:sndr2.html");

		
		
		}
		
		else if($gender=="any")
		{

				
			mysql_connect("localhost","root","");
			mysql_select_db("job_portal");
			
			
			$p="select user_name from user where qualification='$qf' and how_many>='$how_many' and exp_span='years'";
	$q=mysql_query($p);
			while($id=mysql_fetch_array($q))
			{
				$usr=$id['user_name'];
							//echo"hiii any".$usr;	
				
				mysql_query("insert into user_msg values('$un','$usr','$comment','$cname','$day','$month','$year','$time');");

				mysql_query("insert into comp_out values('$un','$usr','$comment','$cname','$day','$month','$year','$time');");
			}
		header("location:sndr2.html");

		}
		
		else if($gender=="male")
		{

				
			mysql_connect("localhost","root","");
			mysql_select_db("job_portal");
			
			
			$p="select user_name from user where qualification='$qf' and how_many>='$how_many' and exp_span='years' and gender='$gender'";
	$q=mysql_query($p);
			while($id=mysql_fetch_array($q))
			{
				$usr=$id['user_name'];
							//echo"hiii mll".$usr;	
				
				mysql_query("insert into user_msg values('$un','$usr','$comment','$cname','$day','$month','$year','$time');");
			mysql_query("insert into comp_out values('$un','$usr','$comment','$cname','$day','$month','$year','$time');");
			}
			header("location:sndr2.html");

		}
		else if($gender=="female")
		{

				
			mysql_connect("localhost","root","");
			mysql_select_db("job_portal");
			
			
			$p="select user_name from user where qualification='$qf' and how_many>='$how_many' and exp_span='years' and gender='$gender'";
	$q=mysql_query($p);
			while($id=mysql_fetch_array($q))
			{
				$usr=$id['user_name'];
							//echo"hiii fm".$usr;	
				
				mysql_query("insert into user_msg values('$un','$usr','$comment','$cname','$day','$month','$year','$time');");
				mysql_query("insert into comp_out values('$un','$usr','$comment','$cname','$day','$month','$year','$time');");
			}
			header("location:sndr2.html");

		}
		
		else
		{
			echo"plz fill form completely";
			header("location:sndr3.html");

		}

	}
	else
	{
		echo"plz fill form completely";
		header("location:sndr3.html");

	}
	
	

?>
