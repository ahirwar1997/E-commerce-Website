<?php
require 'common.php';

$item_id=$_GET['id'];
$userid=$_SESSION['user_id'];
$query_add="INSERT INTO users_items(user_id, item_id, status) VALUES('$userid','$item_id', 'Added to cart')";
$query_add_result=  mysqli_query($con, $query_add);
header('location:product.php');
?>
