<?php
$servername="localhost";
$username="root";
$password="";
$conn = mysqli_connect($servername,$username,$password);
if($conn->connect_error){
die("connection failed:".mysqli_connect_error());
}
?>


<!DOCTYPE html>
<html>
<head>
<title>Room Booking Enquiry Form a Responsive Widget Template :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Room Booking Enquiry Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/jquery-ui.css" type="text/css" media="all">
<!-- //Custom Theme files -->
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
		<h1>Room booking enquiry form</h1> 
		<div class="main-agileinfo w3layouts-agileits"> 
			<div id="wrapper">
				<form action="#" method="post">
					<div id="login" class="animate w3layouts agileits form"> 
						<div class="agileinfo-row">
							<div class="ferry ferry-from">
								<label>Your Name</label>
								<input type="text" name="email" placeholder="Name" required=" ">
							</div>
							<div class="ferry ferry-from">
								<label>Your Email</label>
								<input type="text" name="email" placeholder="Email" required=" ">
							</div>
							<div class="ferry ferry-from">
								<label>Your Enquiry Type</label>
								<select name="from">
									<option value="Dover">Accommodation Enquiry</option>
									<option value="Felixstowe">Travel Enquiry</option>
									<option value="Grimsby">Lorem Ipsum </option>
									<option value="Newcastle">Simply Dummy</option> 
								</select>
							</div>
							<div class="ferry ferry-to">
								<label>Accommodation Enquiry</label>
								<select name="to">
									<option value="Calais">Air Conditioned Cabin</option>
									<option value="Dover">Double Room</option>
									<option value="Felixstowe">Suite Room</option>
									<option value="Grimsby">Deluxe Room</option> 
								</select>
							</div>
							<div class="book-pag agileits w3layouts"> 
								<div class="book-pag-frm1 agileits w3layouts">
									<label>Date Of Arrival</label><input class="date agileits w3layouts" id="datepicker2" type="text" value="Date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
								</div>
								<div class="clear"></div>
							</div> 
						</div>
						<div class="agileinfo-row w3ls-row2"> 
							<div class="tickets">
								<div class="persons">
									<label>Number Of Persons</label>
									<input type="number" name="Number" placeholder="1" min="1" required="">
								</div>
								<div class="persons">
									<label>Number Of Days</label>
									<input type="number" name="Number" placeholder="1" min="1" required="">
								</div>
								<div class="clear"></div>
							</div>
							<div class="ferry ferry-from">
								<label>Customer Enquiry</label>
								<textarea id="message" name="message" placeholder="Your Queries" title="Please enter Your Queries"></textarea>
							</div>
							<div class="wthreesubmitaits">
								<input type="submit" name="submit" value="Submit">
							</div>
						</div>
						<div class="clear"> </div>
					</div>
				</form>
			</div> 
		</div> 
		<div class="w3lsfooteragileits">
			<p> &copy; 2017 Room Booking Enquiry Form. All Rights Reserved | Design by <a href="http://w3layouts.com" target="=_blank">W3layouts</a></p>
		</div> 
		<!-- Necessary-JavaScript-Files-&-Links -->
		<!-- Date-Picker-JavaScript -->
			<script src="js/jquery-ui.js"></script>
			<script>
				$(function() {
					$( "#datepicker,#datepicker1,#datepicker2" ).datepicker();
				});
			</script>
		<!-- //Date-Picker-JavaScript -->
		<!-- //Necessary-JavaScript-Files-&-Links -->  
	</div>	
	<!-- //main -->
</body>
</html>