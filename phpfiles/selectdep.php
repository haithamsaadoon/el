<?php
require_once '../mysqlcon.php';

$sql = "SELECT * FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo '<option value=$row["dep_id"]>$row["dep_name"]</option>';
    }
} else {
    echo "";
}
