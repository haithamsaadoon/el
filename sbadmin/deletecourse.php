<?php
require '../mysqlcon.php';
if(isset($_GET['id']))
{
    
    $id=$_GET["id"];
    $sql="delete from courses where cou_id=$id";
    
            if ($conn->query($sql) === TRUE) {
                  header("location: addcourse.php?error=deleted");
                } else {
                   header("location: addcourse.php?error=undeleted");
                }

}
$conn->close();
?>

