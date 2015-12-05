<?php
require '../mysqlcon.php';
if(isset($_GET['id']))
{
    
    $id=$_GET["id"];
    $sql="delete from news where new_id=$id";
    
            if ($conn->query($sql) === TRUE) {
                  header("location: addnews.php?error=deleted");
                } else {
                   header("location: addnews.php?error=undeleted");
                }

}
$conn->close();
?>

