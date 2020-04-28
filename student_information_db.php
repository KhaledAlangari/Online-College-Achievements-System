<?php 
	session_start();

	$db =  mysqli_connect("localhost","root","root1234","OCAS");

	// initialize variables
	$student_id = "";
    $teacher_name_1 = "";
	$teacher_name_2 = "";
    $teacher_name_3 = "";
	$teacher_name_4 = "";
    $teacher_name_5 = "";
	


	$i = 0;
	$update = false;




if (isset($_POST['update'])) {
	$i = $_POST['i'];
    
    
	    $student_id = $_POST['student_id'];
		$teacher_name_1 = $_POST['teacher_name_1'];
        $teacher_name_2 = $_POST['teacher_name_2'];
		$teacher_name_3 = $_POST['teacher_name_3'];
        $teacher_name_4 = $_POST['teacher_name_4'];
		$teacher_name_5 = $_POST['teacher_name_5'];
    

	mysqli_query($db, "UPDATE student_information SET student_id='$student_id', teacher_name_1='$teacher_name_1', teacher_name_2='$teacher_name_2',teacher_name_3='$teacher_name_3',teacher_name_4='$teacher_name_4',teacher_name_5='$teacher_name_5' WHERE i='$i'");
	$_SESSION['message'] = "Record updated!"; 
	header('location: student_information.php');
}

if (isset($_GET['del'])) {
	$i = $_GET['del'];
	mysqli_query($db, "DELETE FROM student WHERE i=$i");
    
	$_SESSION['message'] = "Record deleted!"; 
	header('location: edit_student.php');
}

