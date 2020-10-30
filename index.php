<?php session_start();?>
<?php 
    $_SESSION["error"] = 0;
    $_SESSION["id"] = NULL; 
?>
<?php header('location: landing.php'); ?>
