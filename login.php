<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['confirm password']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM registration WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

     echo "welcome";
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>