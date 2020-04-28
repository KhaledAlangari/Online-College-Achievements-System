<?php
	
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online College Achievements System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
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
      
      .singup{
          
          font-size: 15px;
          margin: 200px;
          
      }
      
      .search{
          
          color: white;
          background-color: #0ca7d7;
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
        
     <a class="navbar-brand" href="#myPage"><img src="CCIS.png" width="50px" height="50px" ></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#acheivemnts">ACHIEVEMENTS</a></li>
        <li><a href="#performance">PERFORMANCE</a></li>
           <?php
        
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
   
          
        
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>College Achievements</h1> 
  <p>To record it yearly</p> 
</div>

<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About Acheivements System</h2><br>
      <p align="justify">The purpose of this project is to develop an online application that help the college administration of computer and Information system of Imam Mohammed Ibn Saud University to record each year achievements of both, students and faculty members in a systematic manner generating a progress report. The main source of data is the annual achievements forms filled by each faculty member and evaluation surveys filled be the students at the end of each year. The application will also provide services to conduct surveys. This will also help students & faculty members to see the tasks & achievements done in previous years. The report will also suggest improvement for future. Although similar systems are developed before but none of them was meeting all the requirements of the CCIS college. So instead of customizing an already developed application it was considered a good idea to develop a system from scratch according to CCIS needs.</p>
      <br>
    </div>
    <div class="col-sm-4">
      <span style="padding-left:150px" class="glyphicon glyphicon-inbox logo slideanim"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-bookmark logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Our Goal</h2><br>
      <h4><strong>AIM:</strong> Our aim is to develop an online application that helps the management of College of Computer and Information Science of Imam Mohammed Ibn Saud Islamic University to record yearly achievements of faculty members and students.</h4><br>
      <p><strong>OBJECTIVES:</strong></p>
        <ul>
            <li>Show faculties and students achievements to college administration in one comprehensive report.</li>
            <li>Encourage faculty and students to achieve personal and college’s goals.</li>
            <li>Track and archive achievements of faculty and students.</li>
            <li>Allow students know more about the college.</li>
        </ul>
    </div>
  </div>
</div>

<div id="acheivemnts" class="container-fluid text-center">
  <h2>ACHIEVEMENTS</h2>
  <h4>What We Records</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-education logo-small"></span>
        <nav><h4><a href="Students.php">STUDENTS</a></h4></nav>
      <p>List of the achievements of the graduation projects accomplished by the college students</p>
    </div>
    
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-briefcase logo-small"></span>
        <nav><h4><a href="faculty_members.php">FACULTY MEMBERS</a></h4></nav>
      <p>List of achievements of research papers and awards obtained by faculty members</p>
    </div>
   
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
        <h4><a href="college.php">COLLEGE</a></h4>
      <p>List of the achievements of the college and its departments</p>
    </div>
  </div>
</div>


<div id="performance" class="container-fluid text-center bg-grey">
  <h2><a href="performance.php">Performance</a></h2><br>
    <div class="col-sm-12">
      <span class="glyphicon glyphicon-stats logo slideanim" style="font-size: 350px"></span>
    </div>
  <br>
  <br>
 
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
   
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>


    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>Student Evalution </h4>
      </div>
      <div class="item">
        <h4>College Progress </h4>
      </div>
      <div class="item">
        <h4>Overall Performance</h4>
      </div>
    </div>


    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<div id="login" class="container-fluid bg-grey">
  
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Riyadh, KSA</p>
      <p><span class="glyphicon glyphicon-phone"></span> +966 512345678</p>
      <p><span class="glyphicon glyphicon-envelope"></span> email@something.com</p>
    </div>
    
        
    
          <?php
          
          if ($_SESSION["email"] == true){ ?>
              
             
          
           <?php
          } else {  ?>
          
      <h2 class="text-center">LOG IN</h2>
        <form action="login.php" method="post">
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-8 form-group pull-right">
          <input class="form-control" id="uername" name="email" placeholder="email" type="text" required>
        </div>
        <div class="col-sm-8 form-group pull-right">
          <input class="form-control" id="password" name="password" placeholder="Password" type="password" required>
             
        </div>
          
      </div>
          <div class="row">
          
                    <div class="col-sm-12 form-group">
           
          <button class="btn btn-default pull-right" type="submit">Log in</button>
            <a class="singup" href="singup.php">didn't have an account?</a>
        </div>
      </div>
        
        </div>
          </form>
          <?php
          }
          ?>
       
    
  </div>
</div>
<br><br>


<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
</footer>

<script>
$(document).ready(function(){

  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    if (this.hash !== "") {

      event.preventDefault();

   
      var hash = this.hash;

        
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   

        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>