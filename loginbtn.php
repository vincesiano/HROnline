<?php  
  session_save_path('tmp');
  include('connect.php');
  $username = mysqli_real_escape_string($conn,$_POST['username']);
  $password = mysqli_real_escape_string($conn,$_POST['password']);

  $sql = "SELECT * FROM tbl_admin WHERE username = '$username'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();

  $hashed = $row['password'];//DB PASSWORD

  if (md5($password) == $hashed) {
    session_save_path('tmp');
    session_start();
    $_SESSION['admin'] = "administrator";
    $_SESSION['id'] = $row['id'];
    $_SESSION['email_message'] = $row['email_message'];
    $_SESSION['email_subject'] = $row['email_subject'];
    
    unset($_SESSION['loginattempt']);
    unset($_SESSION['loginerror']);
    $_SESSION['loginattempt'] = 0;
    header('location: google.php');
  }
  else{
    session_save_path('tmp');
    session_start();
    $_SESSION['loginerror'] = "Incorrect username or password!";
    $_SESSION['loginattempt'] += 1;
    header('location: adminloginpage.php');
  }

  $conn->close();
    
?>