<?php session_start();?>
<?php
  ob_start(); 
  
  if($_SESSION['id'] != NULL) header('location: landing.php');
  if(isset($_POST['sign_up']) && !empty($_POST) ){
    $con = mysqli_connect("localhost",'root');
    if(!$con){
      $_SESSION["error"] = 4;
      header('location: landing.php');
      exit();
    }

    mysqli_select_db($con, 'user');

    $uname = htmlentities(mysqli_real_escape_string($con, $_POST['uname'])) ;
    $fname = htmlentities(mysqli_real_escape_string($con, $_POST['fname'])) ;
    $email = htmlentities(mysqli_real_escape_string($con, $_POST['email'])) ;
    $pswd = htmlentities(mysqli_real_escape_string($con, $_POST['pswd'])) ;
    $hashed_pswd = password_hash($pswd, PASSWORD_DEFAULT); 

    $check_email_query = "select userinfo.uname from userinfo where email = '$email'";
    $run_email_query = mysqli_query($con, $check_email_query);
    $check_email_num = mysqli_num_rows($run_email_query);

    if($check_email_num >= 1){
      $_SESSION["error"] = 1;
      header('location: landing.php');
      exit();
    }

    $query = "insert into userinfo (uname, fname, email, pswd) values ('$uname', '$fname', '$email', '$hashed_pswd')";
    $done = mysqli_query($con, $query);

    if(!$done){
      $_SESSION["error"] = 2;
      header('location: landing.php');
      exit();
    }

    $_SESSION["error"] = 3;
    header('location: landing.php');
  }

?>
