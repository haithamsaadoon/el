<?php

require_once '../mysqlcon.php';
extract($_POST);
//print_r($_POST);
$sql = "INSERT INTO exams (exa_title,exa_dep_id,exa_dep_stage,exa_prof_id,exa_opendate,exa_closedate,exa_status,exa_nom,exa_nos)"
        . " VALUES ('$title',1,1,1 ,'$start', '$end',0,'$nom','$nos')";
//mysqli_query($conn, $sql) or die(mysqli_error($conn));
mysqli_query($conn, $sql) or die( header("location: addexam.php?error=failed"));
$exa_id=mysqli_insert_id($conn);
for($i=1;$i<=$nos;$i++)
{
   $sql= "INSERT INTO questionss(que_exam_id) values('$exa_id')";
    mysqli_query($conn, $sql) or die( header("location: addexam.php?error=failed"));
}
for($i=1;$i<=$nom;$i++)
{
   $sql= "INSERT INTO questionsm(quem_exam_id) values('$exa_id')";
    mysqli_query($conn, $sql) or die( header("location: addexam.php?error=failed"));
}
 header("location: addexam.php?error=success");



mysqli_close($conn);

?>