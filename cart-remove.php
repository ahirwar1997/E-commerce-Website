<?php
require 'common.php';
$prod_id=$_GET['id'];
$us_id=$_SESSION['user_id'];
$query_del="DELETE FROM users_items where user_id='$us_id' and item_id='$prod_id'";
$query_del_res=  mysqli_query($con, $query_del) or die(mysqli_error($con));
header('location:cart.php');
?>
