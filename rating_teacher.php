<?php

    session_start();
   $host="localhost";
   $user_name="root";
   $password="root1234";
   $db_name="OCAS";

  $teacher_name =  $_SESSION['teacher_name'];
  $id = $_SESSION["UniversityID"];

   $connection = mysqli_connect($host,$user_name,$password,$db_name);

if (!$connection) die (mysqli_connect_error());
else echo "connected <br>";


	$q1 = $_POST[q1];
	$q2 = $_POST[q2];
	$q3 = $_POST[q3];
	$q4 = $_POST[q4];
	$q5 = $_POST[q5];
	$q6 = $_POST[q6];
	$q7 = $_POST[q7];
	$q8 = $_POST[q8];

    $rating = $q1 + $q2 + $q3 + $q4 + $q5 + $q6 + $q7 + $q8 ;
    $rating = $rating / 8;

	$sql = "INSERT INTO faculty_member_survey (student_id, doctor_name, rating, q1, q2, q3, q4, q5, q6, q7, q8) VALUES ('$id','$teacher_name','$rating', '$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$q8')";

    $sql2 = "UPDATE faculty_members_info SET rating = (SELECT AVG(rating) FROM faculty_member_survey WHERE doctor_name = '$teacher_name') WHERE name = '$teacher_name'";
    
   
	if(mysqli_query($connection,$sql)){
        
         mysqli_query($connection,$sql2); 
         echo header('location:index.php');
        
    } 
        
          else echo mysqli_error($connection);

?>