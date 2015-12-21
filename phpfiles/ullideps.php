<?php
/* 
 this file is used to create the deps and their stages in the right nav menu
 */
require_once './mysqlcon.php';
$sql = "SELECT * FROM departments";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
        echo "<li role='presentation'><a href='#!'>".$row['dep_name']."</a><ul class='submenu'>";
        for($i=1;$i<=$row["dep_stages"];$i++)
        {
            $stage_name="";
            switch ($i) {
                case 1:
                       $stage_name="المرحلة الاولى"; 

                    break;
                case 2:
                       $stage_name="المرحلة الثانية"; 

                    break;
                case 3:
                       $stage_name="المرحلة الثالثة"; 

                    break;
                case 4:
                       $stage_name="المرحلة الرابعة"; 

                    break;
                case 5:
                       $stage_name="المرحلة الخامسة"; 

                    break;

                default:
                    break;
            }
            $depid=$row["dep_id"];
            
            echo "<li ><a  href='coursesview.php?depid=$depid&stage=$i'>$stage_name</a></li>";
         }
        echo "</li></ul>";
     
    }
} else {
    echo "";
}