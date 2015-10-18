<?php
require_once '../mysqlcon.php';

$sql = "SELECT * FROM courses";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo '<option value='.$row["cou_id"].'>'.$row["cou_name"].'</option>';
       
    }
} else {
    echo "";
}
