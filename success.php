<?php
require 'common.php';
   if (!isset($_SESSION['email'])) {
 header('location: index.php');
}
$us_id=$_SESSION['user_id'];

$proarr=$_GET['prod_arr'];
echo $proarr.'<br>';
$update_query="UPDATE users_items SET status='Confirmed' WHERE user_id='$us_id' and item_id in $proarr";
$update_query_res=  mysqli_query($con, $update_query) or die(mysqli_error($con));
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Success!!!</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="lscss.css">
</head>
<body>
<?php
    include 'header.php'; 
?>
    <br><br><br><br>
<div class="container">

            <div class="jumbotron">
                <center>
                <h3>Your order is confirmed. Thank you for shopping with us.<a href="product.php"> Click here</a> to purchase any other item. </h3>
                </center>
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