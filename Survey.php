<?php  

session_start();

$conn = mysqli_connect("localhost","root","root1234","OCAS");
        if ($conn-> connect_error){
            
            die ("Connection faild:" .$conn-> connect_error);
        } 
        
           if ($_SESSION["email"] == true){
              $email = $_SESSION["email"];     
               
        $sql = "SELECT * FROM `users` WHERE `email`= '$email'";
        $result = $conn-> query($sql);
        
         if ($result-> num_rows > 0){   
             
             while  ($row = $result-> fetch_assoc()){
                 
             $ss = $row["status"];
             $University_ID = $row["University_ID"];
                 
             $_SESSION["UniversityID"] = $University_ID;
                 
              
                 if ($ss == "Student"){
                      ?> <li><a href="Survey.php">SURVEY</a> <?php
                 }
           }
         }
          
          ?> <li><a href="logout.php">LOGOUT</a> <?php
        } else {  ?>
          
                   <li><a href="loginsite.php">LOGIN</a></li>
          <?php
          }
          ?>

<!DOCTYPE html>


<html lang="en">
<head>
 
  <title>Survey</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .jumbotron {
    background-color: #0183b7;
    color: #fff;
    padding: 100px 25px;
    font-family: Montserrat, sans-serif;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: #0183b7;
    font-size: 50px;
  }
  .logo {
    color: #0183b7;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #0183b7;
  }
  .carousel-indicators li {
    border-color: #0183b7;
  }
  .carousel-indicators li.active {
    background-color: #0183b7;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #0183b7; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #0183b7;
    background-color: #fff !important;
    color: deepskyblue;
  }
  .panel-heading {
       
    color: #fff !important;
    background-color: #0183b7 !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #0183b7;
    color: #fff;
  }
  .navbar {
       
    margin-bottom: 0;
    background-color: #0183b7;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
     
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: deepskyblue !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
      
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #0183b7;
  }
  
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
        
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }
      .pos{
          position: relative;
      }
      
      .course{
          position: absolute;
          font-size: 20px;
          width: 200px;
          padding: 10px;
          margin: 30px 10px 10px 200px;
          
      }
      
      
      .p_course{
          margin-bottom: 30px;
          font-size: 30px;
          font-weight: bold;
      }
      
      .teacher{
          position: absolute;
          font-size: 20px;
          width: 200px;
          padding: 10px;
          margin: 30px 40px 10px 800px;
         
      }
      
      
      .p_teacher{
          
          margin-bottom: 30px;
          font-size: 30px;
          font-weight: bold;
      }
      
         .navbar-brand{
          height: 54px;
      }
        .navbar-brand,img{
    
        padding-top: 2px;
      }

  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
        
      <a class="navbar-brand" href="index.php"><img src="CCIS.png" width="50px" height="50px" ></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
           <li><a href="index.php">ABOUT</a></li>
        <li><a href="index.php">ACHIEVEMENTS</a></li>
        <li><a href="performance.php">PERFORMANCE</a></li>
        <li><a href="logout.php">LOGOUT</a></li>
      </ul>
    </div>
  </div>
</nav>
    
<div id="Admin_Panel" class="container-fluid text-center">
  <h2>Survey</h2>
  <br>
  <div class="row slideanim pos">
   
      
      
      <div class="course">
       <p class="p_course">Department</p>
          <ul>
               <?php
              
              $flag_depatment = true; 
              
              $sql2 = "SELECT * FROM `college_survey`";
              
           $result = $conn-> query($sql2);
        
         if ($result-> num_rows > 0){   
             
             while  ($row = $result-> fetch_assoc()){
                     
                 $checkID = $row['student_id'];        
                 
              if ($checkID == $University_ID){
                  $flag_depatment = false;
                  break;
              }
         
           
         }
          
         }
              
              if ($flag_depatment == true){
                  
              $sql = "SELECT * FROM `student` WHERE `id`= '$University_ID'";
        $result = $conn-> query($sql);
        
         if ($result-> num_rows > 0){   
             
             while  ($row = $result-> fetch_assoc()){
                 
                 $Department = $row['department'];
               
              echo "<li><a href='college_survey.php?Department=$Department'>".$Department."</a></li>";
         
           
         }
          
         }
              } else{
                  echo "<p style='font-size:15px; margin-right:45px; '>Already been rated</p>";
              }
        ?>
            
          </ul>
      
      
      </div>
     
      <div class="teacher">
       <p class="p_teacher">Teachers</p>
          
          <ul>
               <?php
              
              $flag_teacher = true; 
              
              $sql2 = "SELECT * FROM `faculty_member_survey`";
              
           $result = $conn-> query($sql2);
        
         if ($result-> num_rows > 0){   
             
             while  ($row = $result-> fetch_assoc()){
                     
                
                 
               $checkID = $row['student_id'];        
               $checkTeacher = $row['doctor_name']; 
                 
              if ($checkID == $University_ID && $checkTeacher  ){
                  $flag_depatment = false;
                  break;
              }
                 
                 
           
         }
          
         }
              
               $sql = "SELECT * FROM `student_information` WHERE `student_id`= '$University_ID'";    
        $result = $conn-> query($sql);
              
         if ($result-> num_rows > 0){   
             while  ($row = $result-> fetch_assoc()){
                 
              $teacher_name_1 = $row['teacher_name_1'];
              $teacher_name_2 = $row['teacher_name_2'];
              $teacher_name_3 = $row['teacher_name_3'];
              $teacher_name_4 = $row['teacher_name_4'];
              $teacher_name_5 = $row['teacher_name_5'];
                   
              echo "<li><a href='faculty_members_survey.php?teacher_name=$teacher_name_1'>".$teacher_name_1."</a></li>";
              echo "<li><a href='faculty_members_survey.php?teacher_name=$teacher_name_2'>".$teacher_name_2."</a></li>";
              echo "<li><a href='faculty_members_survey.php?teacher_name=$teacher_name_3'>".$teacher_name_3."</a></li>";
              echo "<li><a href='faculty_members_survey.php?teacher_name=$teacher_name_4'>".$teacher_name_4."</a></li>";
              echo "<li><a href='faculty_members_survey.php?teacher_name=$teacher_name_5'>".$teacher_name_5."</a></li>";
              
           
         }
          
         }
        ?>
              
          </ul>
      
      
      </div>
    
   
    
  </div>
</div>
    
    
    
    
    
    </body>
    
</html>
