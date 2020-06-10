<?php
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
			$pass=$_POST['psw'];
			$sql="insert into sign_up(USERNAME,PASSWORD) values ('$name','$pass')";
			if($p=mysql_query($sql))
			{
				header('location:');
			}	
		}
?>

<html>
<head>
<link href="css/style.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" >
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,400italic,600,600italic,700,300italic" rel="stylesheet" type="text/css">
</head>
<body>
     
		<div class="message warning">
			<div class="inset agile">
							<div class="sap_tabs w3ls-tabs">
				<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
					<ul class="resp-tabs-list">
						<li class="resp-tab-item resp-tab-active" aria-controls="tab_item-0" role="tab"><span>Sign up</span></li> 
						
					</ul>	
					<div class="clear"> </div>
					 
					<div class="resp-tabs-container">
						<h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>Sign in</h2><div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
							<div class="login-agileits-top"> 
							
								<form action="signup.php" method="post">
									<p>User Name </p>
									<input type="text" name="User Name" required="">
									<p>Password</p>
									<input type="password" name="Password" required="">	 
									<input type="checkbox" id="brand" value=""> 
									<input type="submit" value="SIGN UP">
								</form>  
								
							</div>
							 
						</div> 
						<h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>/Sign up</h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
							
						</div>
					</div>							
				</div>	 
	</div>	
	
			<div class="clear"> </div>

				</div>					
		</div>

	<div class="clear"> </div>
     
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script>$(document).ready(function(c) {
	$('.alert-close').on('click', function(c){
		$('.message').fadeOut('slow', function(c){
	  		$('.message').remove();
		});
	});	  
});
</script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
			<script type="text/javascript">
				$(document).ready(function () {
					$('#horizontalTab').easyResponsiveTabs({
						type: 'default', //Types: default, vertical, accordion           
						width: 'auto', //auto or any width like 600px
						fit: true   // 100% fit in a container
					});
				});
			</script>					

</body>
</html>