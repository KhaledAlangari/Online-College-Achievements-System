<?php

require "db.php";

function check($var){
    
    $var = trim($var);
    $var = strip_tags($var);
    $var = stripcslashes($var);
    if(empty($var)) return false;
    else return $var;
}

$name = check($_POST[name]);
$email= check($_POST[email]);
$password= check($_POST[password]);
$UniversityID= check($_POST[UniversityID]);
$status= check($_POST[status]);
$checkstatus= check($_POST[status]);
$Department= check($_POST[Department]);

if(!$name) $error[name]="please enter falid name";
else if (strlen($name)>50) $error[name]="too large name";

if(!$password) $error[password]="please enter falid password";

if(!$UniversityID) $error[name]="please enter falid University ID";
else if (strlen($UniversityID)>9) $error[UniversityID]="too large University ID number";

else if (strlen($password)>50) $error[password]="too large password";
else $password = md5($password);

if (!filter_var($email,FILTER_VALIDATE_EMAIL)) $error[email] = "please enter valid email";

if(!$status) $error[status]="please choose your status";
if(!$Department) $error[status]="please choose your Department";

    
    if(empty($error)){
        
        $checkstatus = $status;
        $sql = "INSERT INTO `users` ( `name`, `email`, `password`, `University_ID`, `status`,`Department`) VALUES ('$name', '$email', '$password', '$UniversityID','$status','$Department')";
        
        
            
        $db =  mysqli_connect("localhost","root","root1234","OCAS");
        
        if ($checkstatus == "Student"){
         mysqli_query($db, "INSERT INTO student (id,name,department) VALUES ('$UniversityID','$name','$Department')"); 
         mysqli_query($db, "INSERT INTO student_information (student_id) VALUES ('$UniversityID')"); 
            
        }
        else {
              mysqli_query($db, "INSERT INTO faculty_members_info (id,name,department) VALUES ('$UniversityID','$name','$Department')"); 
        }
        
        
        if(mysqli_query($connection,$sql)) header('location:loginsite.php');
        
          else echo mysqli_error($connection);
        
    }

else {
    foreach($error as $e)
    echo $e."<br>";
}

?>