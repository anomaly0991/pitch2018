<?php
  if (isset($_POST['submit'])) {

    include_once 'dbh.inc.php';

    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    $membership = mysqli_real_escape_string($conn, $_POST['membership']);



    //error handlers//
    //check for empty fields//
    if (empty($first) || empty($last) || empty($email) || empty($pwd) || empty($membership)) {

      header("Location: ../pitch_signup.php?signup=empty");
      exit();

    } else{

      //check if input characters are valid//
      if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)){
          header("Location: ../pitch_signup.php?signup=invalid");
          exit();
      } else {
        //check if email is invalid
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("Location: ../pitch_signup.php?signup=email");
            exit();
        } else {
          $sql = "SELECT * FROM users WHERE user_email= '$email'";
          $result = mysqli_query($conn, $sql);
          $resultCheck = mysqli_num_rows($result);

          if ($resultCheck > 0) {
            header ("Location: ../pitch_signup.php?signup=emailtaken");
            exit();
          }
          //Hashing the $dbPassword//

          $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
          //INSERT THE user into the pitch_database
          $sql = "INSERT INTO users (user_first, user_last, user_email, user_pwd, user_membership)
          VALUES ('$first', '$last', '$email', '$hashedPwd', '$membership');";
          mysqli_query($conn, $sql);

          header("Location: ../pitch_signup.php?signup=success");
          exit();

        }
      }

    }

  }



  else {
    
    header("Location: ../pitch_signup.php");
    exit();
  }
 ?>
