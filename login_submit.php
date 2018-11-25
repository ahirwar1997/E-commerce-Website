<?php
    require 'common.php';
    $email_id=$_POST['email'];
    $pass=$_POST['password'];
    $select_query="SELECT id,email_id from users where email_id='$email_id' and pass_word='$pass'";
    $select_query_result=  mysqli_query($con,$select_query) or die(mysqli_error($con));
    //echo mysqli_num_rows($select_query_result);
    if(mysqli_num_rows($select_query_result)==0){
        header('location:login.php?email_error=enter correct password');
    }
    else{
    $row=  mysqli_fetch_array($select_query_result);
    $_SESSION['email']=$row['email_id'];
    $_SESSION['user_id']=$row['id'];
    //echo mysqli_num_rows($select_query_result);
    header('location:product.php');
    
    }
?>
