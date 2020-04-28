
<?php
$conn = mysqli_connect("localhost", "root", "root1234", "OCAS");

	$query = "SELECT * FROM faculty_members_info";

	if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        $result = $conn->query($query);
        

        if ($result->num_rows > 0) {
        
          while($row = $result->fetch_assoc()) {
                $id = $row['id'];
                $sum = 0;
              
              
             if ($row["education_degree"] == 'professor') {
                    $sum += 5;
            }
            elseif ($row["education_degree"] == 'doctorate') {
                    $sum += 3;
            }
            else $sum += 0;
            
              
            if ($row["rating"] >= 4.75) {
                    $sum += 5;
            }
            elseif ($row["rating"] >= 4.50) {
                    $sum += 3;
            }
            elseif ($row["rating"] >= 4.25) {
            	$sum += 1;
            }
            else $sum += 0;

              
          if ($row["research_papers"] >= 15) {
                    $sum += 6;
            }
            elseif ($row["research_papers"] >= 10) {
                    $sum += 4;
            }
            elseif ($row["research_papers"] >= 5) {
            	$sum += 2;
            }
            else $sum += 0;
             
                $sql = "UPDATE faculty_members_info SET priority ='$sum' WHERE id = '$id'";
                mysqli_query($conn,$sql);
              
          }
             header('location:../index.php');

       
        }

        else { echo "0 results"; }
        
        $connect->close();

?>