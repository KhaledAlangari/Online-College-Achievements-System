<?php 
	session_start();

	$db =  mysqli_connect("localhost","root","root1234","OCAS");

	// initialize variables
	$id = "";
	$name = "";
    $education_degree = "";
	$department = "";
    $semester = "";
	$courses = "";
    $research_papers = "";
	$rating = "";
    $awards = "";

	$i = 0;
	$update = false;

	if (isset($_POST['save'])) {
			$id = $_POST['id'];
		$name = $_POST['name'];
       $education_degree = $_POST['education_degree'];
		$department = $_POST['department'];
        $semester = $_POST['semester'];
		$courses = $_POST['courses'];
        $research_papers = $_POST['research_papers'];
		$rating = $_POST['rating'];
        $awards = $_POST['awards'];
        

	mysqli_query($db, "INSERT INTO faculty_members_info (id, name, education_degree, department, semester, courses, research_papers, rating, awards) VALUES ('$id', '$name','$education_degree', '$department','$semester', '$courses','$research_papers', '$rating','$awards')"); 
        
		$_SESSION['message'] = "Record saved"; 
		header('location: edit_faculty.php');
	}




if (isset($_POST['update'])) {
	$i = $_POST['i'];
    
    
	         	$id = $_POST['id'];
		$name = $_POST['name'];
       $education_degree = $_POST['education_degree'];
		$department = $_POST['department'];
        $semester = $_POST['semester'];
		$courses = $_POST['courses'];
        $research_papers = $_POST['research_papers'];
		$rating = $_POST['rating'];
        $awards = $_POST['awards'];

	mysqli_query($db, "UPDATE faculty_members_info SET id='$id', name='$name', education_degree='$education_degree', department='$department', semester='$semester', courses='$courses', research_papers='$research_papers', rating='$rating',awards='$awards' WHERE i='$i'");
    
	$_SESSION['message'] = "Record updated!"; 
	header('location: edit_faculty.php');
}

if (isset($_GET['del'])) {
	$i = $_GET['del'];
	mysqli_query($db, "DELETE FROM faculty_members_info WHERE i='$i'");
    
	$_SESSION['message'] = "Record deleted!"; 
	header('location: edit_faculty.php');
}

