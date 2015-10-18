<?php
require_once '../mysqlcon.php';

$sql = "SELECT * FROM users where use_permission='prof'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo '<option value='.$row["use_id"].'>'.$row["use_first"].' '.$row["use_second"].'</option>';
       
    }
} else {
    echo "";
}

