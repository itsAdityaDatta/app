
<?php 
  if(isset($_SESSION["error"])){
    if($_SESSION['error'] == 0){
      echo "<script> document.getElementById('login-alert').style.display = 'none'; </script>";
    }
    else if($_SESSION["error"] == 1){
      echo "<script> document.getElementById('login-alert').style.display = 'block'; </script>";
      echo "<script> document.getElementById('login-alert').className = 'alert alert-danger'; </script>";
      echo "<script> document.getElementById('login-alert').innerHTML = 'ERROR: Email already registered'; </script>";
    }
    else if($_SESSION['error'] == 2){
      echo "<script> document.getElementById('login-alert').style.display = 'block'; </script>";
      echo "<script> document.getElementById('login-alert').className = 'alert alert-danger'; </script>";
      echo "<script> document.getElementById('login-alert').innerHTML = 'ERROR: Registration query failed, please try again.'; </script>";
    }
    else if($_SESSION['error'] == 3){
      echo "<script> document.getElementById('login-alert').style.display = 'block'; </script>";
      echo "<script> document.getElementById('login-alert').className = 'alert alert-success'; </script>";
      echo "<script> document.getElementById('login-alert').innerHTML = 'Registration successful<br> Please login to enter The Jungle'; </script>";
    }
    else if($_SESSION['error'] == 4){
      echo "<script> document.getElementById('login-alert').style.display = 'block'; </script>";
      echo "<script> document.getElementById('login-alert').className = 'alert alert-danger'; </script>";
      echo "<script> document.getElementById('login-alert').innerHTML = 'ERROR: MySql database connection failed'; </script>";
    }
    else if($_SESSION['error'] == 5){
      echo "<script> document.getElementById('login-alert').style.display = 'block'; </script>";
      echo "<script> document.getElementById('login-alert').className = 'alert alert-danger'; </script>";
      echo "<script> document.getElementById('login-alert').innerHTML = 'ERROR: The email you entered is not registered'; </script>";
    }
    else if($_SESSION['error'] == 6){
      echo "<script> document.getElementById('login-alert').style.display = 'block'; </script>";
      echo "<script> document.getElementById('login-alert').className = 'alert alert-danger'; </script>";
      echo "<script> document.getElementById('login-alert').innerHTML = 'ERROR: Incorrect password'; </script>";
    }
  }
?>