 <?php  
session_start();


 $connect = mysqli_connect("localhost", "root", "root1234", "OCAS");  

 $query = "SELECT semester, student_ach, faculty_members_ach FROM performance;";
 $query2 = "SELECT semester, student_cs, student_is, student_it FROM performance;";
 $query3 = "SELECT semester, faculty_members_cs, faculty_members_is, faculty_members_it FROM performance;";

 $result = mysqli_query($connect, $query);
 $result2 = mysqli_query($connect, $query2);
 $result3 = mysqli_query($connect, $query3);
 ?> 

<html lang="en">
<head>

  <title>Performance</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  
  <script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['semester', 'student_ach', 'faculty_members_ach'],
          <?php  
              while($row = mysqli_fetch_array($result))  
              {  
                 $semester = $row["semester"];
                 $student_ach = $row["student_ach"];
                 $faculty_members_ach = $row["faculty_members_ach"];
            ?>
                 
                 ['<?php echo $semester;?>',<?php echo $student_ach;?>,<?php echo $faculty_members_ach;?>],
    
              
          <?php
              }  
            ?>
      ]);

      var options = {
        title: 'College Performance',
        curveType: 'function',
        legend: { position: 'bottom' }
      };

      var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

      chart.draw(data, options);
    }
      </script>

      <script type="text/javascript">
          google.charts.load('current', {packages: ['corechart', 'line']});
          google.charts.setOnLoadCallback(drawCurveTypes);

          function drawCurveTypes() {
            var data = new google.visualization.DataTable();
            data.addColumn('number', 'semester');
            data.addColumn('number', 'student_cs');
            data.addColumn('number', 'student_is');
            data.addColumn('number', 'student_it');

            data.addRows([
                    <?php  
                        while($row = mysqli_fetch_array($result2))  
                        {  
                           $semester = $row["semester"];
                           $student_cs = $row["student_cs"];
                           $student_is = $row["student_is"];
                           $student_it = $row["student_it"];
                        ?>
                           
                           [<?php echo $semester;?>,<?php echo $student_cs;?>,<?php echo $student_is;?>, <?php echo $student_it;?>],
                        
                    <?php
                        }  
                      ?>
            ]);

            var options = {
              hAxis: {
                title: 'Semester'
              },
              vAxis: {
                title: 'Acheivements'
              },
              series: {
                1: {
                  curveType: 'function'
                }
              }
            };

            var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
            chart.draw(data, options);
          }

      </script>

    <script type="text/javascript">
          google.charts.load('current', {packages: ['corechart', 'line']});
          google.charts.setOnLoadCallback(drawCurveTypes2);

          function drawCurveTypes2() {
            var data = new google.visualization.DataTable();
            data.addColumn('number', 'semester');
            data.addColumn('number', 'faculty_members_cs');
            data.addColumn('number', 'faculty_members_is');
            data.addColumn('number', 'faculty_members_it');

            data.addRows([
                    <?php  
                        while($row = mysqli_fetch_array($result3))  
                        {  
                             $semester = $row["semester"];
                             $faculty_members_cs = $row["faculty_members_cs"];
                             $faculty_members_is = $row["faculty_members_is"];
                             $faculty_members_it = $row["faculty_members_it"];
                        ?>
                           
                           [<?php echo $semester;?>,<?php echo $faculty_members_cs;?>,<?php echo $faculty_members_is;?>, <?php echo $faculty_members_it;?>],
                        
                    <?php
                        }  
                      ?>
            ]);

            var options = {
              hAxis: {
                title: 'Semester'
              },
              vAxis: {
                title: 'Acheivements'
              },
              series: {
                1: {
                  curveType: 'function'
                }
              }
            };

            var chart = new google.visualization.LineChart(document.getElementById('chart_divv'));
            chart.draw(data, options);
          }

      </script>

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
      
      .contain-imgs{
          margin-left: 150px;
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
        <li><a href="#">PERFORMANCE</a></li>
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
  <h1>College Performance</h1> 
</div>
    
  
    <br/><br/>  
    <div class="contain-imgs">
        
          <form action="generate_report.php" method="post">
      
        <div class="input-daterange">
          <div class="col-md-4">
            <input type="text" name="start_date" id="start_date" class="form-control" />
          </div>
          <div class="col-md-4">
            <input type="text" name="end_date" id="end_date" class="form-control" />
          </div>      
       </div>
        <div class="col-md-4">
          <button type="submit" class="btn btn-info">Submit</button>
        </div>
    <br><br>
    </form>

       <div style="width:900px;">  
            <h3 align="center">The difference between students and faculty memebers in records achievements</h3>  
            <div id="curve_chart" style="width: 900px; height: 500px;"></div>  
       </div>
           <br />     <br />  
       <div style="width:900px;">  
            <h3 align="center">The difference between students of eeach department in records achievements</h3>  
            <div id="chart_div" style="width: 900px; height: 500px;"></div>  
       </div>
           <br />     <br />  
       <div style="width:900px;">  
            <h3 align="center">The difference between faculty members of eeach department in records achievements</h3>  
            <div id="chart_divv" style="width: 900px; height: 500px;"></div>  
       </div>
        </div>
    </body>
</html>

<script type="text/javascript" language="javascript">
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
    url:"generate_report.php",
    type:"POST",
    data:{
     is_date_search:is_date_search, start_date:start_date, end_date:end_date
    }
   }
  });
 }
 </script>