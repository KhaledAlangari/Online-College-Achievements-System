
<?php
$conn = mysqli_connect("localhost", "root", "root1234", "OCAS");

	$query = "SELECT * FROM student";

	if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        $result = $conn->query($query);
        

        if ($result->num_rows > 0) {
        
          while($row = $result->fetch_assoc()) {
                $id = $row['id'];
                $sum = 0;
            if ($row["gpa"] >= 4.75) {
                    $sum += 5;
            }
            elseif ($row["gpa"] >= 4.50) {
                    $sum += 3;
            }
            elseif ($row["gpa"] >= 4.25) {
            	$sum += 1;
            }
            else $sum += 0;

            if ($row["Level"] == "master") {
            	$sum += 5;
            }
            else $sum += 2;
             
                $sql = "UPDATE student SET priority ='$sum' WHERE id = '$id'";
                mysqli_query($conn,$sql);
              
          }
             header('location:../index.php');

       
        }

        else { echo "0 results"; }
        
        $connect->close();

?>