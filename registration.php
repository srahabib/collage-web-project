<?php
require 'config.php';
//  if(!empty($_SESSION["id"])){
//    header("Location: index.php");
// }
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email is Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO tb_user VALUES(null,'$name','$username','$email','$password')";
      mysqli_query($conn, $query);
      header("Location: signup-success.html");
      exit;
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
    <link rel='stylesheet' href='css/Registration.css'>
  </head>
  <body>
    <form  class="signup-form" action="" method="post" autocomplete="off">

    <div class="form-header">
      <h1>Register</h1>

    </div>

    <div class="form-body">
      <label for="name">Name : </label>
      <input type="text" name="name" id = "name" required value="" placeholder="Enter Name"> <br>
      <label for="username">Username : </label>
      <input type="text" name="username" id = "username" required value="" placeholder="Enter Username"> <br>
      <label for="email">Email : </label>
      <input type="email" name="email" id = "email" required value="" placeholder="Email"> <br>
      <label for="password">Password : </label>
      <input type="password" name="password" id = "password" required value="" placeholder="Enter Password"> <br>
      <label for="confirmpassword">Confirm Password : </label>
      <input type="password" name="confirmpassword" id = "confirmpassword" required value="" placeholder="Confirm Password"> <br>
      <button type="submit" name="submit">Register</button>
    </div>


      <div class="form-footer">
        <span>already have an account?&nbsp</span>
        <a href="login.php">Login</a>
      </div>

    </form>
  </body>
</html>