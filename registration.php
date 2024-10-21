<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"]== "POST"){
  include "db.php";
  $email = $_POST['email'];
  $username = $_POST["username"];
  $password = $_POST["password"];
  $cpassword = $_POST["cpassword"];
  $exists=false;


     if(($password == $cpassword)&& $exists == false){
      $sql = "INSERT INTO `users` (`email`,`username`,`password`,`cpassword`,`dt`) VALUES ('$email','$username','$password','$cpassword', CURRENT_TIMESTAMP())";
      $result= mysqli_query($conn, $sql);
       if($result){
         $showAlert='true';
       }
       else{
        $showError = "Passwords do not match";
       }
  }
  }

?>
  <form class="register-form" action="registration.php" method="post">
      <h3>register now</h3>
      <input type="email" placeholder="enter your email" class="box" name="email">
      <input type="username" placeholder="enter your email" class="box" name="username">
      <input type="password" placeholder="enter your password" class="box" name="password">
      <input type="password" placeholder="confirm your password" class="box" name="cpassword">
      <input type="submit" value="register now" class="btn">
   </form>