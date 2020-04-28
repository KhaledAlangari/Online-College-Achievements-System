<?php

	$connect = mysqli_connect("localhost", "root", "root1234", "OCAS");

	$start_date = $_POST[start_date];
	$end_date = $_POST[end_date];
    
   
    
	$qeuery1 = "SELECT ((SELECT COUNT(*) FROM student WHERE semester BETWEEN '$start_date' AND '$end_date') + (SELECT COUNT(*) FROM faculty_members_info WHERE semester BETWEEN '$start_date' AND '$end_date') + (SELECT COUNT(*) FROM college WHERE semester BETWEEN '$start_date' AND '$end_date')) as total";
	$qeuery2 = "SELECT ((SELECT COUNT(*) FROM student) + (SELECT COUNT(*) FROM faculty_members_info) + (SELECT COUNT(*) FROM college)) as total";
	$qeuery3 = "SELECT COUNT(*) FROM student WHERE semester BETWEEN '$start_date' AND '$end_date'";
	$qeuery4 = "SELECT COUNT(*) FROM faculty_members_info WHERE semester BETWEEN '$start_date' AND '$end_date'";
	$qeuery5 = "SELECT COUNT(*) FROM college WHERE semester BETWEEN '$start_date' AND '$end_date'";
	$qeuery6 = "SELECT SUM(student_cs) FROM performance WHERE semester BETWEEN '$start_date' AND '$end_date'";
	$qeuery7 = "SELECT SUM(student_is) FROM performance WHERE semester BETWEEN '$start_date' AND '$end_date'";
	$qeuery8 = "SELECT SUM(student_it) FROM performance WHERE semester BETWEEN '$start_date' AND '$end_date'";
	$qeuery9 = "SELECT SUM(faculty_members_cs) FROM performance WHERE semester BETWEEN '$start_date' AND '$end_date'";
	$qeuery10 = "SELECT SUM(faculty_members_is) FROM performance WHERE semester BETWEEN '$start_date' AND '$end_date'";
	$qeuery11 = "SELECT SUM(faculty_members_it) FROM performance WHERE semester BETWEEN '$start_date' AND '$end_date'";
	$qeuery12 = "SELECT COUNT(*) FROM college WHERE department = 'CS'";
	$qeuery13 = "SELECT COUNT(*) FROM college WHERE department = 'IS'";
	$qeuery14 = "SELECT COUNT(*) FROM college WHERE department = 'IT'";




	$result1 = $connect->query($qeuery1);
	$sql1;

	if ($result1-> num_rows > 0) {

		while ($row = $result1-> fetch_assoc()) {

			$sql1 = $row["total"];
		}
	}

	$result2 = $connect->query($qeuery2);
	$sql2;

	if ($result2-> num_rows > 0) {

		while ($row = $result2-> fetch_assoc()) {

			$sql2 = $row["total"];
		}
	}

	$result3 = $connect->query($qeuery3);
	$sql3;

	if ($result3-> num_rows > 0) {

		while ($row = $result3-> fetch_assoc()) {

			$sql3 = $row["COUNT(*)"];
		}
	}

	$result4 = $connect->query($qeuery4);
	$sql4;

	if ($result4-> num_rows > 0) {

		while ($row = $result4-> fetch_assoc()) {

			$sql4 = $row["COUNT(*)"];
		}
	}

	$result5 = $connect->query($qeuery5);
	$sql5;

	if ($result5-> num_rows > 0) {

		while ($row = $result5-> fetch_assoc()) {

			$sql5 = $row["COUNT(*)"];
		}
	}

	$result6 = $connect->query($qeuery6);
	$sql6;

	if ($result6-> num_rows > 0) {

		while ($row = $result6-> fetch_assoc()) {

			$sql6 = $row["SUM(student_cs)"];
		}
	}

	$result7 = $connect->query($qeuery7);
	$sql7;

	if ($result7-> num_rows > 0) {

		while ($row = $result7-> fetch_assoc()) {

			$sql7 = $row["SUM(student_is)"];
		}
	}

	$result8 = $connect->query($qeuery8);
	$sql8;

	if ($result8-> num_rows > 0) {

		while ($row = $result8-> fetch_assoc()) {

			$sql8 = $row["SUM(student_it)"];
		}
	}

	$result9 = $connect->query($qeuery9);
	$sql9;

	if ($result9-> num_rows > 0) {

		while ($row = $result9-> fetch_assoc()) {

			$sql9 = $row["SUM(faculty_members_cs)"];
		}
	}

	$result10 = $connect->query($qeuery10);
	$sql10;

	if ($result10-> num_rows > 0) {

		while ($row = $result10-> fetch_assoc()) {

			$sql10 = $row["SUM(faculty_members_is)"];
		}
	}

	$result11 = $connect->query($qeuery11);
	$sql11;

	if ($result11-> num_rows > 0) {

		while ($row = $result11-> fetch_assoc()) {

			$sql11 = $row["SUM(faculty_members_it)"];
		}
	}

	$result12 = $connect->query($qeuery12);
	$sql12;

	if ($result12-> num_rows > 0) {

		while ($row = $result12-> fetch_assoc()) {

			$sql12 = $row["COUNT(*)"];
		}
	}

	$result13 = $connect->query($qeuery13);
	$sql13;

	if ($result13-> num_rows > 0) {

		while ($row = $result13-> fetch_assoc()) {

			$sql13 = $row["COUNT(*)"];
		}
	}

	$result14 = $connect->query($qeuery14);
	$sql14;

	if ($result14-> num_rows > 0) {

		while ($row = $result14-> fetch_assoc()) {

			$sql14 = $row["COUNT(*)"];
		}
	}


	require("../fpdf/fpdf.php");

	$pdf = new FPDF('P', 'mm', 'A4');
	$pdf->AddPage();
    
  
    $pdf->SetFont('Arial','',9);
    $pdf->Image('ccis.png','10','5','20','20','PNG');
    $pdf->Image('imam.png','180','5','15','20','PNG');
   
    $pdf->Cell(189 ,15,'',0,1);
	$pdf->SetFont('Arial','B',14);
	$pdf->Cell(189 ,5,'Generate Performance Report ',0,1, 'C');

	  $pdf->Cell(189 ,10,'',0,1);

	$pdf->SetFont('Arial','',12);
	$pdf->Cell(189 ,5,'This report were generated automaticly of college acheivements. It will show all records of colleges',0,1); 
	$pdf->Cell(189 ,5,'from '.$start_date.' to '.$end_date.'',0,1);


	$pdf->Cell(189 ,5,'',0,1);

	$pdf->Cell(10 ,5,'',0,0);
	$pdf->Cell(179 ,5,'- Number of new Students acheivements records: '.$sql3.'',0,1);

	$pdf->Cell(10 ,5,'',0,0);
	$pdf->Cell(179 ,5,'- Number of new Faculity Members acheivements records: '.$sql4.'',0,1);

	$pdf->Cell(10 ,5,'',0,0);
	$pdf->Cell(179 ,5,'- Number of new Colleges acheivements records: '.$sql5.'',0,1);

	$pdf->Cell(10 ,5,'',0,0);
	$pdf->Cell(179 ,5,'- Number of new acheivements records: '.$sql1.'',0,1);

	$pdf->Cell(10 ,5,'',0,0);
	$pdf->Cell(179 ,5,'- All total acheivements records: '.$sql2.'',0,1);

	$pdf->Cell(189 ,10,'',0,1);

	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(63 ,5,'Students',1,0,'C');
	$pdf->Cell(63 ,5,'Faculity Members',1,0,'C');
	$pdf->Cell(63 ,5,'Colleges',1,1,'C');

	$pdf->SetFont('Arial','',12);
	$pdf->Cell(50 ,5,'Students CS',1,0);
	$pdf->Cell(13 ,5,$sql6,1,0);

	$pdf->Cell(50 ,5,'Faculity Members CS',1,0);
	$pdf->Cell(13 ,5,$sql9,1,0);

	$pdf->Cell(50 ,5,'College CS',1,0);
	$pdf->Cell(13 ,5,$sql12,1,1);

	$pdf->Cell(50 ,5,'Students IS',1,0);
	$pdf->Cell(13 ,5,$sql7,1,0);

	$pdf->Cell(50 ,5,'Faculity Members IS',1,0);
	$pdf->Cell(13 ,5,$sql10,1,0);

	$pdf->Cell(50 ,5,'College IS',1,0);
	$pdf->Cell(13 ,5,$sql13,1,1);

	$pdf->Cell(50 ,5,'Students IT',1,0);
	$pdf->Cell(13 ,5,$sql8,1,0);

	$pdf->Cell(50 ,5,'Faculity Members IT',1,0);
	$pdf->Cell(13 ,5,$sql11,1,0);

	$pdf->Cell(50 ,5,'College IT',1,0);
	$pdf->Cell(13 ,5,$sql14,1,1);



	$pdf->Output();
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Generat Report</title>
</head>
<body>

	<h1 align="center"><b>Report of Acheivements</b></h1>
	<p align="justify">This report were generated automaticly of college acheivements. It will show all records of colleges from <?php echo $start_date; ?> to <?php echo $end_date; ?>.</p> 
	<ul>
		<li>Number of new acheivements records: </li>
		<li>All total acheivements records: </li>
		<li>Number of new Students acheivements records: </li>
		<li>Number of new Faculity Members acheivements records: </li>
		<li>Number of new College acheivements records: </li>
	</ul>

	<h4>Percente of Students Acheivements</h4>
	
	<h4>Percente of Faculity Members Acheivements</h4>
	
	<h4>Percente of College Acheivements</h4>
	

</body>
</html>
