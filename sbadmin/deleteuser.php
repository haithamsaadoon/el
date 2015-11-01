<?php
require '../mysqlcon.php';
if(isset($_GET['id']))
{
    
    $id=$_GET["id"];
    $sql="delete from users where use_id=$id";
    
            if ($conn->query($sql) === TRUE) {
                  header("location: adduser.php?error=deleted");
                } else {
                   header("location: adduser.php?error=undeleted");
                }

}
$conn->close();
?>

