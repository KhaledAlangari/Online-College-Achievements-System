<?php  include('student_db.php'); 

?>

<?php 
	if (isset($_GET['edit'])) {
		$i = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM student WHERE i='$i'");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
            
            $id = $n['id'];
		$name = $n['name'];
        $gp2 = $n['gp2'];
		$department = $n['department'];
        $gpa = $n['gpa'];
		$honor = $n['honor'];
        $Level = $n['Level'];
		$semester = $n['semester'];
            
		}
	}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Students</title>
    
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
  
table{
    width: 50%;
    margin: 30px auto;
    margin-top: 100px;
    border-collapse: collapse;
    text-align: left;
}
tr {
    border-bottom: 1px solid #cbcbcb;
}
th, td{
    border: none;
    height: 30px;
    padding: 2px;
}
tr:hover {
    background: #F5F5F5;
}

.Enter_data {
    
    width: 400px;
    margin-left: 400px;
    text-align: left;
    padding: 10px; 
    padding-left: 40px;
    border: 1px solid #bbbbbb; 
    border-radius: 5px;
    margin-bottom: 7px;
}
        

.input-group {
    
    margin: 5px 0px 5px 0px;
}
        
.input-group label {
    display: block;
    text-align: left;
    margin: 3px;
}
.input-group input {
    height: 30px;
    width: 300px;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;
}
.btn {
    width: 110px;
    padding: 10px;
    margin-left: 100px;
    margin-top: 8px;
    font-size: 15px;
    color: white;
    background: #5F9EA0;
    border: none;
    border-radius: 5px;
}
.edit_btn {
    text-decoration: none;
    padding: 2px 5px;
    background: #2E8B57;
    color: white;
    border-radius: 3px;
}

.del_btn {
    text-decoration: none;
    padding: 2px 5px;
    color: white;
    border-radius: 3px;
    background: #800000;
}
.msg {
    margin: 30px auto; 
    padding: 10px; 
    border-radius: 5px; 
    color: #3c763d; 
    background: #dff0d8; 
    border: 1px solid #3c763d;
    width: 50%;
    text-align: center;
}
        .input{
            width: 100%
                
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
        <li><a href="AdminPanel.php">ADMIN PANEL</a></li>
         <li><a href="EDIT_FILES.php">EDIT FILES</a></li>
              <li><a href="../logout.php">LOGOUT</a></li>
          
   
          
        
      </ul>
    </div>
  </div>  
</nav>
    
    <div class="jumbotron text-center">
  <h1>Edit Students Files</h1> 
 
</div>

    <?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
    
    <?php $results = mysqli_query($db, "SELECT * FROM student"); ?>
    
    <table class="table table-bordered">
	<thead>
		<tr>
            <th>id</th>
			<th>name</th>
            <th>gp2</th>
			<th>department</th>
            <th>gpa</th>
			<th>honor</th>
            <th>Level</th>
			<th>semester</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['name']; ?></td>
            <td><?php echo $row['gp2']; ?></td>
			<td><?php echo $row['department']; ?></td>
            <td><?php echo $row['gpa']; ?></td>
			<td><?php echo $row['honor']; ?></td>
            <td><?php echo $row['Level']; ?></td>
			<td><?php echo $row['semester']; ?></td>
			<td>
				<a href="edit_student.php?edit=<?php echo $row['i']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="student_db.php?del=<?php echo $row['i']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>
    
	<div class="Enter_data">
    <form method="post" action="student_db.php" >
        
        	<div class="input-group">
		
			<input type="hidden" name="i" value="<?php echo $i; ?>">
		</div>
        
		<div class="input-group">
			<label>id</label>
			<input type='text' name="id" value="<?php echo $id; ?>">
		</div>
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" value="<?php echo $name; ?>">
		</div>
		<div class="input-group">
			<label>gp2</label>
			<input type="text" name="gp2" value="<?php echo $gp2; ?>">
		</div>
        	<div class="input-group">
			<label>department</label>
			<input type="text" name="department" value="<?php echo $department; ?>">
		</div>
        	<div class="input-group">
			<label>gpa</label>
			<input type='text' name="gpa" value="<?php echo $gpa; ?>">
		</div>
        	<div class="input-group">
			<label>honor</label>
			<input type="text" name="honor" value="<?php echo $honor; ?>">
		</div>
        	<div class="input-group">
			<label>Level</label>
			<input type="text" name="Level" value="<?php echo $Level; ?>">
		</div>
        	<div class="input-group">
			<label>semester</label>
			<input type='text' name="semester" value="<?php echo $semester; ?>">
		</div>
		<div class="input-group">
			<?php if ($update == true): ?>
	<button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
<?php else: ?>
	<button class="btn" type="submit" name="save" >Save</button>
<?php endif ?>
		</div>
	</form>
        </div>
</body>
</html>