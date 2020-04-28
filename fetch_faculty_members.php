<?php

$connect = mysqli_connect("localhost", "root", "root1234", "OCAS");
$columns = array('id', 'name', 'education_degree', 'department', 'semester', 'courses', 'research_papers', 'rating', 'awards');

 $query = "
  SELECT * FROM faculty_members_info WHERE 
 ";
 if($_POST["is_date_search"] == "yes")
{
 $query .= 'semester BETWEEN "'.$_POST["start_date"].'" AND "'.$_POST["end_date"].'" AND ';
}

if(isset($_POST["search"]["value"]))
{
 $query .= '
  (id LIKE "%'.$_POST["search"]["value"].'%" 
  OR name LIKE "%'.$_POST["search"]["value"].'%"
  OR department LIKE "%'.$_POST["search"]["value"].'%")
 ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
 ';
}
else
{
 $query .= 'ORDER BY priority DESC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query . $query1);

$data = array();

while($row = mysqli_fetch_array($result))
{
    if ($row['semester'] >= 2005 && $row['semester'] <= date("Y")){
 $sub_array = array();
 $sub_array[] = $row['id'];
 $sub_array[] = $row['name'];
 $sub_array[] = $row['education_degree'];
 $sub_array[] = $row['department'];
 $sub_array[] = $row['semester'];
 $sub_array[] = $row['courses'];
 $sub_array[] = $row['research_papers'];
 $sub_array[] = $row['rating'];
 $sub_array[] = $row['awards'];
 $data[] = $sub_array;
    }
}

function get_all_data($connect)
{
 $query = "SELECT * FROM faculty_members_info";
 $result = mysqli_query($connect, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($connect),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);

?>