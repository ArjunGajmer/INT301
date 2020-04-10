<?php include('services.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>Login
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/styl.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">

</head>


<body>
	<div class="main-w3layouts wrapper">
		<h1>LOGIN</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form method="post" action="login.php">
  	<?php include('error.php'); ?>
					<input class="text" type="text" name="username" placeholder="Username">
			
					<input class="text" type="password" name="password" placeholder="Password" required="">
					<div class="wthree-text">
						<div class="clear"> </div>
					</div>
					<input type="submit" value="SIGNIN" name='login_user'>
				</form>
				<p>Need Account? <a href="new.php">
 Register Now!</a></p>
			</div>
		</div>
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
</body>
</html>
