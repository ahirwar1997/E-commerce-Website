<?php
    require 'common.php';
    if (isset($_SESSION['email'])) {
 header('location: product.php');
}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Sign Up | Lifestyle Store</title>
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
		<div class="col-xs-6 col-xs-offset-3">
			<h1>SIGN UP</h1>
			<form action="signup_script.php" method="post">
				<div class="form-group">
					<input type="text" class="form-control " placeholder="Name" name="name" required>					
                </div>
				<div class="form-group">
					<input type="email" class="form-control" placeholder="Email" name="email" title="Example: xyz@gmail.com" required>
                                        <div><?php if(isset($_GET['already_error'])){echo $_GET['already_error'];} ?></div>
                </div>
				<div class="form-group">
					<input type="password" class="form-control" placeholder="Password" name="password" title="More than 6 characters" required>					
                </div>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Contact" name="contact" required>					
                </div>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="City" name="city" required>					
                </div>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Address" name="address" required>					
                </div>
				<input type="submit" class="btn btn-primary but" value="Submit">
			</form>
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