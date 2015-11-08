<?php

// if id is set then get the file with the id from database
//print_r($_SERVER);
require '../mysqlcon.php';


//$id    = $_GET['id'];
$query = "SELECT cou_name,cou_pdf_size,cou_pdf_content FROM courses where cou_id=5";

$result = mysqli_query($conn,$query) or die(mysql_error());
list($name, $size, $content) = mysql_fetch_array($result);
header("Content-length: $size");
header("Content-type: image/jpeg");
header("Content-Disposition: attachment; filename=$name");
echo $content;

exit;

?>