<?php
		$mysql_host='localhost';     
		$mysql_user='root';
		$mysql_pass='';                                                       
		$mysql_db='hotel management';
		if($conn=mysql_connect($mysql_host,$mysql_user,$mysql_pass)&&mysql_select_db($mysql_db))
			$faltu=0;
		else
			die(mysql_error());
if($_SERVER['REQUEST_METHOD']=='POST')
{	
	$rate=$_POST['submit'];
	$sql="INSERT INTO ratings(rating_value) VALUES ($rate) ";
	if($sq=mysql_query($sql))
	{
		header('location:http://localhost/newhotel/index.php');
		exit;
	}
}
?>
