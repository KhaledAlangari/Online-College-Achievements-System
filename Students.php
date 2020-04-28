<?php

$connect = new PDO("mysql:host=localhost;dbname=ocas", "root", "root1234");

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Students Acheivements</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
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
    padding: 60px 150px;
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
    color: #0183b7 !important;
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
      .input-field {
          color: #0183b7;
          width:100%;
          padding: 10px;
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
<!--<script type="text/javascript" src="js/tail.select.min.js"></script> -->
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
  <h1>Students Acheivements</h1> 
  <p>To record it yearly</p> 
    </div>

    
    <div id="about" class="container-fluid">
        <div class="col-sm-12">
  
    <br />
    <div class="row">
     <div class="input-daterange">
      <div class="col-md-4">
   <input placeholder="Start Date" type="text" name="start_date" id="start_date" class="form-control" />
      </div>
      <div class="col-md-4">
       <input placeholder="End Date"  type="text" name="end_date" id="end_date" class="form-control" />
      </div>      
     </div>
     <div class="col-md-4">
      <input type="button" name="search" id="search" value="Search" class="btn btn-info" />
     </div>
    </div>
    <br />
    <table id="semester_data" class="table table-bordered table-striped">
     <thead>
      <tr>
         <th>ID</th>
         <th>Name</th>
         <th>Graduation Project</th>
         <th>Department</th>         
         <th>GPA</th>
         <th>Honor</th>
         <th>Level</th> 
         <th>Semester</th>
      </tr>
     </thead>
    </table>
            
            
    
   </div>
    </div>
  

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
</footer>

</body>
</html>

<script type="text/javascript" language="javascript" >
$(document).ready(function(){
 
 $('.input-daterange').datepicker({
  todayBtn:'linked',
  format: "yyyy",
  autoclose: true
 });

 fetch_data('no');

 function fetch_data(is_date_search, start_date='', end_date='')
 {
  var dataTable = $('#semester_data').DataTable({
   "processing" : true,
   "serverSide" : true,
   "order" : [],
   "ajax" : {
    url:"fetch_students.php",
    type:"POST",
    data:{
     is_date_search:is_date_search, start_date:start_date, end_date:end_date
    }
   }
  });
 }

 $('#search').click(function(){
  var start_date = $('#start_date').val();
  var end_date = $('#end_date').val();
  if(start_date != '' && end_date !='')
  {
   $('#semester_data').DataTable().destroy();
   fetch_data('yes', start_date, end_date);
  }
  else
  {
   alert("Both Date is Required");
  }
 }); 
 
});
</script>