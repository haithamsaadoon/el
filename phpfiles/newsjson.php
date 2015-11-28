<?php
header('Access-Control-Allow-Origin: *');
require_once '../mysqlcon.php';
$sql = "SELECT * FROM news;";
$result = $conn->query($sql);

$outp = "{\"data\":[";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
     
    
    if ($outp != "{\"data\":[") {$outp .= ",";}
    $outp .= "[".  '"'. $rs["new_id"] . '",';
    $outp .= '"'. $rs["new_title"]        . '",';
    $outp .= '"'. $rs["new_short"]        . '",';
    
    $outp .= '"'. $rs["new_date"]     . '"]'; 
     
}
$outp .="]}";


echo($outp);
?>
