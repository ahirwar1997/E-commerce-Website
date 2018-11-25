<?php
    require 'common.php';
    $emailid=  mysqli_real_escape_string($con,$_POST['email']);
    $select_query="Select email_id from users where email_id='$emailid'";
    $select_query_result=  mysqli_query($con, $select_query) or die(mysqli_error($con));
    if(mysqli_num_rows($select_query_result)>0){
        header('location:signup.php?already_error=email already exists');
    }else{
    $name=mysqli_real_escape_string($con,$_POST['name']);
    $address=mysqli_real_escape_string($con,$_POST['address']);
    $contact=mysqli_real_escape_string($con,$_POST['contact']);
    $city=mysqli_real_escape_string($con,$_POST['city']);
    $code=mysqli_real_escape_string($con,$_POST['password']);
    $insert_query="INSERT INTO users(email_id,name,phone,pass_word,address,city) values ('$emailid','$name','$contact','$code','$address','$city')";
    $insert_query_do=mysqli_query($con,$insert_query);
    $prim_key_user=mysqli_insert_id($con);
    $_SESSION['email']=$emailid;
    $_SESSION['user_id']=$prim_key_user;
    echo $name." ".$address." ".$contact." ".$city." ".$code." ".$emailid;
    header('location:product.php');}
    //}
?>