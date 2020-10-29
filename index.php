<?php session_start();?>
<?php 
    $_SESSION["error"] = 0;
    $_SESSION["email"] = ""; 
?>
<?php header('location: landing.php'); ?>
