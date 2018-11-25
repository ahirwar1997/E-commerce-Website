<?php
    require 'common.php';
    if (isset($_SESSION['email'])) {
 header('location: product.php');
}

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
<?php
    include 'header.php'; 
?>
<div id="bannerimage">
	<div class="container">
		<div id="banner_content">
			<a href="product.php" class="btn btn-danger btn-lg active">Shop Now</a>
		</div>
	</div>
</div>
<?php
    include 'footer.php';
?>
</body>
</html>