<?php session_start();?>
<?php
  ob_start(); 
  
  if($_SESSION['id'] != NULL) header('location: landing.php');
  if(isset($_POST['log_in']) && !empty($_POST) ){
    $con = mysqli_connect("localhost",'root');
    if(!$con){
      $_SESSION["error"] = 4;
      header('location: landing.php');
      exit();
    }

    mysqli_select_db($con, 'user');

    $email = htmlentities(mysqli_real_escape_string($con, $_POST['email'])) ;
    $pswd = htmlentities(mysqli_real_escape_string($con, $_POST['pswd'])) ;

    $check_email_query = "select * from userinfo where email = '$email'";
    $run_email_query = mysqli_query($con, $check_email_query);
    $check_email_num = mysqli_num_rows($run_email_query);

    if($check_email_num == 0){
      $_SESSION["error"] = 5;
      header('location: landing.php');
      exit();
    }

    $arr = mysqli_fetch_assoc($run_email_query);
    if( password_verify($pswd, $arr["pswd"]) ){
      $_SESSION["error"] = 0;
      $_SESSION["id"] = $arr["id"];
      header('location: home.php');
      exit();
    }

    $_SESSION["error"] = 6;
    header('location: landing.php');
    exit();
  }

?>
