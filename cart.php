<?php
    require 'common.php';
    if (!isset($_SESSION['email'])) {
    header('location: index.php');}
    
  
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Cart | Lifestyle Store</title>
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
<?php
    include 'header.php';
?>
</div>
<?php   
    $userid=$_SESSION['user_id'];
    $get_prod_user="Select users_items.item_id as itemid,items.price as p,items.name as n  from users_items join items on users_items.item_id=items.id where user_id='$userid' and users_items.status='Added to cart'";
    $get_prod_user_query=mysqli_query($con, $get_prod_user) or die(mysqli_error($con));
    if(mysqli_num_rows($get_prod_user_query)==0) { ?>
    <div class="container"><center>
            <h4><em>Add items to the cart first!</em></h4>
    </center></div>
    <? } else {
       $sum=0;
       $id_prod="(";
       echo '<div class="container"><center>
	<table class="table" style="width:50%; border-collapse:collapse;" >
		<tr><th>Item Number</th><th>Item Name</th><th>Price</th><th></th></tr>';
     foreach($get_prod_user_query as $result){
         $id_prod=$id_prod.$result['itemid'].',';
         echo '<tr><td>'.$result['itemid'].'</td><td>'.$result['n'].'</td><td>'.$result['p']."</td><td><a href='cart-remove.php?id={$result['itemid']}' class='remove_item_link'> Remove</a></td></tr>";
         $sum+=$result['p'];
     }
        $id_prod[strlen($id_prod)-1]=')';
       // echo $id_prod.'<br>';
        echo '<tr><td> </td><th>Total</th><th>Rs'. $sum."/-</th><td><a class='btn btn-primary' href='success.php?prod_arr={$id_prod}'> Confirm Order</td></tr>";
	echo'</table></center></div>';
        
  } ?>
<footer class="foot abpos">
	<div class="container">
		<center>
			<p>Copyright © Lifestyle Store. All Rights Reserved|Contact Us: +91 90000 00000</p>
		</center>
	</div>
</footer>
</body>
</html>









			