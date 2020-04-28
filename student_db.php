<?php 
	session_start();

	$db =  mysqli_connect("localhost","root","root1234","OCAS");

	// initialize variables
	$id = "";
	$name = "";
    $gp2 = "";
	$department = "";
    $gpa = "";
	$honor = "";
    $Level = "";
	$semester = "";

	$i = 0;
	$update = false;

	if (isset($_POST['save'])) {
        $id = $_POST['id'];
		$name = $_POST['name'];
        $gp2 = $_POST['gp2'];
		$department = $_POST['department'];
        $gpa = $_POST['gpa'];
		$honor = $_POST['honor'];
        $Level = $_POST['Level'];
		$semester = $_POST['semester'];
        
        

	mysqli_query($db, "INSERT INTO student (id, name, gp2, department, gpa, honor, Level, semester) VALUES ('$id', '$name','$gp2', '$department','$gpa', '$honor','$Level', '$semester')"); 
        
        mysqli_query($db, "INSERT INTO student_information (student_id) VALUES ('$id')");  
        
		$_SESSION['message'] = "Record saved"; 
		header('location: edit_student.php');
	}




if (isset($_POST['update'])) {
	$i = $_POST['i'];
    
    
	          $id = $_POST['id'];
		$name = $_POST['name'];
        $gp2 = $_POST['gp2'];
		$department = $_POST['department'];
        $gpa = $_POST['gpa'];
		$honor = $_POST['honor'];
        $Level = $_POST['Level'];
		$semester = $_POST['semester'];

	mysqli_query($db, "UPDATE student SET id='$id', name='$name', gp2='$gp2', department='$department', gpa='$gpa', honor='$honor', Level='$Level', semester='$semester' WHERE i='$i'");
	$_SESSION['message'] = "Record updated!"; 
	header('location: edit_student.php');
}

if (isset($_GET['del'])) {
	$i = $_GET['del'];
	mysqli_query($db, "DELETE FROM student WHERE i=$i");
    
	$_SESSION['message'] = "Record deleted!"; 
	header('location: edit_student.php');
}

