<?php
header('Access-Control-Allow-Origin: *');
require_once '../mysqlcon.php';
$depid=$_GET['depid'];
$stage=$_GET['stage'];


$sql = "SELECT * FROM courses,users where cou_prof_id=use_id and cou_dep_id=$depid and cou_stage=$stage";
$result = $conn->query($sql);

$outp = "{\"data\":[";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
   // $fullname=$rs["use_first"]." ".$rs["use_second"]." " . $rs["use_last"] ;
    /*switch ($rs["use_permission"])
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
       
    }*/
    
    
    
    
    if ($outp != "{\"data\":[") {$outp .= ",";}
    $outp .= "[".  '"'. $rs["cou_id"] . '",';
    $outp .= '"'. $rs["cou_name"]        . '",';
    $outp .= '"'. $rs["use_first"]." ".$rs["use_second"]." ".$rs["use_last"] . '",';
    
    $outp .= '"'. $rs["cou_stage"]     . '"]'; 
     
}
$outp .="]}";


echo($outp);
?>
