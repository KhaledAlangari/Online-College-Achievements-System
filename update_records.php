<?php  
 
 $connect = mysqli_connect("localhost", "root", "root1234", "ocas");   



   mysqli_query($connect, "DELETE FROM performance;");

    
   for ($i = 2005 ; $i< 2021 ; $i++){

       $j = $i;
         $query1 = "INSERT INTO performance (semester, student_cs, student_is,                 student_it)
                VALUES (
                '$i',
                (SELECT COUNT(IF(department='CS',1, NULL)) FROM student WHERE semester='$i'),
                (SELECT COUNT(IF(department='IS',1, NULL)) FROM student WHERE semester='$i'),
                (SELECT COUNT(IF(department='IT',1, NULL)) FROM student WHERE semester='$i')
                     );";

       $query3 = "UPDATE performance set `student_ach` = `student_cs` + `student_is` + `student_it` 
       WHERE semester='$i';";
       
      $query2 = "update performance set `faculty_members_cs` =(SELECT COUNT(IF(department='CS',1, NULL)) FROM `faculty_members_info` WHERE semester='$i'),
       `faculty_members_is` = (SELECT COUNT(IF(department='IS',1, NULL)) FROM `faculty_members_info` WHERE semester='$i'),`faculty_members_it` = (SELECT COUNT(IF(department='IT',1, NULL)) FROM `faculty_members_info` WHERE semester='$i'), `faculty_members_ach` = `faculty_members_cs` + `faculty_members_is` + `faculty_members_it` 
       WHERE semester='$i'
       ;";

      mysqli_query($connect, $query1);
      mysqli_query($connect, $query2);
       mysqli_query($connect, $query3);
   }
 ?>

 <!DOCTYPE html>
 <html>
 <head>
   <title>Update Records</title>
 </head>
 <body>
  
<?php
 header('location:edit_performance.php');
  
 ?> 



 </body>
 </html>