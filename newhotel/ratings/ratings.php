<?php
$mysql_host='localhost';     
		$mysql_user='root';
		$mysql_pass='';                                                       
		$mysql_db='hotel management';
		if($conn=mysql_connect($mysql_host,$mysql_user,$mysql_pass)&&mysql_select_db($mysql_db))
			$faltu=0;
		else
			die(mysql_error());
?>


<!doctype html>
<html>
<head>
<!-- meta-tags -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords"/>
<!-- //meta-tags -->
<link href="//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' 
rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery-2.1.4.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/raccordion.css" />
    <script type="text/javascript">
        $(window).load(function () {
            $('#accordion-wrapper').raccordion({
                speed: 1000,
                sliderWidth: 700,
                sliderHeight: 300,
                autoCollapse: false
            });

        }); 
    </script>
</head>
<body>
<div class="content" id="Main-Content">
	<h1>Rating Form</h1>
	<div class="wrapper">
		<div id="accordion-wrapper">
            <div class="slide">
                <img src="images/1.jpg" alt="image" />
				<div class="caption">
                    <div class="pricing">
							<div class="pricing-top green-top">
								<i class="fa fa-check-square-o" aria-hidden="true"></i>       
							</div>
							<div class="pricing-bottom">
								<div class="pricing-bottom-bottom">
									<h2>How would you rate our services?</h2>

<form action="http://localhost/newhotel/ratings/rate1.php" method="post">

<div class="buttons">
	<button name="subject1" type="submit"  onclick="fxn(this.value)"  value="1">1</button>
	<button name="subject2" type="submit"  onclick="fxn(this.value)" value="2">2</button>
	<button name="subject3" type="submit"  onclick="fxn(this.value)" value="3">3</button>
	<button name="subject4" type="submit"  onclick="fxn(this.value)"   value="4">4</button>
	<button name="subject5" type="submit"  onclick="fxn(this.value)" value="5">5</button>
</div>

<input type="hidden" id="rate" name="submit">


</form>

<script>
function fxn(c)
{
	document.getElementById('rate').value=c;
	document.getElementById('rate').type='number';
	document.getElementById('submit').type='submit';
}
</script>


								</div>
							</div>
					</div>
                </div>
            </div>
            <div class="slide slide-two-w3ls">
                <img src="images/3.jpg" alt="image" />
				<div class="caption">
                    <div class="pricing">
							<div class="pricing-top blue-top">
								<h3>Star Rating</h3>
							</div>
							<div class="pricing-bottom two">
								<div class="pricing-bottom-bottom">
								<form action="#" method="post">
									<div class="content-wthree2">
										<div class="grid-w3layouts1">
											<div class="w3-agile1">
												<label class="rating">Easily select star rating for our services</label>
												<div class="clear"></div>
											</div>	
										</div>
									</div>
									<input type="submit" name="submit" value="Send Feedback">
								</form>

								</div>
							</div>
						</div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/jquery.raccordion.js" type="text/javascript"></script>
<script src="js/jquery.animation.easing.js" type="text/javascript"></script>
</body>
</html>
