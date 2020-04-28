<?php


  $host="localhost";
   $user_name="root";
   $password="root1234";
   $db_name="OCAS";

   $connection = mysqli_connect($host,$user_name,$password,$db_name);

if (!$connection) die (mysqli_connect_error());
else "erorr!";
    
    

?>