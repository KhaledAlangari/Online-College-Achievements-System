<?php 
	session_start();

	$db =  mysqli_connect("localhost","root","root1234","OCAS");

	// initialize variables
	$id = "";
	$achievement = "";
    $department = "";
	$semester = "";

	$i = 0;
	$update = false;

	if (isset($_POST['save'])) {
			$id = $_POST['id'];
		$achievement = $_POST['achievement'];
        $department = $_POST['department'];
		$semester = $_POST['semester'];
        
        

	mysqli_query($db, "INSERT INTO college (id, achievement, department, semester) VALUES ('$id', '$achievement','$department','$semester')"); 
        
		$_SESSION['message'] = "Record saved"; 
		header('location: edit_college.php');
	}




if (isset($_POST['update'])) {
	$i = $_POST['i'];
    
    
	          $id = $_POST['id'];
		$achievement = $_POST['achievement'];
		$department = $_POST['department'];
		$semester = $_POST['semester'];

	mysqli_query($db, "UPDATE college SET id='$id', achievement='$achievement', department='$department',semester='$semester' WHERE i='$i'");
	$_SESSION['message'] = "Record updated!"; 
	header('location: edit_college.php');
}

if (isset($_GET['del'])) {
	$i = $_GET['del'];
	mysqli_query($db, "DELETE FROM college WHERE i=$i");
    
	$_SESSION['message'] = "Record deleted!"; 
	header('location: edit_college.php');
}

