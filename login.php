<?php session_start();?>
<?php
  ob_start(); 
  if(isset($_POST['log_in']) && !empty($_POST) ){
    $con = mysqli_connect("localhost",'root');
    if($con){
        echo "<script> console.log('MySQL Connection Successful');";
    }
    else{ 
        $_SESSION["error"] = 4;
        header('location: landing.php');
        exit();
    }

    mysqli_select_db($con, 'user');

    $email = htmlentities(mysqli_real_escape_string($con, $_POST['email'])) ;
    $pswd = htmlentities(mysqli_real_escape_string($con, $_POST['pswd'])) ;

    $check_email_query2 = "select * from userinfo where email = '$email' and pswd = '$pswd'";
    $run_email_query2 = mysqli_query($con, $check_email_query2);
    $check_email_num2 = mysqli_num_rows($run_email_query2);

    if($check_email_num2 == 0){
        $check_email_query = "select * from userinfo where email = '$email' ";
        $run_email_query = mysqli_query($con, $check_email_query);
        $check_email_num = mysqli_num_rows($run_email_query);

        if($check_email_num == 0){
            $_SESSION["error"] = 5;
            header('location: landing.php');
            exit();
        }
        $_SESSION["error"] = 6;
        header('location: landing.php');
        exit();
    }

    $_SESSION["error"] = 0;
    $_SESSION["email"] = $email;
    header('location: home.php');

  }

?>
