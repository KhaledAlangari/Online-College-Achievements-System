 <?php  
  session_start();

 $connect = mysqli_connect("localhost", "root", "root1234", "OCAS");  

 $query = "SELECT AVG(q1) as 'q1', AVG(q2) as 'q2', AVG(q3) as 'q3', AVG(q4) as 'q4', AVG(q5) as 'q5', AVG(q6) as 'q6', AVG(q7) as 'q7', AVG(q8) as 'q8' FROM college_survey WHERE department = 'CS'";
 $query2 = "SELECT AVG(q1) as 'q1', AVG(q2) as 'q2', AVG(q3) as 'q3', AVG(q4) as 'q4', AVG(q5) as 'q5', AVG(q6) as 'q6', AVG(q7) as 'q7', AVG(q8) as 'q8' FROM college_survey WHERE department = 'IS'";
 $query3 = "SELECT AVG(q1) as 'q1', AVG(q2) as 'q2', AVG(q3) as 'q3', AVG(q4) as 'q4', AVG(q5) as 'q5', AVG(q6) as 'q6', AVG(q7) as 'q7', AVG(q8) as 'q8' FROM college_survey WHERE department = 'IT'";
 $query4 = "SELECT department, AVG(q1) as 'Q1', AVG(q2) as 'Q2', AVG(q3) as 'Q3', AVG(q4) as 'Q4', AVG(q5) as 'Q5', AVG(q6) as 'Q6', AVG(q7) as 'Q7', AVG(q8) as 'Q8', AVG(rating) as 'rating' FROM college_survey GROUP BY department";


 $result1 = $connect->query($query);
  $q1;
     $q2;
           $q3;
           $q4;
           $q5;
           $q6 ;
             $q7;
               $q8;

  if ($result1-> num_rows > 0) {

    while ($row = $result1-> fetch_assoc()) {

      $q1 = $row["q1"];
      $q2 = $row["q2"];
      $q3 = $row["q3"];
      $q4 = $row["q4"];
      $q5 = $row["q5"];
      $q6 = $row["q6"];
      $q7 = $row["q7"];
      $q8 = $row["q8"];
    }
  }

  $result2 = $connect->query($query2);
      $q11;
      $q12;
      $q13;
      $q14;
      $q15;
      $q16;
      $q17;
      $q18;

  if ($result2-> num_rows > 0) {

    while ($row = $result2-> fetch_assoc()) {

      $q11 = $row["q1"];
      $q12 = $row["q2"];
      $q13 = $row["q3"];
      $q14 = $row["q4"];
      $q15 = $row["q5"];
      $q16 = $row["q6"];
      $q17 = $row["q7"];
      $q18 = $row["q8"];
    }
  }

  $result3 = $connect->query($query3);

      $q21;
      $q22;
      $q23;
      $q24;
      $q25;
      $q26;
      $q27;
      $q28;

  if ($result3-> num_rows > 0) {

    while ($row = $result3-> fetch_assoc()) {

      $q21 = $row["q1"];
      $q22 = $row["q2"];
      $q23 = $row["q3"];
      $q24 = $row["q4"];
      $q25 = $row["q5"];
      $q26 = $row["q6"];
      $q27 = $row["q7"];
      $q28 = $row["q8"];
    }
  }  

 ?> 

