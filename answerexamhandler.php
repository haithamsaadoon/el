<?php
//print_r($_POST);
//placeholder for the *********** 
$userid=1;
// *******************

//check if the user did the exam before 
require 'mysqlcon.php';
$sqlcheck="select * from answers where ans_use_id=$userid";
$result = mysqli_query($conn,$sqlcheck) or die(mysqli_error($conn));
if($row=mysqli_fetch_assoc($result))
{
    echo "تم اداء الامتحان سابقأ";
    die();
}
extract($_POST);

$sql = "select * from questionsm where quem_exam_id=$examid";
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
$row = mysqli_fetch_assoc($result);
$MultipleQIndex=$row['quem_id'];// first QUEM_ID 
$sql = "select * from questionss where que_exam_id=$examid";

//to get the index for the questions id in th database
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
$row = mysqli_fetch_assoc($result);
$SingleQIndex=$row['que_id'];// first QUE_ID 

$sql = "select * from exams where exa_id=$examid";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
//update questionsm set 

for($i=1;$i<=$row['exa_nom'];$i++)
  { $questionindex=$MultipleQIndex+$i-1;
    if(!isset(${"a1".$questionindex})){${"a1".$questionindex}=0;}
    if(!isset(${"a2".($questionindex)})){${"a2".$questionindex}=0;}
    if(!isset(${"a3".($questionindex)})){${"a3".$questionindex}=0;}
    if(!isset(${"a4".($questionindex)})){${"a4".$questionindex}=0;}
    $answer=${"a1".$questionindex}.${"a2".$questionindex}.${"a3".$questionindex}.${"a4".$questionindex};
    
    $sqlstatement="INSERT INTO answers( ans_exam_id, ans_use_id,ans_quem_id, ans_datetime, ans_ma1,ans_ma2,ans_ma3,ans_ma4) VALUES ($examid,$userid,$questionindex,NOW(),${"a1".$questionindex},${"a2".$questionindex},${"a3".$questionindex},${"a4".$questionindex})";
   // echo $sqlstatement;
    $result2 = mysqli_query($conn,$sqlstatement) or die(mysqli_error($conn));
    
   }
   
   
   for($i=1;$i<=$row['exa_nos'];$i++)
  { $questionindex=$SingleQIndex+$i-1;
    
    if(!isset(${$questionindex})){${$questionindex}=0;}
    
    $sqlstatement="INSERT INTO answers( ans_exam_id, ans_use_id,ans_que_id, ans_datetime, ans_sanswer) VALUES ($examid,$userid,$questionindex,NOW(),${$questionindex})";
    //echo $sqlstatement;
    $result2 = mysqli_query($conn,$sqlstatement) or die(mysqli_error($conn));
    
   }
   
   
   
    header("location: index.php");
   
   
   
   ?>
   
   
  