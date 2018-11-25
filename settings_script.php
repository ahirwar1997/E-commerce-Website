<?php
require 'common.php';
$oldp=$_POST['oldpass'];
$newp=$_POST['newpass'];
$renewp=$_POST['renewpass'];
$usid=$_SESSION['user_id'];
$query_getp="SELECT pass_word from users where id='$usid' ";
$query_getp_res=  mysqli_query($con, $query_getp) or die(mysqli_error($con));
$row =  mysqli_fetch_array($query_getp_res);
if(strcmp($row['pass_word'], $oldp)!=0){
    header('location:settings.php?error_name=current password is incorrect');
}
else if(strcmp($newp, $renewp)!=0){
    header('location:settings.php?error_name=new passwords donot match');
}
else{
    $updatequery="update users set pass_word='$newp' where id='$usid'";
$updatequery_result=  mysqli_query($con, $updatequery);
header('location:settings.php?error_name=changed successfully');}
?>
