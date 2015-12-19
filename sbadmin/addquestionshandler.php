<?php


extract($_POST);
require '../mysqlcon.php';
$sql = "select * from questionsm where quem_exam_id=$examid";
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
$row = mysqli_fetch_assoc($result);
$MultipleQIndex=$row['quem_id'];// first QUEM_ID 
$sql = "select * from questionss where que_exam_id=$examid";
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
$row = mysqli_fetch_assoc($result);
$SingleQIndex=$row['que_id'];// first QUE_ID 
$sql = "select * from exams where exa_id=$examid";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
//update questionsm set 

for($i=1;$i<=$row['exa_nom'];$i++)
  {    
    if(!isset(${"mc1".$i})){${"mc1".$i}=0;}
    if(!isset(${"mc2".($i)})){${"mc2".($i)}=0;}
    if(!isset(${"mc3".($i)})){${"mc3".($i)}=0;}
    if(!isset(${"mc4".($i)})){${"mc4".($i)}=0;}
    $questionindex=$MultipleQIndex+$i-1;
    $sqlstatement="UPDATE questionsm SET quem_question=\"${"m".$i}\",quem_a1=\"${"ma1".($i)}\",quem_a2=\"${"ma2".($i)}\",quem_a3=\"${"ma3".($i)}\",quem_a4=\"${"ma4".($i)}\",quem_c1=\"${"mc1".($i)}\",quem_c2=\"${"mc2".($i)}\",quem_c3=\"${"mc3".($i)}\",quem_c4=\"${"mc4".($i)}\" WHERE quem_id=$questionindex";
    
    $result2 = mysqli_query($conn,$sqlstatement) or die(mysqli_error($conn));
    
   }
   
   
for($i=1;$i<=$row['exa_nos'];$i++)
  {    
    $questionindex=$SingleQIndex+$i-1;
      
    $sqlstatement="UPDATE questionss SET que_question=\"${"s".$i}\",que_a1=\"${"sa1".($i)}\",que_a2=\"${"sa2".($i)}\",que_a3=\"${"sa3".($i)}\",que_a4=\"${"sa4".($i)}\",que_answer=\"${"sc".($i)}\" WHERE que_id=$questionindex";
   
    $result2 = mysqli_query($conn,$sqlstatement) or die(mysqli_error($conn));
    
   }
   header("location: index.php");
   ?>