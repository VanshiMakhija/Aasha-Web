<?php
$host="localhost";
$user="root";
$password="";
$db="demo";
mysql_connect($host,$user,$password);
$mysql_select_db($db);
if(isset($_POST['email']))
{
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$sql="select * from loginform where User='".$email."' AND Pass='".$pass."' limit 1";
	$result=mysql_query($sql);
	if(mysql_num_rows($result)==1)
	{
		echo "You Have Successfully Logged in";
		exit();
	}
	else
	{
		echo "You Have Entered Incorrect Password";
		exit();
	}
}
?>
