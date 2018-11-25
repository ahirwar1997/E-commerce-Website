<?php
    require 'common.php';
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Lifestyle Store</title>
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
<?php    include 'header.php'; ?>
</div>
<?php include 'check-if-added.php'; ?>
<div class="container">
	<div class="jumbotron">
		<h1>Welcome to our Lifestyle Store</h1>
		<p style="color:rgba(128,128,128,0.8);">We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
	</div>
</div>
<div class="container">
	<div class="row row_style">
		<div class="col-md-3 col-xs-6">
		<div class="thumbnail">
		<img src="canon.jpg" alt="">
		<div class="caption">
			<h3>Cannon EOS</h3>
			<p>Price:Rs 14000.00</p>
		</div>
		<?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php
 } else {
 
 if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart !=0)
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
		</div>
		</div>
		<div class="col-md-3 col-xs-6">
		<div class="thumbnail">
		<img src="sony.jpg" alt="">
		<div class="caption">
			<h3>Sony VL3</h3>
			<p>Price:Rs 13000.00</p>
		</div>
		<?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php
 } else {
 
 if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart !=0)
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
		</div>
		</div>
		<div class="col-md-3 col-xs-6">
		<div class="thumbnail">
		<img src="lumix.jpg" alt="">
		<div class="caption">
			<h3>Lumix HDLM</h3>
			<p>Price:Rs 20000.00</p>
		</div>
			<?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php
 } else {
 
 if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart !=0)
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
		</div>
		</div>
		<div class="col-md-3 col-xs-6">
		<div class="thumbnail">
		<img src="oly.jpg" alt="">
		<div class="caption">
			<h3>Olympus H3</h3>
			<p>Price:Rs 15500.00</p>
		</div>
			<?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php
 } else {
 
 if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart !=0)
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
		</div>
		</div>
	</div>
	<div class="row row_style">
		<div class="col-md-3 col-xs-6">
		<div class="thumbnail">
		<img src="tissot.jpg" alt="">
		<div class="caption">
			<h3>Tissot Traugh</h3>
			<p>Price:Rs 13000.00</p>
		</div>
		
			<?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php
 } else {
 
 if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart !=0)
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
		</div>
		</div>
		<div class="col-md-3 col-xs-6">
		<div class="thumbnail">
		<img src="rolex.jpg" alt="">
		<div class="caption">
			<h3>Rolex GB</h3>
			<p>Price:Rs 43000.00</p>
		</div>
			<?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php
 } else {
 
 if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart !=0)
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
		</div>
		</div>
		<div class="col-md-3 col-xs-6">
		<div class="thumbnail">
		<img src="victorinox.jpg" alt="">
		<div class="caption">
			<h3>Casio GroundBreak</h3>
			<p>Price:Rs 5500.00</p>
		</div>
			<?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php
 } else {
 
 if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart !=0)
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
		</div>
		</div>
		<div class="col-md-3 col-xs-6">
		<div class="thumbnail">
		<img src="Lange.jpg" alt="">
		<div class="caption">
			<h3>Langston WM</h3>
			<p>Price:Rs 9000.00</p>
		</div>
			<?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php
 } else {
 
 if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart !=0)
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
		</div>
		</div>
	</div>
	<div class="row row_style">
		<div class="col-md-3 col-xs-6">
		<div class="thumbnail">
		<img src="th.jpg" alt="">
		<div class="caption">
			<h3>Tommy Hilfiger</h3>
			<p>Price:Rs 2000.00</p>
		</div>
			<?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php
 } else {
 
 if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart !=0)
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
		</div>
		</div>
		<div class="col-md-3 col-xs-6">
		<div class="thumbnail">
		<img src="levis.jpg" alt="">
		<div class="caption">
			<h3>Levi's</h3>
			<p>Price:Rs 3000.00</p>
		</div>
			<?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php
 } else {
 
 if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart !=0)
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
		</div>
		</div>
		<div class="col-md-3 col-xs-6">
		<div class="thumbnail">
		<img src="handm.jpg" alt="">
		<div class="caption">
			<h3>H&M </h3>
			<p>Price:Rs 1999.00</p>
		</div>
			<?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php
 } else {
 
 if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart !=0)
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
		</div>
		</div>
		<div class="col-md-3 col-xs-6">
		<div class="thumbnail">
		<img src="lee.jpg" alt="">
		<div class="caption">
			<h3>Lee Cooper</h3>
			<p>Price:Rs 800.00</p>
		</div>
			<?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php
 } else {
 
 if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart !=0)
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
		</div>
		</div>
	</div>
		
</div>
<?php include 'footer.php';?>
</body>
</html>