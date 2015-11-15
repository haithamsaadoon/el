<?php
require '../mysqlcon.php';
$id    = $_GET['id'];
$query = "SELECT cou_name,cou_pdf_size,cou_pdf_content FROM courses where cou_id=$id";
$result = mysqli_query($conn,$query) or die(mysql_error());
list($name, $size, $content) = mysqli_fetch_array($result);
header("Content-length: $size");
header("Content-type: application/pdf");
header("Content-Disposition: attachment; filename=$name.pdf");
echo $content;
exit;
?>