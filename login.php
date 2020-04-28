<?php

session_start();
require "db.php";

$email = $_POST[email];

$password = md5($_POST[password]);

$sql = "SELECT * FROM `users` WHERE `email`= '$email' AND `password`='$password'";

$run = mysqli_query($connection,$sql);

if($row = mysqli_fetch_array($run)) {
      
      $_SESSION["email"] = $email;
    header('location:index.php');
   
}
 
else {

       header('location:loginsite.php');
}

?>