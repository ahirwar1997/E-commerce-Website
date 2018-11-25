<?php include 'common.php';
if(!isset($_SESSION['email'])) {
 header('location: index.php');
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Settings | Lifestyle Store</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="lscss.css">
</head>
<body>
<div style="margin-bottom:100px;">
<?php include 'header.php';
?>
</div>
<div class="container">
	<div class="col-xs-4 col-xs-offset-4">
                <?php
                    if(isset($_GET['error_name'])){
                        echo '</h3><em>'.$_GET['error_name'].'</em></h3><br>';
                    }
                ?>
		<h3><b>Change Password</b></h3>
		<form action="settings_script.php" method="post">
		<div class="form-group">
		<input type="password" name="oldpass" class="form-control" placeholder="Old Password">
		</div>
		<div class="form-group">
		<input type="password" name="newpass" class="form-control" placeholder="New Password">
		</div>
		<div class="form-group">
		<input type="password" name="renewpass" class="form-control" placeholder="Re-Type New Password">
		</div>
		<input type="submit" value="Change" class="btn btn-primary">
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


		
		
		