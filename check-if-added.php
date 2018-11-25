<?php

function check_if_added_to_cart($item_id){
    require 'common.php';
    $user_id=$_SESSION['user_id'];
    $take_query="SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart'";
    $take_query_result=  mysqli_query($con, $take_query) or die(mysqli_error($con));
    if(mysqli_num_rows($take_query_result)>=1){
        return 1;
    }
    else
    {
        return 0;
    }
    
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
