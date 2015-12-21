<?php
header('Access-Control-Allow-Origin: *');
require_once '../mysqlcon.php';
$depid=$_GET['depid'];
$stage=$_GET['stage'];
// $sql = "SELECT * FROM exams where NOW()>exa_opendate exa_closedate;"; query with now clause
$sql = "SELECT * FROM exams where NOW()>exa_opendate and exa_dep_id=$depid;";
$result = $conn->query($sql);

$outp = "{\"data\":[";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
     $rs["exa_status"]="جاري";
    if($rs["exa_status"]==0)
     {
         $rs["exa_status"]="مغلق";
     }
    
    if ($outp != "{\"data\":[") {$outp .= ",";}
    $outp .= "[".  '"'. $rs["exa_title"] . '",';
    $outp .= '"'. $rs["exa_opendate"]        . '",';
    $outp .= '"'. $rs["exa_closedate"]        . '",';
    
    $outp .= '"'. $rs["exa_id"]     . '"]'; 
     
}
$outp .="]}";


echo($outp);
?>