<html lang="en">
<head>
  <title>College Survey Analysis</title>
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
     google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Question', 'Rating'],
          ["Quality of the course", <?php echo $q1 ?>],
          ["Outcomes clearly illustrated", <?php echo $q2 ?>],
          ["Tasks were appropriate", <?php echo $q3 ?>],
          ["Provided expected knowledge and skills", <?php echo $q4 ?>],
          ["Teaching strategy", <?php echo $q5 ?>],
          ["Assessment methods", <?php echo $q6 ?>],
          ["The physical facilities were appropriate", <?php echo $q7 ?>],
          ["The materials were available", <?php echo $q8 ?>],
        
        ]);

        var options = {
          width: 1500,
          legend: { position: 'none' },
          chart: {
            title: 'Computer Science',
            subtitle: 'College Evaluation' },
          axes: {
            x: {
              0: { side: 'down' } // Top x-axis.
            }
          },
          bar: { groupWidth: "40%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>
    
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Question', 'Rating'],
          ["Quality of the course", <?php echo $q11 ?>],
          ["Outcomes clearly illustrated", <?php echo $q12 ?>],
          ["Tasks were appropriate", <?php echo $q13 ?>],
          ["Provided expected knowledge and skills", <?php echo $q14 ?>],
          ["Teaching strategy", <?php echo $q15 ?>],
          ["Assessment methods", <?php echo $q16 ?>],
          ["The physical facilities were appropriate", <?php echo $q17 ?>],
          ["The materials were available", <?php echo $q18 ?>],
        
        ]);

        var options = {
          width: 1500,
          legend: { position: 'none' },
          chart: {
            title: 'Information System',
            subtitle: 'College Evaluation' },
          axes: {
            x: {
              0: { side: 'down' } // Top x-axis.
            }
          },
          bar: { groupWidth: "40%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div1'));
        
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>

      <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Question', 'Rating'],
          ["Quality of the course", <?php echo $q21 ?>],
          ["Outcomes clearly illustrated", <?php echo $q22 ?>],
          ["Tasks were appropriate", <?php echo $q23 ?>],
          ["Provided expected knowledge and skills", <?php echo $q24 ?>],
          ["Teaching strategy", <?php echo $q25 ?>],
          ["Assessment methods", <?php echo $q26 ?>],
          ["The physical facilities were appropriate", <?php echo $q27 ?>],
          ["The materials were available", <?php echo $q28 ?>],
        
        ]);

        var options = {
          width: 1500,
          legend: { position: 'none' },
          chart: {
            title: 'Information Technology',
            subtitle: 'College Evaluation' },
          axes: {
            x: {
              0: { side: 'down' } // Top x-axis.
            }
          },
          bar: { groupWidth: "40%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div2'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
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
        
      <a class="navbar-brand" href="../index.php"><img src="../CCIS.png" width="50px" height="50px" ></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
   
        <li><a href="../logout.php">LOGOUT</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>College Survey Analysis</h1> 
</div>

  <div id="about" class="container-fluid">
    <div class="table-responsive">
          
        

    <table class="table table-bordered table-striped">
      <tr>
        <th>Department</th>
        <th>Quality of the course</th>
        <th>Outcomes clearly illustrated</th>
        <th>Tasks were appropriate</th>
        <th>Provided expected knowledge and skills</th>
        <th>Teaching strategy</th>
        <th>Assessment methods</th>
        <th>The physical facilities were appropriate</th>
        <th>The materials were available</th>
        <th>Rating</th>
      </tr>

         <?php
        // Check connection
        if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
        }

        $result = $connect->query($query4);
        
        if ($result->num_rows > 0) {
          
          while($row = $result->fetch_assoc()) {
            echo "<tr><td>" .$row["department"]. "</td><td>" .$row["Q1"]. "</td><td>" .$row["Q2"]. "</td><td>" .$row["Q3"]. "</td><td>" .$row["Q4"]. "</td><td>" .$row["Q5"]. "</td><td>" .$row["Q6"]. "</td><td>" .$row["Q7"]. "</td><td>" .$row["Q8"]. "</td><td>" .$row["rating"]. "</td></tr>";
          }

        echo "</table>";
        }

        else { echo "0 results"; }
        
        $connect->close();
        
        ?>
    
        </table>
      </div>
  

    <br><br>
    <div id="top_x_div" style="width: 1500px; height: 400px"></div> <br><br>
    <div id="top_x_div1" style="width: 1500px; height: 400px"></div> <br><br>
    <div id="top_x_div2" style="width: 1500px; height: 400px"></div> <br><br>

        </div>
  
  </body>
</html>