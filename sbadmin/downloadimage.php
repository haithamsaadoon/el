<?php
require '../mysqlcon.php';
$id    = $_GET['id'];
$query = "SELECT new_title,new_image_size,new_image FROM news where new_id=$id";
$result = mysqli_query($conn,$query) or die(mysql_error());
list($name, $size, $content) = mysqli_fetch_array($result);
header("Content-length: $size");
header("Content-type: application/pdf");
header("Content-Disposition: attachment; filename=$name.png");
echo $content;
exit;
?>