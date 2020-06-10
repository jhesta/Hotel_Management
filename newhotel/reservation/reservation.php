<?php
session_start();
	$mysql_host='localhost';
		$mysql_user='root';
		$mysql_pass=''; 
		$mysql_db='hotel management';
		if($conn=mysql_connect($mysql_host,$mysql_user,$mysql_pass)&&mysql_select_db($mysql_db))
			$faltu=0;
		else
			die(mysql_error());
		if($_SERVER['REQUEST_METHOD']=="POST")
		{
			$name=$_POST['name'];
			$email=$_POST['email'];
			$add=$_POST['add'];
			$ph=$_POST['phone'];
			$ng=$_POST['Number'];
			$date=$_POST['arv'];
			$ddate=$_POST['ddate'];
			$room=$_POST['to'];
			$_SESSION['name']=$name;
			$sql="insert into customer(CUST_NAME,ADDRESS,PHONE_NO,EMAIL) values ('$name','$add',$ph,'$email')";
			if($p=mysql_query($sql))
			{
				$f="select customer_id from customer where cust_name='$name'";
				if($j=mysql_query($f))
				{
					$k=mysql_fetch_assoc($j);
					echo$cust_id=$k['customer_id'];
					$sh="insert into reservation(CUSTOMER_ID,NO_OF_GUESTS,ARRIVAL_DATE,DEPARTURE_DATE,room) values ($cust_id,$ng,'$date','$ddate','$room')";
					if($pp=mysql_query($sh))
						header('location:http://localhost/newhotel/reservation/bill.php');   
				}
				else{
				echo"not submited";
				}
			}
		}
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar()
{ window.scrollTo(0,1); } </script>

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/jquery-ui.css" type="text/css" media="all">

<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- web font -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'> 
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main">
		<h1>Room Reservation </h1> 
		<div class="main-agileinfo w3layouts-agileits"> 
			<div id="wrapper">
				<form action="reservation.php" method="post">
					<div id="login" class="animate w3layouts agileits form"> 
						<div class="agileinfo-row">
							<div class="ferry ferry-from">
								<label>Your Name</label>
								<input type="text" name="name" placeholder="Name" required=" ">
							</div>
							<div class="ferry ferry-from">
								<label>Your Email</label>
								<input type="text" name="email" placeholder="Email" required=" ">
							</div>
							<div class="ferry ferry-from">
							<label>ADDRESS</label>
								<input type="text" name="add" placeholder="ADDRESS" required=" ">
							</div>
							
							
							<div class="tickets">
							<div class="persons">
							<label>phone</label>
								<input type="text" name="phone" placeholder="phone number" required=" ">
							</div>
							</div>
							<div class="book-pag agileits w3layouts"> 
								<div class="book-pag-frm1 agileits w3layouts">
									<label>Date Of Arrival</label>
									<input type="date" name="arv" required="">
								</div>
								<div class="clear"></div>
							</div> 
						</div>
						<div class="agileinfo-row w3ls-row2"> 
							<div class="tickets">
								<div class="persons">
									<label>Number Of Rooms</label>
									<input type="number" name="Number" placeholder="1" min="1" required="">
								</div>
								<div class="persons">
									<div class="book-pag-frm1 agileits w3layouts">
									<label>Date Of DEPARTURE</label>
									<input type="date" name="ddate" required="">
								</div>
								</div>
							
							</div>
							<div class="ferry ferry-from">
								<div class="ferry ferry-to">
								<label>Accommodation Enquiry</label>
								<select name="to">
									<option value="Calais">Single Room</option>
									<option value="Dover">Deluxe Room</option>
									<option value="Felixstowe">Luxury Room</option>
									<option value="Grimsby">Guest House</option> 
								</select>
							</div>
							</div>
							<div class="wthreesubmitaits">
								<input style="margin-top:50px;"type="submit" name="submit" value="Submit">
							</div>
						</div>
						<div class="clear"> </div>
					</div>
				</form>
			</div> 
		</div> 
		<div class="w3lsfooteragileits">
			
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