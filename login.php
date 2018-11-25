<?php
    require 'common.php';
    if (isset($_SESSION['email'])) {
 header('location: product.php');
}
//$_GET['email_error'];
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Login | Lifestyle Store</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="lscss.css">
</head>
<body>
<div style="margin-bottom :100px;">
<div class="navbar navbar-inverse navbar-fixed-top">
<div class="container">
	<div class="navbar-header ">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	<a class="navbar-brand" href="index.php">
		Lifestyle Store</a>
	</div>
	<div class="collapse navbar-collapse" id="mynavbar">
		<ul class="nav navbar-nav navbar-right">
			<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
			<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Log In</a></li>
		</ul>
	</div>
</div>
</div>
</div>
<div class="container">
	<div class="row row_style">
		<div class="col-xs-4 col-xs-offset-4">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h4>LOGIN</h4>
				</div>
				<div class="panel-body">
				<p class="text-warning">Login to make a purchase</p>
				<form action=" login_submit.php" method="post">
					<div class="form-group">
						<input type="email" name="email" placeholder="Email" class="form-control">
                                                <div><?php 
                                                if(isset($_GET['email_error'])){echo $_GET['email_error'];}?></div>
					</div>
					<div class="form-group">
						<input type="password" name="password" placeholder="Password" class="form-control">
					</div>
					<input type="submit" value="Login" class="btn btn-primary">
				</form>
				</div>
				<div class="panel-footer">
				<p>Don't have an account? <a href="signup.php"><b>Register<b></a></p>
				</div>
			</div>
		</div>
	</div>
</div>
<footer class="foot abpos">
	<div class="container">
		<center>
			<p>Copyright © Lifestyle Store. All Rights Reserved|Contact Us: +91 90000 00000</p>
		</center>
	</div>
</footer>
</body>
</html>
