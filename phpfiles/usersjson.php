<?php
header('Access-Control-Allow-Origin: *');
require_once '../mysqlcon.php';
$sql = "SELECT * FROM users left JOIN departments
ON use_dep_id=dep_id;";
$result = $conn->query($sql);

$outp = "{\"data\":[";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    $fullname=$rs["use_first"]." ".$rs["use_second"]." " . $rs["use_last"] ;
    switch ($rs["use_permission"])
    { 
        case  "student":
            $rs["use_permission"]="طالب";
            break;
        case "prof":
            $rs["use_permission"]= "أستاذ";
            break;
        default :
            $rs["use_permission"]="مدير";
            break;
       
    }
    
    
    
    
    if ($outp != "{\"data\":[") {$outp .= ",";}
    $outp .= "[".  '"'. $rs["use_id"] . '",';
    $outp .= '"'. $fullname        . '",';
    $outp .= '"'. $rs["use_permission"]        . '",';
    
    $outp .= '"'. $rs["dep_name"]     . '"]'; 
     
}
$outp .="]}";


echo($outp);
?>
