<?php
session_start();
if(!isset($_SESSION['email'])){
    header('location:index.php');
    
    
}
else{
    session_destroy();
    header('location:index.php');
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
