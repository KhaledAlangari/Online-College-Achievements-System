

<?php
session_start();

 $conn = mysqli_connect("localhost","root","root1234","OCAS");
        if ($conn-> connect_error){
            
            die ("Connection faild:" .$conn-> connect_error);
        } 
        


  $teacher_name = $_GET['teacher_name'];
  $_SESSION['teacher_name'] = $teacher_name;
  $id = $_SESSION["UniversityID"];


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Teacher Survey</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>

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
       <script type="text/javascript">
        function a(){
            alert("ffffff");
        }
        </script>
    
    <?php
      $sql2 = "SELECT * FROM `faculty_member_survey` WHERE `student_id`= '$id'"; 
              
           $result = $conn-> query($sql2);
        
         if ($result-> num_rows > 0){   
             
             while  ($row = $result-> fetch_assoc()){
                           
               $checkTeacher = $row['doctor_name']; 
               $checkID = $row['student_id'];
                 
            
                  
                 if ($checkTeacher == $teacher_name){
                  echo '<script type="text/javascript">',
                                    'alert("Already been rated same teacher");',
                                    ' window.location.href = "index.php";',
                                            '</script>';
              }
                 
                 
           
         }
          
         }
?>

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
        <li><a href="index.php">ACHEIVEMNETS</a></li>
        <li><a href="performance.php">PERFORMANCE</a></li>
        
         <?php
          if ($_SESSION["email"] == true){ ?>
              
              <li><a href="logout.php">LOGOUT</a></li>
          
           <?php
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
  <h1>Survey of Teacher</h1> 
  </div>

  <div class="container">
    <div class="slideanim">

    <h2>Answer all the qustions</h2>

    
    <form action="rating_teacher.php?" method="post">
     
        
        
    <label for id="q1">The teacher clearly demonstrated knowledge and skills of the course : </label>
      <select id="q1" name="q1" >
        <option value="">Chose your answer</option>
        <option value='5'>Strongly Agree</option>
        <option value='4'>Agree</option>
        <option value='3'>Neutral</option>
        <option value='2'>Disagree</option>
        <option value='1'>Strongly Disagree</option>
      </select>

      <br><br>

    <label for id="q2">The teacher was effective in communicating the content of the course : </label>
      <select id="q2" name="q2">
        <option value="">Chose your answer</option>
        <option value='5'>Strongly Agree</option>
        <option value='4'>Agree</option>
        <option value='3'>Neutral</option>
        <option value='2'>Disagree</option>
        <option value='1'>Strongly Disagree</option>
      </select>

      <br><br>

    <label for id="q3">The teacher encouraged feedback from the class : </label>
      <select id="q3" name="q3">
        <option value="">Chose your answer</option>
        <option value='5'>Strongly Agree</option>
        <option value='4'>Agree</option>
        <option value='3'>Neutral</option>
        <option value='2'>Disagree</option>
        <option value='1'>Strongly Disagree</option>
      </select>

      <br><br>

    <label for id="q4" >The teacher conducted the lectures regularly and on time : </label>
      <select id="q4" name="q4">
        <option value="">Chose your answer</option>
        <option value='5'>Strongly Agree</option>
        <option value='4'>Agree</option>
        <option value='3'>Neutral</option>
        <option value='2'>Disagree</option>
        <option value='1'>Strongly Disagree</option>
      </select>

      <br><br>

    <label for id="q5" >The teacher was available in the specified office hours regularly : </label>
      <select id="q5" name="q5">
        <option value="">Chose your answer</option>
        <option value='5'>Strongly Agree</option>
        <option value='4'>Agree</option>
        <option value='3'>Neutral</option>
        <option value='2'>Disagree</option>
        <option value='1'>Strongly Disagree</option>
      </select>

      <br><br>

    <label for id="q6">The teacher was available in the specified office hours regularly : </label>
     <select id="q6" name="q6">
        <option value="">Chose your answer</option>
        <option value='5'>Strongly Agree</option>
        <option value='4'>Agree</option>
        <option value='3'>Neutral</option>
        <option value='2'>Disagree</option>
        <option value='1'>Strongly Disagree</option>
      </select>

      <br><br>

    <label for id="q7">The grading policies followed by the teacher were clearly demonstrated : </label>
      <select id="q7" name="q7">
        <option value="">Chose your answer</option>
        <option value='5'>Strongly Agree</option>
        <option value='4'>Agree</option>
        <option value='3'>Neutral</option>
        <option value='2'>Disagree</option>
        <option value='1'>Strongly Disagree</option>
      </select>

      <br><br>

    <label for id="q8">The course textbook and other materials were available: </label>
      <select id="q8" name="q8">
        <option value="">Chose your answer</option>
        <option value='5'>Strongly Agree</option>
        <option value='4'>Agree</option>
        <option value='3'>Neutral</option>
        <option value='2'>Disagree</option>
        <option value='1'>Strongly Disagree</option>
      </select>

      <br>
       
     
    <label id="sum" name="sum" value="sum"></label>
        <br>
    <button type="submit" class="btn btn-info">Submit</button>

  </form>
  </div>
</div>
    
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

<script type="text/javascript">
  $('select').change(function(){
    var sum = 0;
    $('select :selected').each(function() {
        sum += Number($(this).val());
    });
     sum = sum / 8;
     $("#sum").html(sum);
});
</script>

    
</body>
</html>