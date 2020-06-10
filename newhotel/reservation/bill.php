<?php
	session_start();
	$name=$_SESSION['name'];
	$mysql_host='localhost';
		$mysql_user='root';
		$mysql_pass='';
		$mysql_db='hotel management';
		if($conn=mysql_connect($mysql_host,$mysql_user,$mysql_pass)&&mysql_select_db($mysql_db))
			$faltu=0;
		else
			die(mysql_error());
		$sql="select c.customer_id,r.reservation_id,c.cust_name,c.phone_no,o.room_price,r.arrival_date,r.departure_date,r.NO_OF_GUESTS 
			from reservation r ,customer c,room_type o 
			where r.customer_id=c.customer_id 
			and c.cust_name='$name'
			and r.room=o.type_name";
		if($pm=mysql_query($sql))
		{
			$row=mysql_fetch_assoc($pm);
			$n=$row['cust_name'];
			$rid=$row['reservation_id'];
			$cid=$row['customer_id'];
			$p=$row['phone_no'];
			$da=$row['arrival_date'];
			$dd=$row['departure_date'];
			$price=$row['room_price'];
			$nrm=$row['NO_OF_GUESTS'];
			$ddn=strtotime($dd);
			$dan=strtotime($da);
			$day=($ddn-$dan)/86400;
			$amo=$day*$price*$nrm;
		}
		else
			echo"query fails";
		
		if($_SERVER['REQUEST_METHOD']=="POST")
		{
			if(isset($_POST['confirm']))
			{
				
				$last="insert into payment(reservation_id,customer_id,amount) values ($rid,$cid,$amo)";
				if(mysql_query($last))
				{
					header('location:http://localhost/newhotel/ratings/ratings.php');
				}
			
			}
			else if(isset($_POST['cancel']))
			{
				header('location:http://localhost/newhotel/ratings/ratings.php');
			}
		
		}

?> 


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/jquery-ui.css" type="text/css" media="all">

<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- web font -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'> 
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
<!-- //web font -->
<style>
.bill{
width:200px;
height:300px;
BORDER:2px solid white;
margin-left:600px;
margin-top:200px;
padding-left:50px;
padding-top:50px;
}
.btn{
	width:80px;
	color:black;
	background-color:white;
	
}
</style>
</head>
<body>
<h1 align="center">your reservation is successful</h1>
	<!-- main -->
	<div class="main">
		<div class="bill">
		
			<label>NAME</label>
			<b style="color:red"> 
			<?php echo $n;?></b>
			<br>
			<br>
			
			<label>PHONE NO</label>
			<b style="color:red">
			<?php echo $p;?></b>
			
			<br>
			<br>
			
			<label>AMOUNT</label>
			<b style="color:red">
			<?php echo $amo;?></b>
			<br>
			<br>
		<form action="bill.php" method="post">
		
			<input class="btn"   type="submit" name='confirm' value="confirm">
			<input class="btn"   type="submit" name='cancel'  value="cancel">
		
		
		</form>
		
		</div>
		<!-- Date-Picker-JavaScript -->
			<script src="js/jquery-ui.js"></script>
			<script>
				$(function() {
					$( "#datepicker,#datepicker1,#datepicker2" ).datepicker();
				});
			</script>
		<!-- //Date-Picker-JavaScript -->  
	</div>	
	<!-- //main -->
</body>
</html>